<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
    <script src="{{ asset('validacion.js') }}"></script>
    
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
    <h2 class="title">Inicio</h2>

    <div class="btn-home">
        
    </div>
</header>

<section class="ventajas">

    <h2 class="title">Nuestas ventajas</h2>
    <p>En footcap el cliente es lo primordial dar un gran servicio no es un obligación es una prioridad. </p>
    
    <div class="box-container">

        <div class="box">
            <i class="fa-solid fa-phone"></i>
            <h3>Atención 24 H</h3><br>
            <p>Nosotros nos encargaremos de poder darte una atención  las 24 horas del dia para un mejor servicio, mejorando así tu experiencia y ayudandote</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-notes-medical" style="color: #ffffff;"></i>
            <h3>Servicio Personalizado</h3><br>
            <p>Nuestro servicio personalizado se adapta a tus necesidades, brindándote atención individualizada y soluciones a medida</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-clock" style="color: #ffffff;"></i>
            <h3>Ahorro de tiempo</h3><br>
            <p>Ahorra tiempo reservando pistas de forma rápida y sencilla a través de nuestro servicio en línea, optimizando tu experiencia deportiva.</p>
        </div>

    </div>

</section>

<section class="imagentexto">
    <div class="imagen2">
        <img src= "{{ asset('Fotos/Footcap_17.jpg') }}">
    </div>
    <div class="nosotros">
    <h2 class="titulo2">Sobre Nosotros</h2><br>
    <p class="parrafo2">Nuestra empresa que es una  apasionada por el deporte y comprometida en hacer la vida de los aficionados más fácil.
        Su misión era eliminar las barreras que impedían disfrutar plenamente de la práctica deportiva. Así nació nuestra plataforma de reservas en línea, con el objetivo de ahorrar tiempo a los usuarios al permitirles reservar pistas y canchas desde la comodidad de sus hogares.<br><br>
        Estamos comprometidos en seguir mejorando y ampliando nuestra oferta para satisfacer las necesidades cambiantes de nuestros clientes. Con nosotros, reservar una pista es más que una simple transacción, es una oportunidad para liberar el espíritu deportivo y hacer realidad los sueños. Únete a nuestra historia y descubre la emoción de reservar en línea mientras ahorras tiempo para lo que realmente importa: ¡jugar y disfrutar del deporte que amas!
    </p>
</div>
    <a href="#" class="btnnosotros">Conócenos</a>
</section>
<section class="us">

    <article class="contain">
        <h2 class="title3">Porqué escogernos?</h2>
        <p class="escogernos">
            En FootCap7, nos destacamos por ofrecerte una experiencia futbolística única.
             Aquí encontrarás instalaciones de primer nivel, con canchas de césped sintético de última generación que garantizan un juego fluido y seguro. <br><br>
             Nuestro equipo de profesionales apasionados se encarga de mantener cada espacio impecable y listo para que disfrutes al máximo. Además, contamos con una amplia variedad de servicios adicionales, como vestuarios equipados, servicios de cafetería y aparcamiento, para brindarte comodidad en cada visita. <br><br>
             Ya seas un jugador aficionado, un equipo local o un entusiasta del fútbol, en FootCap7 encontrarás el ambiente perfecto para jugar y compartir momentos inolvidables con amigos y compañeros. 
             Ven y descubre por qué somos el destino favorito de los amantes del fútbol en nuestra área. ¡Te esperamos en FootCap7!
        </p>
        <a href="#" class="btnescogernos">NUESTROS SERVICIOS</a>

    </article>

</section>
@section('content')
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>