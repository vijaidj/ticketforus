<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Ticket For Us</title>
    <!-- Favicon -->

    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/client.css">
    <!-- Style Customizer's stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/style-customizer.css">
    <link rel="stylesheet" type="text/css" href="https://www.hashtaggme.com/demo/ticketforus/less/skin.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">
<?php
include 'controller/connect.php';
$ground_id = 1;
$status = 1;
$stmt = $con->prepare("SELECT * FROM categories WHERE ground_id = ? AND status = ?");
$stmt->bind_param("ii", $ground_id, $status);
$stmt->execute();
$categories = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>
<!--Loader Start-->
<div class="loader">
    <div class="loader-inner">
      <img src="img/logo.svg" alt="logo" class="img-responsive">
    </div>
</div>

<!--Loader End-->

<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon">
        <div class="container">
            <a href="javascript:void(0)" title="Logo" class="logo link scroll">
                <!--Logo Default-->
                <img src="img/logo.svg" alt="logo" class="logo-dark default">
            </a>

            <!--Nav Links-->
            <!-- <div class="collapse navbar-collapse" id="wexim">
                <div class="navbar-nav ml-auto">
                        <a class="nav-link link scroll" href="#home">Home</a>
                        <a class="nav-link link scroll" href="#about">Book Tickets</a>
                        <a class="nav-link link scroll" href="#team">Payment</a>
                        <a class="nav-link link scroll" href="#Sponsors">Sponsors</a>
                    <span class="menu-line"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </div>
            </div> -->

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

<!--slider-->
<section id="home" class="cursor-light p-0">
    <h2 class="d-none">hidden</h2>
    <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="wexim_slider_01" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_19_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->

                <li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                  <div class="gradient-bg1 bg-overlay opacity-9 z-index-1"></div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-92-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','3']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','7','7','-32']"
                         data-fontsize="['30','30','25','20']"
                         data-fontweight="['600','600','600','500']"
                         data-letterspacing="['4','0','0','2']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":240,"speed":900,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="text-align: center;z-index: 5; white-space: nowrap; font-size: 30px; line-height: 35px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Champions League Tickets </div>


                    <!-- MAIN IMAGE -->
                    <img src="img/slider-image1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="gradient-bg1 bg-overlay opacity-9 z-index-1"></div>

                  <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['170','170','170','95']"
                         data-fontsize="['20','20','16','16']"
                         data-width="['601','530','601','450']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2300,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 9; letter-spacing: .5px;">

                         <div class="commands">
                           <div class="command">
                             <div class="logo">
                               <img src="img/team_1.png" alt="team">
                             </div>
                           </div>
                         </div>

                         <a class="Buy_Tickets btn btn-large btn-rounded btn-transparent-white" href="#about">Buy Tickets</a></div>

                </li>

                <!-- SLIDE  -->
                <li data-index="rs-2" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="img/slider-image2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="gradient-bg1 bg-overlay opacity-9 z-index-1"></div>
                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['200','200','200','140']"
                         data-fontsize="['20','20','16','16']"
                         data-width="['601','530','601','450']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2300,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 9; letter-spacing: .5px;"><a class="Buy_Tickets btn btn-large btn-rounded btn-transparent-white" href="#about">Buy Tickets</a></div>

                </li>

                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="img/slider-image3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="gradient-bg1 bg-overlay opacity-9 z-index-1"></div>

                    <div class="tp-caption   tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['200','200','200','140']"
                         data-fontsize="['20','20','16','16']"
                         data-width="['601','530','601','450']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2300,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 9; letter-spacing: .5px;"><a class="Buy_Tickets btn btn-large btn-rounded btn-transparent-white" href="#about">Buy Tickets</a></div>
                </li>
            </ul>
    </div>
    </div>

    <div class="slider-social">
        <ul class="list-unstyled">
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    <!--scroll down-->
    <a href="#about" class="scroll-down link scroll">Scroll Down <i class="fa fa-long-arrow-down"></i></a>

