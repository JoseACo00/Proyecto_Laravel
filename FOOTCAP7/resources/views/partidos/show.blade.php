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
    <div>
        <h3>Detalles del Partido</h3>
        <p><strong>ID:</strong> {{ $partido->id }}</p>
        <p><strong>Usuario:</strong> {{ $partido->user->name }}</p>
        <p><strong>Correo electrónico:</strong> {{ $partido->user->email }}</p>
        <p><strong>Cancha:</strong> {{ $partido->cancha->nombre }}</p>
        <p><strong>Fecha de Reserva:</strong> {{ $partido->reserva->fecha_reserva }}</p>
        <p><strong>Hora de Inicio:</strong> {{ $partido->reserva->hora_inicio_reserva }}</p>
        <p><strong>Hora de Fin:</strong> {{ $partido->reserva->hora_fin_reserva }}</p>
        <p><strong>Árbitro:</strong> {{ $partido->arbitro ? 'Sí' : 'No' }}</p>
        <p><strong>Estado:</strong> {{ $partido->estado }}</p>
        
        @if ($partido->estado == 'Pendiente')
            <a href="{{ route('partidos.edit', $partido->id) }}" class="btn btn-primary">Editar Estado</a>
        @endif
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>