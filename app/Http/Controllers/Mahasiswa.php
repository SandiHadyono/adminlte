<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
class Mahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = MahasiswaModel::paginate(5);
        return view('mahasiswa.index',['ndata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new MahasiswaModel;
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tgllahir;
        $data->email = $request->email;
        $data->save();

        //redirect setelah berhasil
        return redirect('/mahasiswa')->with('success', 'Berhasil Simpan Data');
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
        $datamhs = MahasiswaModel::where('nim', $id)->get();

        //memanggil model nilai, query dengan kondisi where
        $data = MahasiswaModel::where('nim', $id)->first();

        //memanggil relasi table, dgn cara memanggil method
        $datanli = $data->ambilnilai()->paginate(3);
        return view('mahasiswa.show', ['datamhs' => $datamhs,
                                        'datanli' => $datanli]);
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
        $data = MahasiswaModel::where('nim', $id)->get();
        return view('mahasiswa.edit', ['data' => $data]);
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
        $data = MahasiswaModel::where('nim', $id)->first();
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tgllahir;
        $data->email = $request->email;
        $data->save();

        //redirect setelah berhasil
        return redirect('/mahasiswa')->with('success', 'Berhasil Edit Data');
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
        $data = MahasiswaModel::where('nim', $id)->first();
        $data->delete();

        //redirect setelah berhasil
        return redirect('/mahasiswa')->with('success', 'Berhasil Hapus Data');
    }
    public function search(Request $request)
    {
        //menangkap data dari pencarian
        $cari = $request->cari;

        //Query data dari tabel dosen
        $data = MahasiswaModel::where('nama', 'like', "%".$cari."%")->paginate();

        //session untuk tampilan old pada input
        session()->flashInput($request->input());

        //mengirim data ke view
        return view('mahasiswa.index', ['ndata' => $data]);
    }
}
