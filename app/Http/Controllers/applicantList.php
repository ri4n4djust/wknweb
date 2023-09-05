<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\User;


use PDF;
use Session;

class applicantList extends Controller
{
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
                        ->where('applicant.status', 0)
                        ->join('posisi', 'applicant.id_pos', 'posisi.id_pos')
                        ->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.applicant',['applicant' => $applicant]);
    }
    
    public function indexApi()
    {

      $applicant = DB::table('posisi')->get();
 
      // mengirim data pegawai ke view index
      return response()->json([
            'success' => true,
            'message' => 'List Semua Pelanggan',
            'data' => $applicant
        ], 200);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	
    public function tambah()
    {
        return view('adminpanel.pages.TambahApplicant');

    }

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		

		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('applicant')->where('id_m',$id)->delete();
		DB::table('document')->where('id_m',$id)->delete();
		DB::table('pengalamankpl')->where('id_m',$id)->delete();
		DB::table('pengalamanlain')->where('id_m',$id)->delete();
		DB::table('kampus')->where('id_m',$id)->delete();
        DB::table('kursus')->where('id_m',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/adminapplicant');

	}

	public function tampilPDF($id)

    {
        $posts = DB::table('applicant')->where('id_m', $id)->get();
        
            foreach ($posts as $post) {
                $postid = $post->id_m  ;
        
                $data = ['id_m' => $postid];
            }

        $pdf = PDF::loadView('pages.myPDF', $data);

        return $pdf->stream('wkn.pdf');

    }

}
