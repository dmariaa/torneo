<?php namespace torneo;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model {
  protected $table = 'partidos';
  
  public function parejaLocal() {
    return $this->belongsTo('torneo\Pareja', 'pareja_local_id');
  }
  
  public function parejaVisitante() {
    return $this->belongsTo('torneo\Pareja', 'pareja_visitante_id');
  }  
}
