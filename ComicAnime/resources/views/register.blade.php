<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta- ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/log.css') }}">
</head>

<body class="body">
    <!-- Barra superior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/account">
                ComicAnime <img src="{{ asset('imgs/logonb.png') }}" alt="Logo" style="height: 55px;">
            </a>
            <div class="d-flex align-items-center">
                <a href="/" class="nav-link">
                    <img src="{{ asset('imgs/homeb.png') }}" alt="inicio" class="iconss">
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="body">
        <h1 class="login-text">Crea tu Cuenta</h1>
        <form action="#" method="post" class="mt-4">
            <div class="mb-3">
                <label for="username" class="user-text">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="username" class="user-text">Correo</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="pass-text">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-login">Crear Cuenta</button>
        </form>
        <div class="mt-3">
            <p class="no-have">¿Ya tienes cuenta?<a href="/login">Iniciar Sesión</a></p>
        </div>
        <div class="mt-3">
            <p class="no-have">O inicia sesión con:</p>
            <a href="/rol" class="btn btn-apple"><img src="{{ asset('imgs/google.png') }}" alt="Google"
                    class="icon">
                Registrate con Google</a>
            <a href="/rol" class="btn btn-apple"><img src="{{ asset('imgs/apple.png') }}" alt="Apple"
                    class="icona">
                Registrate con Apple</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container d-flex justify-content-between">
            <p>© 2024 ComicAnime DavidD, JuanN. Todos los derechos reservados.</p>
            <p><a href="/we" class="text-light">Nosotros</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
