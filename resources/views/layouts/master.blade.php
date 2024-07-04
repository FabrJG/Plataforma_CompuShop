<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompuShop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Modal de inicio de sesión -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLogin()">&times;</span>
            <h2 class="text-center" style="background-color:white">Iniciar Sesión</h2>
            <form>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group" style="padding-top: 20px;">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" class="form-control">
                    <input type="checkbox" onclick="togglePassword()" style="padding-top: 20px;"> Mostrar Contraseña
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                <div class="mt-2 text-center" style="background-color:white">
                    <a href="#" class="text-primary"style="padding-top: 20px;">Olvidé mi contraseña</a>
                </div>
            </form>
        </div>
    </div>
    <header class="bg-primary text-white p-3 text-center" style="margin-bottom:1px">
        <div class="container">
            <div class="logo">
                <img src="https://i.imgur.com/FXxJgZm.png" alt="CompuShop Logo" class="img-fluid imagen-logo">
            </div>
        </div>
        <div class="container mt-3 d-flex justify-content-between align-items-center">
            <div class="search-bar" style="width: 38%;">
                <input type="text" class="form-control" placeholder="Buscar productos...">
            </div>
            <div class="login">
                @auth
                    @if (Auth::user()->rol==='admin')
                        <a href="{{route('register')}}"><button class="btn btn-login btn-outline-dark" onclick="#">Ver Clientes</button></a>
                        <a href="{{route('register')}}"><button class="btn btn-login btn-outline-dark" onclick="#">Ver Pedidos</button></a>
                        
                        @elseif (Auth::user()->rol==='user')
                            <a href="{{route('register')}}"><button class="btn btn-login btn-outline-dark" onclick="#">Mis Pedidos</button></a>
                            <a href="{{route('register')}}"><button class="btn btn-login btn-outline-dark" onclick="#">Mi Perfil</button></a>
                    @endif
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <button class="btn btn-login btn-outline-dark" >{{ __('Logout') }}</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a href="{{route('login')}}"><button class="btn btn-login btn-outline-dark" >Iniciar Sesión</button></a>
                    <a href="{{route('register')}}"><button class="btn btn-login btn-outline-dark" onclick="#">Registrarse</button></a>
                @endauth
                <!--onclick="showLogin()"-->
                <!--<a href="{{route('login')}}"><button class="btn btn-login btn-outline-dark" >Iniciar Sesión</button></a>-->
                    
            </div>
        </div>
    </header>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para mostrar y ocultar el modal de inicio de sesión -->
    <script>
        function showLogin() {
            document.getElementById('loginModal').style.display = 'block';
        }

        function closeLogin() {
            document.getElementById('loginModal').style.display = 'none';
        }

        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

@yield('content')