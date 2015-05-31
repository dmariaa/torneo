<?php namespace torneo\Http\Controllers;

use torneo\Pareja;
use torneo\Jornada;
use Illuminate\Support\Facades\Input;

class ParejasController extends Controller {
  public function index()
  {
    $parejaId = Input::get('id');
    
    $data = [
        'pareja' => Pareja::find($parejaId)
    ];
    
    return view('pareja', $data);
  }
  
  public function parejas() {
    return view('parejas');
  }
}