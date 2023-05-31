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
        <h1>Editar videojuego</h1>

        <div class="row">
            <div class="col-9">
                <form method="POST" action="{{ route ('canchas.update', ['cancha' => $cancha -> id]) }}" " enctype="multipart/form-data">
                   {{ method_field('PUT') }} 
                @csrf 
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Introduce el nombre de la cancha" value="{{ $cancha ->nombre }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="localidad" class="form-label">Localidad</label>
                        <input id="localidad" class="form-control" type="text" name="localidad" placeholder="Introduce la localidad donde está el campo"  value="{{ $cancha ->localidad}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Introduce la dirección del campo" value="{{ $cancha ->direccion}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input id="precio" class="form-control" type="number" name="precio" placeholder="Introduce el Precio" value="{{ $cancha ->precio}}">
                    </div>
                    <div class="form-group mb-3">
                        
                        <label for="foto" class="form-label">Actualizar  Foto</label>
                        <input id="foto" class="form-control" type="file" name="foto" value="{{ $cancha ->foto}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <select name="disponibilidad" id="disponibilidad" class="form-select" value="{{ $cancha ->disponibilidad }} ">
                            <option value="Todos los dias">Todos los dias</option>
                            <option value="Turno tarde">Turno Tarde</option>
                            <option value="Fines de semana">Fines de semanas</option>
                            <option value="En reformas">En Reformas</option> 
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