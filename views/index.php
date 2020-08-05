<?php

session_start();
if (!isset($_SESSION['usuario'])) {
  # code...
  header("location:login.php");
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>Sistema de Facturacion</title>
</head>
<body>
  <div class="container-fluit">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="../img/avataaars.png" width="40" height="40" alt="" loading="lazy">
    Bienvenido: <?php echo $_SESSION['usuario'] ?> 
  </a>
  <h3><p aling=center class="navbar-nav mr-auto mt-2 mt-lg-0">Sistema de facturacion </p></h3>
  
  
  <div class=" navbar-inline">
    
    <a  class="nav-link" id="logout" href="logout.php">Cerrar Sesión</a>
    
  </div>
</nav>



     
</body>
</html>