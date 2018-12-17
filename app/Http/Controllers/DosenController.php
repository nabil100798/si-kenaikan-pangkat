<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Pengajuan;
class DosenController extends Controller
{
    public function pengajuan(){

      $pengajuan = DB::table('view_pengajuan')->get();
      return view('pengajuan',['pengajuan' => $pengajuan]);
    }
    public function postpengajuan(Request $request){


      return view('pengajuan');
    }
}
