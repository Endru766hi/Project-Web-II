<?php

namespace App\Http\Controllers;

use App\Models\JenisPenyewaan;
use Illuminate\Http\Request;

class JenisPenyewaannController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPenyewaan = JenisPenyewaan::all();
        // dd($dataPenyewaan);

        return view('jenis/index-jp',compact('dataPenyewaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis/tambah-jp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'nama_jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|string|max:255',
            'gambar' => 'required|mimes:jpeg,png,jpg',
        ],[
            'no_lapangan' => 'Pastikan nama jenis Diisi'
        ]);



        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path().'/images/lapangan';
            $upload = $file->move($path,$fileName);
        }else{
            return redirect()->back()->with('error','Pastikan Anda Mengupload Gambar');
        }

        JenisPenyewaan::create([
            'nama_jenis' => $request->input('nama_jenis'),
            'harga_sewa' => $request->input('harga_sewa'),
            'gambar' => $fileName,
        ]);
        return redirect()->route('jenis/index-jp')->with('success', 'jenis penyewaan Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataPenyewaan = JenisPenyewaan::find($id);

        return view('jenis/edit-jp', compact('dataPenyewaan'));
    }

    public function update(Request $request,$id)
    {

        $request->validate([
            'nama_jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|string|max:255',
            'gambar' => 'required|mimes:jpeg,png,jpg',
        ],[
            'nama_jenis' => 'Pastikan nama jenis Diisi'
        ]);



        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path().'/images/lapangan';
            $uplaod = $file->move($path,$fileName);

            JenisPenyewaan::where('id_jenis_penyewaan',$id)->update([
                'nama_jenis' => $request->input('nama_jenis'),
                'harga_sewa' => $request->input('harga_sewa'),
                'gambar' => $fileName,
            ]);
        }else{

            JenisPenyewaan::where('id_lapangan',$id)->update([
                'nama_jenis' => $request->input('nama_jenis'),
                'harga_sewa' => $request->input('harga_sewa'),
            ]);
        }


        return redirect()->route('jenis/index-jp')->with('success', 'Lapangan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idjp)
    {
        JenisPenyewaan::find($idjp)->delete();
        return redirect('data-penyewaan')->with('success', 'Product deleted successfully');
    }
}
