<?php
include 'connect.php';

function getEventList(){
    global $con;
    $todaye       = date("Y-m-d");
    $current_time = date("h:i:s",time() + 3600);
    $status       = 1;
    $stmt = $con->prepare("SELECT e.id,e.name eventname,e.date,e.time,g.name groundname,g.address FROM event e INNER JOIN ground g ON e.ground_id = g.id WHERE e.date >= ? AND e.time >= ? AND e.status >= ?");
    $stmt->bind_param("ssi", $todaye, $current_time,$status);
    $stmt->execute();
    $events = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
    $stmt->close();
    return $events;
}
function getTicketList(){
    global $con;
    $event_id = 1;
    $status = 1;
    $stmt = $con->prepare("SELECT e.name eventname,e.date,e.time,g.name groundname,g.address,c.name categoryname,s.id rowid,s.name rowname,s.price,s.quantity 
    FROM event e INNER JOIN ground g
        ON e.ground_id = g.id
    INNER JOIN category c
        ON c.ground_id = g.id
    INNER JOIN seatrow s
        ON s.category_id = c.id
     WHERE e.id = ? AND e.status = ?");
    $stmt->bind_param("ii", $event_id, $status);
    $stmt->execute();
    $ticketlist = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $ticketlist;
}
function valVar($value){
    return isset($value)?$value:'';
}
function getSeatrowDetails($rowid=''){
    $rowdetails = array();
    if($rowid != ''){
        global $con;
        $status       = 1;        
        $seatavailability = 1;        
        $stmt = $con->prepare("SELECT price, quantity FROM seatrow WHERE id = ? AND seat_availability = ? AND status >= ?");
        $stmt->bind_param("iii", $rowid, $seatavailability,$status);
        $stmt->execute();
        $rowdetails = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
        $stmt->close();        
    }
    return $rowdetails;
}
function getAllInfo($rowid = ''){
    $allInfo = [];
    if($rowid != ''){
        global $con;        
        $status = 1;
        $stmt = $con->prepare("SELECT e.name eventname,e.date,e.time,g.name groundname,g.address,c.name categoryname,s.id rowid,s.name rowname,s.price,s.quantity 
        FROM event e INNER JOIN ground g
            ON e.ground_id = g.id
        INNER JOIN category c
            ON c.ground_id = g.id
        INNER JOIN seatrow s
            ON s.category_id = c.id
        WHERE s.id = ? AND s.status = ?");
        $stmt->bind_param("ii", $rowid, $status);
        $stmt->execute();
        $allInfo = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
        $stmt->close();
    }
    return $allInfo;
}

function getTicketInfo( $orderId ){
    
    global $con;
    $stmt = $con->prepare("SELECT * FROM orders WHERE order_id = ?");
    $stmt->bind_param("ii", $orderId);
    $stmt->execute();
    $orderInfo = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    
    return $orderInfo;
}

function getSeatAvailablity(){
    
    global $con;
    $stmt = $con->prepare("select r.id, b.quantity, r.quantity, (r.quantity - b.quantity) as result from orders as b, seatrow as r where b.seatrow_id = r.id");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    
    $res = [];
    if(!empty($data)){
        foreach($data as $info){
            $res[$info['id']] = $info;
        }
    }
    return $res;
}

?>