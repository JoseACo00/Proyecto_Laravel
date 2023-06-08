<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('estilos.css')}}">        
    <title>Servicios</title>
</head>
<body id="index_reservas">
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
                            <li style="background-color: black"><a class="dropdown-item" href="/partidos">Mis Partidos</a></li>
                            <li style="background-color: black"><a class="dropdown-item" href="/reservas">Mis Reservas</a></li>
                        @elseif(Auth::user()->type === 'admin')
                            <li style="background-color: black"><a class="dropdown-item" href="/partidos">Partidos</a></li>
                            <li style="background-color: black"><a class="dropdown-item" href="/reservas">Reservas</a></li>
                        @endif
                    @endauth
                </ul>
            </div>
            
            <a href="/servicios">Servicios</a>
            <a href="/contacto">Contacto</a>
            
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
        
        
    </div>
    <header class="content header">
        <h2 class="title">Servicios</h2>
    
        <div class="btn-home">
            
        </div>
    </header><br>

    <div style="background-color: #1c351d ;">
        <h2 style="color: white; text-align: center;">Mis Servicios</h2><br><br>
        <div class="row">
            <div class="col text-center">
                <i class="fas fa-calendar-alt fa-3x" style="color: white; display: block; margin: 0 auto;"></i>
                <h3 style="color: black"><strong>Reserva de canchas</strong></h3><br>
                <p>Registrare y realiza la reserva de canchas de fútbol de manera rápida y sencilla, reserva y juega.</p>
                <button type="button" class="btn btn-light">
                    <a href="/canchas" style="color: #4e935c; text-decoration: none;">Acceder</a>
                </button>
            </div>
            <div class="col text-center">
                <i class="fas fa-user-plus fa-3x" style="color: white; display: block; margin: 0 auto;"></i>
                <h3 style="color: black"><strong>Darse de alta como árbitro</strong></h3><br>
                <p>Regístrate como árbitro y forma parte de Footcap7 para arbitrar los partidos y cobrar.</p>
                <button type="button" class="btn btn-light">
                    <a href="/arbitros/create" style="color: #4e935c; text-decoration: none;">Acceder</a>
                </button>
            </div>
            <div class="col text-center">
                <i class="fas fa-headset fa-3x" style="color: white; display: block; margin: 0 auto;"></i>
                <h3 style="color: black"><strong>Atención personalizada</strong></h3><br>
                <p>En Footcap7 tendras una atención personalizada y asesoramiento personalizado las 24 horas.</p>
                <button type="button" class="btn btn-light">
                    <a href="/contacto" style="color: #4e935c; text-decoration: none;">Acceder</a>
                </button>
            </div>
            <div class="col text-center">
                <i class="fas fa-users fa-3x" style="color: white; display: block; margin: 0 auto;"></i>
                <h3 style="color: black"><strong>Contratación de árbitro</strong></h3><br>
                <p>Contrata nuestros servicios de árbitro para que arbitre tus partidos con un clic en tu reserva.</p>
                
            </div>
        </div>
    </div>
    <div style="background-color: #484848;">
        <div class="row">
            <div class="col-md-3">
                <!-- Bloque de texto izquierdo -->
                <h3 style="color: white;">Por qué elegir nuestros servicios</h3>
                <p style="color: white;">
                    En Footcap7 ofrecemos una experiencia única en reserva de canchas de fútbol. Aquí tienes algunas razones para elegirnos:
                    <br>
                    <br>
                    - Amplia variedad de canchas disponibles para todos los gustos y necesidades.
                    <br><br>
                    - Reservas rápidas y sencillas, sin complicaciones.
                    <br><br>
                    - Flexibilidad horaria para adaptarnos a tu agenda.
                    <br><br>
                    - Instalaciones de calidad que garantizan un juego óptimo.
                    <br><br>
                    - Precios competitivos y accesibles para que puedas disfrutar del fútbol sin preocupaciones.
                </p>
            </div>
            <div class="col-md-6 text-center"><br>
                <!-- Imagen en el centro -->
                <img src="{{ asset('Fotos/Footcap_15.jpg') }}" style="max-height: 80vh; max-width: 100%;">
            </div>
            <div class="col-md-3">
                <!-- Bloque de texto derecho -->
                <h3 style="color: white;">Características de nuestro servicio</h3>
                <p style="color: white;">
                    Nuestro servicio de reserva de canchas se destaca por:
                    <br>
                    <br>
                    - Disponibilidad de reservas todos los días de la semana.
                    <br><br>
                    - Posibilidad de reservar con anticipación para asegurar tu espacio.
                    <br><br>
                    - Selección de canchas de diferentes lugares de Málaga.
                    <br><br>
                    - Ofrecimiento de servicios adicionales como alquiler de equipos y balones de fútbol.
                    <br><br>
                    - Atención al cliente personalizada, brindándote el apoyo que necesitas en todo momento.
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>