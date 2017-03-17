<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal(){

    return "Hellooo dari ruangancontroller";
}
	public function tambah(){
	return $this->simpan();
}
public function simpan(){
	$ruangan 		 = new ruangan();
	$ruangan->title  = 'A141';
	$ruangan->save();
	return "data ruangan dengan nama ruangan {$ruangan->title} telah disimpan";
}

}
