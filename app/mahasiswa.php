<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
   protected $table ='mahasiswa';
   protected $guarded =['id'];

   public function pengguna(){
   	return $this->belongsTo(pengguna::class);
   }
   public function jadwalmatakuliah()
   {
   	return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id');
   }
   
}
