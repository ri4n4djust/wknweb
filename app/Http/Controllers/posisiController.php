<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class posisiController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table pegawai
        $posisi = DB::table('posisi')->where('subposisi', '!=', "-")->limit(4)->get();
        // mengirim data pegawai ke view index
        return view('pages.home',['posisi' => $posisi]);

    }
    public function berita()
    {
        // mengambil data dari table pegawai
        $berita = DB::table('berita')->get();
        // mengirim data pegawai ke view index
        return view('pages.home',['berita' => $berita]);

    }
}
