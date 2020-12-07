<?php
include 'carrito.php';
include 'cabecera.php';
?>

<?php

$total = $_POST['total'];
$id = 1;
$sid = session_id();
$con = mysqli_connect("localhost", "root", "", "ebookshop");
$insertVenta = "INSERT INTO `venta` (`id_venta`, `id_usuario`, `id_metodo`, `Precio`, `FechaVenta`) VALUES ('$sid', '$id','1','$total', now());";
$ejecuta = mysqli_query($con, $insertVenta);


?>
<br>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<!-- Include the PayPal JavaScript SDK -->

<div class="jumbotron text-center">
    <h1 class="display-4">! Ya casi !</h1>
    <p class="lead">La transacción se finalizará al pagar la cantidad de: </p>
    <h4>$<?php echo number_format($total, 2); ?> MXN</h4>
    <?php include 'paypalCheckout.php'; ?>
    <hr class="my-4">
    <p>Al finalizar la compra mediante Paypal, los productos ya estarán disponibles para su descarga.</p>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
</div>




<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "ebookshop");
    foreach ($_SESSION['Cart'] as $indice => $fila) {
        $id_libro = $fila['ID'];
        $precio = $fila['Precio'];
        $insertDetallesVenta = "INSERT INTO `detallesventa` (`id`, `id_venta`, `id_usuario`, `id_libro`, `precio`) 
                                    VALUES (null, '$sid', '$id', '$id_libro', '$precio');";
        $ejecuta = mysqli_query($con, $insertDetallesVenta);
        $_SESSION['Cart'] = null;
    }
    ?>
</body>


<?php

include 'pie.php';
?>