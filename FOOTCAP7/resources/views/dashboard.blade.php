<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        nav {
            background-color: green;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            color: white;
        }
    
        .logo img {
            height: 80px;
        }
    
        ul.menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
    
        ul.menu li {
            margin-right: 10px;
        }
    
        ul.menu li a {
            color: white;
            text-decoration: none;
        }
    
        .user-info {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('logo_empresa.png') }}" alt="Logo Empresa">
        </div>
        <ul class="menu">
            <li><a href="">Inicio</a></li>
            <li><a href="">Nosotros</a></li>
            <li><a href="">Servicios</a></li>
            <li class="submenu">
                <a href="canchas">Canchas</a>
                <ul class="submenu-items">
                    <li><a href="}">Reservas</a></li>
                </ul>
            </li>
            <li><a href="">Contacto</a></li>
            <li><a href="partido">Partidos</a></li>
        </ul>
        <div class="user-info">
            @auth
                @if(Auth::user()->type === 'admin')
                    <p>Soy el admin: {{ Auth::user()->name }}</p>
                @else
                    <p>Bienvenido, {{ Auth::user()->name }}</p>
                @endif
            @endauth
        </div>
    </nav>
    <h1>inicio entero</h1>
    <!-- Aquí puedes agregar más contenido y elementos HTML según tus necesidades -->
</body>
</html>