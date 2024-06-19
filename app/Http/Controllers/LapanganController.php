<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataLapangan = Lapangan::all();
        // dd($dataLapangan);

        return view('lapangan/index',compact('dataLapangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lapangan/tambah-data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'no_lapangan' => 'required|string|max:255',
            'tipe_lapangan' => 'required|string|max:255',
            'harga_sewa' => 'required|string|max:255',
            // 'gambar' => 'required|mimes:jpeg,png,jpg',
        ],[
            'no_lapangan' => 'Pastikan No Lapangan Diisi'
        ]);



        // $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path().'/images/lapangan';
            $uplaod = $file->move($path,$fileName);
        }else{
            return redirect()->back()->with('error','Pastikan Anda Mengupload Gambar');
        }

        Lapangan::create([
            'no_lapangan' => $request->input('no_lapangan'),
            'tipe_lapangan' => $request->input('tipe_lapangan'),
            'harga_sewa' => $request->input('harga_sewa'),
            'gambar' => $fileName,
        ]);
        return redirect()->route('lapangan/index')->with('success', 'Lapangan Berhasil Ditambah');
    }

    public function edit($id)
    {
        $dataLapangan = Lapangan::find($id);

        return view('lapangan/edit-data', compact('dataLapangan'));
    }

    public function update(Request $request,$id)
    {

        $request->validate([
            'no_lapangan' => 'required|string|max:255',
            'tipe_lapangan' => 'required|string|max:255',
            'harga_sewa' => 'required|string|max:255',
            // 'gambar' => 'required|mimes:jpeg,png,jpg',
        ],[
            'no_lapangan' => 'Pastikan No Lapangan Diisi'
        ]);



        // $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path().'/images/lapangan';
            $upload = $file->move($path,$fileName);

            Lapangan::where('id_lapangan',$id)->update([
                'no_lapangan' => $request->input('no_lapangan'),
                'tipe_lapangan' => $request->input('tipe_lapangan'),
                'harga_sewa' => $request->input('harga_sewa'),
                'gambar' => $fileName,
            ]);
        }else{

            Lapangan::where('id_lapangan',$id)->update([
                'no_lapangan' => $request->input('no_lapangan'),
                'tipe_lapangan' => $request->input('tipe_lapangan'),
                'harga_sewa' => $request->input('harga_sewa'),
            ]);
        }


        return redirect()->route('lapangan/index')->with('success', 'Lapangan Berhasil Diubah');
    }


    public function destroy($id)
    {
        Lapangan::find($id)->delete();
        return redirect('data-lapangan')->with('success', 'Product deleted successfully');
    }
}
