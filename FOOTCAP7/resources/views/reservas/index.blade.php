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
    <title>Reservas</title>
</head>
<body>
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
                <li><a class="dropdown-item" href="canchas">Canchas</a></li>
                @auth
                    @if(Auth::user()->type === 'user')
                        <li><a class="dropdown-item" href="partidos">Mis Partidos</a></li>
                        <li><a class="dropdown-item" href="reservas">Mis Reservas</a></li>
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
    </div>
    <header class="content header">
        <h2 class="title">Reservas</h2>
        </div>
    </header><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista de Reservas</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Cancha</th>
                            <th>Fecha</th>
                            <th>Hora de inicio</th>
                            <th>Hora de fin</th>
                            <th>Arbitro</th>
                            <th>Método de pago</th>
                            <th>Comprobante de pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservas as $reserva)
                            @if(Auth::user()->type === 'admin' || Auth::user()->id === $reserva->user_id)
                                <tr>
                                    <td>{{ $reserva->user ? $reserva->user->name : 'No disponible' }}</td>
                                    <td>{{ $reserva->cancha ? $reserva->cancha->nombre : 'No disponible' }}</td>
                                    <td>{{ $reserva->fecha_reserva }}</td>
                                    <td>{{ $reserva->hora_inicio_reserva }}</td>
                                    <td>{{ $reserva->hora_fin_reserva }}</td>
                                    <td>{{ $reserva->arbitro ? 'Sí' : 'No' }}</td>
                                    <td>{{ $reserva->metodo_pago }}</td>
                                    <td>
                                        @if ($reserva->comprobante_pago)
                                            <a href="{{ asset('storage/users/comprobantes/' . $reserva->comprobante_pago) }}" target="_blank">Ver comprobante</a>
                                        @else
                                            Sin comprobante
                                        @endif
                                    </td>
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
        <a style="color: white; text-decoration: none;" href="/reservas/create">Crear reserva</a>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>