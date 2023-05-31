<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Editar partido</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('partidos.update', ['partido' => $partido->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
    
                    <div class="form-group mb-3">
                        <label for="user_id" class="form-label">Usuario</label>
                        <select id="user_id" class="form-control" name="user_id" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if($partido->user_id == $user->id) selected @endif>{{ $user->name }} ({{ $user->email }})</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="cancha_id" class="form-label">Cancha</label>
                        <select id="cancha_id" class="form-control" name="cancha_id" required>
                            @foreach($canchas as $cancha)
                                <option value="{{ $cancha->id }}" @if($partido->cancha_id == $cancha->id) selected @endif>{{ $cancha->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="reserva_id" class="form-label">Reserva</label>
                        <select id="reserva_id" class="form-control" name="reserva_id" required>
                            @foreach($reservas as $reserva)
                                <option value="{{ $reserva->id }}" @if($partido->reserva_id == $reserva->id) selected @endif>{{ $reserva->fecha_reserva }} - {{ $reserva->hora_inicio_reserva }} - {{ $reserva->hora_fin_reserva }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="arbitro" class="form-label">¿Requiere árbitro?</label>
                        <select id="arbitro" class="form-control" name="arbitro" required>
                            <option value="0" @if($partido->arbitro == 0) selected @endif>No</option>
                            <option value="1" @if($partido->arbitro == 1) selected @endif>Sí</option>
                        </select>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select id="estado" class="form-control" name="estado" required>
                            <option value="Pendiente" @if($partido->estado == 'Pendiente') selected @endif>Pendiente</option>
                            <option value="Aceptado" @if($partido->estado == 'Aceptado') selected @endif>Aceptado</option>
                            <option value="Denegado" @if($partido->estado == 'Denegado') selected @endif>Denegado</option>
                        </select>
                    </div>
    
                    <button class="btn btn-primary" type="submit">Actualizar Partido</button>
                </form>
            </div
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>