<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = DB::table('barang')->get();
 
    	// mengirim data pegawai ke view index
    	return view('table',['barang' => $barang]);
 
    }
}
