<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index(){
        //ambil data mahasiswa
        $mahasiswa = Mahasiswa::all();
        //mengirim data ke view mahasiswa
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);

        // return view('mahasiswa.index');
    }
    public function create(){
        return('mahasiswa.create');
    }
}
