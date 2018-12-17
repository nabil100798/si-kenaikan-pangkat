<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      // if (Auth::user()->is_permissions == 0) {
      //   return view('user');
      // }
      if (Auth::user()->is_permissions == 1) {
        return view('admin');
      }
        return view('home2');
    }


    public function allUsers()

{

    dd('Access All Users');

}
  public function logout(){
    Auth::logout();
    return Redirect::route('/');
}


/**

 * Show the application dashboard.

 *

 * @return \Illuminate\Http\Response

 */

public function adminSuperadmin()

{

    dd('Access Admin and Superadmin');

}


/**

 * Show the application dashboard.

 *

 * @return \Illuminate\Http\Response

 */

public function superadmin()

{

    dd('Access only Superadmin');

}
public function users(){
$users = User::all();

  return view('kelolausers',['user'=>$users]);
}
public function getunsur(){
  $getrubrik = DB::table('view_rubrik')->get();
  $getunsur = DB::table('unsur')->get();
  $getnilai = DB::table('view_nilai_unsur')->get();
  return view('inputpak',['getnilai'=>$getnilai],['getrubrik'=>$getrubrik]);
}
public function getsubunsur(Request $request){
  $getsubunsur = DB::table('sub_unsur')->where('id_unsur', $request->id_unsur)->pluck('id_unsur','nama_sub_unsur');

  return response()->json($getsubunsur);
}
public function getsubbidang(Request $request){
  $getsubunsur = DB::table('subbidang')->where('id_sub_unsur', $request->id_sub_unsur)->pluck('id_sub_bidang','nama_sub_bidang');

  return response()->json($getsubunsur);
}
public function getangkakredit(Request $request){
  $getangkakredit = DB::table('subbidang')->where('id_sub_bidang',$request->id_sub_bidang)->first();

  return response()->json($getangkakredit);
}
}
