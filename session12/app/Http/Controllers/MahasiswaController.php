<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class MahasiswaController extends Controller
{
    public function daftarMahasiswa(){
        return "Form pendaftaran mahasiswa";
    }
    public function tabelMahasiswa(){
        return "Tabel data mahasiswa";
    }
    public function blogMahasiswa(){
        return 'Halaman blog mahasiswa';
    }
}
