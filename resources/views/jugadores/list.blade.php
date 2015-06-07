@extends('app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">JUGADORES</div>      
        <ul class="list-group">
          @foreach(torneo\Jugador::jugador()->get() as $jugador)
            @if($jugador->user && $jugador->user->id===Auth::User()->id)
            <li class="list-group-item active">{{{ $jugador->name }}}</li>
            @else            
            <li class="list-group-item">{{{ $jugador->name }}}</li>
            @endif           
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-4 col-md-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading">RESERVAS</div>
          @foreach(torneo\Jugador::reserva()->get() as $jugador)
          <li class="list-group-item">{{{ $jugador->name }}}</li>
          @endforeach        
      </div>  
    </div>
  </div>
</div>
@endsection