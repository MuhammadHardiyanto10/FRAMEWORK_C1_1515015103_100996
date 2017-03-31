<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
 protected $table = 'dosen';
 protected $guarded =['id'];

  public function pengguna(){
   	return $this->belongsTo(pengguna::class);
   }
   public function dosenmatakuliah(){
   	return $this->hasMany(dosenmatakuliah::class,'dosen_id');
   }
   
}
