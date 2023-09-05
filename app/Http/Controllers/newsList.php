<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

use Session;
//use Image;

class newsList extends Controller
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
      $berita = DB::table('berita')->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.berita',['berita' => $berita]);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('adminpanel.pages.TambahBerita');

	}

	public function store(Request $request)
	{


         //$tess=json_encode($data);

		$file       = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        //$request->file('photo')->move("beritafoto/", $fileName);
		// insert data ke table pegawai
		DB::table('berita')->insert([
			'id_art' => $request->id_c,
			'name' => $request->name,
			'des' => $request->des,
			'tags' => $request->name,
			'add_by' => '1'
			
		]);
		//=========
		$id = DB::getPdo('berita')->lastInsertId('id_art');;
		$nmFoto = $id.'-'.$fileName ;
		DB::table('berita')->where('id_art',$id)->update([
			'foto' => $nmFoto,
			'thumb'  => $nmFoto
		]);
		//==========
		//=========Resize=======
        //$destinationPath = "beritafoto";
        $img = Image::make($file->getRealPath());
        $img->resize(200, 200, function ($constraint) {
		    $constraint->aspectRatio();
		});
        Storage::disk('ftp')->put('beritafoto/'.$nmFoto, fopen($file, 'r+'));

        $img = Image::make($file->getRealPath());
        $img->resize(800, 800, function ($constraint) {
		    $constraint->aspectRatio();
		});
        Storage::disk('ftp')->put('beritafoto/large/'.$nmFoto, fopen($file, 'r+'));

        
		//=========EndResize
		
		// alihkan halaman ke halaman pegawai
		return redirect('/adminberita');
	 
	}
//=============================================edit
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$berita = DB::table('berita')->where('id_art',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('adminpanel.pages.EditBerita',['berita' => $berita]);

	}

	// update data pegawai
	public function update(Request $request)
	{	

		$file       = $request->file('photo');
		
		if(empty($file)){
		     //do something
			DB::table('berita')->where('id_art',$request->id_c)->update([
			'id_art' => $request->id_c,
			'name' => $request->name,
			'des' => $request->des,
			'tags' => $request->des,
			'add_by' => '1'

			]);

		}else{
		//do some stuff
			

			$image = \DB::table('berita')->where('id_art', $request->id_c)->first();
	        $fileP= $image->foto;
	        $filename = '/beritafoto/'.$fileP;
	        $filenameL = '/beritafoto/large/'.$fileP;
	        \File::delete($filename);
	        \File::delete($filenameL);

	        $file       = $request->file('photo');
			$fileName   = $file->getClientOriginalName();
			$id = $request->id_c ;
	        $nmFoto = $id.'-'.$fileName ;

			DB::table('berita')->where('id_art',$request->id_c)->update([
			'id_art' => $request->id_c,
			'name' => $request->name,
			'thumb' => $nmFoto,
			'foto' => $nmFoto,
			'des' => $request->des,
			'tags' => $request->des,
			'add_by' => '1'

			]);
			
			//=========Resize=======
	        $destinationPath = "beritafoto";
	        $img = Image::make($file->getRealPath());
	        $img->resize(194, 194, function ($constraint) {
			    $constraint->aspectRatio();
			})->save($destinationPath.'/'.$nmFoto );

	        $destinationPath = "beritafoto/large";
	        $img = Image::make($file->getRealPath());
	        $img->resize(800, 400, function ($constraint) {
			    $constraint->aspectRatio();
			})->save($destinationPath.'/'.$nmFoto );
			//=========EndResize

		}


		
        //$fileName   = $file->getClientOriginalName();
        //$request->file('photo')->move("beritafoto/", $fileName);
		// update data pegawai
		
		// alihkan halaman ke halaman pegawai
		return redirect('/adminberita');
	}
//================================================hapus

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		

		$image = \DB::table('berita')->where('id_art', $id)->first();
        $file= $image->foto;

        Storage::disk('ftp')->delete('beritafoto/'.$file);
        Storage::disk('ftp')->delete('beritafoto/large'.$file);

		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('berita')->where('id_art',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/adminberita');

	}


}
