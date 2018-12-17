<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Pengajuan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pengajuan = DB::table('view_pengajuan')->get();
      return view('pengajuan',['pengajuan' => $pengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $idpegawai = auth::user()->id_pegawai;


      DB::table('tbpengajuan')->insert([
        ['id_pemohon' => $idpegawai, 'id_jafung_sekarang' => $request->id_jafung, 'id_jafung_tujuan' => $request->id_jafung_tujuan, 'link_drive' => $request->link_drive]

      ]);

      \Session::flash('flash_message','data berhasil di simpan');
      return redirect()->route('pengajuan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function update(Request $request)
    {


      DB::table('tbpengajuan')
          ->where('id', $request->id)
          ->update(['id_jafung_sekarang' => $request->id_jafung_sekarang, 'id_jafung_tujuan' => $request->id_jafung_tujuan, 'link_drive' => $request->link_drive]);

          return redirect()->route('pengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      DB::table('tbpengajuan')->delete($id);

        return redirect()->route('pengajuan.index');
    }
}
