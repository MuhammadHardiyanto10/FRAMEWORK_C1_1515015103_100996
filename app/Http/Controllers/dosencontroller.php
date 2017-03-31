<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal(){
 	return "hello dari dosencontroller";
 }
 public function tambah(){
 	return $this->simpan();
 }
 public function simpan(){
 	$dosen = new dosen();
 	$dosen->nip    = '2';
 	$dosen->nama   = 'Hardi';
 	$dosen->alamat = 'samarinda';
 	$dosen->pengguna_id = '2';
 	$dosen->save();
 	return"data dengan username {$dosen->nama} telah disimpan";
 }

}
