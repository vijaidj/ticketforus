<?php  

include '../header.php';
include '../config.php';
require_once '../controller/connect.php';
require_once '../controller/functions.php';

require_once("../includes/braintree_init.php"); ?>
<html>
<body>

<?php
echo "<pre>";


    if (isset($_GET["id"])) {
        $transaction = $gateway->transaction()->find($_GET["id"]);
print_r($transaction);
        $transactionSuccessStatuses = [
            Braintree\Transaction::AUTHORIZED,
            Braintree\Transaction::AUTHORIZING,
            Braintree\Transaction::SETTLED,
            Braintree\Transaction::SETTLING,
            Braintree\Transaction::SETTLEMENT_CONFIRMED,
            Braintree\Transaction::SETTLEMENT_PENDING,
            Braintree\Transaction::SUBMITTED_FOR_SETTLEMENT
        ];

        if (in_array($transaction->status, $transactionSuccessStatuses)) {
            $header = "Sweet Success!";
            $icon = "success";
            $message = "Your test transaction has been successfully processed. See the Braintree API response and try again.";
        } else {
            $header = "Transaction Failed";
            $icon = "fail";
            $message = "Your test transaction has a status of " . $transaction->status . ". See the Braintree API response and try again.";
        }
    }
?>

