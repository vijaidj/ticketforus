<?php 
include 'header.php';
include 'controller/functions.php';

$evt_id = 1;
$prd_id = 1;
$prd_qty = 2;

$eventInfo = getEventList($evt_id);
$rowInfo = getAllInfo($prd_id);

$product_cost = $rowInfo['price'];
$order_cost = ($prd_qty * $product_cost);



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
            <a href="javascript:void(0)" title="Logo" class="logo link scroll">
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
      <div class="col-md-8">
        <form class="form_des">
          <div class="title_form">
            <h4>SHIPPING ADDRESS</h4>
            <span>Please fill your shipping address</span>
          </div>
          <br>
        <div class="col-md-6 pull-left">
          <div class="form-group">
            <label for="cus_country">Select Country</label>
            <select class="form-control" name="cus_country" id="cus_country">
              <option value="Spain">Spain</option>
              <option value="Spain">Spain</option>
              <option value="Spain">Spain</option>
              <option value="Spain">Spain</option>
            </select>
          </div>
        </div>
        <input type="text" name="evt_id" id="evt_id"  class="form-control" value="<?=$evt_id?>">
        <input type="text" name="prd_id" id="prd_id"  class="form-control" value="<?=$prd_id?>">
        <input type="text" name="prd_qty" id="prd_qty"  class="form-control" value="<?=$prd_qty?>">
        <div class="col-md-6 pull-left">
          <div class="form-group">
            <label for="cus_firstname">Name</label>
            <input type="text" name="cus_firstname" id="cus_firstname"  class="form-control" placeholder="Name">
          </div>
        </div>
        <div class="col-md-12 pull-left">
          <div class="form-group">
            <label for="cus_address">Address</label>
            <input type="text" name="cus_address" id="cus_address" class="form-control" placeholder="Address">
          </div>
        </div>
        <div class="col-md-6 pull-left">
          <div class="form-group">
            <label for="cus_zipcode">Zip Code</label>
            <input type="text" name="cus_zipcode" id="cus_zipcode" class="form-control" placeholder="Zip Code">
          </div>
        </div>
        <div class="col-md-6 pull-left">
          <div class="form-group">
            <label for="cus_city">City / Town</label>
            <input type="text" name="cus_city" id="cus_city" class="form-control" placeholder="City / Town">
          </div>
        </div>
        <div class="col-md-12 pull-left">
          <div class="form-group">
            <label for="cus_province">Province</label>
            <input type="text" name="cus_province" id="cus_province" class="form-control" placeholder="Province">
          </div>
        </div>
        <div class="col-md-6 pull-left">
          <div class="form-group">
            <label for="cus_phonenumber">Phone Number</label>
            <input type="text" name="cus_phonenumber" id="cus_phonenumber" class="form-control" placeholder="xxx x xxx xxxx">
          </div>
        </div>
        <div class="col-md-6 pull-left">
          <div class="form-group">
            <label for="cus_email">Your Email</label>
            <input type="text" name="cus_email" id="cus_email" class="form-control" placeholder="Enter your Email">
          </div>
        </div>
        <div class="col-md-12 pull-left">
          <div class="form-group">
            <input type='checkbox' name="privacy_policy" id="privacy_policy">
            <label for="privacy_policy">I agree to <a href="javascript:void(0)" target="_blank">Terms and Conditions</a> / <a href="javascript:void(0)" target="_blank">Privacy Policy</a> *</label>
          </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="col-md-12 text-center">
          <button type="button" class="btn btn-primary btn_submit">Continue</button>
        </div>
      </form>
      </div>
      <div class="col-md-4 secound_form text-left">
        <div class="title_form">
          <h4>Cart Price Breakdown</h4>
        </div>
        <div class="col-md-12 text-left secound_sa">
          <div class="first_list">
            <div class="col-md-3 col-xs-3 pull-left new_right">
              Event
            </div>
            <div class="col-md-9 col-xs-9 pull-right new_left">
              <?=$eventInfo['eventname']?>
            </div>
          </div>
          <div class="first_list">
            <div class="col-md-3 col-xs-3 pull-left new_right">
              Date
            </div>
            <div class="col-md-9 col-xs-9 pull-right new_left">
            <?php echo date('d-m-Y h:i a',strtotime($eventInfo['date'].' '.$eventInfo['time'])); ?>
            </div>
          </div>
          <div class="first_list">
            <div class="col-md-3 col-xs-3 pull-left new_right">
              Category
            </div>
            <div class="col-md-9 col-xs-9 pull-right new_left">
              <?=$rowInfo['categoryname']?>
            </div>
          </div>
          <div class="first_list">
            <div class="col-md-3 col-xs-3 pull-left new_right">
              Quantity
            </div>
            <div class="col-md-9 col-xs-9 pull-right new_left">
              <?=$prd_qty?>
            </div>
          </div>
          <div class="first_list">
            <div class="col-md-3 col-xs-3 pull-left new_right">
              Price
            </div>
            <div class="col-md-9 col-xs-9 pull-right new_left">
              £<?=$product_cost?>
            </div>
          </div>
          <div class="first_list">
            <div class="col-md-3 col-xs-3 pull-left new_right">
              Booking
            </div>
            <div class="col-md-9 col-xs-9 pull-right new_left">
            £<?=$order_cost?>
            </div>
          </div>

          <div class="clearfix">
          </div>
        </div>
        <br>
        <div class="title_form">
          <h4>We Guarantee</h4>
        </div>
        <div class="col-md-12 text-center">
          <img src="img/pay_1.png" alt="Payment" class="payGuarantee" >
        </div>
        <ul>
          <li><i class="fa fa-check-circle"></i> Express Delivery</li>
          <li><i class="fa fa-check-circle"></i> 85000+ Satisfied Customers</li>
          <li><i class="fa fa-check-circle"></i> Best Prices On Market</li>
          <li><i class="fa fa-check-circle"></i> 100% Money Back Guarantee</li>
          <li><i class="fa fa-check-circle"></i> Live Chat & Customer Service</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php 
include 'footer.php';
?>