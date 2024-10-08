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
        // Mengambil data dan mengurutkan berdasarkan 'tanggal' terlebih dahulu, lalu 'created_at' dari yang terbaru
        $users = Jurnals::orderBy('tanggal', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(50); // Ini menghasilkan query builder dengan paginasi

        // Mengelompokkan data berdasarkan 'tanggal' setelah paginasi
        $groupedUsers = $users->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->tanggal)->format('Y-m-d');
        });

        // Mengurutkan data di dalam setiap grup berdasarkan 'created_at' dari yang terbaru
        $groupedUsers = $groupedUsers->map(function ($group) {
            return $group->sortByDesc('created_at');
        });

        // Di view, gunakan $users untuk paginasi
        // $users->links() bisa dipanggil di view

        return view('jurnal.konten', [
            'users' => $groupedUsers,
            'halaman' => $users
        ]);
    }



    public function list() : View | JsonResponse
    {
        $users = Jurnals::select('nama', 'asal')->distinct()->paginate(15);

        return view('jurnal.list',[
            'users' => $users
        ]);


    }

    public function bulanan(string $nama, string $asal)
    {
        $results = Jurnals::where('nama', $nama)
            ->where('asal', $asal) // Menambahkan kondisi untuk kolom asal
            ->select('uuid', 'tanggal') // Kolom uuid dan tanggal dipilih
            ->orderBy('tanggal', 'desc') // Mengurutkan berdasarkan tanggal terbaru
            ->distinct()
            ->paginate(31);

        return view('jurnal.bulanan', [
            'results' => $results,
            'nama' => $nama,
            'asal' => $asal
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
                'waqiah', 'mulk', 'halangan', 'doakan','bamagrib','baisya'
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
    public function edit(string $uuid)
    {
        $user = Jurnals::where('uuid',$uuid)->firstOrFail();
        $aktivitas = Activity::where('jurnal_uuid',$uuid)->firstOrFail();


        return view('jurnal.edit',[
            'user' => $user,
            'aktivitas' => $aktivitas
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
           // Ambil data dari database menggunakan metode getById
           $userDb = Jurnals::where('uuid',$uuid)->firstOrFail();
            $b = Activity::where('jurnal_uuid',$uuid)->firstOrFail();
        //    $dataDb = $this->getById($id);

           // Data yang akan diperbarui dari request
           $activity = $request->only([
            'subuh', 'zuhur', 'asar', 'magrib', 'isya',
            'tahajud', 'qosubuh', 'dhuha', 'qozuhur', 'bazuhur',
            'sesubuh', 'tilpagi', 'zikpagi', 'tilmalam',
            'waqiah', 'mulk', 'halangan', 'doakan','bamagrib','baisya'
        ]);

        foreach ($activity as $key => $value) {
            $activity[$key] = intval($value);
        }

        $user = $request->only('nama','asal','tanggal');
           // Melakukan update data di database

        $userDb->update($user);
        $b -> update($activity);
        // return "mantab";
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
          // Ambil data dari database menggunakan metode getById
          $a = Jurnals::where('uuid',$uuid)->firstOrFail();
          $b = Activity::where('jurnal_uuid',$uuid)->firstOrFail();

          $a->delete();
          $b->delete();
          return redirect('/konten');
    }


    public function searchByName(string $query)
    {
        $users = Jurnals::where('nama', 'like', "%{$query}%")
        ->orWhere('asal', 'like', "%{$query}%")
        ->select(['nama', 'asal'])
        ->distinct()
        ->get();

        // $users = Jurnals::select('nama', 'asal')->distinct()->get();



            // return $users;
        return view('jurnal.pencarian', [
            'users' => $users
        ]);
    }
}