</section>
<!--slider end-->

<!--About Start-->
<section id="about">
    <div class="container">
        <!--About-->
        <div class="row align-items-center wow fadeIn">
            <div class="col-md-5">
                <img src="img/stadium.jpg" alt="">
            </div>
            <div class="col-md-7 mb-4">
              <table id="tabla_entradas" class="lst-tickets striped lst-urMessages-SoldOut" data-qa="ticket-list" style="display: table;">
                 <thead>
                    <tr>
                       <th class="td-localidad">Location</th>
                       <th class="td-disponibles">Available</th>
                       <th class="td-precio hide-phone">
                          Price Per Ticket
                          <span class="th-extraTxt">Pay in up to 12 installments</span>
                       </th>
                       <th class="td-comprar">
                          <span class="only-phone">Price Per Ticket</span>
                       </th>
                    </tr>
                 </thead>
                 <tbody>
                     <?php
                     foreach($categories as $key => $val){
                         echo '<tr class="entradaRow cat4" id="1459632278" data-qa="ticket-list-item" data-tipoentradaid="3923048" data-sector="" data-disponibles="2" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="5625.96" data-gtm-quantity-filter="" data-gtm-listing-id="1459632278" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                         <td class="td-localidad tabel_1">
                            <span class="info-icons pull-right">
                            </span>
                            <span class="tit-evento">'.$val['category_name'].'</span>
                            <span class="posicion">
                            <span class="asiento" data-qa="ticket-row">Row: 78</span>
                            </span>
                         </td>
                         <td class="td-disponibles">
                            2
                         </td>
                         <td class="td-precio hide-phone">
                            <span class="hide-phone">
                            <strong data-qa="ticket-list-price">'.$val['ticket_price'].'</strong>
                            </span>
                            <span data-qa="ticket-list-finalprice" class="hide-phone">
                            '.$val['ticket_price'].'
                            <br>
                            </span>
                         </td>
                         <td class="td-comprar">
                            <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                            <span class="only-phone">
                            <span itemprop="price">'.$val['ticket_price'].'</span>
                            </span>
                            <span class="hide-phone">Buy</span>
                            </a>
                         </td>
                      </tr>';
                     }
                     ?>
                    <tr class="entradaRow cat4" id="1459632278" data-qa="ticket-list-item" data-tipoentradaid="3923048" data-sector="" data-disponibles="2" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="5625.96" data-gtm-quantity-filter="" data-gtm-listing-id="1459632278" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                       <td class="td-localidad tabel_1">
                          <span class="info-icons pull-right">
                          </span>
                          <span class="tit-evento">Category 4</span>
                          <span class="posicion">
                          <span class="asiento" data-qa="ticket-row">Row: .</span>
                          </span>
                       </td>
                       <td class="td-disponibles">
                          2
                       </td>
                       <td class="td-precio hide-phone">
                          <span class="hide-phone">
                          <strong data-qa="ticket-list-price">AED17,220</strong>
                          </span>
                          <span data-qa="ticket-list-finalprice" class="hide-phone">
                          $4,688.30
                          <br>
                          </span>
                       </td>
                       <td class="td-comprar">
                          <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                          <span class="only-phone">
                          <span itemprop="price">AED17,220</span>
                          </span>
                          <span class="hide-phone">Buy</span>
                          </a>
                       </td>
                    </tr>
                    <tr class="entradaRow cat3" id="1460986941" data-qa="ticket-list-item" data-tipoentradaid="3923044" data-sector="" data-disponibles="2" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="5567.65" data-gtm-quantity-filter="" data-gtm-listing-id="1460986941" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                       <td class="td-localidad tabel_2">
                          <span class="info-icons pull-right">
                          </span>
                          <span class="tit-evento">Category 3</span>
                          <span class="posicion">
                          <span class="asiento" data-qa="ticket-row">Row: 9</span>
                          </span>
                       </td>
                       <td class="td-disponibles">
                          2
                       </td>
                       <td class="td-precio hide-phone">
                          <span class="hide-phone">
                          <strong data-qa="ticket-list-price">AED17,225</strong>
                          </span>
                          <span data-qa="ticket-list-finalprice" class="hide-phone">
                          $4,689.50
                          <br>
                          </span>
                       </td>
                       <td class="td-comprar">
                          <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                          <span class="only-phone">
                          <span itemprop="price">AED17,225</span>
                          </span>
                          <span class="hide-phone">Buy</span>
                          </a>
                       </td>
                    </tr>
                    <tr class="entradaRow cat3" id="1460998711" data-qa="ticket-list-item" data-tipoentradaid="3923044" data-sector="" data-disponibles="2" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="5710.42" data-gtm-quantity-filter="" data-gtm-listing-id="1460998711" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                       <td class="td-localidad tabel_2">
                          <span class="info-icons pull-right">
                          </span>
                          <span class="tit-evento">Category 3</span>
                          <span class="posicion">
                          <span class="asiento" data-qa="ticket-row">Row: 1</span>
                          </span>
                       </td>
                       <td class="td-disponibles">
                          2
                       </td>
                       <td class="td-precio hide-phone">
                          <span class="hide-phone">
                          <strong data-qa="ticket-list-price">AED17,666</strong>
                          </span>
                          <span data-qa="ticket-list-finalprice" class="hide-phone">
                          $4,809.74
                          <br>
                          </span>
                       </td>
                       <td class="td-comprar">
                          <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                          <span class="only-phone">
                          <span itemprop="price">AED17,666</span>
                          </span>
                          <span class="hide-phone">Buy</span>
                          </a>
                       </td>
                    </tr>
                    <tr class="entradaRow cat3" id="1460780163" data-qa="ticket-list-item" data-tipoentradaid="3923044" data-sector="" data-disponibles="2" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="5957.83" data-gtm-quantity-filter="" data-gtm-listing-id="1460780163" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                       <td class="td-localidad tabel_1">
                          <span class="info-icons pull-right">
                          </span>
                          <span class="tit-evento">Category 3</span>
                          <span class="posicion">
                          <span class="asiento" data-qa="ticket-row">Row: .</span>
                          </span>
                       </td>
                       <td class="td-disponibles">
                          2
                       </td>
                       <td class="td-precio hide-phone">
                          <span class="hide-phone">
                          <strong data-qa="ticket-list-price">AED18,236</strong>
                          </span>
                          <span data-qa="ticket-list-finalprice" class="hide-phone">
                          $4,964.86
                          <br>
                          </span>
                       </td>
                       <td class="td-comprar">
                          <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                          <span class="only-phone">
                          <span itemprop="price">AED18,236</span>
                          </span>
                          <span class="hide-phone">Buy</span>
                          </a>
                       </td>
                    </tr>
                    <tr class="entradaRow cat4" id="1460187359" data-qa="ticket-list-item" data-tipoentradaid="3923048" data-sector="" data-disponibles="1" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="6067.31" data-gtm-quantity-filter="" data-gtm-listing-id="1460187359" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                       <td class="td-localidad tabel_2">
                          <span class="info-icons pull-right">
                          </span>
                          <span class="tit-evento">Category 4</span>
                          <span class="posicion">
                          <span class="asiento" data-qa="ticket-row">Row: -</span>
                          </span>
                       </td>
                       <td class="td-disponibles">
                          1
                       </td>
                       <td class="td-precio hide-phone">
                          <span class="hide-phone">
                          <strong data-qa="ticket-list-price">AED18,770</strong>
                          </span>
                          <span data-qa="ticket-list-finalprice" class="hide-phone">
                          $5,110.35
                          <br>
                          </span>
                       </td>
                       <td class="td-comprar">
                          <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                          <span class="only-phone">
                          <span itemprop="price">AED18,770</span>
                          </span>
                          <span class="hide-phone">Buy</span>
                          </a>
                       </td>
                    </tr>
                    <tr class="entradaRow cat4" id="1460034245" data-qa="ticket-list-item" data-tipoentradaid="3923048" data-sector="" data-disponibles="1" data-instant-delivery="false" data-best-value="" data-details="" data-restrictions="" data-trust="i" data-btn-href="#" data-btn-target="_self" data-gtm-category="click" data-gtm-action="buy_ticket" data-gtm-label="event_listing" data-gtm-ticket-price="6137.27" data-gtm-quantity-filter="" data-gtm-listing-id="1460034245" itemscope="" itemprop="offers" itemtype="#" style="cursor: pointer;">
                       <td class="td-localidad tabel_3">
                          <span class="info-icons pull-right">
                          </span>
                          <span class="tit-evento">Category 4</span>
                          <span class="posicion">
                          <span class="asiento" data-qa="ticket-row">Row: -</span>
                          </span>
                       </td>
                       <td class="td-disponibles">
                          1
                       </td>
                       <td class="td-precio hide-phone">
                          <span class="hide-phone">
                          <strong data-qa="ticket-list-price">AED18,987</strong>
                          </span>
                          <span data-qa="ticket-list-finalprice" class="hide-phone">
                          $5,169.27
                          <br>
                          </span>
                       </td>
                       <td class="td-comprar">
                          <a href="#" target="_self" class="btn btn-success btn-precio" data-qa="ticket-list-buy">
                          <span class="only-phone">
                          <span itemprop="price">AED18,987</span>
                          </span>
                          <span class="hide-phone">Buy</span>
                          </a>
                       </td>
                    </tr>

                 </tbody>
              </table>

                </div>


        </div>
    </div>
