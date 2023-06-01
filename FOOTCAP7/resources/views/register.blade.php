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
        <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <div class="form-outline form-white mb-4">
            <input type="text" id="name" class="form-control form-control-lg" name="name" required />
            <label class="form-label" for="name">Nombre</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="text" id="apellido_1" class="form-control form-control-lg" name="apellido_1" required />
            <label class="form-label" for="apellido_1">Apellido 1</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="text" id="apellido_2" class="form-control form-control-lg" name="apellido_2" required />
            <label class="form-label" for="apellido_2">Apellido 2</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="email" id="email" class="form-control form-control-lg" name="email" required />
            <label class="form-label" for="email">Email</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="password" id="password" class="form-control form-control-lg" name="password" required />
            <label class="form-label" for="password">Contraseña</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="number" id="edad" class="form-control form-control-lg"  min="16" name="edad" required />
            <label class="form-label" for="edad">Edad</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="text" id="telefono" class="form-control form-control-lg" name="telefono" required />
            <label class="form-label" for="telefono">Teléfono</label>
          </div>

          <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" type="radio" name="type" id="userTypeUser" value="user" checked>
            <label class="form-check-label" for="userTypeUser">User</label>
          </div>

          <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" type="radio" name="type" id="userTypeAdmin" value="admin">
            <label class="form-check-label" for="userTypeAdmin">Admin</label>
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
          <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
          </p>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</section>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>