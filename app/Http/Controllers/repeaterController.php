<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
use PDF;
use Session;

class repeaterController extends Controller
{
    //
    //

    public function index()
    {
      if (Session::has('user')){
      // do some thing if the key is exist
      }else{
        //the key is not exist in the session
        return view('adminpanel.pages.login');
      }
   
        // mengambil data dari table pegawai
      $applicant = DB::table('applicant')
                        ->where('applicant.status', 1)
                        ->join('posisi', 'applicant.id_pos', 'posisi.id_pos')
                        ->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.repeater',['repeater' => $applicant]);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	
    public function detail($id)
    {
      DB::table('applicant')->where('id_m', $id)->update(['edit' => Session::get('user') ]);
      $tm = DB::table('applicant')
                ->where('id_m', $id)
                ->join('posisi', 'applicant.id_pos', 'posisi.id_pos')
                ->get();
      return view('adminpanel.pages.repeaterDetail',['tm' => $tm]);

    }

    public function delDoc($id)
    {
      DB::table('basedocument')
      ->where('id_m', $id)
      ->update(['edit' => Session::get('session_pegawai')]);
      
      $tm = DB::table('applicant')
                ->where('id_m', $id)
                ->join('posisi', 'applicant.id_pos', 'posisi.id_pos')
                ->get();
      return view('adminpanel.pages.repeaterDetail',['tm' => $tm]);

    }

    public function Close($id)
    {
      DB::table('applicant')->where('id_m', $id)->update(['edit' => '']);
        // mengambil data dari table pegawai
      $applicant = DB::table('applicant')
                        ->where('applicant.status', 1)
                        ->join('posisi', 'applicant.id_pos', 'posisi.id_pos')
                        ->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.repeater',['repeater' => $applicant]);
    }

    //=========upload passport
    function uploadPass(Request $request)
    {

      ini_set('getPostMaxSize','256M');
      $id_m = $request->id_m;
      $file = $request->file('filepassport');

   
      // Mendapatkan Nama File
      $nama_file = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $ukuran_file = $file->getSize();
   
      // Proses Upload File
      $destinationPath = 'docapplicant';
      $file->move($destinationPath,$id_m.'-'.$file->getClientOriginalName());

      $start = date("Y-m-d", strtotime($request->isuedatepassport));
      $end = date("Y-m-d", strtotime($request->expdatepassport));

      DB::table('document')->where('id_m',$request->id_m)->update([

      
      'passport' => $request->id_m.'-'.$file->getClientOriginalName(),
      'pasporstart' => $start,
      'pasporValid' => $end,
      'isuatp' => $request->isueatpassport,
      'pasporNo' => $request->nopassport
      ]);

     
    return redirect()->back();
    }

}
