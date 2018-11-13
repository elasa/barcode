<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sistema Clinica Clínica Croacia</title>
    <style>
        .row{
            margin:10px;
        }
/*         h2{
            margin-top:15px;
        } */
        .decoracionsuperior {
            background-color: #1572b5;
        }

        .decoracionverde {
            width: 30%;
            height: 100%;
            background-color: #9bc232;
            display: block;
            padding: .4em;
        }
    </style>
</head>
<body>
    <div class="decoracionsuperior">
        <div class="decoracionverde"></div> 
    </div>
    <div class="container">
        <img src="{{ URL::to('/') }}/images/logo-clinica-croacia.png" height="76px" wide="282px">
        <div class="jumbotron">
  <h1 class="display-4">Demo sistema</h1>
  <p class="lead">Permite la generación de códigos de barra para pacientes</p>
  <hr class="my-4">
  <p></p>
  <a class="btn btn-primary btn-lg" href="{{ route('pacientes.index')}}" role="button">Iniciar</a>
</div>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>