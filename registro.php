<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        body{
            background: #FF0000;
            background: linear-gradient(to right, #ffa751, #FF0000);
        }
        .bg{
            background-image: url(./img/corredor1.png);
            background-position: center center;
            background-repeat: no-repeat; 
                 
        }
    </style>
</head>
<body>
    <div class="container w-75 bg-white mt-5 rounded shadow">
        <div class="row align-items-strech">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="./img/metropoli.png" width="48" alt="">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <form action="#">
                    <div class="mb-4">
                        <div class="mb-4">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-4">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido">
                        </div>
                        <div class="mb-4">
                            <label for="dni" class="form-label">Dni</label>
                            <input type="text" class="form-control" name="dni">
                        </div>
                        <div class="mb-4">
                            <label for="telefono" class="form-label">Numero Telefonico</label>
                            <input type="text" class="form-control" name="telefono">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Repetir contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="my-3">
                            <span><a href="./login.php">Regresar al Inicio de Sesion</a></span> 
                        
                        </div>
                  
                 

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>



                        
                    </div>
                </form>

                
            </div>
        </div>

    </div>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>