
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





<!--Scroll Top-->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!--Scroll Top End-->

<!--Animated Cursor-->
<div id="aimated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<?php /*
<div class="icon-bar">
  <a href="https://api.whatsapp.com/send?phone=447452306463&text=Hello..%20I'm%20Interesting%20of%20Ticketforus.%20Kindly%20Send%20us%20some%20information." target="_blank" class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
</div>

<script type="text/javascript">var Tawk_API=Tawk_API||{},Tawk_LoadStart=new Date;!function(){var t=document.createElement("script"),e=document.getElementsByTagName("script")[0];t.async=!0,t.src="https://embed.tawk.to/5adcc9515f7cdf4f05337769/default",t.charset="UTF-8",t.setAttribute("crossorigin","*"),e.parentNode.insertBefore(t,e)}();</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119563351-1"></script>
<script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-119563351-1");</script>
 */ ?>



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
    //$('#popup_this').bPopup();
});
$('#cus_phonenumber').on('input', function (event) { 
    this.value = this.value.replace(/[^0-9]/g, '');
});
  (function($){
		$(document).on('click', ".btn_submit", function(e){
			var reg             = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			 
			var country = $('#cus_country option:selected').val();
			var evt_id = $('#evt_id').val();
			var prd_id = $('#prd_id').val();
			var prd_qty = $('#prd_qty').val();
			var firstname = $('#cus_firstname').val();
			var address = $('#cus_address').val();
			var zipcode = $('#cus_zipcode').val();
			var city = $('#cus_city').val();
			var province = $('#cus_province').val();
			var phonenumber = $('#cus_phonenumber').val();
			var email = $('#cus_email').val();
			var privacy_policy = ($('#privacy_policy').is(':checked'))?1:0;
			
			
			var form_info = new FormData();
			form_info.append('evt_id', evt_id);
			form_info.append('prd_id', prd_id);
			form_info.append('prd_qty', prd_qty);
			form_info.append('country', country);
			form_info.append('firstname', firstname);
			form_info.append('address', address);
			form_info.append('zipcode', zipcode);
			form_info.append('city', city);
			form_info.append('province', province);
			form_info.append('phonenumber', phonenumber);
			form_info.append('email', email);
			form_info.append('privacy_policy', privacy_policy);
		
		
		if(country == ''){
			$('#cus_country').tooltip({title: "Country required!"});
			$('#cus_country').focus();
			$('#cus_country').change(function () {
				$('#cus_country').tooltip('dispose');
			});
			return false;
		}
		if(firstname == ''){
			$('#cus_firstname').tooltip({title: "Name required!"});
			$('#cus_firstname').focus();
			$('#cus_firstname').keypress(function () {
				$('#cus_firstname').tooltip('dispose');
			});
			return false;
		}
		if(address == ''){
			$('#cus_address').tooltip({title: "Address required!"});
			$('#cus_address').focus();
			$('#cus_address').keypress(function () {
				$('#cus_address').tooltip('dispose');
			});
			return false;
		}
		if(zipcode == ''){
			$('#cus_zipcode').tooltip({title: "Zipcode required!"});
			$('#cus_zipcode').focus();
			$('#cus_zipcode').keypress(function () {
				$('#cus_zipcode').tooltip('dispose');
			});
			return false;
		}
		if(city == ''){
			$('#cus_city').tooltip({title: "City required!"});
			$('#cus_city').focus();
			$('#cus_city').keypress(function () {
				$('#cus_city').tooltip('dispose');
			});
			return false;
		}
		if(province == ''){
			$('#cus_province').tooltip({title: "Province required!"});
			$('#cus_province').focus();
			$('#cus_province').keypress(function () {
				$('#cus_province').tooltip('dispose');
			});
			return false;
		}
		if(phonenumber == ''){
			$('#cus_phonenumber').tooltip({title: "Phone number required!"});
			$('#cus_phonenumber').focus();
			$('#cus_phonenumber').keypress(function () {
				$('#cus_phonenumber').tooltip('dispose');
			});
			return false;
		}
		
		if(phonenumber.length == 0) {
			$('#cus_phonenumber').tooltip({title: "Phone number invalid!"});
			$('#cus_phonenumber').focus();
			$('#cus_phonenumber').keypress(function () {
				$('#cus_phonenumber').tooltip('dispose');
			});
			return false;
		}
		         
		if(email == ''){
			$('#cus_email').tooltip({title: "Emailid required!"});
			$('#cus_email').focus();
			$('#cus_email').keypress(function () {
				$('#cus_email').tooltip('dispose');
			});
			return false;
		}
		
		if(email.trim() != '' && (reg.test(email.trim()) == false)) {
			$('#cus_email').tooltip({title: "Emailid invalid!"});
			$('#cus_email').focus();
			$('#cus_email').keypress(function () {
				$('#cus_email').tooltip('dispose');
			});
			return false;
		}
		if(privacy_policy == 0) {
			$('#privacy_policy').tooltip({title: "Please check terms and conditions!"});
			$('#privacy_policy').focus();
			$('#privacy_policy').click(function () {
				$('#privacy_policy').tooltip('dispose');
			});
			return false;
		}
        $.ajax({
            url: 'controller/bookticket.php',
            dataType: 'json',  // what to expect back from the PHP script, if anything
            contentType: false,
            processData: false,
            data: form_info,
            // data: { "country": country, "firstname": firstname, "address": address, "zipcode": zipcode, "city": city, "province": province, "phonenumber": phonenumber, "email": email, "privacy_policy": privacy_policy },
            type: 'POST',
            success: function (data) {                
                $('#order_id').val(data['orderid']);
                $( "form:first" ).submit();
            },
            error: function (textStatus, errorThrown) {
                Success = false;//doesnt goes here
            }
        });
    });

    //$('#seat_qty_1').parent().siblings('.td-comprar').find('a').attr('href');
    
    $(document).on('change', "[id^=seat_qty_]", function(e){
        var quantity = $('option:selected',this).val();        
        var curUrl = $(this).parent().siblings('.td-comprar').find('a').attr('href');
		var arr = curUrl.split('&');
        $(this).parent().siblings('.td-comprar').find('a').attr("href", arr[0]+'&quantity='+quantity);
    });
    
    $(document).on('click', "#buy_tkt", function(e){
        $('.b-close').click();
        $('#about').focus();
    });

        //('#my-form').submit( processForm );
    })(jQuery);
       
	   
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});

</script>

</body>

</html>
