@extends('app') 

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading">Pareja</div>
        <div class="panel-body">
        @foreach($pareja->jugadores as $jugador)
          <div class="row">
            <div class="col-xs-9">{{{ $jugador->name }}}</div>            
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading">Estadisticas</div>
        <div class="panel-body">
          <div class="col-xs-9 col-md-3">            
            <div class="btn btn-info cell-center">Jugados&nbsp;<span class="badge">{{{ $pareja->partidosJugados() }}}</span></div>
                <div class="btn btn-success cell-center"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;<span class="badge">{{{ $pareja->partidosGanados() }}}</span></div>
                <div class="btn btn-danger cell-center"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>&nbsp;<span class="badge">{{{ $pareja->partidosPerdidos() }}}</span></div>                
          </div>
          <div class="col-xs-9 col-md-3">            
            <div class="btn btn-primary cell-center btn-double">              
              Puntos&nbsp;<span class="badge">{{{ $pareja->puntos }}}</span>
            </div>
          </div>
          <div class="col-xs-9 col-md-3">
            <div class="btn btn-info cell-center btn-double">
              Clasificación&nbsp;<span class="badge">--</span>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading">Partidos</div>
        <div class="panel-body">        
        @foreach(torneo\Jornada::all() as $jornada)
          @if(sizeof($jornada->partidos) > 0)
            <?php 
            $fecha = $jornada->semana;
            $semana = new DateTime($fecha); 
            ?>                
            <div class="row jornada row-eq-height">
              <div class="col-xs-3 col-md-2 col-md-offset-1 cell-center"><br>LOCAL</div>
              <div class="col-xs-3 cell-center">{{{ sprintf("Jornada %s", $jornada->id) }}}
              <br>Semana {{{ $semana->format("W") }}}:</bold> {{{ $jornada->semana }}}</div>
              <div class="col-xs-3 col-md-2 cell-center"><br>VISITANTE</div>
            </div>
            <!-- 
            <div class="row jornada">
              <div class="col-xs-4 cell-center">LOCAL</div>
              <div class="col-xs-1 cell-center">&nbsp;</div>
              <div class="col-xs-4 cell-center">VISITANTE</div>
            </div>  
             -->
            @foreach($jornada->partidos as $partido)
              @if($partido->parejaLocal->id===$pareja->id || $partido->parejaVisitante->id===$pareja->id)
              <div class="row partidos row-eq-height">
                <div class="col-xs-3 col-md-2 col-md-offset-1 cell-center {{{ $partido->juegos_visitante < $partido->juegos_local ? 'winner' : ( $partido->juegos_visitante > $partido->juegos_local ? 'looser' : '' ) }}}" data-id="{{{ $partido->parejaLocal->id }}}"">
                  @foreach($partido->parejaLocal->jugadores as $jugador) {{{ $jugador->slug }}}<br>
          				@endforeach
                </div>
                <div class="col-xs-1 cell-center result {{{ $partido->juegos_visitante < $partido->juegos_local ? 'winner' : ( $partido->juegos_visitante > $partido->juegos_local ? 'looser' : '' ) }}}" data-id="{{{ $partido->parejaLocal->id }}}"">{{{ $partido->juegos_local }}}</div>
                <div class="col-xs-1 cell-center">VS.</div>
                <div class="col-xs-1 cell-center result {{{ $partido->juegos_visitante > $partido->juegos_local ? 'winner' : ( $partido->juegos_visitante < $partido->juegos_local ? 'looser' : '' ) }}}" data-id="{{{ $partido->parejaLocal->id }}}"">{{{ $partido->juegos_visitante }}}</div>
                <div class="col-xs-3 col-md-2 cell-center {{{ $partido->juegos_visitante > $partido->juegos_local ? 'winner' : ( $partido->juegos_visitante < $partido->juegos_local ? 'looser' : '' ) }}}" data-id="{{{ $partido->parejaLocal->id }}}"">
                  @foreach($partido->parejaVisitante->jugadores as $jugador) {{{ $jugador->slug }}}<br>
          				@endforeach        
                </div>
              </div>            
              @endif
            @endforeach
          @endif
        @endforeach
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection