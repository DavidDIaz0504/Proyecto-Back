<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
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

    <!-- Contenido de la página -->
    <div class="container mt-5">
        <h1 class="text-center fw-bold mb-4 titleev">Tienda</h1>
        <div class="row">
            <div class="row mb-4 filter-buttons">
                <div class="col d-flex">
                    <a href="{{ route('store', ['category' => 'Ropa']) }}" class="btn filter-button mx-2">Ropa</a>
                    <a href="{{ route('store', ['category' => 'Belleza']) }}" class="btn filter-button mx-2">Belleza</a>
                    <a href="{{ route('store', ['category' => 'Tecnologia']) }}" class="btn filter-button mx-2">Tecnología</a>
                    <a href="{{ route('store', ['category' => 'Decoracion']) }}" class="btn filter-button mx-2">Decoración</a>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="{{ route('product.details', ['id' => $product['id']]) }}" class="card">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['title'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container d-flex justify-content-between">
            <p>© 2024 ComicAnime DavidD, JuanN. Todos los derechos reservados.</p>
            <p><a href="#" class="text-light">Nosotros</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
