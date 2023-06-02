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
        <h1>Editar árbitro</h1>
    
        <div class="row">
            <div class="col-9">
                <form method="POST" action="{{ route('arbitros.update', ['arbitro' => $arbitro->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Introduce el nombre del árbitro" value="{{ $arbitro->nombre }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido_1" class="form-label">Primer Apellido</label>
                        <input id="apellido_1" class="form-control" type="text" name="apellido_1" placeholder="Introduce el primer apellido" value="{{ $arbitro->apellido_1 }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="apellido_2" class="form-label">Segundo Apellido</label>
                        <input id="apellido_2" class="form-control" type="text" name="apellido_2" placeholder="Introduce el segundo apellido" value="{{ $arbitro->apellido_2 }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="Introduce el correo electrónico" value="{{ $arbitro->email }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Introduce el teléfono" value="{{ $arbitro->telefono }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="experiencia" class="form-label">Experiencia</label>
                        <input id="experiencia" class="form-control" type="text" name="experiencia" placeholder="Introduce la experiencia" value="{{ $arbitro->experiencia }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <select name="disponibilidad" id="disponibilidad" class="form-select" value="{{ $arbitro ->disponibilidad }} ">
                            <option value="Total">Todos los dias</option>
                            <option value="Tardes">Turno Tarde</option>
                            <option value="Fines de semana">Fines de semanas</option>
                            <option value="Dia exporadico">Dia exporadico</option> 
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button> 
                </form>
            </div>  
        </div> 
    </div>            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>