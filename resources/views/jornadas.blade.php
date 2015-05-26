@extends('app')

@section('content')
<div class="container">
  <div class="row">
    @foreach($jornadas as $jornada)
    <?php 
    $fecha = $jornada->semana;
    $semana = new DateTime($fecha); 
    ?>
    
    <div class="col-md-3 jornada-container">
      <div class="row jornada">
        <div class="col-xs-9 cell-center">{{{ sprintf("Jornada %s", $jornada->id) }}}
        <br>Semana {{{ $semana->format("W") }}}:</bold> {{{ $jornada->semana }}}</div>
      </div>  
        @foreach($jornada->partidos as $partido)
      <div class="row partidos">
        <div class="col-xs-4 cell-center">
          @foreach($partido->parejaLocal->jugadores as $jugador) {{{ $jugador->slug }}}<br>
  				@endforeach
        </div>
        <div class="col-xs-1 cell-center">VS.</div>
        <div class="col-xs-4 cell-center">
          @foreach($partido->parejaVisitante->jugadores as $jugador) {{{ $jugador->slug }}}<br>
  				@endforeach        
        </div>
      </div>
        @endforeach
      <div class="row">
        <div class="col-xs-9">&nbsp;</div>
      </div>
    </div>
    @endforeach     
  </div>
</div>
@endsection