<?php

namespace App\Http\Controllers;

use App\Models\datapegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai=datapegawai::all();
        $title="Data Pegawai";
        return view('admin.berandapegawai',compact('title','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Pegawai";
        return view('admin.inputpegawai',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
        'required'=> 'Kolom :attribute Harus Lengkap',
        'date'=>'Kolom :attribute Harus Tanggal',
        'numeric'=>'Kolom :attribute Harus Angka',
        ];
        $validasi=$request->validate([
            'Nip'=>'required|unique:datapegawais|max:255',
            'Nama'=>'required',
            'gambar'=>''
        ],$message);
        $validasi['user-id']=Auth::id();
        datapegawai::create($validasi);
        return redirect('pegawai')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
