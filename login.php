<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                            <label for="email" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="connected" class="form-check-input" id="">
                            <label for="connected" class="form-check-label">Mantenerme conectado</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                        </div>

                        <div class="my-3">
                            <span>No tienes cuenta? <a href="./registro.php">Registrate</a></span> <br>
                            <span><a href="#">Recuperar Contraseña</a></span>
                        </div>
                    </div>
                </form>

                <div class="conatiner w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar Sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="./img/fb.png" width="32" alt="">
                                    </div>

                                    <div class="col-12 col-md-10 text-center">Facebook</div>

                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="./img/google.png" width="32" alt="">
                                    </div>

                                    <div class="col-12 col-md-10 text-center">Google</div>

                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>