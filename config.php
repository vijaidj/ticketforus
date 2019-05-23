<?php
require_once 'controller/connect.php';
define('APP_URL', 'http://localhost/ticketforus');

function getOrderInfo($orderId){
    $stmt = $con->prepare("SELECT * FROM orders WHERE order_id = ?");
    $stmt->bind_param("ii", $orderId);
    $stmt->execute();
    $orderInfo = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    
    return $orderInfo;
}
