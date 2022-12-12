<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  public function pegawai(){
    return $this->BelongsTo(pegawai::class,'pegawai_id');
  }
}