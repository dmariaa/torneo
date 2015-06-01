<?php namespace torneo\Http\Controllers;

use torneo\Pareja;
use torneo\Jornada;

class JugadoresController extends Controller {
  public function __construct()
  {
    $this->middleware('auth');
  }
}