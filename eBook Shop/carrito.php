<?php
session_start();
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
            if(is_string($_POST['imagen'])){
                $imagen= $_POST['imagen'];
            }
            if (!isset($_SESSION['Cart'])) {
                $producto = array(
                    'ID' => $id,
                    'Nombre' => $nombre,
                    'Precio' => $precio,
                    'Cantidad' => $cantidad,
                    'Imagen' => $imagen
                );
                $_SESSION['Cart'][0] = $producto;
                $mensaje="Listo. Agregado.";

            } else {

                $idProductos=array_column($_SESSION['Cart'],'ID');

                if(in_array($id,$idProductos)){
                    echo "<script> alert('El producto ya ha sido agregado al carrito.') </script>";
                    $mensaje=" ";
                }else{

                    $NumeroProductos = count($_SESSION['Cart']);
                    $producto = array(
                        'ID' => $id,
                        'Nombre' => $nombre,
                        'Precio' => $precio,
                        'Cantidad' => $cantidad,
                        'Imagen' => $imagen
                    );
                    $_SESSION['Cart'][$NumeroProductos] = $producto;
                    $mensaje="Listo. Agregado.";
    
                }

            }
            break;

            case 'Eliminar':
                if (is_numeric($_POST['id'])) {
                    $id = $_POST['id'];
                    
                    foreach($_SESSION['Cart'] as $i =>$producto){
                        if($producto['ID']==$id){
                            unset($_SESSION['Cart'][$i]);
                            echo "<script> Elemento eliminado. </script>";
                            
                        }
                    }
                } 
            break;
    }
}