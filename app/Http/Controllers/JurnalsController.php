<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Jurnals;
use Illuminate\Http\Request;
use App\Http\Services\JurnalService;
use App\Models\Activity;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class JurnalsController extends Controller
{

    public function __construct(public JurnalService $jurnalService){

    }
    /**
     * Display a listing of the resource.
     */
    public function index() : View | JsonResponse
    {
        // $jurnal = Jurnals::latest()->get();

        // $activity=Activity::all();

        $users = Jurnals::all()
        ->sortByDesc('tanggal')
        ->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->tanggal)->format('Y-m-d');
        })
        ->map(function ($groupedJurnals) {
            return $groupedJurnals->sortByDesc('created_at');
        });


        return view('jurnal.konten',[
            'users' => $users
        ]);


    }


    public function list() : View | JsonResponse
    {
        $users = Jurnals::select('nama', 'asal')->distinct()->get();

        return view('jurnal.list',[
            'users' => $users
        ]);


    }


    public function bulanan(string $nama, string $asal)
    {
        $results = Jurnals::where('nama', $nama)
        ->where('asal', $asal) // Menambahkan kondisi untuk kolom asal
        ->select('uuid') // Misalkan kolom uuid ada dalam tabel
        ->distinct()
        ->get();

    // Mengonversi hasil ke dalam array
    $uuids = $results->pluck('uuid')->toArray();

        // $aktivitas = Activity::where('jurnal_uuid',$uuid)->firstOrFail();
        $firstUuid = $results[0]['uuid'];
        return $firstUuid;

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "hehe";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $activity = $request->only([
                'subuh', 'zuhur', 'asar', 'magrib', 'isya',
                'tahajud', 'qosubuh', 'dhuha', 'qozuhur', 'bazuhur',
                'sesubuh', 'tilpagi', 'zikpagi', 'tilmalam',
                'waqiah', 'mulk', 'halangan', 'doakan'
            ]);

            foreach ($activity as $key => $value) {
                $activity[$key] = intval($value);
            }

            $jurnal = $request->only('nama','asal','tanggal');
            $jurnalUuid = Str::uuid();
            $activityUuid = Str::uuid();
            $jurnal['uuid'] = $jurnalUuid;
            $activity['uuid'] = $activityUuid;
            $activity['jurnal_uuid'] = $jurnalUuid;

            Activity::create($activity);
            Jurnals::create($jurnal);

            return redirect('/konten');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $user = Jurnals::where('uuid',$uuid)->firstOrFail();
        $aktivitas = Activity::where('jurnal_uuid',$uuid)->firstOrFail();

        return view('jurnal.harian',[
            'user' => $user,
            'aktivitas' => $aktivitas
        ]);



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurnals $jurnals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurnals $jurnals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurnals $jurnals)
    {
        //
    }
}
