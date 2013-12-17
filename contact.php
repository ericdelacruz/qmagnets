<?php 

@session_start();

 include("admin/includes/include.php"); 
 
if(count($_POST)>0)
{
	$name=isset($_REQUEST['name'])?addslashes($_REQUEST['name']):"";	
	$email=isset($_REQUEST['email'])?addslashes($_REQUEST['email']):"";	
	$phone=isset($_REQUEST['phone'])?addslashes($_REQUEST['phone']):"";	
	$company=isset($_REQUEST['company'])?addslashes($_REQUEST['company']):"";
	$message=isset($_REQUEST['message'])?addslashes($_REQUEST['message']):"";
	$fax=isset($_REQUEST['fax'])?addslashes($_REQUEST['fax']):"";
	$address=isset($_REQUEST['address'])?addslashes($_REQUEST['address']):"";
	
	
	
	
	$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
	//$err=array();



	
		
	//echo  $_SESSION['4_letters_code']; echo strcasecmp($_SESSION['4_letters_code'], $_POST['4_letters_code']);exit;
 	
	 if((!empty($_SESSION['4_letters_code'] ) && strcasecmp($_SESSION['4_letters_code'], $_POST['4_letters_code']) != 0) ) 
	
	{  
		  
		 echo "<script language='Javascript'>window.location.href='$pgnm_c?rdir=3'</script>";
				 exit;
	}
		  
		  else
		  {
		  
			$name=ucfirst($name);
			$msgsub = "Contact";
								
			$msgbody .= " NAME: " .strtoupper($name) . "<br />";		
			
			$msgbody .= "Phone: " . $phone . "<br />";
			$msgbody .= "Email: " . $email . "<br />";	
			$msgbody .= "Company: " . stripslashes($company ). "<br />";
			$msgbody .= "Message: " . stripslashes($message) . "<br />";
			$msgbody .= "Fax: " . stripslashes($fax) . "<br />";	
			$msgbody .= "Address: " . stripslashes($address) . "<br />";
						
			
			
			
			 
			 $to="surajitghosh30@gmail.com";  
			
			
			 
			$from=stripslashes($name)."<".$email.">";
			$headers="From:".$from."\nMIME-Version: 1.0\nContent-Type: text/html; charset=ISO-8859-1\nX-Mailer: PHP \n";
						
			$pgnm_c=$_SERVER['PHP_SELF'];
			
			if (mail($to,$msgsub,$msgbody,$headers))
			{
				
				 echo "<script language='Javascript'>window.location.href='$pgnm_c?rdir=1'</script>";
				 exit;
				
			}
		  }
				
  }

$rdir=isset($_REQUEST['rdir'])?addslashes(trim($_REQUEST['rdir'])):"";
if($rdir==1)
{
	 $disp="Thank you. We will contact you soon."; 
}
if($rdir==2)
{
	$disp="Sorry! Mail Sending Failed! Captcha may be wrong";
}
if($rdir==3)
{
	$disp="Captcha Is Wrong!.";
	 
}
if(isset($err))
{
	$disp=$err;
}
if( strcasecmp($_SESSION['4_letters_code'], $_POST['4_letters_code']) == 0 && count($err)==0)
{
	$disp['Captcha is wrong!'];	
}