</section>
<!--About End-->


<!--Testimonial Start-->


<!--App Section-->

<!--Blog Start-->
<!-- <section id="team" class="bg-light">
    <div class="container">
      <div class="row">
              <div class="col-md-12 text-left">
                  <div class="title d-inline-block">
                    <h2>Payment Method</h2>
                  </div>
              </div>
          </div>


        <div class="row align-items-center mb-5">
            <div class="col-md-12">
              <div class="col-md-5 pull-left">
                <form>
                <div class="form-group">
                <input type="name" class="form-control" placeholder="Your Name*">
                </div>
                <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email*">
                </div>
                <div class="form-group">
                <input type="number" class="form-control" placeholder="Card Number*">
                </div>
                <div class="form-group">
                <input type="name" class="form-control" placeholder="Name On Card*">
                </div>
                <div class="form-group pull-left col-md-5 no-padding">
                  <select class="form-control" id="exampleFormControlSelect2">
                  <option>Month</option>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>
                </select>
                </div>
                <div class="form-group pull-right col-md-5 no-padding">
                  <select class="form-control" id="exampleFormControlSelect2">
                  <option>Year</option>
                  <option>1992</option>
                  <option>1993</option>
                  <option>1994</option>
                  <option>1995</option>
                  <option>1996</option>
                  <option>1997</option>
                  <option>1998</option>
                  <option>1999</option>
                  <option>2000</option>
                  <option>2001</option>
                  <option>2002</option>
                  <option>2003</option>
                </select>
                </div>

                <div class="clearfix">

                  <div class="form-group">
                  <input type="number" class="form-control" placeholder="CCV*">
                  </div>


                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Book Tickets</button>
                </form>
              </div>

              <div class="col-md-6 pull-right pa_tb">
                <img src="img/payment.png" alt="payment">
              </div>

            </div>

        </div>
    </div>
