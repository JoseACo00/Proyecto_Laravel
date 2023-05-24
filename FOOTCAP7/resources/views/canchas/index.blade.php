<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Canchas</title>
</head>
<body id="index_canchas">
    <header>
        <div  id="logo">
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
                                    <button type="submit" class="btn btn-primary btn-sm">Ver</button>
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
    </div> <br> 

    <button type="button" class="btn btn-success"><a  style="color: white; text-decoration: none;"href="/canchas/create">Crear canchas</a></button>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>