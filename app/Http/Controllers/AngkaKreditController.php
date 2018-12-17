<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AngkaKreditController extends Controller
{
    public function index(){

      $data = DB::table('');
      return view('angkakredit');
    }

    public function postpak(){
      $pak = DB::table('rubrik')->insert();


    }
}