</section> -->
<!--Blog End-->



<section id="Sponsors" >
  <div class="container">
    <div class="row">
            <div class="col-md-12 text-center">
                <div class="title d-inline-block">
                    <h2>Sponsors</h2>
                    </div>
            </div>
        </div>

        <div class="tech-slideshow">
  <div class="mover-1">
    <div class="row">
      <div class="col-md-12">
        <img src="img/home-logo-01.png" alt="">
        <img src="img/home-logo-02.png" alt="">
        <img src="img/home-logo-03.png" alt="">
        <img src="img/home-logo-04.png" alt="">
        <img src="img/home-logo-05.png" alt="">
        <img src="img/home-logo-06.png" alt="">
        <img src="img/home-logo-01.png" alt="">
        <img src="img/home-logo-02.png" alt="">
        <img src="img/home-logo-03.png" alt="">
        <img src="img/home-logo-04.png" alt="">
        <img src="img/home-logo-05.png" alt="">
        <img src="img/home-logo-06.png" alt="">
      </div>
    </div>
  </div>
</div>
  </div>
</section>


<!--Footer Start-->
<section class="text-center pad_0">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/logo.svg" alt="logo" class="logo-dark default">
          </div>
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn">© 2019 Ticket For Us. All Rights Reserved. </p>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->

