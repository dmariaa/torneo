<?php namespace torneo\Http\Controllers;

use torneo\Pareja;
use torneo\Jornada;

class CuadrosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	  $data = [
	    'parejas' => Pareja::all()
	  ];
	  
		return view('cuadro_resultados', $data);
	}
	
	public function getJornadas() {
	  $data = [
	    'jornadas' => Jornada::all()  
	  ];
	  
	  return view('jornadas', $data);
	}

	public function getReglamentos() {
	  return view('reglamento');
	}
}
