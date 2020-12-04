<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class Dosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DosenModel::paginate(5);
        return view('dosen.index',['ndata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dosen.create');
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
        $data = new DosenModel;
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->nidn = $request->nidn;
        $data->nama = $request->nama;
        $data->prodi = $request->prodi;
        $data->bidang_ilmu = $request->bidang_ilmu;
        $data->telf = $request->telf;
        $data->save();

        //redirect setelah berhasil
        return redirect('/dosen')->with('success', 'Berhasil Simpan Data');
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
        $datadsn = DosenModel::where('nidn', $id)->get();

        //memanggil model nilai, query dengan kondisi where
        $datamhs = DosenModel::where('nidn', $id)->first();

        $datanli = $datamhs->ambilnilai()->paginate(3);
        return view('dosen.show', ['datadsn' => $datadsn, 
                                   'datamhs' => $datamhs,
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
        $data = DosenModel::where('nidn',$id)->get();
        return view('dosen.edit',['data'=>$data]);
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
        $data = DosenModel::where('nidn', $id)->first();
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->nama = $request->nama;
        $data->prodi = $request->prodi;
        $data->bidang_ilmu = $request->bidang_ilmu;
        $data->telf = $request->telf;
        $data->save();

        //redirect setelah berhasil
        return redirect('/dosen')->with('success', 'Berhasil Edit Data');
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
        $data = DosenModel::where('nidn', $id)->first();
        $data->delete();

        //redirect setelah berhasil
        return redirect('/dosen')->with('success', 'Berhasil Hapus Data');
    }
    public function search(Request $request){
        $cari = $request->cari;
        $data = DosenModel::where('nama','like','%'.$cari.'%')->paginate();
        session()->flashinput($request->input());
        return view('dosen.index',['ndata'=>$data]);
    }
}
