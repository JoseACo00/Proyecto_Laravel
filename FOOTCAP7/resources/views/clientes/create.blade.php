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
<body id="create1">
    <header>
        <div id="logo">
        <img src="/balon.jpg">
        </div>
        <nav class="navigation">
      <a href="/">Inicio</a>
      <a href="/nosotros">Nosotros</a>
      <a href="/canchas">Canchas</a>
      <a href="clientes">Clientes</a>
      <a href="/contacto">Contacto </a>
    </header><br><br><br><br>
    <div class="container">
        <h1>Nuevos clientes</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('canchas.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="direccion " class="form-label">Correo</label>
                        <input id="nombre" class="form-control" type="text" name="correo" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="localidad" class="form-label">Localidad</label>
                        <input id="localidad" class="form-control" type="text" name="localidad">
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>