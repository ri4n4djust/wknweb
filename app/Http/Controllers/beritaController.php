<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class beritaController extends Controller
{
    //
    public function index()
    {
      
        // mengambil data dari table pegawai
      $berita = DB::table('berita')->orderBy('id_art', 'desc')->get();
 
      // mengirim data pegawai ke view index
      return view('pages.news',['berita' => $berita]);
    }
    //
    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$berita = DB::table('berita')->where('id_art',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
    
		return view('pages.detailnews',['berita' => $berita]);

	}
}
