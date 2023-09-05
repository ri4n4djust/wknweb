<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Session;

class jdlgList extends Controller
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
      $galeri = DB::table('jdl_galeri')->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.jdlgaleri',['jdlgaleri' => $galeri]);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('adminpanel.pages.TambahJdlg');

	}

	public function store(Request $request)
	{

		DB::table('jdl_galeri')->insert([
			
			'judul' => $request->judul
			
		]);
		
		
		// alihkan halaman ke halaman pegawai
		return redirect('/jdlgaleri');
	 
	}
//=============================================edit
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$galeri = DB::table('galeri')->where('id_gal',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('adminpanel.pages.EditJdlg',['jdlgaleri' => $galeri]);

	}

	// update data pegawai
	public function update(Request $request)
	{	


		// update data pegawai
		DB::table('jdl_galeri')->where('id_jdl',$request->id_c)->update([
			'judul' => $request->judul
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/jdlgaleri');
	}
//================================================hapus

	// method untuk hapus data pegawai
	public function hapus($id)
	{
	
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('jdl_galeri')->where('id_jdl',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/jdlgaleri');

	}


}
