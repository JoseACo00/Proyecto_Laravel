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
    <title>Nosotros</title>
</head>
<body>
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
    </div>
    <header class="content header">
        <h2 class="title">Nosotros</h2>
        <div class="btn-home">
        </div>
    </header>
   

        <section class="nosotrostexto">
            <div class="imagen4">
                <img src= "{{ asset('Fotos/Footcap_14.jpg') }}">
            </div>
            <div class="nosotros">
            <h2 class="titulonosotros">Sobre Nosotros</h2><br>
            <h3 style="text-align: center">Nuestra Historia</h3><br>
            <p class="parrafo2"> Footcap 7 es una organización que nace del amor por el fútbol y la pasión por este deporte, hemos sido impulsados por la convicción de que el fútbol no solo es un juego, sino una fuente de inspiración y una forma de vida.
                Nos mueve el deseo de compartir nuestra pasión con los demás y de facilitar el acceso al fútbol para todas las personas. Creemos en los beneficios que el deporte puede brindar, tanto física como mentalmente, y nos esforzamos por crear oportunidades para que todos puedan disfrutar de sus bondades.<br><br>
                
                Nuestra historia se construye sobre el compromiso de ayudar a las personas a que puedan realizar ejercicio de manera más fácil y divertida. A través de nuestras instalaciones y servicios, buscamos crear un entorno acogedor y seguro donde los aficionados al fútbol puedan reunirse, competir y compartir momentos inolvidables.
            </p>
        </div>
        </section>

        <div style="background-color: #484848;">
            <div class="row">
                <div class="col-md-3">
                    <h3 style="text-align: center"><strong>Revolución del fútbol femenino</strong></h3>
                    <p>En Footcap 7, creemos en la revolución del fútbol femenino y en romper los estereotipos de género asociados con este deporte. Durante años, ha existido la falsa creencia de que el fútbol es solo para hombres, pero estamos aquí para cambiar esa percepción.</p>
                    <p>Nos enorgullece brindar un espacio inclusivo para que las mujeres puedan jugar al fútbol y demostrar su pasión por este deporte. No importa tu género, edad o nivel de habilidad, todos son bienvenidos en Footcap 7.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('Fotos/Footcap_8.jpg') }}" style="max-height: 100%; max-width: 50%;" alt="Foto">
                </div>
                <div class="col-md-3">
                    <h3 style="text-align: center"><strong>La pasión por el fútbol</strong></h3>
                    <p>En Footcap 7, tenemos una pasión inquebrantable por el fútbol. Nos apasiona no solo jugar y competir, sino también brindar a las personas la oportunidad de realizar ejercicio y divertirse a través de este deporte.</p>
                    <p>Creemos en los beneficios del fútbol como forma de mantenerse en forma, mejorar habilidades sociales y promover la salud mental. Nuestro objetivo es hacer que el fútbol sea más accesible y brindar a las personas la oportunidad de disfrutarlo de manera fácil y conveniente.</p>
                </div>
            </div>
        </div>
        

        <div style="background-color: #484848;">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('Fotos/Footcap_7.jpg') }}" style="max-height: 100%; max-width: 100%;" alt="Foto 1">
                </div>
                <div class="col-md-6 text-center">
                    <h3><strong>Fútbol para todos</strong></h3>
                    <p>En Footcap 7, creemos en la diversidad y en darle la bienvenida a todos los amantes del fútbol. Nuestro objetivo es proporcionar un espacio inclusivo donde cualquier persona, sin importar su género, edad o nivel de habilidad, pueda disfrutar del hermoso juego del fútbol.</p>
                    <p>Queremos derribar los mitos y estereotipos asociados con el fútbol y demostrar que este deporte es para todos. No importa si eres un jugador experimentado o si estás comenzando, en Footcap 7 encontrarás una comunidad acogedora y apasionada que comparte tu amor por el fútbol.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('Fotos/imagen_ (1).jpg') }}" style="max-height: 100%; max-width: 100%;" alt="Foto 2">
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>