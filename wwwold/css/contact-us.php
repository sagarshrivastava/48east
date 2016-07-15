<?php include('include/header.php'); ?>

<!-- Google Map CSS 08-03-2014 -->
<style type="text/css">
*{ padding:0; margin:0; }
#map_div{
	width:100%;
	height:300px;
	border:6px solid #F4F4F4;
	margin:0 auto 0 auto;
}
body{overflow-x:hidden;}

</style>
<!-- Google Map CSS End -->
<!-- Google Map JavaScript 08-03-2014-->

<script src=" http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="common/js/googleMap.js" type="text/javascript"></script>
<!-- Google Map JavaScript End -->

<!--==============testimonial part start========-->

 
<section class="contactusPage">
<div class="wrapper">
    	<section class="contact_txt">
       
        	<h1>CONTACT US</h1>
            <p>We're here to answer any questions you might have about our custom web solutions.<br>Not quite sure what you need? Give us a call or send us an email.</p>
        </section>
    </div>
<section class="map">
<div style="width: 100%; text-align:center;">
<div style="width: 100%">

<!-- Call Google Map 08-03-2014 -->
<div id="map_div">&nbsp;</div>

<!-- End Call Google Map  -->

<br /><span style="font-size: 9px;"></span></div>


</div>
	<section class="fill_details">
    	<div class="wrapper">
			<div class="enquiry_form">
			<p id="successp"></p>
            	<h3>Enquiry Form</h3>
                
                <p>Please feel free to contact us using the form below:</p>
               <h3 class="success_form"><?php echo $thankMsg ; ?> </h3>
            <mark id="message"></mark>
           <form method="post" action="thanks.php" name="contactform" id="contactform" autocomplete="on">
            	<fieldset>
                	<ul>
                    
                       
                    	<li><input type="text"   placeholder="Name" id="name" name="name" /> </li>
                        <li><input type="email" onkeypress="return EmptyFieldEmail()" placeholder="Email" id="contemail" name="contemail"  /></li>
                        <li><input type="tel" onkeypress="return EmptyFieldPhone()" placeholder="Phone" id="mobile" name="mobile" required="required" /></li>
                        <li><input type="text" placeholder="Your Business Name" id="userBuzName" name="userBuzName"></li>
                        
                        <li>
						<select id="queryPurpose" name="queryPurpose">
						<optgroup>
						<option value="Select Purpose">Select Purpose</option>
						<option value="General Query">General Query</option>
                        <option value="General Query">Your Conversion Query</option>
						<option value="Site Feedback">Website Feedback</option>
						</optgroup>
						</select>
						</li>
                        <li><textarea placeholder="Message"  onkeypress="return EmptyFieldMsg()" id="msg" name="msg" ></textarea></li>
                       <li>
				    <span>Captcha:</span>
                    <p id="ccp"><p><input   type="hidden" id="cccode"/><a id="change-image" style="float:left;margin:5px 5px;padding:5px 0 0 15px;" onclick="return changetxt()" href="javascript:void(0)"><img width="20" height="20" src="captcha/1394291580_arrow-refresh.png"></a>
					 <input id="capinput" placeholder="Enter Code" onkeypress="return cccodes()" name="fromend" style="width:64%;margin-left:6%;"/>
                     
                  </li>                       
                       <li style="border-bottom: 1px solid #BCBEC0;"></li>
                        <li class="last"><input type="submit" id="submit" name="submit" value="Submit" onclick="return userValidation();"  /></li>
                        
                    </ul>
                </fieldset>
				
            </form>
           
            </div>
            <div class="addressContactUs">
            	<h3>Get In Touch</h3>
                <ul class="corporate_details">
                	<li>
                    	<div class="icon location"></div>
                        <div class="company_address">
                        	<h3>Fast Conversion IT Solutions (P) Ltd.</h3>
                            <ul>
                            	<li>
                                	<h4>Corporate Office</h4>
                                    <p>3148 A, Sector - 57<br/>
                                    Sushant Lok III, Gurgaon<br/>
                                    Haryana - 122001<br/>
                                    India</p>
                                </li>
                                <li class="right">
                                	<h4>Reg. Office</h4>
                                    <p>E-008, Rail Vihar<br/>
                                    Sector-57, Gurgaon<br/>
                                    Haryana -122001<br/>
                                    India</p>
                                </li>
                            </ul>
                        </div>                    
                    </li>
                    <li>
                    	<div class="icon phone"></div>
                        <div class="phone_detail">
                        	<h3>Phone</h3>
                            <p>124-4206881</p>
                        </div>
                        <div class="icon email"></div>
                        <div class="phone_detail">
                        	<h3>E-mail</h3>
                            <a href="mailto:sales@fastconversion.com">sales@fastconversion.com</a>
                        </div>
                        
                        
                        
                    </li>
                    <li class="end">
                    	<h3>Follow Us</h3>
                        <div class="social_icon">
                        
                        	<a target="_blank" class="facebook" href="https://www.facebook.com/F.Conversion"></a>
                            <a target="_blank" class="twitter" href="https://twitter.com/Fastconversion"></a>
                            <a target="_blank" class="google" href="https://plus.google.com/+Fastconversion"></a>
                            <a  target="_blank" class="blog" href="http://in.linkedin.com/pub/fast-conversion/7a/b82/5b7"></a>
                        </div>
                    </li>
                </ul>
            </div>
   		</div>
    </section>
