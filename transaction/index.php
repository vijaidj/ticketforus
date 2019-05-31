<?php
require_once '../config.php';
require_once '../controller/functions.php';

$orderId = 2;

require_once("../includes/braintree_init.php"); ?>

<html>
<?php require_once("../includes/head.php"); ?>
<body>

    <div class="wrapper">
        <div class="checkout container">

            <header>
                <h1>Make a payment with a card</h1>
            </header>

            <form method="post" id="payment-form" action="<?php echo $baseUrl;?>checkout.php">
                <section>
                    <label for="amount">
                        <span class="input-label">Amount : $10</span>
                            <input name="amount" type="hidden" min="1" placeholder="Amount" value="10">
                    </label>

                    <div class="bt-drop-in-wrapper">
                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <input id="iod" name="iod" type="hidden" value="<?php echo $orderId; ?>"/>
                <button class="button" type="submit"><span>Submit</span></button>
            </form>
        </div>
    </div>

    <script src="https://js.braintreegateway.com/web/dropin/1.18.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "<?php echo($gateway->ClientToken()->generate()); ?>";

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          
        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
          form.addEventListener('submit', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
              if (err) {
                console.log('Request Payment Method Error', err);
                return;
              }

              // Add the nonce to the form and submit
              document.querySelector('#nonce').value = payload.nonce;
              form.submit();
            });
          });
        });
    </script>
    <script src="javascript/demo.js"></script>
</body>
</html>
