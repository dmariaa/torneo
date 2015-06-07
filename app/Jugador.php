<?php namespace torneo;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {
  protected $table = 'jugadores';
  protected $casts = [
      'reserva' => 'int',
  ];
  
  public function user() {
    return $this->belongsTo('torneo\User');
  }

  public function scopeJugador($query) {
    return $query->where('reserva','=',0);
  }
  
  public function scopeReserva($query) {
    return $query->where('reserva','=',1);
  }  
}
