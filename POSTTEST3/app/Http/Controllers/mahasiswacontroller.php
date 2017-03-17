<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
	public function awal(){

    return "Hellooo dari mahasiswacontroller";
}
public function tambah(){
	return $this->simpan();
}
public function simpan(){
	$mahasiswa = new mahasiswa();
	$mahasiswa->nim    = '1';
	$mahasiswa->nama   = 'Messi';
	$mahasiswa->alamat = 'Jogjakarta';
	$mahasiswa->pengguna_id = '2';
	$mahasiswa->save();
	return "data dengan nama {$mahasiswa->nama}telah disimpan";
}
}

