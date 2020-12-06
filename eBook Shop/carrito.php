<?php
@session_start();
$mensaje = "";


if (isset($_POST['btnAccion'])) {
    switch ($_POST['btnAccion']) {
        case 'Agregar':
            if (is_numeric($_POST['id'])) {
                $id = $_POST['id'];
            }
            if (is_string($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
            }
            if (is_numeric($_POST['precio'])) {
                $precio = $_POST['precio'];
            }
            if (is_numeric($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];
            }
            if (is_string($_POST['imagen'])) {
                $imagen = $_POST['imagen'];
            }
            if (is_string($_POST['href'])) {
                $href = $_POST['href'];
            }
            if (!isset($_SESSION['Cart'])) {
                $fila = array(
                    'ID' => $id,
                    'Nombre' => $nombre,
                    'Precio' => $precio,
                    'Cantidad' => $cantidad,
                    'Imagen' => $imagen,
                    'href'=> $href
                );
                $_SESSION['Cart'][0] = $fila;
                $correo=$_SESSION['correo'];
                $con = mysqli_connect("localhost", "root", "", "ebookshop");
                $buscarID="SELECT id_usuario from usuarios where correo='$correo'";
                $exebuscarid=mysqli_query($con,$buscarID);
                foreach($exebuscarid as $i => $valor){
                    $id_usuario=$valor['id_usuario'];
                }
                $insertWL="INSERT INTO carrito values('$id','$id_usuario','$precio',now())";
                $exeInsertWL=mysqli_query($con,$insertWL);

            } else {

                $idProductos=array_column($_SESSION['Cart'],'ID');

                if(in_array($id,$idProductos)){
                    echo "<script> alert('El producto ya ha sido agregado al Cart.') </script>";
                    $mensaje=" ";
                }else{

                    $NumeroProductos = count($_SESSION['Cart']);
                    $fila = array(
                        'ID' => $id,
                        'Nombre' => $nombre,
                        'Precio' => $precio,
                        'Cantidad' => $cantidad,
                        'Imagen' => $imagen,
                        'href'=> $href
                    );
                    $_SESSION['Cart'][$NumeroProductos] = $fila;
                    $correo=$_SESSION['correo'];
                    $con = mysqli_connect("localhost", "root", "", "ebookshop");
                    $buscarID="SELECT id_usuario from usuarios where correo='$correo'";
                    $exebuscarid=mysqli_query($con,$buscarID);
                    foreach($exebuscarid as $i => $valor){
                        $id_usuario=$valor['id_usuario'];
                    }
                    $insertWL="INSERT INTO carrito values('$id','$id_usuario','$precio',now())";
                    $exeInsertWL=mysqli_query($con,$insertWL);

                }

            }
            break;

        case 'Eliminar':
            if (is_numeric($_POST['id'])) {
                $id = $_POST['id'];

                foreach($_SESSION['Cart'] as $i =>$fila){
                    if($fila['ID']==$id){
                        unset($_SESSION['Cart'][$i]);
                        echo "<script> Elemento eliminado. </script>";

                    }
                }
            }
            break;
    }
}