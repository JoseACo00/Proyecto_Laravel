<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Nueva Cancha</title>
</head>
<body id="create1">
    <header>
        <div id="logo">
        <img src="/balon.jpg">
        </div>
        <nav class="navigation">
      <a href="/">Inicio</a>
      <a>Nosotros</a>
      <a href="/canchas">Canchas</a>
      <a href="/clientes">Clientes</a>
      <a href="/contacto">Contacto </a>
    </header><br><br><br><br>
    <div class="container">
        <h1>Nueva reserva</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('reservas.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="user_id" class="form-label">Usuario</label>
                        <select id="user_id" class="form-control" name="user_id" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="cancha_id" class="form-label">Cancha</label>
                        <select id="cancha_id" class="form-control" name="cancha_id" required>
                            @foreach($canchas as $cancha)
                                <option value="{{ $cancha->id }}">{{ $cancha->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fecha_reserva" class="form-label">Fecha</label>
                        <input id="fecha_reserva" class="form-control" type="date" name="fecha_reserva" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="hora_inicio_reserva" class="form-label">Hora de inicio</label>
                        <input id="hora_inicio_reserva" class="form-control" type="time" name="hora_inicio_reserva" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="hora_fin_reserva" class="form-label">Hora de fin</label>
                        <input id="hora_fin_reserva" class="form-control" type="time" name="hora_fin_reserva" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="arbitro" class="form-label">¿Requiere árbitro?</label>
                        <select id="arbitro" class="form-control" name="arbitro" required>
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="metodo_pago" class="form-label">Método de pago</label>
                        <select id="metodo_pago" class="form-control" name="metodo_pago">
                            <option value="Bizum">Bizum</option>
                            <option value="Transferencia bancaria">Transferencia bancaria</option>
                            <option value="Metalico">Metálico</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="comprobante_pago" class="form-label">Comprobante de pago</label>
                        <input id="comprobante_pago" class="form-control" type="file" name="comprobante_pago">
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>