?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
if(file_exists("includes/metatags/meta-".basename($_SERVER['PHP_SELF']))) {
	include("includes/metatags/meta-".basename($_SERVER['PHP_SELF'])); 
} else {
	// ONCE META TAG NOT FOUND USE THE DEFAULT TITLE TAG
	echo '<title>Qmagnets</title>';
}
?>
<link href="css/global.css" rel="stylesheet" type="text/css">
<!--====================nav part====================-->
<link href="chrometheme/chromestyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="chromejs/chrome.js"></script>
<!--====================nav part====================-->
<!--====================form part====================
<style type="text/css">
input.styled {
	display: none;
}
select.styled {
	position: relative;
	width: 190px;
	opacity: 0;
	filter: alpha(opacity=0);
	z-index: 5;
}
.disabled {
	opacity: 0.5;
	filter: alpha(opacity=50);
}
</style>
<script type="text/javascript" src="test.htm"></script>
<link rel="stylesheet" href="code.css" media="screen">
<link rel="stylesheet" href="form.css" media="screen">
<style type="text/css">
.third {
	width: 33%;
	float: left;
}
</style>-->
<!--====================form part====================-->
<!--====================banner part====================-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<style type="text/css">
.slideshow1 { height:312px; width:920px; margin:0 !important; padding:0 !important;}
.slideshow1 img { padding: 0px; border:0; background-color: #eee; }
</style>
<!-- include jQuery library -->
<!--<script type="text/javascript" src="./js/jquery.min.js"></script>-->
<!-- include Cycle plugin -->
<script type="text/javascript" src="./js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow1').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>

<script type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

<script type="text/javascript">
function check()
{  
    if(document.getElementById("name").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give your Name';
		document.getElementById("name").style.borderColor='red';
		document.getElementById("name").focus();
		return false;
	}	
	else	{	
		document.getElementById("name").style.borderColor='';
	}
	if(document.getElementById("company").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give Company name';
		document.getElementById("company").style.borderColor='red';
		document.getElementById("company").focus();
		return false;
	}	
	else	{	
		document.getElementById("company").style.borderColor='';
	}
	
	if(document.getElementById("address").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give Address';
		document.getElementById("address").style.borderColor='red';
		document.getElementById("address").focus();
		return false;
	}	
	else	{	
		document.getElementById("address").style.borderColor='';
	}
	if(document.getElementById("phone").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give Phone';
		document.getElementById("phone").style.borderColor='red';
		document.getElementById("phone").focus();
		return false;
	}	
	else	{	
		document.getElementById("phone").style.borderColor='';
	}
	
	
	
	
	
	
	if(document.getElementById("email").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give Email';
		document.getElementById("email").style.borderColor='red';
		document.getElementById("email").focus();
		return false;
	}	
	else	{	
		document.getElementById("email").style.borderColor='';
	}
	
	
	var emailRegxp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (emailRegxp.test(document.getElementById('email').value)!= true)   
		{
			document.getElementById('msg_error').innerHTML="Please enter your valid Email ID."; 
			document.getElementById('email').style.background="#a7a54f"; 
			document.getElementById('email').focus();
			return false;
		}	
	else
	{
	document.getElementById("email").style.borderColor='';
	}
	
	if(document.getElementById("4_letters_code").value=="")
	{	
		
		document.getElementById('msg_error').innerHTML='Please Enter the Captcha Value';
		document.getElementById("4_letters_code").style.borderColor='red';
		document.getElementById("4_letters_code").focus();
		return false;
	}
	else
	{
		document.getElementById("4_letters_code").style.borderColor='';
	}
	

function res()
{
	reset();	
}
	
function clearall()
{
	
	
	document.getElementById('name').value="";
	document.getElementById('company').value="";
	document.getElementById('address').value="";
	document.getElementById('phone').value="";
	document.getElementById('fax').value="";
	document.getElementById('email').value="";
	document.getElementById('message').value="";
}
	
}
</script>	
<!--====================banner part====================-->
</head>
<body>
<div id="main_area">
  <div class="main"> 
    <!--===================start header part===================-->
    <header>
      <div class="header_area">
         <?php include("includes/currency.php");  ?>
        <div class="nav_bg"> 
          <!--====================start nav part====================-->
          <nav>
            
            <?php include("includes/menu.php");  ?>
          </nav>
          <!--====================start nav part====================-->
          <?php include("includes/search.php");?>
        </div>
        <?php //include("includes/banner.php");  ?>
      </div>
    </header>
    <!--===================end header part===================--> 
    <!--===================Start section part===================-->
    <section>
    <div class="body_area">
        <div class="body_box">
          <div class="body_left_area">
          <div class="body_text_area">
            <div class="body_heading_bg">
              <h1>Contact us</h1>
            </div>
            
            <div class="con_body_text_box">
              <div id="cse-results" style="display: none;"></div><div class="body_left_text_area" id="static-content"><h2>Q magnets are manufactured by</h2><br>
              Neuromagnetics Australia Pty Ltd <br>
73 Shore St East <br>
Cleveland, QLD 4163 <br>
AUSTRALIA <br>
email: <a href="#" class="email_text">customerservice@qmagnets.com</a><br> 
<br>

From Australia only phone freecall: <br>
1800 Q magnets or 1800 762 463 <br> <br>

The rest of the world: <br>
Ph:  +61 7 3821 7300 <br>
Fax: +61 7 3821 7400 <br> <br>

Or click on the blue Skype link below to talk or chat with painfreewithqmagnets
        
        <!-- Skype 'My status' button http://www.skype.com/go/skypebuttons -->
      <div class="offline_box">  
        <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Dropdown_painfreewithqmagnets_1">
  <script type="text/javascript">
    Skype.ui({
      "name": "dropdown",
      "element": "SkypeButton_Dropdown_painfreewithqmagnets_1",
      "participants": ["painfreewithqmagnets"],
      "imageSize": 32
    });
  </script>
</div>
</div>


              </div>
            </div>
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0"></div>
            </div>
          </div>
          
		  
		  
		  
		  
		  
		  
		  
          <div class="body_right_area">
				<div class="body_right_feild_area">
					<div class="body_right_heading_bg">Enquiry Form</div>
						<div class="right_box_body_bg">
							<div class="right_field_area contactForm">
<style>
.contactForm { }
.contactForm .fields { padding:0px; margin:0px 0px 5px; }
.contactForm .fields label { width:65px; display:block; float:left; line-height:28px; }
.contactForm .fields select,.contactForm .fields input,.contactForm .fields textarea { width:200px; }
.contactForm .fields textarea { background:#222; border:1px solid #2f2f2f; width:200px; padding:5px; color:#999; }
.contactForm .fields select { background:#222222; color:#888; border:1px solid #2f2f2f; padding:2px; vertical-align:middle;  }
.contactForm .fields select:focus,.contactForm .fields input:focus { background:#333 }
</style>
<form accept-charset="UTF-8" action="https://pj139.infusionsoft.com/app/form/process/001f93a0f3d0497c2d4d325460bb1574" class="infusion-form" method="POST">
<input name="inf_form_xid" type="hidden" value="001f93a0f3d0497c2d4d325460bb1574" />
<input name="inf_form_name" type="hidden" value="Contact Form Information Request" />
<input name="infusionsoft_version" type="hidden" value="1.29.8.45" />

<p class="fields"><label for="inf_field_FirstName">First Name * </label> <input required="" class="infusion-field-input-container" type="text" id="inf_field_FirstName" name="inf_field_FirstName" /></p>
<p class="fields"><label for="inf_field_LastName">Last Name * </label> <input required="" class="infusion-field-input-container" type="text" id="inf_field_LastName" name="inf_field_LastName" /></p>
<p class="fields"><label for="inf_field_Email">Email * </label> <input required="" class="infusion-field-input-container" type="text" id="inf_field_Email" name="inf_field_Email" /></p>
<p class="fields"><label for="inf_field_Phone1">Phone No </label> <input class="infusion-field-input-container" type="text" id="inf_field_Phone1" name="inf_field_Phone1" /></p>
<p class="fields"><label for="inf_field_City">City </label> <input class="infusion-field-input-container" type="text" id="inf_field_City" name="inf_field_City" /></p>
<p class="fields"><label for="inf_field_State">State </label> <input class="infusion-field-input-container" type="text" id="inf_field_State" name="inf_field_State" /></p>
<p class="fields"><label for="inf_field_PostalCode">Postal Code </label> <input class="infusion-field-input-container" type="text" id="inf_field_PostalCode" name="inf_field_PostalCode" /></p>
<p class="fields"><label for="inf_field_Country2">Country  * </label> <select required="" id="inf_field_Country2" name="inf_field_Country2"><option value="">Please select one</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Ãland Islands">Ãland Islands</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Democratic Republic Of Congo">Democratic Republic Of Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="CÃ´te D'Ivoire">CÃ´te D'Ivoire</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="South Korea">South Korea</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Republic of Macedonia">Republic of Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Federated States of Micronesia">Federated States of Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="RÃ©union">RÃ©union</option><option value="St. BarthÃ©lemy">St. BarthÃ©lemy</option><option value="St. Helena, Ascension and Tristan Da Cunha">St. Helena, Ascension and Tristan Da Cunha</option><option value="St. Kitts And Nevis">St. Kitts And Nevis</option><option value="St. Lucia">St. Lucia</option><option value="St. Martin">St. Martin</option><option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option><option value="St. Vincent And The Grenedines">St. Vincent And The Grenedines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="US Minor Outlying Islands">US Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></p>
<p class="fields"><label for="inf_custom_CustomContactField">Enquiry Interest * </label> <textarea required="" name="inf_custom_CustomContactField" id="inf_custom_CustomContactField" class="infusion-field-input-container"></textarea></p>

    <div class="infusion-field">
        <span class="infusion-option">
            <input id="inf_option_CustomerEnquiry" name="inf_option_CustomerEnquiry" type="checkbox" value="1018" />
            <label for="inf_option_CustomerEnquiry">Customer Enquiry</label>
        </span>
    </div>
    <div class="infusion-field">
        <span class="infusion-option">
            <input id="inf_option_HealthProfessionalEnquiry" name="inf_option_HealthProfessionalEnquiry" type="checkbox" value="1020" />
            <label for="inf_option_HealthProfessionalEnquiry">Health Professional Enquiry</label>
        </span>
    </div>
    <div class="infusion-field">
        <span class="infusion-option">
            <input id="inf_option_ResellerEnquiry" name="inf_option_ResellerEnquiry" type="checkbox" value="1022" />
            <label for="inf_option_ResellerEnquiry">Reseller Enquiry</label>
        </span>
    </div>
    <div class="infusion-field">
        <span class="infusion-option">
            <input id="inf_option_InernetAffiliateEnquiry" name="inf_option_InernetAffiliateEnquiry" type="checkbox" value="1024" />
            <label for="inf_option_InernetAffiliateEnquiry">Inernet Affiliate Enquiry</label>
        </span>
    </div>
    &nbsp;
    <div class="infusion-captcha">
        <div>
            <img alt="captcha" border="0px" name="captcha" onclick="reloadJcaptcha();" src="https://pj139.infusionsoft.com/Jcaptcha/img.jsp" title="If you can't read the image, click it to get another one." />
            <script type="text/javascript">function reloadJcaptcha() {var now = new Date();if (document.images) {document.images.captcha.src = 'https://pj139.infusionsoft.com/Jcaptcha/img.jsp?reload=' + now}}</script>
        </div>
        <div>
            <label for="captcha.typed">Enter the above code:</label>
        </div>
        <div>
            <input class="infusion-field-input-container" id="captcha.typed" name="captcha.typed" type="text" />
        </div>
    </div>
    &nbsp;
    <div class="infusion-submit">
        <input type="submit" value="Contact   Now" />
    </div>
</form>

							</div>
						</div>
						<div class="body_right_bottom_img"><img src="images/body_right_bottom_img.jpg" alt="" width="324" height="36" border="0"></div>
					</div>
				</div>
		  
          </div>
        </div>

  
    </section>
    <!--===================end section part===================--> 
    <!--===================Start footer part===================-->
    <footer>
      <?php include("includes/footer.php"); ?>
    </footer>
    <!--===================end footer part===================--> 
  </div>
</div>
</body>
</html>
