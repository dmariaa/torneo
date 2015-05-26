@extends('app') @section('content')
<div class="container">
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
			<div class="col-xs-1 cell-center">
				@foreach($pareja->jugadores as $jugador) {{{ $jugador->slug }}}<br>
				@endforeach
			</div>
			@endforeach
		</div>
		@foreach($parejas as $pareja)
		<div class="row row-eq-height">
			<div class="col-xs-1 cell-center">
				@foreach($pareja->jugadores as $jugador) {{{ $jugador->slug }}}<br>
				@endforeach
			</div>
			@foreach($parejas as $pareja_local) @if($pareja_local===$pareja)
			<div class="col-xs-1 cell-center cell-dummy">
				&nbsp;<br>&nbsp;
			</div>
			@else
			<div class="col-xs-1 cell-center">0-0</div>
			@endif @endforeach
		</div>
		@endforeach
	</div>
</div>
@endsection
