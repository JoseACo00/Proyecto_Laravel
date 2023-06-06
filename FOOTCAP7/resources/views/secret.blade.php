<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página privada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
</head>
<body>
    <div class="head">

        <div class="logo">
          <img src="{{ asset('Fotos/Logo_empresa.png') }}" width="80">
        </div>
    
        <nav class="navbar">
            <a href="">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="canchas">Canchas</a>
            <a href="#">Servicios</a>
            <a href="contacto">Contacto</a>
            <div class="user-info">
                @auth
                    @if(Auth::user()->type === 'admin')
                        <p>Soy el admin: {{ Auth::user()->name }}</p>
                    @else
                        <p>Soy el usurio , {{ Auth::user()->name }}</p>
                    @endif
                @endauth
            </div>
            <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">Salir</button> </a>
        </nav>
    
    </div>
    
                <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">Salir</button> </a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>