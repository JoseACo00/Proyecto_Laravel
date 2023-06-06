<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="assets('estilos.css')">
</head>
<body>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
        <form method="POST" action="{{route('validar-registro')}}" novalidate>
        @csrf
        <div class="form-outline form-white mb-4">
          <label class="form-label" for="name">Nombre</label>
          <input type="text" id="name" class="form-control form-control-lg" name="name" value="{{old('name')}}" required />
            @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>    
            <span style="color: rgb(255, 0, 0)">Solo puede tener letras</span>   
            @enderror
          </div>

          <div class="form-outline form-white mb-4">
            <label class="form-label" for="apellido_1">Apellido 1</label>
            <input type="text" id="apellido_1" class="form-control form-control-lg" name="apellido_1" value="{{old('apellido_1')}}" required />
            @error('apellido_1')
            <br>
            <small>*{{$message}}</small>
            <br>
            <span style="color: rgb(255, 0, 0)">Solo puede tener letras</span>      
            @enderror
          </div>

          <div class="form-outline form-white mb-4">
            <label class="form-label" for="apellido_2">Apellido 2</label>
            <input type="text" id="apellido_2" class="form-control form-control-lg" name="apellido_2" value="{{old('apellido_2')}}" required />
            @error('apellido_2')
            <br>
            <small>*{{$message}}</small>
            <br>
            <span style="color: rgb(255, 0, 0)">Solo puede tener letras</span>      
            @enderror
          </div>

          <div class="form-outline form-white mb-4">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" class="form-control form-control-lg" name="email" value="{{old('email')}}" required />
            @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
            <span style="color: rgb(255, 0, 0)">Ej: pep0@gmail.com</span>    
            @enderror
          </div>

          <div class="form-outline form-white mb-4">
            <label class="form-label" for="password">Contraseña</label>
            <input type="password" id="password" class="form-control form-control-lg" name="password" value="{{old('password')}}" required />
            @error('password')
            <br>
            <small>*{{$message}}</small>
            <br>    
            <span style="color: rgb(255, 0, 0)">Debe tener minimo 5 caracteres</span>
            @enderror
          </div>
          <div class="form-outline form-white mb-4">
            <label class="form-label" for="edad">Edad</label>
            <input type="number" id="edad" class="form-control form-control-lg" name="edad" value="{{old('edad')}}"  required />
            @error('edad')
            <br>
            <span style="color: rgb(255, 0, 0)">La edad es obligatoria y</span><br>
            <span style="color: rgb(255, 0, 0)">edad minima 16 y máxima 90 </span>
            <br>
            @enderror
          </div>

          <div class="form-outline form-white mb-4">
            <label class="form-label" for="telefono">Teléfono</label>
            <input type="text" id="telefono" class="form-control form-control-lg" name="telefono" value="{{old('telefono')}}" required />
            @error('telefono')
            <br>
            <span style="color: rgb(255, 0, 0)">La Teléfono es obligatorio</span><br>
            <span style="color: rgb(255, 0, 0)">Y debe tener 9 números exclusivamente</span>
            <br>
            @enderror
          </div>

          <div class="form-check form-check-inline mb-4">
            <label class="form-check-label" for="userTypeUser">User</label>
            <input class="form-check-input" type="radio" name="type" id="userTypeUser" value="user" checked>
  
          </div>

          <div class="form-check form-check-inline mb-4">
            <label class="form-check-label" for="userTypeAdmin">Admin</label>
            <input class="form-check-input" type="radio" name="type" id="userTypeAdmin" value="admin">
          </div>
          <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
          <div class="d-flex justify-content-center text-center mt-4 pt-1">
            <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
            <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
          </div>

        </div>

        <div>
          <p class="mb-0">Don't have an account? <a href="login" class="text-white-50 fw-bold">Iniciar sesión</a>
          </p>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</section>
@section('content')
@endsection
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>