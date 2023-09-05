<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Session;

class posisiList extends Controller
{
    //
    //==================================================Tampil
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
      $negara = DB::table('posisi')->where('subposisi', '!=', '-')->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.posisi',['posisi' => $negara]);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	public function dept()
	{

		 $negara = DB::table('posisi')->where('subposisi', '=', '-')->get();
 
	      // mengirim data pegawai ke view index
	      return view('adminpanel.pages.posisi',['posisi' => $negara]);

	}
	public function tambah()
	{

		// memanggil view tambah
		return view('adminpanel.pages.TambahPosisi');

	}

	public function store(Request $request)
	{
		//$file       = $request->file('photo');
        //$fileName   = $file->getClientOriginalName();
        //$request->file('photo')->move("bendera/", $fileName);
		// insert data ke table pegawai
		DB::table('posisi')->insert([
			'id_pos' => $request->id_c,
			'subposisi' => $request->subposisi,
			'posisi' => $request->name,
			'dept'=>$request->subposisi
			
		]);
		
		
		// alihkan halaman ke halaman pegawai
		return redirect('/adminposisi');
	 
	}
//=============================================edit
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$negara = DB::table('posisi')->where('id_pos',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('adminpanel.pages.EditPosisi',['posisi' => $negara]);

	}

	// update data pegawai
	public function update(Request $request)
	{	

		// update data pegawai
		DB::table('posisi')->where('id_pos',$request->id_c)->update([
			'id_pos' => $request->id_c,
			'posisi' => $request->name,
			'subposisi' => $request->subposisi
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/adminposisi');
	}
//================================================hapus

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		

		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('posisi')->where('id_pos',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/adminposisi');

	}

}
