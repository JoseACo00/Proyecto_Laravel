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
    <title>Partidos</title>
</head>
<body id="index_reservas">
    @extends('layout')
    <div class="head">

        <div class="logo">
          <img src="{{ asset('Fotos/Logo_empresa.png') }}" width="80">
        </div>
    
        <nav class="navbar">
            <a href="/">Inicio</a>
            <a href="#">Nosotros</a>
            
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
            
            <a href="#">Servicios</a>
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
        
        
    </div><br><br>

    <div class="container">
        <p>{{ $mensaje }}</p>
        <div class="row">
            <div class="col-12">
                <h1>Lista de Partidos</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Cancha</th>
                            <th>Fecha Reserva</th>
                            <th>Hora Inicio Reserva</th>
                            <th>Hora Fin Reserva</th>
                            <th>Arbitro</th>
                            <th>Estado</th>
                            @auth
                            @if(Auth::user()->type === 'admin')
                            <th>Acciones</th>
                            @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidos as $partido)
                            @if(Auth::user()->type === 'admin' || Auth::user()->id === $partido->user_id)
                                <tr>
                                    <td>{{ $partido->user->name }}</td>
                                    <td>{{ $partido->user->email }}</td>
                                    <td>{{ $partido->cancha->nombre }}</td>
                                    <td>{{ $partido->reserva->fecha_reserva }}</td>
                                    <td>{{ $partido->reserva->hora_inicio_reserva }}</td>
                                    <td>{{ $partido->reserva->hora_fin_reserva }}</td>
                                    <td>{{ $partido->arbitro ? 'Sí' : 'No' }}</td>
                                    <td>{{ $partido->estado }}</td>
                                    @auth
                                    @if(Auth::user()->type === 'admin' || Auth::user()->id === $partido->user_id)
                                    <td>
                                        <form method="get" action="{{ route('partidos.show', ['partido' => $partido->id]) }}">
                                            <button type="submit" class="btn btn-primary">Ver</button>
                                        </form>
                                    </td>
                                    @endif
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
    <br> 
    

    <button type="button" class="btn btn-success">
        <a style="color: white; text-decoration: none;" href="/reservas/create">Crear partido</a>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>