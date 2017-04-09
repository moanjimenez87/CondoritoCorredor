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

<h1>Users List</h1>
<p class="lead">Here's a list of all your users.
    <a href="{!! url('ciclistasxrutas/create') !!}">Desea Inscribirse alguna carrera?</a></p>
<hr>

@stop
