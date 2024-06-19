<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataUser = User::all();
        // dd($dataUser);

        return view('user/index-user',compact('dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/tambah-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'role' => 'required|in:admin,user_penyewa',

        ],[
            'email' => 'Pastikan email anda Diisi'
        ]);

        // dd($request);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'role' => $request['role'],


        ]);
        return redirect()->route('user/index-user')->with('success', 'user Berhasil Ditambah');
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
        $dataUser = User::find($id);
        // dd($dataUser);

        return view('user/edit-user', compact('dataUser'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'role' => 'required|in:admin,user_penyewa',

        ],[
            'email' => 'Pastikan email anda Diisi'
        ]);



            User::where('id',$id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'alamat' => $request->input('alamat'),
                'nomor_hp' => $request->input('nomor_hp'),
                'role' => $request['role'],


            ]);




         return redirect()->route('user/index-user')->with('success', 'Lapangan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect('data-user')->with('success', 'Product deleted successfully');
    }
}
