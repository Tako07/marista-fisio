<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriaClinicaController extends Controller
{
  public function index(){
    return view('historiaClinica');
  }
}
