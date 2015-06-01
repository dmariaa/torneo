@extends('app') @section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">Reglamento del torneo</div>
		<div class="panel-body">Estas son las reglas básicas por las que se
			regirá la liga.</div>
		<ul class="list-group">
			<li class="list-group-item list-group-item-info">Jornadas</li>
			<li class="list-group-item">Cada semana se jugará una jornada.</li>
			<li class="list-group-item">Debemos intentar jugar todos los
				partidos cada jornada, para que los resultados y la liga sean
				suficientemente dinámicos.</li>
			<li class="list-group-item">Cada 4 jornadas, y al final de cada vuelta, se realizará una jornada de descanso.</li>
			<li class="list-group-item">Todas las parejas deben ponerse al dia
				con sus partidos en las jornadas de descanso.</li>
			<li class="list-group-item">Tras cada vuelta, todos los
				partidos no jugados quedarán con resultado 0-0.</li>
			<li class="list-group-item">Para cualquier reclamación sobre el resultado de un partido podeis hablar con Luiggy o con David,
			los datos personales están en las listas de jugadores.</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item list-group-item-info">Parejas</li>
			<li class="list-group-item">Las parejas son las listadas en los
				distintos cuadros, no se aceptan cambios de jugadores.</li>
			<li class="list-group-item">Si en una pareja, un miembro no puede
				jugar, contactad con los reservas que tambien estan listados en
				las páginas.</li>
			<li class="list-group-item">En cada partido, la pareja local se
				encarga de la organización del partido, reserva de pista,
				contactar y quedar con la pareja visitante, llevar las bolas de
				padel. Tambien se pueden pactar estas circunstancias con la pareja
				visitante pero es siempre responsabilidad de la pareja local</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item list-group-item-info">Partidos</li>
			<li class="list-group-item">Los partidos se juegan segun el reglamento oficial de padel, que podeis descargar de <a href="http://www.padelfederacion.es/paginas/docs/REGLAMENTOJUEGO2010.pdf.">(Reglamento oficial de padel)</a> o <a href="http://www.padelfuentes.com/normativa">(aqui)</a></li>
			<li class="list-group-item">Se jugará al mejor de 3 sets, es decir el juego finalizará cuando cualquiera de los dos equipos alcance los 2 sets ganados.</li>					
		</ul>
    <ul class="list-group">
			<li class="list-group-item list-group-item-info">Puntuaciones</li>
			<li class="list-group-item">Cada pareja obtendrá tantos puntos como sets ganados en el partido. Es decir:
				<ul>
				   <li>en un partido que termine 2-0 la pareja local obtendrá 2 puntos y la pareja visitante 0 puntos.</li>
				   <li>en un partido que termine 1-2 la pareja local obtendrá 1 punto y la pareja visitante 2 puntos.</li>
				</ul> 
			</li>
		</ul>				
	</div>
</div>
@endsection
