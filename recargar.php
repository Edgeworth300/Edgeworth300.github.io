<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recargar</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">


</head>
<body>

<header class="header">
  
<!-- Navbar -->
<?php
include_once("./include/navbar.php");
?>


<!-- Formulario -->


<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Recarga Tu Tarjeta</h5>
            <form>
                <div class="form-group">
                    <label for="numeroPasajero">Número de Tarjeta de Pasajero</label>
                    <input type="text" class="form-control" id="numeroPasajero" name="numeroPasajero">
                </div>
                <div class="form-group">
                    <label for="monto">Monto</label>
                    <input type="text" class="form-control" id="monto" name="monto">
                </div>
                <div class="form-group">
                    <label for="numeroDebito">Número de Tarjeta de Débito/Credito</label>
                    <input type="text" class="form-control" id="numeroDebito" name="numeroDebito">
                </div>
                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fechaExpiracion">Fecha de Expiración</label>
                        <input type="text" class="form-control" id="fechaExpiracion" name="fechaExpiracion">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv">
                    </div>
                </div>
                <button type="submit" class=" btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
</header>
    <!-- Navbar -->





<!-- Footer -->


<?php
include_once("./include/footer.php");
?>   
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>