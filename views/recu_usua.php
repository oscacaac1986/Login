<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" id="mensaje"></div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="" id="frm_recu">
                    <h1><p class="text-center">Recuperacion Usuario y Contraseña </p></h1>
                    <p>Ingrese su correo electronico corporativo,si este pertenece a una cuenta valida sera enviada esta información al correo.</p>
                    <div class="form-group">
                        <label for="">Correo Corporativo: </label>
                        <input class="form-control" type="email" name="email" id="">
                    </div>
                    <button type="submit" class="btn btn-primary" id="bbb" >Recuperar</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="../js/validacion.js"></script>
    
</body>
</html>