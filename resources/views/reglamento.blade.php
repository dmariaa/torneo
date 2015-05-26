@extends('app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
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
					<li class="list-group-item">Cada 4 jornadas, mas en ocasiones
						especiales, se realizará una jornada de descanso.</li>
					<li class="list-group-item">Todas las parejas deben ponerse al dia
						con sus partidos en las jornadas de descanso.</li>
					<li class="list-group-item">Tras una jornada de descanso, todos los
						partidos no jugados quedarán con resultado 0-0.</li>
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
					<li class="list-group-item">Se jugará al mejor de 5 sets, es decir el juego finalizará cuando cualquiera de los dos equipos alcance los 3 sets ganados.</li>					
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
