@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Campeonato "Condorito corredor"</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Condorito Corredor</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost:8000/index">Inicio</a></li>
                <li><a href="#Sistema Información">Login </a></li>
               </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/imagenes/paisaje1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
              <p><a class="btn btn-lg btn-primary" href="/home" role="button">Registrate y Participa</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/imagenes/paisaje2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
              <p><a class="btn btn-lg btn-primary" href="/home" role="button">Registrate y Participa</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/imagenes/paisaje3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
              <p><a class="btn btn-lg btn-primary" href="/home" role="button">Registrate y Participa</a></p>
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


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> <span class="text-muted">La Carrera por el eje cafetero</span> </h2>
          <p class="lead">Este recorrido cubre el Parque del Café, en Montenegro, Quindío. A 14 kilómetros, por un terreno llano, aparece Quimbaya, un pueblito fascinante. A partir de allí hay ondulaciones leves, hasta el primer gran ascenso en el Alto de Belalcázar, a 1.586 metros de altura, El segundo gran ascenso se produce a la altura del municipio de Risaralda, a 1.702 metros de altura. Después viene un tobogán de sube y bajas, hasta coronar en Santa Rosa de Cabal. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="/imagenes/Montenegro-SantaRosa.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><span class="text-muted">La ruta del valle.</span></h2>
          <p class="lead">Una ruta de 85 kilómetros, La ruta sale de Cali por la “Vía Panorama” con rumbo al municipio de Yumbo. Después de pasar esa población, comienza una serie de subidas y bajadas por un camino no muy bien pavimentado. Pronto se alcanzan los municipios de la Cartufa, Vijes, El Vidal y Puntabrava. Al final está el Calima, el lago artificial más grande de Colombia y un verdadero regalo para los sentidos.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="/imagenes/Lago-calima.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> <span class="text-muted">Ruta por Antioquia.</span></h2>
          <p class="lead"> El trayecto tiene ascensos sucesivos, 12 en total, para ser más exactos. Por eso es apto para aficionados muy completos, con gran resistencia física al esfuerzo y al calor.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="/imagenes/SantafeAntioquia.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
@stop
