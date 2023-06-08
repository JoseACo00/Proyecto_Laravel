<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
    <style>
        a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: rgb(67, 67, 67)">
    @extends('layout')
    <div class="head">

        <div class="logo">
          <img src="{{ asset('Fotos/Logo_empresa.png') }}" width="80">
        </div>
    
        <nav class="navbar navbar-expand">
            @auth
        @if(Auth::user()->type === 'user' || Auth::user()->type === 'admin')
            <a href="{{ route('dashboard') }}">Inicio</a>
        @else
            <a href="/">Inicio</a>
        @endif
    @else
        <a href="/">Inicio</a>
    @endauth
            <a href="/nosotros">Nosotros</a>
            
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="canchasDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Canchas
                </a>
                <ul class="dropdown-menu" aria-labelledby="canchasDropdown">
                    <li style="background-color: black"><a class="dropdown-item" href="canchas">Canchas</a></li>
                    @auth
                        @if(Auth::user()->type === 'user')
                            <li style="background-color: black"><a class="dropdown-item" href="partidos">Mis Partidos</a></li>
                            <li style="background-color: black"><a class="dropdown-item" href="reservas">Mis Reservas</a></li>
                        @elseif(Auth::user()->type === 'admin')
                            <li style="background-color: black"><a class="dropdown-item" href="partidos">Partidos</a></li>
                            <li style="background-color: black"><a class="dropdown-item" href="reservas">Reservas</a></li>
                        @endif
                    @endauth
                </ul>
            </div>
            
            <a href="/servicios">Servicios</a>
            <a href="contacto">Contacto</a>
            
            <div class="user-info">
                @auth
                    @if(Auth::user()->type === 'admin')
                        <p>Soy el admin: {{ Auth::user()->name }}</p>
                    @else
                        <p>Soy el usuario, {{ Auth::user()->name }}</p>
                    @endif
                @endauth
            </div>
            
            <a href="{{ route('logout') }}"><button type="button" class="btn btn-outline-primary me-2">Salir</button></a>
        </nav>
        
        
    </div><br><br><br><br>
    <div class="row">
        <div class="col-md-6">
            <h2><strong>Contacto con Footcap7</strong></h2>
            <p>¿Puedo ayudarte?</p>
            <p>
                ¡Estamos aquí para responder tus preguntas y ayudarte en lo que necesites! Si tienes alguna consulta o comentario, no dudes en ponerte en contacto con nosotros.
            </p>
            <p>
                Puedes comunicarte con nosotros a través de los siguientes medios:
            </p>
        </div>
        <div class="col-md-6 text-center">
            <h2 style="text-align: left"> <strong>Información de contacto</strong></h2>
            <p style="text-align: left;"><strong>Medios de contacto adicionales:</strong></p>
            <div class="col-md-6">
                <ul><br><br>
                    <li>
                        <i class="fas fa-phone"></i> <strong>Llámanos:</strong> <a  style="text-color: white; "href="tel:+34633911137">633911137</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i> <strong>Envíanos un correo a </strong><a href="mailto:footcap7@hotmail.com">footcap7@hotmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
        
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>