<?php namespace torneo;

use Illuminate\Database\Eloquent\Model;

class Pareja extends Model {
  protected $table = 'parejas';
  
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
