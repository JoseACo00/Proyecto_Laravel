<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Editar Reserva</h1>
    
        <div class="row">
            <div class="col-9">
                <form method="POST" action="{{ route('reservas.update', ['reserva' => $reserva->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
    
                    <div class="form-group mb-3">
                        <label for="user_id" class="form-label">Usuario</label>
                        <select id="user_id" class="form-control" name="user_id">
                            @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id === $reserva->user_id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="cancha_id" class="form-label">Cancha</label>
                        <select id="cancha_id" class="form-control" name="cancha_id">
                            @foreach($canchas as $cancha)
                            <option value="{{ $cancha->id }}" {{ $cancha->id === $reserva->cancha_id ? 'selected' : '' }}>
                                {{ $cancha->nombre }}
                            </option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="fecha_reserva" class="form-label">Fecha de reserva</label>
                        <input id="fecha_reserva" class="form-control" type="date" name="fecha_reserva" value="{{ $reserva->fecha_reserva }}">
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="hora_inicio_reserva" class="form-label">Hora de inicio</label>
                        <input id="hora_inicio_reserva" class="form-control" type="time" name="hora_inicio_reserva" value="{{ $reserva->hora_inicio_reserva }}">
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="hora_fin_reserva" class="form-label">Hora de fin</label>
                        <input id="hora_fin_reserva" class="form-control" type="time" name="hora_fin_reserva" value="{{ $reserva->hora_fin_reserva }}">
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="arbitro" class="form-label">¿Requiere árbitro?</label>
                        <select id="arbitro" class="form-control" name="arbitro" value="{{ $reserva ->arbitro }} "required >
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="metodo_pago" class="form-label">Método de pago</label>
                        <select id="metodo_pago" class="form-control" name="metodo_pago" value="{{ $reserva ->metodo_pago }} ">
                            <option value="Bizum">Bizum</option>
                            <option value="Transferencia bancaria">Transferencia bancaria</option>
                            <option value="Metalico">Metálico</option>
                        </select>
                    </div>
                    
    
                    <div class="form-group mb-3">
                        <label for="comprobante_pago" class="form-label">Comprobante de pago</label>
                        <input id="comprobante_pago" class="form-control" type="file" name="comprobante_pago">
                    </div>
    
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>