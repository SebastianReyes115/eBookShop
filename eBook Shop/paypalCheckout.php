<div id="paypal-button-container"></div>
<div id="paypal-button"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
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
          description: 'Compra en Test App',
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
