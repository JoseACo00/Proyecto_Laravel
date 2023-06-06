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
<body id="registro-cancha">
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
        <h2 class="title">Inicio</h2>
        </div>
    </header>
    <div class="container">
        <h1>Nueva cancha</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('canchas.store') }}" enctype="multipart/form-data" novalidate>
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Introduce el nombre de la cancha" required>
                        @error('nombre')
                            <br>
                            <span style="color: rgb(255, 0, 0)">Error: El nombre es obligatorio</span>   
                            <span style="color: rgb(255, 0, 0)"> y Solo puede tener letras</span>   
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="localidad" class="form-label">Localidad</label>
                        <input id="localidad" class="form-control" type="text" name="localidad" placeholder="Introduce la localidad donde está el campo" required>
                        @error('localidad')
                        <br>
                        <span style="color: rgb(255, 0, 0)">Error: La localidad es obligatorio</span>   
                        <span style="color: rgb(255, 0, 0)">y solo puede tener letras </span>   
                        <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Introduce la dirección del campo" required>
                        @error('direccion')
                        <br>
                        <span style="color: rgb(255, 0, 0)">Error: La direccion es obligatorio</span>   
                        <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input id="precio" class="form-control" type="number" name="precio" placeholder="Introduce el Precio" required>
                        @error('precio')
                        <br>
                        <span style="color: rgb(255, 0, 0)">Error: El precio es obligatorio</span>  
                        <span style="color: rgb(255, 0, 0)"> y mayor a 0 </span>   
                        <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="foto" class="form-label">Subir Foto</label>
                        <input id="foto" class="form-control" type="file" name="foto">
                        @error('foto')
                        <br>
                        <span style="color: rgb(255, 0, 0)">>Error: El archivo pesa demasido </span>  
                        <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <select id="disponibilidad" class="form-control" name="disponibilidad" required>
                            <option value="Todos los dias">Todos los dias</option>
                            <option value="Turno tarde">Turno Tarde</option>
                            <option value="Fines de semana">Fines de semanas</option>
                            <option value="En reformas">En Reformas</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>