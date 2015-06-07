<?php namespace torneo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Partido extends Model {
  protected $table = 'partidos';
  
  public function scopeMatch($query,$pareja_local_id,$pareja_visitante_id) {
    $parejas = $query->where('pareja_local_id', $pareja_local_id)
      ->where('pareja_visitante_id', $pareja_visitante_id);
    Log::debug(sprintf("Partido entre %d y %d es %s", $pareja_local_id, $pareja_visitante_id, PRINT_R($parejas->get(), TRUE)));
    return $parejas;
  }
  
  public function parejaLocal() {
    return $this->belongsTo('torneo\Pareja', 'pareja_local_id');
  }
  
  public function parejaVisitante() {
    return $this->belongsTo('torneo\Pareja', 'pareja_visitante_id');
  }  
}
