<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
    <title>Nuevo Árbitro</title>
</head>
<body id="create_arbitro">
    @extends('layout')
    <div class="head">

    <div class="logo">
      <img src="{{ asset('Fotos/Logo_empresa.png') }}" width="80">
    </div>

    <nav class="navbar">
        <a href="/">Inicio</a>
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
    <header class="content header">
        <h2 class="title">Arbitro</h2>
        </div>
    </header>
    <div class="container">
        <h1>Nuevo árbitro</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('arbitros.store') }}" novalidate>
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Introduce el nombre del árbitro"  value="{{old('nombre')}}" required>
                        @error('nombre')
                            <br>
                            <span style="color: rgb(255, 0, 0)">Error: El nombre es obligatorio</span>   
                            <span style="color: rgb(255, 0, 0)"> y Solo puede tener letras</span>   
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido_1" class="form-label">Apellido 1</label>
                        <input id="apellido_1" class="form-control" type="text" name="apellido_1" placeholder="Introduce el primer apellido"  value="{{old('apellido_1')}}" required>
                        @error('apellido_1')
                            <br>
                            <span style="color: rgb(255, 0, 0)">Error: El Apellido  es obligatorio</span>   
                            <span style="color: rgb(255, 0, 0)"> y Solo puede tener letras</span>   
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido_2" class="form-label">Apellido 2</label>
                        <input id="apellido_2" class="form-control" type="text" name="apellido_2" placeholder="Introduce el segundo apellido" value="{{old('apellido_2')}}" required>
                        @error('apellido_2')
                        <br>
                        <span style="color: rgb(255, 0, 0)">Error: El Apellido  es obligatorio</span>   
                        <span style="color: rgb(255, 0, 0)"> y Solo puede tener letras</span>   
                        <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="Introduce el email" value="{{old('email')}}" required>
                        @error('email')
                        <br>
                        <small style="color: red">*{{$message}}</small>
                        <br>
                        <span style="color: rgb(255, 0, 0)">Ej: pep0@gmail.com</span>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Introduce el teléfono"  value="{{old('telefono')}}" required>
                        @error('telefono')
                        <br>
                        <span style="color: rgb(255, 0, 0)">La Teléfono es obligatorio</span>
                        <span style="color: rgb(255, 0, 0)">Y debe tener 9 números exclusivamente</span>
                        <br>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="experiencia" class="form-label">Experiencia de Arbitro</label>
                        <input  id="experiencia" class= "form-control"  type="text" name="experiencia" placeholder="Introduce la experiencia que tengas "  value="{{old('experiencia')}}" required>
                        @error('experiencia')
                            <br>
                            <span style="color: rgb(255, 0, 0)">Error: La experiencia  es obligatorio</span>   
                            <br>    
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <select id="disponibilidad" class="form-control" name="disponibilidad" required>
                            <option value="Total">Total</option>
                            <option value="Tardes">Por las tardes</option>
                            <option value="Fines de semana">Fines de semana</option>
                            <option value="Dia exporadico">Dia exporadico</option>
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