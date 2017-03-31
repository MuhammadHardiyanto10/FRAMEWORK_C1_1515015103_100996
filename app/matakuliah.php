<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table='matakuliah';
    protected $guarded =['id'];

    public function dosenmatakuliah(){
    	return $this->hasMany(dosenmatakuliah::class,'matakuliah_id');
    }
}
