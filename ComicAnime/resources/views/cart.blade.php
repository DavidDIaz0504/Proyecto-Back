<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
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

    <!-- Contenido del carrito -->
    <div class="container mt-5">
        <h2 class="titlename">Tu carrito</h2>
        <!-- Producto en el carrito -->
        <div class="row mt-4 align-items-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imgs/inuyasha_lamp.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="col-md-8">
                <h5 class="card-title">Nombre del Producto</h5>
                <p class="card-text">Precio: $000.000.00</p>
            </div>
        </div>

        <!-- Mensaje si no hay productos en el carrito -->
        <div class="container mt-4 text-center">
            <div class="row">
                <div class="col">
                    <p>No hay más productos en el carrito.</p>
                </div>
            </div>
        </div>

        <!-- Total del carrito y botón de pagar -->
        <div class="total-container mt-4 pt-4">
            <div class="row">
                <div class="col-md-12 text-end">
                    <h4>Total: $XX.XX</h4>
                    <button class="btn btn-primary mt-3">Pagar</button>
                </div>
            </div>
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



