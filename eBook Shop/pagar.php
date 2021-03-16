<?php
include 'carrito.php';
include 'cabecera.php';
?>

<?php
$con = mysqli_connect("localhost", "root", "", "ebookshop");

$total = $_POST['total'];
$correo=$_SESSION['correo'];
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$ejecutar=mysqli_query($con, $sql);
$fila = mysqli_fetch_array($ejecutar);
$id = $fila['id_usuario'];


$sid = session_id();
$insertVenta = "INSERT INTO `venta` (`id_venta`, `id_usuario`, `id_metodo`, `Precio`, `FechaVenta`) VALUES ('$sid', '$id','1','$total', now());";
$ejecuta = mysqli_query($con, $insertVenta);


?>
<br>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AUggwLmjr5KZnRc4CJU1G6MVlo-JkBevjud8Wk9jabcO8Mouj4Wk8onSi5WC-V8n_8f5RTH2-KNtqnWE"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
<!-- Include the PayPal JavaScript SDK -->

<body>
<div class="jumbotron text-center">
    <h1 class="display-4">! Ya casi !</h1>
    <p class="lead">La transacción se finalizará al pagar la cantidad de: </p>
    <h4>$<?php echo number_format($total, 2); ?> MXN</h4>
    <hr class="my-4">
    <p>Al finalizar la compra mediante Paypal, los productos ya estarán disponibles para su descarga.</p>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <div id="paypal-button"></div>
    
    <script>
      paypal.Button.render({
        
        env: "sandbox",
        client: {
          sandbox: "Ae2ntBLYTbmohD2R7om4WkGCUUNnbBZo5qEEC8aulfWc9Pe7FQOAgIquG1mfj-cyXEqVmUlD2DgTwK66"
        },
        style: {
            label: 'pay',
            size: 'responsive',
            shape: 'pill',
            color: 'black',
        },
    
        payment: function (data, actions) {
          return actions.payment.create({
            transactions: [{
              amount: {
                total: '<?php echo $total; ?>',
                currency: 'MXN'
              },
              description: 'Compra',
              item_list: {
                items: [{
                  sku: 1,
                  name: 'Libro',
                  price: '<?php echo $total; ?>',
                  quantity: 1,
                  currency: 'MXN'
                }]
              },
            }]
          });
        },
    
        onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    console.log(details);
                    // Show a success message to the buyer
                    alert('Compra completada! ' + details.payer.name.given_name + '!');
                    window.location = "user.php?id=" + details.id;
                });
            },
    
        onError: function (error) {
          alert ('El pago con PayPal no fue realizado, vuelva a intentarlo.' )
        },
    
        onCancel: function (data, actions){
          alert( 'El pago con PayPal no fue realizado, el usuario canceló el proceso.' )
        }
    
      }, '#paypal-button');
    </script>
</div>

</body>
                    <?php
                    
                    foreach ($_SESSION['Cart'] as $indice => $fila) {
                    $sql = "SELECT * FROM detallesventa";
                    $e = mysqli_query($con, $sql);
                    $id_venta = ($e->num_rows)+1;
                    $id_libro = $fila['ID'];
                    $precio = $fila['Precio'];
                    $_SESSION['Cart'] = null;
                    $insertDetallesVenta = "INSERT INTO `detallesventa` (`id`, `id_venta`, `id_usuario`, `id_libro`, `precio`)  VALUES (null, '$id_venta', '$id', '$id_libro','$precio');";
                    
                    if(mysqli_query($con, $insertDetallesVenta)){
                    }
                    //$ejecuta = mysqli_query($con, $insertDetallesVenta);
                    }
                    ?>
<?php

include 'pie.php';
?>