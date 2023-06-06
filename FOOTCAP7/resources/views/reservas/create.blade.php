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
    <title>Nueva Cancha</title>
</head>
<body id="create1">
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
        <h2 class="title">Reserva</h2>
        </div>
    </header>
    <div class="container">
        <h1>Nueva reserva</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('reservas.store') }}" enctype="multipart/form-data" novalidate>
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="user_id" class="form-label">Usuario</label>
                        <select id="user_id" class="form-control" name="user_id" required>
                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="cancha_id" class="form-label">Cancha</label>
                        <select id="cancha_id" class="form-control" name="cancha_id" required>
                            @foreach($canchas as $cancha)
                                <option value="{{ $cancha->id }}">{{ $cancha->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fecha_reserva" class="form-label">Fecha</label>
                        <input id="fecha_reserva" class="form-control" type="date" name="fecha_reserva" required>
                        @error('fecha_reserva')
                            <br>
                            <small style="color: red">*{{$message}}</small>
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="hora_inicio_reserva" class="form-label">Hora de inicio</label>
                        <input id="hora_inicio_reserva" class="form-control" type="time" name="hora_inicio_reserva" required>
                        @error('hora_inicio_reserva')
                            <br>
                            <small style="color: red">*{{$message}}</small>
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="hora_fin_reserva" class="form-label">Hora de fin</label>
                        <input id="hora_fin_reserva" class="form-control" type="time" name="hora_fin_reserva" required>
                        @error('hora_fin_reserva')
                            <br>
                            <small style="color: red">*{{$message}}</small>
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="arbitro" class="form-label">¿Requiere árbitro?</label>
                        <select id="arbitro" class="form-control" name="arbitro" required>
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="metodo_pago" class="form-label">Método de pago</label>
                        <select id="metodo_pago" class="form-control" name="metodo_pago">
                            <option value="Bizum">Bizum</option>
                            <option value="Transferencia bancaria">Transferencia bancaria</option>
                            <option value="Metalico">Metálico</option>
                            @error('metodo_pago')
                            <br>
                            <small style="color: red">*{{$message}}</small>
                            <br>    
                        @enderror
                            
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="comprobante_pago" class="form-label">Comprobante de pago</label>
                        <input id="comprobante_pago" class="form-control" type="file" name="comprobante_pago">
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>