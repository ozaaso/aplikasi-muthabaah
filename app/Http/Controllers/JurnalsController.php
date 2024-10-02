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
        $jurnal = Jurnals::latest()->get();

        $activity=Activity::all();


        return view('jurnal.konten',[
            'jurnals' => $jurnal,
            'activities' => $activity
        ]);
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
    public function show(Jurnals $jurnals)
    {
        // $jurnals=Jurnals::latest()->select(['uuid', 'nama']);

        // return $jurnals;



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
