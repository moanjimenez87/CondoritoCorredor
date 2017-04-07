@extends('layouts.app')

@section('content')

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/imagenes/paisaje1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

       <hr class="featurette-divider">

<h1>Lista de las Carreras Inscritas</h1>
<p class="lead">Estas son las Carreras programadas.
    <a href="{!! url('carreras/create') !!}">Desea Ingresar una nueva ruta?</a></p>
<hr>

@foreach($list as $corredor)

<h3>{{ $corredor->name }}</h3>

<p>
    <a href="{{!! url('carreras/update') !!}, $corredor->id) }" class="btn btn-primary">Edit User</a>
   <a href="{{!! url('carreras/show') !!}, $corredor->id) }" class="btn btn-primary">View User</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['carreras.destroy', $corredor->id]
    ]) !!}
    {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</p>
<hr>
<hr>

@endforeach

@stop
