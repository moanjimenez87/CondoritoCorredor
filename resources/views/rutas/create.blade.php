@extends('layouts.app')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="hidden" name="_token" value="{{ csrf_token() }}">
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


@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif



<?php $content = DB::table('carreras')->select('name')->get(); ?>

@foreach($content as $contenido)

  <hr class="featurette-divider">

<div class="container">
  <h2>Listas de Carreras</h2>
  <p> Estas son la lista de las carreras activas.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Nombre de la Carrera</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>{{ $contenido->name }}</td>
      </tr>
    </tbody>
  </table>
</div>

    @endforeach

<hr class="featurette-divider">

<form method="post" action="/rutas">

<div class="container">
  <h2>Inscripción</h2>
    <div class="form-group">
     {!! Form::label('nombreUsuario', 'Por favor Escriba su nombre completo:', ['class' => 'control-label']) !!}
     {!! Form::text('nombreUsuario', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
     {!! Form::label('NombreCarrera', 'Nombre de la Carrera que desea participar:', ['class' => 'control-label']) !!}
     {!! Form::text('NombreCarrera', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Guardar Carrera', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

</div>


@stop
