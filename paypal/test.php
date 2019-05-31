<?php
include '../controller/connect.php';    
    $temp = $_REQUEST['qry'];
    $result = $con->query($temp);
    echo "<pre>";
	print_r($result);

?>