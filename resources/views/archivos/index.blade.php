@extends('layouts.app')
@section('contenido')
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
                <li><a href="#Sistema Información">Ingreso </a></li>
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
          <img class="first-slide" src="/imagenes/images3.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Registrate y Participa</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/imagenes/ruta.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Registrate y Participa</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/imagenes/ruta1.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Campeonato de Ciclismo "Condorito Corredor".</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Registrate y Participa</a></p>
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

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/imagenes/images.png" alt="a" width="140" height="140">
          <h2>Carreras</h2>
          <p> La carrera consta de varios circuitos donde los participantes pueden inscribirse y correr en las carreras dispuestas para la competencia.</p>
          <p><a class="btn btn-default" href="index/carreras" role="button">ver circuitos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">.
          <img class="img-circle" src="/imagenes/logo.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Campeonato de ciclismo "Condorito Corredor"</h2>
          <p> el campoenato de ciclismo "condorito corredor" reune ciclistas principiantes y avanzados a recorrer las mejores rutas de colombia</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="/imagenes/images2.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Participantes</h2>
          <p>Las rutas estan contemplada para ciclistas de bajo a medio rendimiento, con circuitos sin montaña y de montaña segun las exigencia de los ciclistas.</p>
          <p><a class="btn btn-default" href="#" role="button">Registrate y Participa &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->



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
