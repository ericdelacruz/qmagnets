<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Admin  - Login</title>

<link href="styles/layout.css" rel="stylesheet" type="text/css" />

<link href="styles/login.css" rel="stylesheet" type="text/css" />

<!-- Theme Start -->

<link href="themes/green/styles.css" rel="stylesheet" type="text/css" />

<!-- Theme End -->

<script language="javascript">

 function check()

 {

 

  if (document.getElementById('username').value=='' || document.getElementById('username').value=='Username')   

  {

  document.getElementById('msg_error').innerHTML="Please enter username."; 

  document.getElementById('username').focus();

  return false;

  } 

  if(document.getElementById('password').value=='' || document.getElementById('password').value=='password' )   

  {

  document.getElementById('msg_error').innerHTML="Please enter password."; 

  document.getElementById('password').focus();

  return false;

  } 

  

 }

  function cls()

 {

   

    document.getElementById('error').style.display='none';

	//document.getElementById('success').style.display='none';

 }

</script>

<!--

    1 ) Reference to the files containing the JavaScript and CSS.

    These files must be located on your server.

-->



<script type="text/javascript" src="highslide/highslide-with-html.js"></script>

<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />





<!--

    2) Optionally override the settings defined at the top

    of the highslide.js file. The parameter hs.graphicsDir is important!

-->



<script type="text/javascript">

hs.graphicsDir = 'highslide/graphics/';

hs.outlineType = 'rounded-white';

hs.wrapperClassName = 'draggable-header';

hs.height=200;



</script>

</head>

<?php 

$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";

$message=isset($_REQUEST['message'])?$_REQUEST['message']:"";

/*if($retcode==2)

{

$message="Your password is sent to your mail id.";	

}

*/?>

<body>

	<div id="logincontainer">

    	<div id="loginbox">

        	<div id="loginheader">

            	<img src="themes/blue/img/cp_logo_login.png" alt="Control Panel Login" />

            </div>

			<?php if($message!='')

			{

			?>

			<div class="status error" id="error">

        	<p class="closestatus"><a href="javascript:void(0)" title="Close"  onclick="cls()">x</a></p>

        	<p><img src="img/icons/icon_error.png" alt="Error" /><span>Error!</span> Please provide valid Username and Password.</p>

           </div>

		   <?php

		    }

		   ?>

            <div id="innerlogin">

            	<form name="f1" action="login.php" method="post" onsubmit="return check();" >

                	<p>Enter your username:</p>

                	<input type="text" name="username" id="username"  value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Username';}"class="logininput" />

                    <p>Enter your password:</p>

                	<input type="password"  name="password"  id="password" value="password" onfocus="if (this.value == 'password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'password';}" class="logininput" />

                   

                   	<input type="submit" class="loginbtn" value="Submit" /><br />

                    <p><a href="forgot.php" title="Forgoteen Password?" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )">Forgotten Password?</a></p>

                </form>

            </div>

        </div>

        <img src="img/login_fade.png" alt="Fade" />

    </div>

</body>

</html>