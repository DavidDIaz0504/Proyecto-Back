<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Rol - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/rol.css') }}">
</head>

<body class="body">
    <a href="/"><img src="{{ asset('imgs/logonb.png') }}" alt="Logo"
            style="height: 50px; position: absolute; top: 10px; left: 10px;"></a>
    <div class="container d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-uppercase fw-bold mb-4">Selecciona tu Rol</h1>
        <div class="card">
            <img src="{{ asset('imgs/user.png') }}" class="card-img-top" alt="Usuario">
            <div class="card-body">
                <h5 class="card-title">Usuario</h5>
                <p class="card-text">El rol de usuario es por si quieres usar nuestra aplicación para poder adquirir
                    productos y estar al tanto de los últimos eventos o convenciones cerca de ti o relacionada a tus
                    gustos en todo el mundo :D</p>
                <a href="/"class="btn btn-primary btn-rol">Seleccionar Usuario</a>
            </div>
        </div>
        <div class="card mt-4">
            <img src="{{ asset('imgs/seller.png') }}" class="card-img-top" alt="Vendedor">
            <div class="card-body">
                <h5 class="card-title">Vendedor</h5>
                <p class="card-text">El rol de vendedor es para poder brindarte información de algún artículo, objeto o
                    mercancía que quieras vender por medio de nosotros para poder impulsar tu emprendimiento u producto
                </p>
                <a href="/account" class="btn btn-primary btn-rol">Seleccionar Vendedor</a>
            </div>
        </div>
    </div>
</body>

</html>
