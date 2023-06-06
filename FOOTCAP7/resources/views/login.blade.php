<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('estilos.css')}}">

</head>
<body>
    <div class="head">

        <div class="logo">
          <img src="{{ asset('Fotos/Logo_empresa.png') }}" width="80">
        </div>
    
        <nav class="navbar">
            <a href="/">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="canchas">Canchas</a>
            <a href="#">Servicios</a>
            <a href="('contacto')">Contacto</a>
            
    
    </div><br><br><br>
    <main class="container align-center p-5">
        <form method="POST"  action="{{route('inicia-sesion')}}" novalidate>
     @csrf
     <div class="loggin">
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailInput"name="email" required>
            <span id="emailInput-error" class="error-message"></span>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordInput" name="password" required>
            <span id="contraseñaInput-error" class="error-message"></span>

        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" dlass="form-check-input" id="rememberCheck" name="remember">
            <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
        </div>
        <div>
            <p>Cra una cuenta <a href="{{route('registro')}}">Registrarse</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Acceder</button>
    </div>
    </form>
    </main>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>