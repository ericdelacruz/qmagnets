<?php  

include("includes/include.php");

if($_SESSION['login_id']=='')

	{

	 echo "<script>window.location.href='index.php'</script>";

	}



	

	$old_password = isset($_REQUEST['old_password'])?$_REQUEST['old_password']:"";

	$new_password = isset($_REQUEST['new_password'])?$_REQUEST['new_password']:"";

	$retype_password =isset($_REQUEST['retype_password'])?$_REQUEST['retype_password']:"";

	$submit =isset($_REQUEST['submit'])?$_REQUEST['submit']:"";

	

	if($submit=='Save')

	{

	   $chk_query = "select * from `admin_information` where `fld_id`='".$_SESSION['login_id']."' and `fld_password`='".$old_password."'";

	   $result = mysql_query($chk_query);

	   if(mysql_num_rows($result)==1)

	   {

		

		$update_qry = "update `admin_information` set `fld_password`='".$new_password."' where `fld_id`='".$_SESSION['login_id']."' and `fld_password`='".$old_password."'";

		mysql_query($update_qry);

		   if($update_qry)

		   {		   

		   echo "<script>window.location.href='change_admin_pass.php?retcode=1'</script>";

		   }

		   else

		   {

		   echo "<script>window.location.href='change_admin_pass.php?retcode=2'</script>";

		   }

		}

		else

		{

		  echo "<script>window.location.href='change_admin_pass.php?retcode=2'</script>";

		}

	}

$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";



if($retcode==1)

{

 $msg="Your password is saved.";

}

if($retcode==2)

{

 $msg="Your password is not saved.";

}	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php include("includes/common_script.php");?>

<script language="javascript">

 function check()

 {

 

 /*++++++++++++++++++no blank characters+++++++++++++++++++++*/

var whiteSpace = " ";

	var start = 0;

	

 /*++++++++++++++++++no blank characters+++++++++++++++++++++*/ 

 if(document.getElementById('old_password').value=='')

  {

	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";

	  document.getElementById('old_password').style.borderColor="red";

	  document.getElementById('old_password').focus();

	  return false;

  }

 else

  {

   document.getElementById('old_password').style.borderColor="";

  }

 

   /*++++++++++++++++++no blank characters+++++++++++++++++++++*/

   

	 if(document.getElementById('new_password').value=='')

  {

	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";

	  document.getElementById('new_password').style.borderColor="red";

	  document.getElementById('new_password').focus();

	  return false;

  }

 else

  {

   document.getElementById('new_password').style.borderColor="";

  }

  

 

  /*++++++++++++++++++no blank characters+++++++++++++++++++++*/  





	   if(document.getElementById('retype_password').value=='' )   

	  {

	  //document.getElementById('msg_error').innerHTML="Please enter your retype password."; 

	   document.getElementById('retype_password').style.borderColor="red";

	  document.getElementById('retype_password').focus();

	  return false;

	  }

	   if(document.getElementById('new_password').value!=document.getElementById('retype_password').value )   

	  {

	 // document.getElementById('msg_error').innerHTML="Mismatch password."; 

	 document.getElementById('retype_password').style.borderColor="red";

	  document.getElementById('retype_password').focus();

	  return false;

	  } 

 }

 

 function cls()

 {

   

    document.getElementById('error').style.display='none';

	document.getElementById('success').style.display='none';

 }

</script>

</head>

