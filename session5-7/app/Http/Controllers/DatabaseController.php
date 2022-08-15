<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use DB;

class DatabaseController extends Controller
{
    //
    public function index(){

    	//$mahasiswas = DB::table('mahasiswas')->get();
    	$mahasiswas = Mahasiswa::all();


    	return view('mahasiswa',compact('mahasiswas'));
    }

}
