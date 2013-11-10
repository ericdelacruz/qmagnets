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
<title>Qmagnets</title>
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

Or click on the green tick below and Skype us at painfreewithQmagnets
<div class="offline_box">
  <div class="offline_icon"><img src="images/offline_icon.png" alt="" width="23" height="23" border="0"></div>
  <a href="#" class="offline_text">I'm Offline</a>
</div>
              </div>
            </div>
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0"></div>
            </div>
          </div>
          
          <div class="body_right_area">
          <div class="body_right_feild_area">
            <div class="body_right_heading_bg">Enquiry Form</div>
            
            <form name="contact" method="post" action="" onSubmit="return check();">
            
            <div class="right_box_body_bg">
            
            
              <div class="right_field_area">
              
              <div class="field_con1">
                  <div class="feild_box">&nbsp;</div>
                <?php if($rdir==1){?>  <div style="color:#639954"  ><?php echo $disp; ?></div><?php } else{?><div style=" color:#990000"><?php echo $disp;  ?></div><?php }?>
                </div>
              
              
              <div class="field_con1">
                  <div class="feild_box">&nbsp;</div>
                  <div id="msg_error" style=" color:#a7a54f"></div>
                </div>
                <div class="field_con1">
                  <div class="feild_box">First Name *</div>
                  <input type="text" name="name" id="name"style="width:216px; height:22px" class="textfield" />
                </div>
                <div class="field_con1">
                  <div class="feild_box">Company</div>
                  <input type="text" name="company" id="company" style="width:216px; height:22px" class="textfield" />
                </div>
                <div class="field_con1">
                  <div class="feild_box">Address</div>
                  <input type="text" name="address" id="address" style="width:216px; height:22px" class="textfield" />
                </div>
                <div class="field_con1">
                  <div class="feild_box">Phone</div>
                  <input type="text" name="phone" id="phone" style="width:216px; height:22px" class="textfield" />
                </div>
                <div class="field_con1">
                  <div class="feild_box">Fax</div>
                  <input type="text" name="fax" id="fax" style="width:216px; height:22px" class="textfield" />
                </div>
                <div class="field_con1">
                  <div class="feild_box">Email</div>
                  <input type="text" name="email" id="email" style="width:216px; height:22px" class="textfield" />
                </div>
                <div class="field_con1">
                  <div class="feild_box">Message</div>
                  <textarea name="message" style="width:216px; height:70px; resize:none;" class="textfield" value="" id="textarea"></textarea>
                  </div>
                  <div class="field_con1">
                  <div class="feild_box">&nbsp;</div>
                  <img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg' name="captcha"><a href='javascript: refreshCaptcha();'><img src="images/refresh.png" alt="" border="0" /></a>
                </div>
                <div class="field_con1">
                  <div class="feild_box">Security</div>
                  <input type="text" id="4_letters_code" name="4_letters_code"  style="width:216px; height:22px" class="textfield" />
                </div>
                  <div class="con_button_box">
                   <div class="con_button"><img src="images/reset_button.jpg" alt="" width="70" height="28" border="0" onclick="javascript:clearall();" style="cursor:pointer"></div>
                    <div class="con_button"><input type="image" name="submit" src="images/submit_button.jpg" alt="" width="70" height="28" border="0"></div>
                   
                  </div>
              </div>
            </div>
            
            </form>
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