</section>
<section class="working_hour">
	<div class="wrapper">
    	<section class="working_details">
          
             
   		</section>
    </div>
</section>

</section>
<?php include('include/footer.php'); ?>
  <!--=============footer part start=============-->
<style>

</style>  

 
<script>
function userValidation()
{
	var uemail = jQuery('#contemail').val();
	var umobile = jQuery('#mobile').val();
	var umsg = jQuery('#msg').val();
	var emailfilter1=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
    var email1=emailfilter1.test(uemail);
    if(email1==false || uemail=='Email' || uemail=='')
    {
     jQuery('#contemail').css('border-bottom', '2px solid red');
	 jQuery('#contemail').focus();
	 return false;
    }
	if(umobile=='' || umobile=='Phone')
	{
     jQuery('#mobile').css('border-bottom', '2px solid red');
	 jQuery('#mobile').focus();
	 return false;
	}
	
	if(umsg=='' || umsg=='Message')
	{
     jQuery('#msg').css('border-bottom', '2px solid red');
	 jQuery('#msg').focus();
	 return false;
	}
	
	if($('#capinput').val()=='' || $('#capinput').val()!=$('#cccode').val())
	{
    $('#capinput').css('border-bottom', '2px solid red');
	 $('#capinput').focus();
	 return false;
	}
	
	return true;
}
</script>
<script>
jQuery(document).ready(function(){
		

	jQuery.ajax({
		url: "captcha/ajax.php?action=cgenerate",
     
         success: function(output) {

			jQuery('#ccp').html(output);
			jQuery('#cccode').val(output);
		
		 }
	});
	
	});
function changetxt()
{
	jQuery.ajax({
		url: "captcha/ajax.php?action=cgenerate",
     
         success: function(output) {

			jQuery('#ccp').html(output);
			jQuery('#cccode').val(output);
		
		 }
	});
}
				  
				  </script>
				  
 <script>

function EmptyFieldEmail() { $('#contemail').css('border-bottom', '2px solid #C2C2C2'); }
function EmptyFieldPhone() { $('#mobile').css('border-bottom', '2px solid #C2C2C2'); }
function EmptyFieldMsg() { $('#msg').css('border-bottom', '2px solid #C2C2C2'); }
function EmptyCaptchaInput() { $('#capinput').css('border-bottom', '2px solid #C2C2C2'); }

</script>
