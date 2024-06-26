<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['title'] }} - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for details -->
    <link href="{{ asset('css/detai.css') }}" rel="stylesheet">
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
                    <img src="{{ asset('imgs/home.png') }}" alt="Inicio" class="iconss">
                </a>
                <a href="/cart" class="nav-link">
                    <img src="{{ asset('imgs/cart.png') }}" alt="Carrito" class="iconss">
                </a>
                <a href="/login" class="nav-link">
                    <img src="{{ asset('imgs/login.png') }}" alt="Login" class="iconss">
                </a>
            </div>
        </div>
    </nav>

    <!-- Detalles del producto -->
    <div class="container mt-5 pt-4">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ $product['image'] }}" class="img-fluid" alt="{{ $product['title'] }}">
            </div>
            <div class="col-md-6">
                <h1 class="fw-bold">{{ $product['title'] }}</h1>
                <p>{{ $product['description'] }}</p>
                <h2>${{ number_format($product['price'], 2) }}</h2>
                <form method="POST" action="{{ route('cart.add') }}" id="add-to-cart-form">
                    @csrf
                    <input type="hidden" name="title" value="{{ $product['title'] }}">
                    <input type="hidden" name="image" value="{{ $product['image'] }}">
                    <input type="hidden" name="description" value="{{ $product['description'] }}">
                    <input type="hidden" name="price" value="{{ $product['price'] }}">
                    <button type="button" class="btnAdd" onclick="submitForm()">Añadir a Carrito</button>
                    <button type="button" class="btnBuy" onclick="buyNow()">Comprar ahora</button>
                </form>

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

    <script>
        function submitForm() {
            document.getElementById('add-to-cart-form').submit();
            alert("Producto agregado correctamente al carrito.");
            go.back();
        }

        function buyNow() {
            document.getElementById('add-to-cart-form').submit();
            setTimeout(() => {
                window.location.href = "/cart";
            });
        }
    </script>
</body>

</html>