<div id="popup_this" class="col-md-4 col-xs-12 top-border">
  <span class="b-close">
		<span>X</span>
	</span>
  <div class="bg_popup">
    <h3 class="pop_up">Champions League 2019 Final</h3>
    <span>Wanda Metropolitano</span>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Madrid</p>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1 Jun 2019 - Sat 21:00</p>
  </div>
  <div class="pop_up_title">
    <h3>How many tickets would you like?</h3>
    <span>These will be adjoining tickets</span>
    <div class="table_number">
      <ul>
        <li><a href="#about">1</a></li>
        <li><a href="#about">2</a></li>
        <li><a href="#about">3</a></li>
      </ul>
      <ul>
        <li><a href="#about">4</a></li>
        <li><a href="#about">5</a></li>
        <li><a href="#about">6</a></li>
      </ul>
    </div>
  </div>
</div>



<!--Scroll Top-->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!--Scroll Top End-->

<!--Animated Cursor-->
<div id="aimated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>

<div class="icon-bar">
  <a href="https://api.whatsapp.com/send?phone=447452306463&text=Hello..%20I'm%20Interesting%20of%20Ticketforus.%20Kindly%20Send%20us%20some%20information." target="_blank" class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
</div>


<script type="text/javascript">var Tawk_API=Tawk_API||{},Tawk_LoadStart=new Date;!function(){var t=document.createElement("script"),e=document.getElementsByTagName("script")[0];t.async=!0,t.src="https://embed.tawk.to/5adcc9515f7cdf4f05337769/default",t.charset="UTF-8",t.setAttribute("crossorigin","*"),e.parentNode.insertBefore(t,e)}();</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119563351-1"></script>
<script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-119563351-1");</script>




<!-- Style Customizer End -->

<script src="js/jquery-2.1.4.min.js"></script>


<script src="js/popper.min.js"></script>

<!-- Optional JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotop gallery -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- cube portfolio gallery -->
<script src="js/jquery.cubeportfolio.min.js"></script>
<!-- owl carousel slider -->



<script src="js/owl.carousel.min.js"></script>
<!-- text rotate -->
<script src="js/morphext.min.js"></script>
<!-- particles -->
<script src="js/particles.min.js"></script>
<!-- parallax Background -->
<script src="js/parallaxie.min.js"></script>
<!-- fancybox popup -->
<script src="js/jquery.fancybox.min.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- tween max animation -->
<script src="js/TweenMax.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.carousel.min.js"></script>
<script src="js/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.migration.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<!-- map -->
<script src="js/map.js"></script>
<!-- Color Switcher -->
<script src="js/less.min.js" data-env="development"></script>
<script src="js/style-customizer.js"></script>
<!-- custom script -->
<script src="js/jquery.bpopup.min.js"></script>

<script src="js/script.js"></script>


  <script>
	$( document ).ready(function() {
		$('#popup_this').bPopup();
	});
	</script>

</body>

</html>
