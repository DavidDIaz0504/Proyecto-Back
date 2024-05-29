<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Rol - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/acc.css') }}">
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
                    <img src="{{ asset('imgs/home.png') }}" alt="inicio" class="iconss">
                </a>
                <a href="/login" class="nav-link">
                    <img src="{{ asset('imgs/login.png') }}" alt="Login" style="height: 45px;">
                </a>
            </div>
        </div>
    </nav>

    <div class="profile-section">
        <img src="{{ asset('imgs/loginb.png') }}" alt="Imagen de perfil" class="profile-image">
        <h2 class="titlename">Nombre del Usuario</h2>

        <div class="images-section">
            <div class="icon-container">
                <img src="{{ asset('imgs/history.png') }}" alt="Historial" class="icons">
                <h2 class="titleico">Historial</h2>
            </div>
            <div class="icon-container">
                <img src="{{ asset('imgs/fav_event.png') }}" alt="Eventos Guardados" class="icons">
                <h2 class="titleico">Eventos Guardados</h2>
            </div>
            <div class="icon-container">
                <img src="{{ asset('imgs/cart.png') }}" alt="Carrito" class="icons">
                <h2 class="titleico">Carrito</h2>
            </div>
        </div>

        <button class="btnlogut" type="button">Cerrar sesion</button>
    </div>

    <div class="favorites-section">
        <img src="{{ asset('imgs/fav.png') }}" alt="Favoritos" class="icons">
        <h3 class="titlename">| Tus Favoritos</h3>
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
