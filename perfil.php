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


<!-- Navbar -->
<?php
include_once("./include/navbar.php");
?>


<!-- Formulario -->


<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Datos de Perfil</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nombre: John Doe</li>
                <li class="list-group-item">Correo electrónico: john.doe@example.com</li>
                <li class="list-group-item">Teléfono: 1234567890</li>
                <li class="list-group-item">Numero de tarjeta: 42343434</li>
                <li class="list-group-item">Metodo de pago: Visa que termina en **34</li>
            </ul>
            <div class="mt-3">
                <a href="#" class="btn btn-primary">Editar Perfil</a>
                <a href="./login.php" class="btn btn-danger">Cerrar Sesion</a>
            </div>
        </div>
    </div>
</div>

  </header>



<!-- Footer -->

<?php
include_once("./include/footer.php");
?> 
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>