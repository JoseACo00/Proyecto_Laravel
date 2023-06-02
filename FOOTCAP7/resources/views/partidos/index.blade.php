<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Reservas</title>
</head>
<body id="index_reservas">
    <header>
        <div id="logo">
            <img src="/balon.jpg">
        </div>
        <nav class="navigation">
            <a href="/">Inicio</a>
            <a>Nosotros</a>
            <a href="/canchas">Canchas</a>
            <a href="/clientes">Clientes</a>
            <a href="/contacto">Contacto</a>
            <button type="button" class="btn btn-outline-primary me-2">
                <a href="{{ route('logout') }}" style="color: white; text-decoration: none;">Cerrar sesión</a>
            </button>
        </nav>
    </header><br><br><br><br>

    {{-- <div class="container">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidos as $partido)
                        <tr>
                            <td>{{ $partido->user->name }}</td>
                            <td>{{ $partido->user->email }}</td>
                            <td>{{ $partido->cancha->nombre }}</td>
                            <td>{{ $partido->reserva->fecha_reserva }}</td>
                            <td>{{ $partido->reserva->hora_inicio_reserva }}</td>
                            <td>{{ $partido->reserva->hora_fin_reserva }}</td>
                            <td>{{ $partido->arbitro ? 'Sí' : 'No' }}</td>
                            <td>{{ $partido->estado }}</td>
                            <td>
                                <form method="get" action="{{ route('partidos.show', ['partido' => $partido->id]) }}">
                                    <button type="submit" class="btn btn-primary">Ver</button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
          
    </div><br>  --}}

    <div class="container">
        <h1>Lista de Partidos</h1>
    
        <div class="row">
            <div class="col-12">
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
                        @if(Auth::check() && $partido->user_id === Auth::user()->id)
                        <tr>
                            <td>{{ $partido->user->name }}</td>
                            <td>{{ $partido->user->email }}</td>
                            <td>{{ $partido->cancha->nombre }}</td>
                            <td>{{ $partido->reserva->fecha_reserva }}</td>
                            <td>{{ $partido->reserva->hora_inicio_reserva }}</td>
                            <td>{{ $partido->reserva->hora_fin_reserva }}</td>
                            <td>{{ $partido->arbitro ? 'Sí' : 'No' }}</td>
                            <td>
                                @if($partido->estado === 'Pendiente')
                                <span style="color: gray;">Pendiente</span>
                                @elseif($partido->estado === 'Aceptado')
                                <span style="color: green;">Aceptado</span>
                                @elseif($partido->estado === 'Denegado')
                                <span style="color: red;">Denegado</span>
                                @else
                                {{ $partido->estado }}
                                @endif
                            </td>
                            @auth
                            @if(Auth::user()->type === 'admin')
                            <td>
                                <form method="get" action="{{ route('partidos.show', ['partido' => $partido->id]) }}">
                                    <button type="submit" class="btn btn-primary">Ver</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('partidos.destroy', ['partido' => $partido->id]) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este partido?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                            @endif
                            @endauth
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
        @auth
        @if(Auth::user()->type === 'admin')
        <div class="row">
            <div class="col-12">
                <a href="{{ route('partidos.create') }}" class="btn btn-success">Crear Partido</a>
            </div>
        </div>
        @endif
        @endauth
    </div>
    
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>