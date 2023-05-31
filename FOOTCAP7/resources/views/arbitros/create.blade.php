<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Nuevo Árbitro</title>
</head>
<body id="create_arbitro">
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
        </nav>
    </header><br><br><br><br>
    <div class="container">
        <h1>Nuevo árbitro</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('arbitros.store') }}">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Introduce el nombre del árbitro" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido_1" class="form-label">Apellido 1</label>
                        <input id="apellido_1" class="form-control" type="text" name="apellido_1" placeholder="Introduce el primer apellido" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido_2" class="form-label">Apellido 2</label>
                        <input id="apellido_2" class="form-control" type="text" name="apellido_2" placeholder="Introduce el segundo apellido" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="Introduce el email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Introduce el teléfono" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="experiencia" class="form-label">Experiencia de Arbitro</label>
                        <input  id="experiencia" class= "form-control"  type="text" name="experiencia" placeholder="Introduce la experiencia que tengas " required>
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