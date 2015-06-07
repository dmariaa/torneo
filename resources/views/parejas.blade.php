@extends('app') 

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading">Parejas</div>        
        <ul class="list-group">
        @foreach(torneo\Pareja::all() as $pareja)
          <li id="pareja-{{{ $pareja->id }}}" data-id="{{{ $pareja->id }}}" class="list-group-item pareja">
            <div class="row">
              <div class="col-xs-9 col-md-3 btn">                
          @foreach($pareja->jugadores as $jugador)            
              <div class="col-xs-9" style="text-align: left;">{{{ $jugador->name }}}</div>
          @endforeach
              </div>
              <div class="col-xs-9 col-md-2">            
                <div class="btn btn-info cell-center">Jugados&nbsp;<span class="badge">{{{ $pareja->partidosJugados() }}}</span></div>
                <div class="btn btn-success cell-center"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;<span class="badge">{{{ $pareja->partidosGanados() }}}</span></div>
                <div class="btn btn-danger cell-center"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>&nbsp;<span class="badge">{{{ $pareja->partidosPerdidos() }}}</span></div>                
              </div>
              <div class="col-xs-9 col-md-2">            
                <div class="btn btn-primary btn-double cell-center">              
                  Puntos&nbsp;<span class="badge">{{{ $pareja->puntos() }}}</span>
                </div>
              </div>
              <div class="col-xs-9 col-md-2">
                <div class="btn btn-info btn-double cell-center">
                  Clasificación&nbsp;<span class="badge">--</span>
                </div>
              </div>                            
            </div>
          </li>
        @endforeach
        </ul>               
      </div>
    </div>
  </div>
</div>
@endsection