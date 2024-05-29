<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/welc.css') }}">
</head>

<body>
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
                <a href="/cart" class="nav-link">
                    <img src="{{ asset('imgs/cart.png') }}" alt="Carrito" class="iconss">
                </a>
                <a href="/login" class="nav-link">
                    <img src="{{ asset('imgs/login.png') }}" alt="Login" style="height: 45px;">
                </a>
            </div>
        </div>
    </nav>

    <!-- Sección de eventos -->
    <section class="mt-5 pt-4">
        <div class="container mt-5">
            <h2 class="d-flex justify-content-between align-items-center">
                Eventos
                <a href="/events" class="btn btn-primary btn-ver-todo">Ver todo</a>
            </h2>
            <!-- Carousel (Bootstrap) -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('imgs/event1.png') }}" class="d-block w-100" alt="Evento 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('imgs/event2.png') }}" class="d-block w-100" alt="Evento 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Sección de tienda -->
    <section class="mt-5 pt-4">
        <div class="container mt-5">
            <h2 class="d-flex justify-content-between align-items-center">
                Tienda
                <a href="/store" class="btn btn-primary btn-ver-todo">Ver todo</a>
            </h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{ route('product.details', ['id' => 1]) }}" class="card">
                        <img src="https://m.media-amazon.com/images/I/71jn1tRUlBL._AC_SY500_.jpg" class="card-img-top"
                            alt="Bolso Totoro">
                        <div class="card-body">
                            <h5 class="card-title">Bolso Totoro</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{ route('product.details', ['id' => 2]) }}" class="card">
                        <img src="https://m.media-amazon.com/images/I/71WBwf2mkXL._AC_SL1500_.jpg" class="card-img-top"
                            alt="Teclado Gamer">
                        <div class="card-body">
                            <h5 class="card-title">Teclado Gamer</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{ route('product.details', ['id' => 3]) }}" class="card">
                        <img src="https://m.media-amazon.com/images/I/51VctPhsYDL._AC_SL1500_.jpg"
                            class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Cosmetiquera</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{ route('product.details', ['id' => 4]) }}" class="card">
                        <img src="https://m.media-amazon.com/images/I/51XRvih20sL.__AC_SX300_SY300_QL70_FMwebp_.jpg"
                            class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Bolso de OnePiece</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- Sección de filtros -->
    <section class="filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 mb-4">
                    <button class="btnfilter" onclick="redirectToStore('ropa')">Ropa</button>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <button class="btnfilter" onclick="redirectToStore('tecnologia')">Tecnología</button>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <button class="btnfilter" onclick="redirectToStore('decoracion')">Decoración</button>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <button class="btnfilter" onclick="redirectToStore('belleza')">Belleza</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container d-flex justify-content-between">
            <p>© 2024 ComicAnime DavidD, JuanN. Todos los derechos reservados.</p>
            <p><a href="/we" class="text-light">Nosotros</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function redirectToStore(filter) {
            window.location.href = '/store?filter=' + filter;
        }
    </script>
</body>

</html>
