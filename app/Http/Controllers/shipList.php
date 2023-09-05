<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Session;

class shipList extends Controller
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
      $ship = DB::table('ship')->get();
 
      // mengirim data pegawai ke view index
      return view('adminpanel.pages.ship',['ship' => $ship]);
    }
    
    public function indexApi()
    {
      $ship = DB::table('ship')->get();
 
      return response([
            'success' => true,
            'message' => 'List Semua Lift',
            'data' => $ship
        ], 200);
    }
//==========================================================Tambah
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('adminpanel.pages.TambahShip');

	}

	public function store(Request $request)
	{
		$file       = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        $request->file('photo')->move("ship/", $fileName);
		// insert data ke table pegawai
		DB::table('ship')->insert([
			'name' => $request->name,
			'des' => $request->des,
			'foto' => $fileName
			
		]);
		
		
		// alihkan halaman ke halaman pegawai
		return redirect('/adminship');
	 
	}
	public function storeShip(Request $request)
	{
		//$file       = $request->file('photo');
        //$fileName   = $file->getClientOriginalName();
        //$request->file('photo')->move("ship/", $fileName);
		// insert data ke table pegawai
		$posts = DB::table('ship')->insert([
			'shipName' => $request->name,
			'des' => $request->des,
			//'foto' => $fileName
			
		]);
		
		
	    return response([
            'success' => true,
            'message' => 'Berhasil simpan kapal',
        ], 200);
	 
	}
//=============================================edit
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$ship = DB::table('ship')->where('id_ship',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('adminpanel.pages.EditShip',['ship' => $ship]);

	}

	// update data pegawai
	public function update(Request $request)
	{	

		$image = \DB::table('ship')->where('id_ship', $request->id_c)->first();
        $file= $image->id_ship;
        //$filename = public_path().'/bendera/'.$file;
        if(file_exists(public_path().'/ship/'.$file)){
  			\File::delete(public_path().'/ship/'.$file);
		}


		$file       = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        $request->file('photo')->move("ship/", $fileName);
		// update data pegawai
		DB::table('ship')->where('id_ship',$request->id_c)->update([
			'id_ship' => $request->id_c,
			'name' => $request->name,
			'thumb' => $request->thumb,
			'des' => $request->des,
			'flag' => $fileName
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/adminship');
	}
//================================================hapus

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		

		$image = \DB::table('ship')->where('id_ship', $id)->first();
        $file= $image->foto;
        $filename = public_path().'/ship/'.$file;
        \File::delete($filename);

		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('ship')->where('id_ship',$id)->delete();

			
		// alihkan halaman ke halaman pegawai
		return redirect('/adminship');

	}
	
	public function editShip($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$ship = DB::table('ship')->where('id_s',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return response([
            'success' => true,
            'message' => 'Berhasil Ditemukan',
            'data'  => $ship,
        ], 200);

	}
	
	public function deleteShip($id)
	{
		
		//$image = \DB::table('ship')->where('id_s', $id)->first();
        //$file= $image->foto;
        //$filename = public_path().'/ship/'.$file;
        //\File::delete($filename);

		// menghapus data pegawai berdasarkan id yang dipilih
		$del = DB::table('ship')->where('id_s',$id)->delete();

		return response([
            'success' => true,
            'message' => 'Berhasil Dihapus',
        ], 200);

	}


}
