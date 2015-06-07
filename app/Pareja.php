<?php namespace torneo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Pareja extends Model {
  protected $table = 'parejas';
  
  public function puntos() {
    $puntosLocal = $this->partidosLocal->sum('juegos_local');
    $puntosVisitante = $this->partidosVisitante->sum('juegos_visitante');
    Log::debug(sprintf("Puntos pareja %d (LocaL: %d, Visitante: %d)", $this->id, $puntosLocal, $puntosVisitante));
    return $puntosLocal + $puntosVisitante;
  }
  
  public function partidosJugados() {
    return $this->partidosJugadosLocal->count() + $this->partidosJugadosVisitante->count();
  }

  public function partidosGanados() {    
    $partidosGanadosLocal = $this->partidosGanadosLocal->count();
    $partidosGanadosVisitante = $this->partidosGanadosVisitante->count();
    return $partidosGanadosLocal + $partidosGanadosVisitante;
  }

  public function partidosPerdidos() {
    $partidosPerdidosLocal = $this->partidosPerdidosLocal->count();
    $partidosPerdidosVisitante = $this->partidosPerdidosVisitante->count();
    return $partidosPerdidosLocal + $partidosPerdidosVisitante;
  }  

  public function partidosJugadosLocal() {
    return $this->hasMany('torneo\Partido', 'pareja_local_id')
      ->where(function($query) {
        return $query->where('juegos_local','>',0)
          ->orWhere('juegos_visitante','>',0);
      });
  }
  
  public function partidosJugadosVisitante() {
    return $this->hasMany('torneo\Partido', 'pareja_visitante_id')
      ->where(function($query) {
        return $query->where('juegos_local','>',0)
          ->orWhere('juegos_visitante','>',0);
      });
  }
  
  public function partidosGanadosLocal() {
    $ganados = $this->hasMany('torneo\Partido', 'pareja_local_id')
      ->where(DB::raw('juegos_local'),'>', DB::raw('juegos_visitante'));
    return $ganados;
  }

  public function partidosGanadosVisitante() {
    $ganados = $this->hasMany('torneo\Partido', 'pareja_visitante_id')
    ->where(DB::raw('juegos_visitante'),'>', DB::raw('juegos_local'));
    return $ganados;
  }
  
  public function partidosPerdidosLocal() {
    $ganados = $this->hasMany('torneo\Partido', 'pareja_local_id')
    ->where(DB::raw('juegos_local'),'<', DB::raw('juegos_visitante'));
    return $ganados;
  }
  
  public function partidosPerdidosVisitante() {
    $ganados = $this->hasMany('torneo\Partido', 'pareja_visitante_id')
    ->where(DB::raw('juegos_visitante'),'<', DB::raw('juegos_local'));
    return $ganados;
  }
  
  public function jugadores()
  {
    return $this->hasMany('torneo\Jugador');
  }
  
  public function partidosLocal() {
    return $this->hasMany('torneo\Partido', 'pareja_local_id');
  }

  public function partidosVisitante() {
    return $this->hasMany('torneo\Partido', 'pareja_visitante_id');
  }

  public function partido($pareja) {
    return $this->partidosLocal()->where('pareja_visitante_id','=',$pareja);
  }  
}
