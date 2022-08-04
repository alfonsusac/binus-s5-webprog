<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }
    public function buatSession(){
        session(['hakAkses' => 'admin', 'nama' => 'Anto']);
        return "Session sudah dibuat";
    }
    public function buatSession2(Request $request){
        $request->session()->put('hakAkses','admin');
    }
    public function buatSession3(){
        Session::put('hakAkses','admin');
    }
    public function buatSession4(){

    }
    public function aksesSession(Request $request){
        echo Session('hakAkses');
        echo Session('nama');

        echo '<hr>';

        echo $request->session()->get('hakAkses');
        echo $request->session()->get('nama');

        echo '<hr>';

        echo Session::get('hakAkses');
        echo Session::get('nama');
    }

    public function hapusSession(){
        session()->forget('hakAkses');
        session()->forget('nama');
        return 'Session sudah dihapus';
    }
    public function hapusSession2(Request $request){
        $request->session()->forget('hakAkses');
    }
    public function hapusSession3(){
        Session::forget('hakAkses');
    }
    public function flashSession(){
        session()->flash('hakAkses','admin');
        session()->flash('nama','Antooon');
        echo "Flash session hakAkses has beenc reated";
    }
    public function flashSession2(Request $request){
        $request->session()->flash('hakAkses','admin');
    }
    public function flashSession3(){
        Session::flash('hakAkses','admin');
    }

}
