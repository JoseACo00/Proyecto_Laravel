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
    <title>Canchas</title>
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
        <h2 class="title">Canchas</h2>
        <div class="btn-home">
        </div>
    </header>
   
    
    {{-- <div class="container">
        <h1>Index de canchas</h1>
    <p>{{ $mensaje}}</p>
    
    
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Localidad</th>
                            <th>Direccion</th>
                            <th>Precio</th>
                            <th>Foto</th>
                            <th>Disponibilidad</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($canchas as $cancha)
                        <tr>
                            <td>{{ $cancha->nombre }}</td>
                            <td>{{ $cancha->localidad }}</td>
                            <td>{{ $cancha->direccion }}</td>
                            <td>{{ $cancha->precio }} </td>
                            <td>
                                <img src="{{ asset('storage/' . $cancha->foto) }}" alt="Imagen de la cancha" class="img-fluid">
                            </td>
                            <td>{{ $cancha->disponibilidad }}</td>
                            <td>
                                <form method="get" action="{{ route('canchas.show', ['cancha' => $cancha -> id] )}}">
                                    <button type="submit" class="btn btn-primary ">Ver</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('canchas.destroy', ['cancha' => $cancha -> id]) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>     
    </div> <br>  --}}
    <div style="background-color: #4e935c; color: #ffffff; padding: 20px;">
        <h1>Las reserva Funcionará así</h1>
        <p>Necesitas seguir los siguientes pasos:</p>
        <div class="row">
            <div class="col-md-6">
                <h2>Paso 1: Registrarte como usuario</h2>
                <p>Para poder realizar una reserva, es necesario registrarte como usuario en nuestra plataforma. Si aún no tienes una cuenta, puedes crearla fácilmente siguiendo los pasos de registro.</p>
            </div>
            <div class="col-md-6">
                <h2>Paso 2: Elige la cancha que más te guste</h2>
                <p>Explora nuestra lista de canchas disponibles y elige la que se ajuste a tus preferencias. En la tabla se muestra el precio de cada cancha por una hora de juego</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Paso 3: Realiza el pago</h2>
                <p>Una vez seleccionada la cancha, podrás proceder a realizar la reserva. Puedes realizar el pago mediante Bizum o Transefencia bancaria donde podras subir un comprobante o, si lo prefieres, también aceptamos pagos en efectivo antes o después del encuentro.<br> NUMERO BIZUM: +34633911137 <br> NUMERO DE CUENTA: ES2901252495511182736723</p>
                <p>Recuerda que el precio mostrado corresponde a una hora de juego. Si deseas añadir un árbitro a tu partido, se aplicará un costo adicional de 20 euros.</p>
            </div>
            <div class="col-md-6">
                <h2>Paso 4: Disfrutar de la reserva y jugar</h2>
                <p>Una vez completados los pasos anteriores, solo queda disfrutar de tu reserva y jugar al fútbol. Aprovecha al máximo tu tiempo en la cancha, diviértete con tus amigos y vive una gran experiencia deportiva.</p>
                <p>Recuerda respetar las normas del lugar y mantener un ambiente amigable y deportivo. Si tienes alguna pregunta o necesitas ayuda durante tu reserva, nuestro equipo estará encantado de asistirte.</p>
                <a href="contacto" class="btn btn-primary">Contactar</a>
            </div>
            
        </div>
    </div>
    
    
    
    
        <div class="container">
            <h1 id="index-cancha">Lista de canchas Para poder Reservar</h1>

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Localidad</th>
                                <th>Dirección</th>
                                <th>Precio</th>
                                <th>Disponibilidad</th>
                                <th>Foto</th>
                                @auth
                                @if(Auth::user()->type === 'admin')
                                <th>Acciones</th>
                                @endif
                                @endauth
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($canchas as $cancha)
                            <tr>
                                <td>{{ $cancha->nombre }}</td>
                                <td>{{ $cancha->localidad }}</td>
                                <td>{{ $cancha->direccion }}</td>
                                <td>{{ $cancha->precio }} €</td>
                                <td>{{ $cancha->disponibilidad }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $cancha->foto) }}" alt="Imagen de la cancha" class="img-fluid">
                                </td>
                                @auth
                                @if(Auth::user()->type === 'admin')
                                <td>
                                    <form method="get" action="{{ route('canchas.show', ['cancha' => $cancha->id]) }}">
                                        <button type="submit" class="btn btn-primary">Ver</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('canchas.destroy', ['cancha' => $cancha->id]) }}" onsubmit="deleteCancha(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Borrar</button>
                                    </form>
                                </td>
                                @elseif(Auth::user()->type === 'user')
                                <td>
                                    <form method="get" action="{{ route('reservas.create') }}">
                                @csrf
                                    <input type="hidden" name="cancha_id" value="{{ $cancha->id }}">
                                    <button type="submit" class="btn btn-success">Reservar</button>
                                    </form>
                                </td>
                                @endif
                                @endauth
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="message-container"></div> 
        <div id="confirmation-modal" class="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()">&times;</span>
                <p>¡Cancha borrada!</p>
                <p>La cancha ha sido eliminada exitosamente.</p>
            </div>
        </div>
            </div>
            <script>
                function deleteCancha(event) {
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
                            messageContainer.innerText = 'Cancha borrada';
                            messageContainer.classList.add('mensaje-rojo'); // Agregar clase CSS al mensaje
                        } else {
                            console.error('Error al eliminar la cancha:', response.status);
                        }
                    })
                    .catch(error => {
                        console.error('Error al eliminar la cancha:', error);
                    });
                }
            
                function closeModal() {
                    const modal = document.getElementById('confirmation-modal');
                    modal.style.display = 'none';
                }
            </script>
        </div>
        @auth
    @if(Auth::user()->type === 'admin')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('canchas.create') }}" class="btn btn-success">Crear Cancha</a>
        </div>
    </div>
    @endif
    @endauth
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>