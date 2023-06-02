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

    <div class="container">
        <h1>Lista de reservas</h1>
    
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Cancha</th>
                            <th>Fecha de reserva</th>
                            <th>Hora de inicio</th>
                            <th>Hora de fin</th>
                            <th>Arbitro</th>
                            <th>Método de pago</th>
                            <th>Comprobante de pago</th>
                            @auth
                            @if(Auth::user()->type === 'admin')
                            <th>Acciones</th>
                            @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservas as $reserva)
                        <tr>
                            <td>{{ $reserva->user->name }}</td>
                            <td>{{ $reserva->cancha->nombre }}</td>
                            <td>{{ $reserva->fecha_reserva }}</td>
                            <td>{{ $reserva->hora_inicio_reserva }}</td>
                            <td>{{ $reserva->hora_fin_reserva }}</td>
                            <td>{{ $reserva->arbitro ? 'Sí' : 'No' }}</td>
                            <td>{{ $reserva->metodo_pago }}</td>
                            <td>
                                @if($reserva->comprobante_pago)
                                <a href="{{ asset('storage/' . $reserva->comprobante_pago) }}" target="_blank">Ver comprobante</a>
                                @else
                                N/A
                                @endif
                            </td>
                            @auth
                            @if(Auth::user()->type === 'admin' || Auth::user()->id === $reserva->user_id)
                            <td>
                                <form method="get" action="{{ route('reservas.show', ['reserva' => $reserva->id]) }}">
                                    <button type="submit" class="btn btn-primary">Ver</button>
                                </form>
                            </td>
                            @endif
                            @if(Auth::user()->type === 'admin')
                            <td>
                                <form method="post" action="{{ route('reservas.destroy', ['reserva' => $reserva->id]) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                            @endif
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
        @auth
        @if(Auth::user()->type === 'admin')
        <div class="row">
            <div class="col-12">
                <a href="{{ route('reservas.create') }}" class="btn btn-success">Crear Reserva</a>
            </div>
        </div>
        @endif
        @endauth
    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>