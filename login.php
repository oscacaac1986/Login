<?php

session_start();
if (isset($_SESSION["usuario"])) {  
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-xl pt-3 my-4">
        <div class="row" >
            <div class="col-3"></div>
            <div class="col-6" id="mensaje"></div>
            <div class="col-3"></div>
            
        </div>
        <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" id="frm_login">
                <h1><p class="text-center">Login</p></h1>
                <img class="mx-auto d-block" src="../login/img/avataaars.svg" alt="" style="width:200px;height:200px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario:</label>
                    <input type="text" class="form-control" id="usaurio" required="true" name ="usuario" >
                </div>
                <div class="form-group">
                    <label for="Password1">Password:</label>
                    <input type="password" class="form-control" id="Password1" required="true" name="password">
                </div>
                        
                <button type="submit" class="btn btn-primary" id="bbb"  >Ingresar</button>
            </form>
            <a href="url">Para recuperar usuario y contraseña click aqui</a>
        </div>
        <div class="col-4"></div>
        </div>
    </div>
    <script src="../login/js/validacion.js"></script>
</body>
</html>