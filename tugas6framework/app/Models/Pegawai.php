<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
  public function position(){
    return $this->hasMany(Position::class);
  }
}