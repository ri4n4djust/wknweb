<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

use Session;

class galeriList extends Controller
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
      $galeri = DB::table('galeri')
      			->join('jdl_galeri', 'galeri.id_jdl', '=', 'jdl_galeri.id_jdl')
      			->select('galeri.*', 'jdl_galeri.*')
      			->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.galeri',['galeri' => $galeri]);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('adminpanel.pages.TambahGaleri');

	}

	public function store(Request $request)
	{
		$file       = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        
		// insert data ke table pegawai
		DB::table('galeri')->insert([
			'id_gal' => $request->id_c,
			'id_jdl' => $request->id_jdl,
			'name' => $request->name,
			'des' => $request->des
			
		]);

		$id = DB::getPdo('galeri')->lastInsertId('id_gal');;
		$nmFoto = $id.'-'.$fileName ;

		DB::table('galeri')->where('id_gal',$id)->update([
			'foto' => $nmFoto
		]);
		//$request->file('photo')->move("galeri/", $nmFoto);

		//=========Resize=======
		

        //$destinationPath = "galerifoto";
        $img = Image::make($file->getRealPath());
        $img->resize(800, 800, function ($constraint) {
		    $constraint->aspectRatio();
		});

        Storage::disk('ftp')->put('galerifoto/'.$nmFoto, fopen($file, 'r+'));
		//=========EndResize
		
		
		// alihkan halaman ke halaman pegawai
		return redirect('/admingaleri');
	 
	}
//=============================================edit
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$galeri = DB::table('galeri')->where('id_gal',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('adminpanel.pages.EditGaleri',['galeri' => $galeri]);

	}

	// update data pegawai
	public function update(Request $request)
	{	

		$image = \DB::table('galeri')->where('id_gal', $request->id_c)->first();
        $file= $image->id_gal;
        //$filename = public_path().'/bendera/'.$file;
        if(file_exists(public_path().'/galerifoto/'.$file)){
  			\File::delete(public_path().'/galerifoto/'.$file);
		}


		$file       = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        $request->file('photo')->move("galerifoto/", $fileName);
		// update data pegawai
		DB::table('galeri')->where('id_gal',$request->id_c)->update([
			'id_gal' => $request->id_c,
			'id_jdl' => $request->id_jdl,
			'name' => $request->name,
			'des' => $request->des,
			'flag' => $fileName
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/admingaleri');
	}
//================================================hapus

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		

		$image = \DB::table('galeri')->where('id_gal', $id)->first();
        $file= $image->foto;
        //$filename = public_path().'/galerifoto/'.$file;
        Storage::disk('ftp')->delete('galerifoto/'.$file);
        //File::delete($filename);

		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('galeri')->where('id_gal',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/admingaleri');

	}

//======================================destroy

	    public function destroy($id){
        \DB::table("galeri")->delete($id);
        return redirect()->back()->with('success','negara deleted');
    }
}
