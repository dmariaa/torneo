<?php namespace torneo;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model {
  protected $table = 'jornadas';
  
  public function partidos()
  {
    return $this->hasMany('torneo\Partido');
  }
  
  public function scopeVuelta($query, $id) {
    return $query->where('vuelta','=',$id);
  }
}
