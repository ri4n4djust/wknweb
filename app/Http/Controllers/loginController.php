<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Cookie;
use Tracker;
use Session;
use Auth;

class loginController extends Controller
{
    //
    public function store(Request $request)
    {
      $this->validate($request,
                          ['username'=>'required'],
                          ['password'=>'required']
                       );

        $user = $request->input('username');
        $pass = md5($request->input('password'));
  
      $users = DB::table('pegawai')->where(['user'=>$user, 'password'=>$pass])->first();


        if($users==''){

           return redirect('/adminweb')->with('failed','Login gagal');

        } else 
       
        if($user == $users->user AND $pass == $users->password ){
            
           Session::put('user', $users->id_peg);
           return redirect('/adminposisi');

        } else {
             
           return redirect('/adminweb')->with('failed','Login gagal');
  
        }

    }
    
    public function login(Request $request)
    {
        $username = $request->username;
        $users = DB::table('pegawai')
                        ->where(['user'=>$username])
                        ->first();
        if($users==''){
            return response([
                'success' => false,
                'message' => 'Gagal Login',
                //'data' => $users->password
            ], 200);

        } else 
        if(md5($request->password, $users->password)){
           return response([
            'success' => true,
            'message' => 'Berhasil Login',
            'data' => $users
        ], 200);
        } else {
             
            return response([
                'success' => false,
                'message' => 'Gagal Login',
                //'data' => $users->password
            ], 200);
  
        }
    }
    
    public function getLogout(){
      Auth::logout();
      Session::flush();
      return redirect('/adminweb');
}
}
