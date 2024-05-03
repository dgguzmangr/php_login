
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
        <form  action="./includes/validar.php" method="POST">
            <div id="login" >
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <br>
                                    <br>
                                    <h3 class="text-center">Registro de nuevo usuario</h3>
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nombre *</label>
                                        <input type="text"  id="name" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Correo electrónico:</label><br>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">  Teléfono *</label>
                                        <input type="tel"  id="phone" name="phone"  class="form-control" required>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contraseña:</label><br>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Fecha:</label><br>
                                        <input type="date" name="date" id="date" class="form-control">
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <input type="submit" value="Guardar"class="btn btn-success" 
                                        name="registrar">
                                        <a href="./views/user.php" class="btn btn-danger">Cancelar</a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>