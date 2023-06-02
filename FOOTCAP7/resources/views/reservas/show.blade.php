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
        <h1>Detalles de la Reserva</h1>
    
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" class="form-control" value="{{ $reserva->user->name }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="cancha">Cancha:</label>
                    <input type="text" id="cancha" class="form-control" value="{{ $reserva->cancha->nombre }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="fecha_reserva">Fecha de reserva:</label>
                    <input type="text" id="fecha_reserva" class="form-control" value="{{ $reserva->fecha_reserva }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="hora_inicio_reserva">Hora de inicio:</label>
                    <input type="text" id="hora_inicio_reserva" class="form-control" value="{{ $reserva->hora_inicio_reserva }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="hora_fin_reserva">Hora de fin:</label>
                    <input type="text" id="hora_fin_reserva" class="form-control" value="{{ $reserva->hora_fin_reserva }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="arbitro">Arbitro:</label>
                    <input type="text" id="arbitro" class="form-control" value="{{ $reserva->arbitro ? 'Sí' : 'No' }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="metodo_pago">Método de pago:</label>
                    <input type="text" id="metodo_pago" class="form-control" value="{{ $reserva->metodo_pago }}" disabled>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="comprobante_pago">Comprobante de pago:</label>
                    @if($reserva->comprobante_pago)
                    <a href="{{ asset('storage/' . $reserva->comprobante_pago) }}" target="_blank">Ver comprobante</a>
                    @else
                    N/A
                    @endif
                </div>
            </div>
        </div>
    
        <form method="GET" action="{{ route('reservas.edit', ['reserva' => $reserva->id]) }}">
            <button class="btn btn-primary" type="submit">Editar</button>
        </form>
    
        <div class="row mt-3">
            <div class="col-12">
                <a href="{{ route('reservas.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>