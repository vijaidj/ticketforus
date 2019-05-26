<form action="<?php echo APP_URL?>/stripe-payment.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_wosNc22PGHfCAjfT9UJTawqT00NnmVJayT"
    data-name="2 Tickets"
    data-description="Ticket for US"
    data-amount="50.00"
    data-currency="EUR">
  </script>
</form>