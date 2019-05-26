<?php 
include_once 'config.php'; 
include_once 'header.php'; 
include_once 'controller/functions.php'; 

$req = isset($_GET['ord'])?$_GET['ord']:'';
$ord_id = encrypt_decrypt('decrypt',$req);
$ordinfo = getTicketInfo($ord_id);
if(count($ordinfo) == 1){

?>
<style media="screen">
      .navbar{
        background: #000;
      }
    </style>
	<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Loader Start-->
<div class="loader">
    <div class="loader-inner">
      <img src="img/logo.svg" alt="logo" class="img-responsive">
    </div>
</div>
<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon">
        <div class="container">
            <a href="<?=APP_URL?>" title="Logo" class="logo link scroll1">
                <!--Logo Default-->
                <img src="img/logo.svg" alt="logo" class="logo-dark default">
            </a>

            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="d-inline-block parallax-btn sidemenu_btn" id="sidemenu_toggle">
                <div class="animated-wrap sidemenu_btn_inner">
                <div class="animated-element">
                        <span></span>
                        <span></span>
                        <span></span>
                </div>
                </div>
            </a>

        </div>
    </nav>







    <!--Side Nav-->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close link" id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link scroll" href="#about">Book Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link scroll" href="#team">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link scroll" href="#Sponsors">Sponsors</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>

                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; 2019 Ticket For Us. All Rights Reserved.</p>

            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->

</header>
<!--Header end-->

<section class="padding_20">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-center float_none">
        <img src="img/success.png" alt="logo" class="img-responsive">
        <h4>Order Successfully Placed</h4>
        <hr>
        <p>Check your email for a booking <br> confirmation We'll save you soon!</p>
        <img src="img/paysecure.png" alt="paysecure" class="img-responsive">
        <hr>
        <img src="img/logo_black.png" alt="logo" class="img-responsive">
        <br>
        <a href="<?php echo APP_URL; ?>" class="buymore_tickets">Buy More Tickets</a>
      </div>
    </div>
  </div>
</section>
<?php include_once 'footer.php';
}
else{
	header('Location: https://zerobeginners.com');
}
 ?>