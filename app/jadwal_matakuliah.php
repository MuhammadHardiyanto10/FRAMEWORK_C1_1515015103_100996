<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table ='jadwal_matakuliah';
    protected $guarded =['id'];

    public function mahasiswa(){
    	return $this->belongsTo(mahasiswa::class);
    }
    public function ruangan(){
    	return $this->belongsTo(ruangan::class);
    }
    public function dosenmatakuliah(){
    	return $this->belongsTo(dosenmatakuliah::class);
    }
}
