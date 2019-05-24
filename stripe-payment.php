<?php
require_once 'controller/connect.php';
require_once 'controller/functions.php';
require_once ('vendor/autoload.php');

\Stripe\Stripe::setApiKey("sk_test_M1HDKEJxa49h9NXjN1g6qydK00RK9W6AaQ");
 
$token = $_POST['stripeToken'];
 
// Charge the user's card:
$data = \Stripe\Charge::create(array(
  "amount" => 50.00,
  "currency" => "EUR",
  "description" => "Ticket For US",
  "source" => $token,
));

echo "<pre>";
print_r($_POST);
print_r($data);

if($data['paid'] == 1){
    
    $payment_details = json_encode($data);
    $update = "UPDATE orders SET payment_status = 1, payment_details = {$payment_details}, paid_amount = {$data['amount']} WHERE id={$data['invoice']}";
    if (!$conn->query($update) === TRUE) {
        echo "update issue"; 
    }else{
        
    }
    
}else{
    echo "Contact site owner";
}