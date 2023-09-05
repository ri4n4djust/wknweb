<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Session;

class sliderList extends Controller
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
      $galeri = DB::table('slider')->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.slider',['slider' => $galeri]);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('adminpanel.pages.TambahSlider');

	}

	public function store(Request $request)
	{
		$file       = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        $request->file('photo')->move("images/slider", $fileName);
		// insert data ke table pegawai
		DB::table('slider')->insert([
			'name' => $request->name,
			'foto' => $fileName
			
		]);
		
		
		// alihkan halaman ke halaman pegawai
		return redirect('/adminslider');
	 
	}
//=============================================edit
	
//================================================hapus

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		

		$image = \DB::table('slider')->where('id_g', $id)->first();
        $file= $image->foto;
        $filename = public_path().'/images/slider/'.$file;
        \File::delete($filename);

		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('slider')->where('id_g',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/adminslider');

	}

}
