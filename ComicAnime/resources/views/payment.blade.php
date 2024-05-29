<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasarela de Pago - ComicAnime Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
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

    <!-- Contenido de la pasarela de pago -->
    <div class="container mt-5 pt-5">
        <h2 class="titlename">Pasarela de Pago</h2>

        <div class="mt-4">
            <h4>Selecciona tu método de pago:</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cashOption" value="cash">
                <label class="form-check-label" for="cashOption">
                    Efectivo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cardOption" value="card">
                <label class="form-check-label" for="cardOption">
                    Tarjeta
                </label>
            </div>
        </div>

        <div id="paymentOptions" class="mt-4">
            <!-- Opciones de pago en efectivo -->
            <div id="cashPayment" style="display: none;">
                <h5>Empresas disponibles para pago en efectivo:</h5>
                <img src="{{ asset('imgs/nequi.png') }}" alt="Empresa 1" class="img-thumbnail">
                <img src="{{ asset('imgs/efecty.png') }}" alt="Empresa 2" class="img-thumbnail">
            </div>

            <!-- Opciones de pago con tarjeta -->
            <div id="cardPayment" style="display: none;">
                <h5>Empresas disponibles para pago con tarjeta:</h5>
                <img src="{{ asset('imgs/visa.png') }}" alt="Visa" class="img-thumbnail">
                <img src="{{ asset('imgs/mastercard.png') }}" alt="MasterCard" class="img-thumbnail">
                <img src="{{ asset('imgs/american.png') }}" alt="American Express" class="img-thumbnail">
            </div>
        </div>

        <div class="text-end mt-4">
            <button class="btn btn-success" id="btnPagar">Pagar</button>
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
        document.addEventListener('DOMContentLoaded', function () {
            const cashOption = document.getElementById('cashOption');
            const cardOption = document.getElementById('cardOption');
            const cashPayment = document.getElementById('cashPayment');
            const cardPayment = document.getElementById('cardPayment');
            const btnPagar = document.getElementById('btnPagar');

            cashOption.addEventListener('change', function () {
                if (cashOption.checked) {
                    cashPayment.style.display = 'block';
                    cardPayment.style.display = 'none';
                }
            });

            cardOption.addEventListener('change', function () {
                if (cardOption.checked) {
                    cardPayment.style.display = 'block';
                    cashPayment.style.display = 'none';
                }
            });

            btnPagar.addEventListener('click', function () {
                alert('Pedido en camino');
                window.location.href = '/';
            });
        });
    </script>
</body>

</html>
