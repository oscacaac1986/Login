<?php

$conexion = mysqli_connect("localhost", "root", "", "facturacion");

if (isset($_POST['email'])) {
    # code...
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $sql = "SELECT correo from usuario where (correo='$email')";
    $resul=mysqli_query($conexion, $sql);
    $num_col= mysqli_num_rows($resul);
    if ($num_col == 1) {
        $data = mysqli_fetch_array($resul);
        echo "1";
    }else {
        # code...
        echo "Usuario Invalido verifique la informacion ";
    }
}




?>