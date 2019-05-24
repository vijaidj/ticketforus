<?php
require_once 'config.php';
require_once 'controller/functions.php';

$orderId = valVar($_POST['order_id']);
$data = getTicketInfo( $orderId )[0];

$paypalConfig = [
    // 'email' => 'rajworldmoorthi-facilitator@gmail.com',
    'email' => 'zerobeginners-seller@gmail.com',
    'return_url' => APP_URL.'success.php',
    'cancel_url' => APP_URL,
    'notify_url' => APP_URL.'notify.php'
];

$enableSandbox = true;
$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

$businessName = 'TicketForUs';
$firstname = $data['first_name'];
$lastname = $data['last_name'];
$email = $data['emailid'];
$address = $data['address'];
$address2 = '';
$city = $data['city'];
$postcode = $data['zipcode'];

$currency = 'USD';
$quantity = $data['quantity'];
$itemName = $data['quantity'].' Ticket';
$invoice_id = $orderId;
$total_order_price = $data['order_total'];
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<form action="<?= $paypalUrl; ?>" method="post" id="paypal_form">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="first_name" value="<?= $firstname;?>">
    <input type="hidden" name="last_name" value="<?= $lastname;?>">
    <input type="hidden" name="email" value="<?= $email;?>">
    <input type="hidden" name="address1" value="<?= $address;?>">
    <input type="hidden" name="address2" value="<?= $address2;?>">
    <input type="hidden" name="city" value="<?= $city;?>">
    <input type="hidden" name="zip" value="<?= $postcode;?>">
    <input type="hidden" name="business" value="<?=$paypalConfig['email']; ?>" />
    <input type="hidden" name="cbt" value="<?= $businessName; ?>" />
    <input type="hidden" name="currency_code" value="<?= $currency; ?>" />
    <input type="hidden" name="quantity" value="<?= $quantity; ?>" />
    <input type="hidden" name="item_name" value="<?= $itemName; ?>" />
    <input type="hidden" name="custom" value="" />

    <input type="hidden" name="invoice" value="<?= $invoice_id ?>" />
    <input type="hidden" name="amount" value="<?= $total_order_price; ?>" />
    <input type="hidden" name="return" value="<?= $paypalConfig['return_url']; ?>"/>
    <input type="hidden" name="cancel_return" value="<?= $paypalConfig['cancel_url']; ?>" />
    <input type="hidden" name="notify_url" value="<?= $paypalConfig['notify_url']; ?>" />
</form>
<script>
$(document).ready(function(){
     $("#paypal_form").submit();
});
</script>