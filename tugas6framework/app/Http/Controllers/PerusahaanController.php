<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\position;

class Perusahaan extends Controller
{
    public function position(){
      $Position = Position::all();
      $Pegawai = Pegawai::all();
      return view('Position',compact('Position','Pegawai'));
    }
}