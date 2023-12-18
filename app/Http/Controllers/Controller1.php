<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Controller1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $request)
    {
        if($data=Mahasiswa::find($request->nim)){
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->updated_at=date('Y-m-d H:i:s');
            $data->save();

            return redirect('/read')->with('pesan','data dengan NIM : '.$request->nim.' berhasil diupdate');
        }else{
            return redirect('/read')->with('pesan','data tidak ditemukan/gagal diupdate ');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($nim)
    {
        if($data=Mahasiswa::find($nim)){
            return view('update',['data'=>$data]);
        }else return redirect('/read');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function save(Request $request)
    {

        $model = new Mahasiswa();

        $model::insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'created_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return view('view', ['data' => $request->all()]);
    }

    public function read()
    {
        $model = new Mahasiswa();
        $dataAll=$model->all();
        return view('read',['dataAll' =>$dataAll]);
    }

    public function delete($nim)
    {
        if($data = Mahasiswa::find($nim)){
            $data->delete();
        }else{
            return redirect('/read')->with('pesan','data NIM :'.$nim. ' tidak di temukan');
        }

        return redirect('/read')->with('pesan','data NIM :'.$nim. ' Berhasil dihapus');
    }

    public function tampilkan(Request $request){
        // Simpan data yang diinputkan ke dalam database
        $model = new Mahasiswa();
        $model::insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'kota' => $request->kota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        // Ambil semua data Mahasiswa
        $mahasiswa = Mahasiswa::all();

        // Kirim data Mahasiswa dan data input ke view 'tampil2'
        return view('tampil2', ['data' => $request->all(), 'mahasiswa' => $mahasiswa]);
    }

    public function logout(){
        return view('logout');
    }
}
