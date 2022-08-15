<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function displayPage(){
        // display data
        $a = "Welcome";
        $b = " ";
        $c = "Back!";
        return view('LA01.display',compact('a','b','c'),["name" => "Alfonsus"]);
    }
    public function welcomePage(){return view('welcome');}
    public function indexPage(){return view('LA01.index');}
    public function homePage(){return view('LA01.home');}
    public function displayName(String $name){
        return 'Your name is '.$name;
    }
    public function ifelsePage(){return view('LA01.ifelse');}
    public function switchPage(){return view('LA01.switch');}
    public function forPage(){return view('LA01.for');}
    public function whilePage(){return view('LA01.while');}
    public function foreachPage(){return view('LA01.foreach');}
    public function forelsePage(){return view('LA01.forelse');}
    public function cnbPage(){return view('LA01.cnb');}

    public function viewSongList(){
        $albums = Album::all();
        return view('LA01/songs',['albums'=>$albums]);
    }


}
