@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">DETALLE DEL JUGADOR</div>
        <div class="panel-body">
          {!! Form::open() !!}
          
          {!! Form::close() !!} 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection