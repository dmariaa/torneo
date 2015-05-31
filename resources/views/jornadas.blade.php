@extends('app')

@section('content')
<div class="container">  
  @for($i=1; $i<=2; $i++)
  <div class="panel panel-info">
    <div class="panel-heading">VUELTA {{{ $i }}}</div>
    <div class="panel-body">
      <?php $jornadas = torneo\Jornada::vuelta($i)->get(); ?> 
      <!-- VUELTA:{{{ $i }}} -->
      <div class="row">
        @foreach($jornadas as $jornada)
        <?php 
        $fecha = $jornada->semana;
        $semana = new DateTime($fecha); 
        ?>        
          <div class="col-md-3 jornada-container">  
            <div class="row jornada row-eq-height">
               <div class="col-xs-3 col-md-3 cell-center"><br>LOCAL</div>
              <div class="col-xs-3 cell-center">{{{ sprintf("Jornada %s", $jornada->id) }}}
              <br>Semana {{{ $semana->format("W") }}}:</bold> {{{ $jornada->semana }}}</div>
              <div class="col-xs-3 col-md-3 cell-center"><br>VISITANTE</div>
            </div>
            <!-- 
            <div class="row jornada">
              <div class="col-xs-4 cell-center">LOCAL</div>
              <div class="col-xs-1 cell-center">&nbsp;</div>
              <div class="col-xs-4 cell-center">VISITANTE</div>
            </div>
             -->  
            @if(sizeof($jornada->partidos) > 0)
              @foreach($jornada->partidos as $partido)
            <div class="row partidos row-eq-height">
              <div class="col-xs-3 cell-center pareja" data-id="{{{ $partido->parejaLocal->id }}}">
                @foreach($partido->parejaLocal->jugadores as $jugador) {{{ $jugador->slug }}}<br>
        				@endforeach
              </div>
              <div class="col-xs-1 cell-center result">0</div>
              <div class="col-xs-1 cell-center">VS.</div>
              <div class="col-xs-1 cell-center result">0</div>
              <div class="col-xs-3 cell-center pareja"  data-id="{{{ $partido->parejaVisitante->id }}}">
                @foreach($partido->parejaVisitante->jugadores as $jugador) {{{ $jugador->slug }}}<br>
        				@endforeach        
              </div>
            </div>
              @endforeach
            @else 
            <div class="row partidos">&nbsp;<br>&nbsp;</div>
            <div class="row partidos cell-center"><span class="descanso">DESCANSO</span></div>
            <div class="row partidos">&nbsp;<br>&nbsp;</div>
            
            @endif
            <div class="row separador">
              <div class="col-xs-9">&nbsp;</div>
            </div>
          </div>
        @endforeach     
      </div>
      <!--  END:VUELTA:{{{ $i }}} -->
    </div>       
  </div>       
  @endfor
</div>
@endsection