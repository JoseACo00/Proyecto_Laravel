<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Clientes</title>
</head>
<body>
    <header>
        <div id="logo">
        <img src="/balon.jpg">
        </div>
        <nav class="navigation">
      <a href="/">Inicio</a>
      <a>Nosotros</a>
      <a href="/canchas">Canchas</a>
      <a href="clientes">Clientes</a>
      <a href="/contacto">Contacto </a>
    </header><br><br><br><br>





    <div class="container">
    <h1>index de clientes </h1>
    <p>{{ $mensaje }}</p>

        <div clas="row">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Localidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente) 
                            <tr>
                                <td>{{ $cliente[0]}}</td>
                                <td>{{ $cliente[1]}}</td>
                                <td>{{ $cliente[2]}}</td>
                            </tr>      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-success"><a href="clientes/create">Crear clientes</a></button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>