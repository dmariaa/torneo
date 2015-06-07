@extends('app') 

@section('content')
<div class="container">
  <div class="panel panel-info">
    <div class="panel-heading">Resultados de los partidos</div>
    <div class="panel-body">
      <div class="col-xs-9 cuadro">
      	<!-- 
      		<div class="row row-eq-height">
      			<div class="col-xs-8 col-xs-offset-1 cell-center">LOCAL</div>
      		</div>
      		 -->
      		<div class="row row-eq-height">
      			<div class="col-xs-1 cell-center cell-dummy">
      				<span class="local">LOCAL</span><span class="visitante">VISITANTE</span>
      			</div>
      			@foreach($parejas as $pareja)
      			<div class="col-xs-1 cell-center pareja" data-id="{{{ $pareja->id }}}">
      				@foreach($pareja->jugadores as $jugador) {{{ $jugador->slug }}}<br>
      				@endforeach
      			</div>
      			@endforeach
      		</div>
      		@foreach($parejas as $pareja)
      		<div class="row row-eq-height pareja" data-id="{{{ $pareja->id }}}">
      			<div class="col-xs-1 cell-center">
      				@foreach($pareja->jugadores as $jugador) {{{ $jugador->slug }}}<br>
      				@endforeach
      			</div>
      			@foreach($parejas as $pareja_local) @if($pareja_local===$pareja)
      			<div class="col-xs-1 cell-center cell-dummy">
      				&nbsp;<br>&nbsp;
      			</div>
      			@else
      			<?php $partido = torneo\Partido::match($pareja->id, $pareja_local->id)->first();?>
      			<div class="col-xs-1 cell-center {{{ $partido ->juegos_local > 0 || $partido->juegos_visitante > 0 ? 'winner' : '' }}}">{{{ $partido->juegos_local }}}-{{{ $partido->juegos_visitante }}}</div>
      			@endif @endforeach
      		</div>
      		@endforeach
      	</div>
    	</div>
  	</div>
  	<div class="panel panel-info">
      <div class="panel-heading">Clasificaciones</div>
      <div class="panel-body"></div>
    </div>  	
</div>
@endsection