<body id="homepage">

	 <!-- Top Header Start -->

		<?php include("includes/header.php");?>

	 <!-- Top Header End --> 

	        

     <!-- Top Breadcrumb Start -->

        <?php include("includes/breadcrumb.php");?>

     <!-- Top Breadcrumb End -->

	 

     

    <!-- Right Side/Main Content Start -->

    <div id="rightside">

    

    	 

    

        <!-- Content Box Start -->

        <?php //include("includes/bar.php");?>

        <!-- Content Box End -->

        

         <!-- Graphs Box Start -->

          <?php //include("includes/graph.php");?>

        <!-- Graphs Box End -->

        

        <!-- Alternative Content Box Start -->

          <?php //include("includes/content.php");?>

        <!-- Alternative Content Box End -->

        

        <?php //include("includes/form.php");?> 

        

        <?php //include("includes/display.php");?>  

        

        <div style="clear:both;"></div>



        <!-- Content Box Start -->

         <div class="contentcontainer med left">

            <div class="headings alt">

                <h2>Administrator Password Control Box</h2>

            </div>

			<!-- <div id="msg_error" style="color:#FF0000; font-weight:bold;">

                <h2><?php echo $msg; ?></h2>

            </div>-->

			<?php

			if($retcode==1){

			?>

		<div class="status success" id="success"  onclick="cls()">

        	<p class="closestatus"><a href="change_admin_pass.php" title="Close" >x</a></p>

        	<p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> <?php echo $msg; ?></p>

        </div>

		 <?php 

		  }

		  if($retcode==2){

		 ?>

		 <div class="status error" id="error">

        	<p class="closestatus"><a href="change_admin_pass.php" title="Close"  onclick="cls()">x</a></p>

        	<p><img src="img/icons/icon_error.png" alt="Error" /><span>Error!</span><?php echo $msg; ?></p>

        </div>

		 <?php

		 }

		 ?>

			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return check();"  >

            <div class="contentbox">

            	

            		<p>

                        <label for="textfield"><strong>Old Password:</strong></label>

                        <input type="password" name="old_password" id="old_password"  autocomplete="off" class="inputbox" /> <br />

                        <!--<span class="smltxt">(This is an example of a small descriptive text for input)</span>-->

                    </p>

					<p>

                        <label for="textfield"><strong>New Password:</strong></label>

                        <input type="password" name="new_password" id="new_password"   autocomplete="off" class="inputbox" /> <br />

                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->

                    </p>

					<p>

                        <label for="textfield"><strong>New Password:</strong></label>

                       <input type="password" name="retype_password" id="retype_password" autocomplete="off" class="inputbox" /> <br />

                        <!--<span class="smltxt">(This is an example of a small descriptive text for input)</span>-->

                    </p>

                    <!--<p>

                        <label for="errorbox"><span class="red"><strong>Missing field:</strong></span></label>

                        <input type="text" id="errorbox" class="inputbox errorbox" /> <img src="img/icons/icon_missing.png" alt="Error" /> <br />

                        <span class="smltxt red">(This is some warning text for the above field)</span>

                    </p>-->



                <input type="submit"  class="btn" name="submit" value="Save"/> 

				

            </div>

			</form>   

        </div>

        <!-- Content Box End -->

         <?php include("includes/footer.php");?>  

          

        </div>

    <!-- Right Side/Main Content End -->

    

        <!-- Left Dark Bar Start -->

       <?php include("includes/leftpanel.php");?>

        <!-- Left Dark Bar End --> 

    

    <!-- Notifications Box/Pop-Up Start --> 

    <?php //include("includes/notifications.php");?>

    <!-- Notifications Box/Pop-Up End --> 

    

    <script type="text/javascript" src="http://dwpe.googlecode.com/svn/trunk/_shared/EnhanceJS/enhance.js"></script>	

    <script type='text/javascript' src='http://dwpe.googlecode.com/svn/trunk/charting/js/excanvas.js'></script>

	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js'></script>

	<script type='text/javascript' src='scripts/jquery.wysiwyg.js'></script>

    <script type='text/javascript' src='scripts/visualize.jQuery.js'></script>



    <script type="text/javascript" src='scripts/functions.js'></script>

    

    <!--[if IE 6]>

    <script type='text/javascript' src='scripts/png_fix.js'></script>

    <script type='text/javascript'>

      DD_belatedPNG.fix('img, .notifycount, .selected');

    </script>

    <![endif]--> 

</body>

</html>

