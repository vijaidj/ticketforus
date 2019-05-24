<?php
include "functions.php";
//customer requirment
$evt_id = valVar($_POST['evt_id']);
$prd_id = valVar($_POST['prd_id']);
$prd_qty = valVar($_POST['prd_qty']);
$country = valVar($_POST['country']);
$firstname = valVar($_POST['firstname']);
$address = valVar($_POST['address']);
$zipcode = valVar($_POST['zipcode']);
$city = valVar($_POST['city']);
$province = valVar($_POST['province']);
$phonenumber = valVar($_POST['phonenumber']);
$email = valVar($_POST['email']);
$privacy_policy = valVar($_POST['privacy_policy']);
$need_invoice = 1;

//price info from row table
$rowinfo = getSeatrowDetails($prd_id);
$product_cost = $rowinfo['price'];
$order_total = ($prd_qty * $product_cost);
$created_on = date('Y-m-d H:i:s');
$paid_amount = 0.00;
$processing_fee = 0.00;
$created_by = 0;
$modified_by = 0;

$stmt = $con->prepare("INSERT INTO orders (seatrow_id, event_id, quantity, need_invoice, product_cost, order_total, paid_amount, processing_fee, created_on, country, first_name, address, zipcode, city, province, phone_number, emailid, created_by, modified_by ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiiiddddsssssssssii", $prd_id, $evt_id, $prd_qty, $need_invoice, $product_cost, $order_total, $paid_amount, $processing_fee, $created_on, $country, $firstname, $address, $zipcode, $city, $province, $phonenumber, $email, $created_by, $modified_by);
$stmt->execute();
$orderid = $stmt->insert_id;
$stmt->close();
$con->close();
die(json_encode(array('orderid' => $orderid)));

?>