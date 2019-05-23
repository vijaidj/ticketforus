<?php

require_once 'controller/connect.php';
require_once 'controller/functions.php';

if (isset($_POST["txn_id"]) && isset($_POST["txn_type"])) {
    
    $update = "UPDATE orders SET payment_status = 1, payment_details = {$_POST}, paid_amount = {$_POST['total']} WHERE id={$_POST['invoice']}";

    if (!$conn->query($update) === TRUE) {
        //echo "Error updating record: " . $conn->error;  // Email to us
    }
    $stmt->close();
    
} else {
    echo "Page not found";
}