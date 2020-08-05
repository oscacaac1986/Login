<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "facturacion");

if (isset($_POST['usuario']) && isset($_POST['password']) ) {
    # code...
    $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $pass = mysqli_real_escape_string($conexion, $_POST['password']);
    $sql = "SELECT nom_usuario from usuario where (nom_usuario='$user') and password='$pass'";
    $resul=mysqli_query($conexion, $sql);
    $num_col= mysqli_num_rows($resul);
    if ($num_col == 1) {
        $data = mysqli_fetch_array($resul);
        $_SESSION['usuario'] = trim($data["nom_usuario"]);
        echo "1";

    }else {
        # code...
        echo "Usuario Invalido verifique la informacion ";
    }
}


?>