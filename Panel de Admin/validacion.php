<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();

$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios WHERE correo='$usuario' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas)
{
    header("location:Admin/index3.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    echo'<script type="text/javascript">
    alert("Usuario no valido");
    window.location.href="index.php";
    </script>';

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);