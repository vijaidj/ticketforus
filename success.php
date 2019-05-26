<?php
include 'header.php';
include 'config.php';
require_once 'controller/connect.php';
require_once 'controller/functions.php';


if (isset($_POST["txn_id"]) && isset($_POST["txn_type"])) {
    
    $order_info = getTicketInfo($_POST['invoice'])[0];
	$enc_id = encrypt_decrypt('encrypt',$order_info['id']);
	$evedetails=getEventListByID($order_info['event_id']);
	if($order_info['payment_status'] != 1){
		$status = 1;	
		$summary = json_encode($_POST);
	   $stmt = $con->prepare("UPDATE orders SET payment_status = ?, 
		   payment_details = ?, 
		   paid_amount = ?
		   WHERE id = ?");
		$stmt->bind_param('isdi',
		   $status,
		   $summary,
		   $_POST['mc_gross'],
		   $_POST['invoice']);
		$stmt->execute(); 
		$stmt->close();
	
	$email_template ='<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
							Ticket For Us
                                <!-- <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;"> -->
                            </td>
                            
                            <td style="text-align:left">
                                Invoice #: '.$order_info['id'].'<br>
                                Created: '.date('M d, Y',strtotime($order_info['created_on'])).'<br>
                                Due: '.date('d-m-Y h:i a',strtotime($evedetails['date'].' '.$evedetails['time'])).'
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td colspan="2">
                                Gateway house<br>
                                4 Piccadilly <br>
                                Manchester, UK <br>
                                M1 2GH  <br>
                                Ph. 00447452306463
                            </td>
                            
                            <!-- <td> -->
                                <!-- Acme Corp.<br> -->
                                <!-- John Doe<br> -->
                                <!-- john@example.com -->
                            <!-- </td> -->
                        </tr>
                    </table>
                </td>
            </tr>
            
            
            
            <tr class="heading">
                <td colspan="2" style="text-align:center;">
                   Customer details
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Name
                </td>
                
                <td>
                    '.$order_info['first_name'].'
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Phone Number
                </td>
                
                <td>
                    '.$order_info['phone_number'].'
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Email
                </td>
                
                <td>
                    '.$order_info['emailid'].'
                </td>
            </tr>
			<tr class="item">
                <td>
                   Address
                </td>
                
                <td>
                    '.$order_info['address'].'
                </td>
            </tr>
			<tr class="item">
                <td>
                 Country
                </td>
                
                <td>
                    '.$order_info['country'].'
                </td>
            </tr>
            <tr class="item">
                <td>
                 Province
                </td>
                
                <td>
                    '.$order_info['province'].'
                </td>
            </tr>
            <tr class="item">
                <td>
                   City / Town
                </td>
                
                <td>
                    '.$order_info['city'].'
                </td>
            </tr>
			<tr class="item">
                <td>
                   Zip Code
                </td>
                
                <td>
                    '.$order_info['zipcode'].'
                </td>
            </tr>
        </table>
    </div>
</body>
</html>';

	
	
	
	
	
	
$invoice_template = '<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
							Ticket For Us
                                <!-- <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;"> -->
                            </td>
                            
                            <td style="text-align:left">
                                Invoice #: '.$order_info['id'].'<br>
                                Created: '.date('M d, Y',strtotime($order_info['created_on'])).'<br>
								Due: '.date('d-m-Y h:i a',strtotime($evedetails['date'].' '.$evedetails['time'])).'
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td colspan="2">
                                Gateway house<br>
                                4 Piccadilly <br>
                                Manchester, UK <br>
                                M1 2GH  <br>
                                Ph. 00447452306463
                            </td>
                            
                            <!-- <td> -->
                                <!-- Acme Corp.<br> -->
                                <!-- John Doe<br> -->
                                <!-- john@example.com -->
                            <!-- </td> -->
                        </tr>
                    </table>
                </td>
            </tr>
            
            
            
            <tr class="heading">
                <td >
                   Item
                </td>
				 <td style="text-align:right">
                   Amount
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    '.$_POST['item_name'].'
                </td>
                
                <td style="text-align:right">
                    '.$_POST['quantity'].' x '.$order_info['product_cost'].' = '.$order_info['order_total'].'
					
                </td>
            </tr>            
            
            <!--
            <tr class="item last">
                <td>
                    Domain name (1 year)
                </td>
                
                <td>
                    $10.00
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: $385.00
                </td>
            </tr>-->
        </table>
    </div>
</body>
</html>';	


// sendMail('rajmoorthy91@gmail.com','Customer details - '.'#'.$order_info['id'],$email_template);

// sendMail('rajmoorthy91@gmail.com','Ticket booked successfully - '.'#'.$order_info['id'],$invoice_template);
// sendMail($order_info['emailid'],'Ticket booked successfully - '.'#'.$order_info['id'],$invoice_template);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.EMAIL_ADDRESS."\r\n".
    'Reply-To: '.EMAIL_ADDRESS."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
mail('rajmoorthy91@gmail.com','Customer details - '.'#'.$order_info['id'],$email_template,$headers);

mail('rajmoorthy91@gmail.com','Ticket booked successfully - '.'#'.$order_info['id'],$invoice_template,$headers);
mail($order_info['emailid'],'Ticket booked successfully - '.'#'.$order_info['id'],$invoice_template,$headers);

	}
	
	header('Location: '.APP_URL.'/successfull.php?ord='.$enc_id);
} else {
    echo "Page not found";
}