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
        <h1>Detalles del Árbitro</h1>
    
       
            <div class="col-6">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" class="form-control" value="{{ $arbitro->nombre }}" >
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="apellido_1">Apellido1</label>
                    <input type="text" id="apellido_1" class="form-control" value="{{ $arbitro->apellido_1 }}" >
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="apellido_2">Apellido2</label>
                    <input type="text" id="apellido_2" class="form-control" value="{{ $arbitro->apellido_2 }}" >
                </div>
            </div>
    
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" value="{{ $arbitro->email}}" >
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" class="form-control" value="{{ $arbitro->telefono }}">
                </div>
            </div>
                <div class="form-group">
                    <label for="experiencia">experiencia</label>
                    <textarea id="experiencia" class="form-control" rows="3" >{{ $arbitro->experiencia }}</textarea>
                </div>
                <div>
                    <label for="disponibilidad">Disponibilidad:</label>
                    <input type="text" id="disponibilidad" class="form-control" value="{{ $arbitro->disponibilidad}}">
                </div>
                <form method="GET" action="{{ route('arbitros.edit', ['arbitro' => $arbitro -> id])}}">
                    <button class="btn btn-primary" type="submit">Editar</button>
                </form>
    
        <div class="row mt-3">
            <div class="col-12">
                <a href="{{ route('arbitros.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>