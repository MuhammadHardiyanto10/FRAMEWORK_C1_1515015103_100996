<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
	public function awal(){

    return "Hello dari mahasiswacontroller";
}
public function tambah(){
	return $this->simpan();
}
public function simpan(){
	$mahasiswa = new mahasiswa();
	$mahasiswa->nim    = '1515015103';
	$mahasiswa->nama   = 'Ridho';
	$mahasiswa->alamat = 'Jakarta';
	$mahasiswa->pengguna_id = '6';
	$mahasiswa->save();
	return "data dengan nama {$mahasiswa->nama}telah disimpan";
}
}

