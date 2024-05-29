<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
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

    <!-- Formulario de creación de producto -->
    <div class="container mt-5 pt-4">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center fw-bold mb-4">Crear Nuevo Producto</h1>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">URL de la Imagen</label>
                        <input type="text" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Producto</button>
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
</body>
</html>
