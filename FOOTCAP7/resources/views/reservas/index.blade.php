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
                                    <td>
                                        <form method="get" action="{{ route('reservas.show', ['reserva' => $reserva->id]) }}">
                                            <button type="submit" class="btn btn-primary">Ver</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('reservas.destroy', ['reserva' => $reserva->id]) }}" onsubmit="deleteReserva(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </td>
                                   
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        <div id="message-container"></div> 
        <div id="confirmation-modal" class="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()">&times;</span>
                <p>Reserva borrada!</p>
                <p>La Reserva ha sido eliminada exitosamente.</p>
            </div>
        </div>
    </div>
    <script>
        function deleteReserva(event) {
            event.preventDefault(); // Detener el envío del formulario
            
            const form = event.target; // Obtener el formulario
            const deleteUrl = form.action; // Obtener la URL de eliminación
    
            fetch(deleteUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ _method: 'DELETE' }) // Enviar la solicitud DELETE como POST con _method
            })
            .then(response => {
                if (response.ok) {
                    const row = form.closest('tr');
                    row.style.display = 'none'; // Ocultar la fila de la cancha eliminada
        
                    const modal = document.getElementById('confirmation-modal');
                    modal.style.display = 'block'; // Mostrar la ventana modal
        
                    const messageContainer = document.getElementById('message-container');
                    messageContainer.innerText = 'Reserva borrada';
                    messageContainer.classList.add('mensaje-rojo'); // Agregar clase CSS al mensaje
                } else {
                    console.error('Error al eliminar la Reserva:', response.status);
                }
            })
            .catch(error => {
                console.error('Error al eliminar la Reserva:', error);
            });
        }
    
        function closeModal() {
            const modal = document.getElementById('confirmation-modal');
            modal.style.display = 'none';
        }
    </script>
    
    @if(Auth::user()->type === 'admin')
    <button type="button" class="btn btn-success">
        <a style="color: white; text-decoration: none;" href="/reservas/create">Crear reserva</a>
    </button>
@endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>