<?php

namespace App\Http\Controllers;
use App\Models\Lapangan;
use App\Models\Penyewaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPenyewaan = Penyewaan::join('user', 'user.id', '=', 'tb_penyewaan.id')
        ->select('tb_penyewaan.*', 'user.name as user_name')
        ->get();
        return view('penyewaan/index', compact('dataPenyewaan'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create($id)
    {
        $dataLapangan = Lapangan::findOrFail($id);
        return view('penyewaan/tambah-data', compact('dataLapangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
        {
            // Validasi data yang diterima dari form
            $request->validate([
                'tanggal_sewa' => 'required|date',
                'total_waktu' => 'required|integer|min:1',
            ], [

            ]);

            // Mendapatkan informasi user yang sedang login
            $user = Auth::user();

            // Menyimpan data penyewaan ke database
            Penyewaan::create([
                'id' => $user->id, // ID user yang sedang login
                'no_lapangan' => $request->no_lapangan,
                'tipe_lapangan' => $request->tipe_lapangan,
                'harga_sewa' => $request->harga_sewa,
                'tanggal_sewa' => $request->tanggal_sewa,
                'total_waktu' => $request->total_waktu,
            ]);


        return redirect()->route('dashboard')->with('success', 'Penyewaan berhasil ditambahkan');
    }

    public function destroy(string $name)
    {
        Penyewaan::find($name)->delete();
        return redirect()->route('penyewaan/index')->with('success', 'Penyewaan berhasil dihapus');
    }
}

