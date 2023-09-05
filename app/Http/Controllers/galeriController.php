<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class galeriController extends Controller
{
    //
    public function index()
    {
    	
      $gal = DB::table('galeri')->get();
 
      // mengirim data pegawai ke view index
      return view('pages.gallery',['gal' => $gal]);
    }
    public function tampil($id)
    {
    	
      $jdgal = DB::table('galeri')->where('id_gal', $id)->get();
 
      // mengirim data pegawai ke view index
      return view('pages.gallerydetail',['jdgal' => $jdgal]);
    }
}
