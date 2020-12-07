<?php
@session_start();
$mensaje = "";

$id="";
$nombre="";
$precio="";
$imagen="";
$href="";
if (isset($_POST['AgregarWL'])) {

            if (is_numeric($_POST['idwl'])) {
                $id = $_POST['idwl'];
            }
            if (is_string($_POST['nombrewl'])) {
                $nombre = $_POST['nombrewl'];
            }
            if (is_numeric($_POST['preciowl'])) {
                $precio = $_POST['preciowl'];
            }
            if (is_string($_POST['imagenwl'])) {
                $imagen = $_POST['imagenwl'];
            }
            if (is_string($_POST['hrefwl'])) {
                $href = $_POST['hrefwl'];
            }
            if (!isset($_SESSION['Wishlist'])) {
                $fila = array(
                    'ID' => $id,
                    'Nombre' => $nombre,
                    'Precio' => $precio,
                    'Imagen' => $imagen,
                    'href'=> $href
                );
                $_SESSION['Wishlist'][0] = $fila;
                $mensaje= 'Artículo agregado';
                $correo=$_SESSION['correo'];
                $con = mysqli_connect("localhost", "root", "", "ebookshop");
                $buscarID="SELECT id_usuario from usuarios where correo='$correo'";
                $exebuscarid=mysqli_query($con,$buscarID);
                foreach($exebuscarid as $i => $valor){
                    $id_usuario=$valor['id_usuario'];
                }
                
                $insertWL="INSERT INTO wishlist values('$id','$id_usuario','$nombre',now())";
                $exeInsertWL=mysqli_query($con,$insertWL);

            } else {

                $idProductos=array_column($_SESSION['Wishlist'],'ID');

                if(in_array($id,$idProductos)){
                    echo "<script> alert('El producto ya esta en tu lista de deseos') </script>";
                    $mensaje=" ";
                }else{

                    $NumeroProductos = count($_SESSION['Wishlist']);
                    $fila = array(
                        'ID' => $id,
                        'Nombre' => $nombre,
                        'Precio' => $precio,
                        'Imagen' => $imagen,
                        'href'=> $href
                    );
                    $_SESSION['Wishlist'][$NumeroProductos] = $fila;
                    $mensaje="Articulo(s) agregado(s)";
                    $correo=$_SESSION['correo'];
                    $con = mysqli_connect("localhost", "root", "", "ebookshop");
                    $buscarID="SELECT id_usuario from usuarios where correo='$correo'";
                    $exebuscarid=mysqli_query($con,$buscarID);
                    foreach($exebuscarid as $i => $valor){
                        $id_usuario=$valor['id_usuario'];
                    }
                    $insertWL="INSERT INTO wishlist values('$id','$id_usuario','$nombre',now())";
                    $exeInsertWL=mysqli_query($con,$insertWL);

                }

            }

            /*
        case 'Eliminar':
            if (is_numeric($_POST['id'])) {
                $id = $_POST['id'];

                foreach($_SESSION['Wishlist'] as $i =>$fila){
                    if($fila['ID']==$id){
                        unset($_SESSION['Wishlist'][$i]);
                        echo "<script> Elemento eliminado. </script>";

                    }
                }
            }
            break;*/
    }
   
    
