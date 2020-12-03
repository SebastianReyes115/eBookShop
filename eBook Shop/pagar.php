<?php
include 'carrito.php';
include 'cabecera.php';
?>

<?php
    if($_POST){
        $total=0;
        $sid=session_id();
        $correo=$_POST['email'];
        foreach($_SESSION['Cart'] as $indice=>$fila){

            $total=$total+$fila['Precio']*$fila['Cantidad'];

        }
    }
    


?>
<br>
<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AUggwLmjr5KZnRc4CJU1G6MVlo-JkBevjud8Wk9jabcO8Mouj4Wk8onSi5WC-V8n_8f5RTH2-KNtqnWE"></script>
<div class="jumbotron text-center">
  <h1 class="display-4">! Ya casi !</h1>
  <p class="lead">La transacción se finalizará al pagar la cantidad de: </p>
  <h4>$<?php echo number_format($total,2);?></h4>
  <hr class="my-4">
  <p>Al finalizar la compra mediante Paypal, los productos ya estarán disponibles para su descarga.</p>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div></div>

<!DOCTYPE html>



<body>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?php echo$total;?>
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Compra completada! ' + details.payer.name.given_name + '!');
                    window.location="verificador.php?id="+details.id;
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>
    

<?php

include 'pie.php';
?>