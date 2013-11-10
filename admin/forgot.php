<?php  

include("includes/include.php");



	$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";

	//print_r($_POST);	

	 $admin_email =isset($_REQUEST['admin_email'])?$_REQUEST['admin_email']:""; 

	

	$row_ad_mail=mysql_fetch_array(mysql_query("select * from admin_information where fld_id='".$_SESSION['login_id']."' "));

?>

 <?php

	if(!empty($submit))

	{

	  

		   $qry=mysql_query("select * from admin_information where sales_email='".$admin_email."' ");

		   	

			//echo "select * from admin_information where admin_email='".$admin_email."' "; exit;

			if(mysql_num_rows($qry)>0)

			{

				$row=mysql_fetch_array($qry);

				$to=$row['admin_email'];

				//$to="rn.login@gmail.com";

				$msgsub = "Add Some Colour admin account details";		

				$msgbody = "Your username: " . $row['fld_user_name'] . "<br />";

				$msgbody .="Your Password is: " . $row['fld_password'] . "<br />";

				

				

			   //echo $msgbody; exit;

			   

				$from=$row['sales_email'];

				$headers="From:".$from."\nMIME-Version: 1.0\nContent-Type: text/html; charset=ISO-8859-1\nX-Mailer: PHP \n";

				@mail($to,$msgsub,$msgbody,$headers);

				

				echo "<script language='Javascript'>parent.window.location.href='index.php?retcode=2'</script>";



				 

			}

			else

			{

			 $msg="Wrong mail id.";	

			}

		

	}	



	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Forgot Passord</title>

<link href="css/global.css" rel="stylesheet" type="text/css" />

<script language="javascript">

 function check()

 {

  var emailRegxp = /^([\w]+)(.[\w]+)*@([\w]+)(.[\w]{2,3}){1,2}$/;

/*  if (emailRegxp.test(document.getElementById('admin_email').value)!= true)   

  {

  document.getElementById('msg_error').innerHTML="Please enter valid email."; 

  document.getElementById('admin_email').focus();

  return false;

  } */

  if(document.getElementById('admin_email').value=='')

  {

	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";

	  document.getElementById('admin_email').style.borderColor="red";

	  document.getElementById('admin_email').focus();

	  return false;

  }

 else

  {

   document.getElementById('admin_email').style.borderColor="";

  }

  return true;

 }

</script>

</head>

<body>

<div class="contentcontainer med left">

            <div class="headings alt">

                <h2 style="color:#006600;">Password recovery window.</h2>

            </div>

			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return check();"  >

            <div class="contentbox">

			    <?php

				if($retcode==2)

				{

				?>

				<p>

                        <label for="textfield" id="msg_error" style="color:#FF0000;"><strong>Check your mail please.</strong></label>

                        

                    </p>

				<?php

				}

				?>

            	    <p>

                        <label for="textfield" id="msg_error" style="color:#FF0000;"><strong><?php echo $msg; ?>	</strong></label>

                        

                    </p>

            		<p>

                        <label for="textfield"><strong>Admin Email:</strong></label>

                        <input type="text" name="admin_email" id="admin_email" value=""  class="inputbox" /> <br />

                        <span class="smltxt">(The password will be forward to this mail id.)</span>

                    </p>

                   

                   

                    

                <input type="submit" value="Submit" name="submit" class="btn" /> <!--<input type="submit" value="Submit (Alternative)" class="btnalt" />-->

            </div>

			</form>

        </div>

<!--<table width="600" border="0" align="center" cellpadding="0" cellspacing="0"  style="padding-top:20px;">

  

  <tr>

    <td align="left" valign="top">

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return check();"  >

								  <table width="100%" border="0" cellspacing="0" cellpadding="4">

								    <tr >

									   <td width="21%" ></td>

                                       	

                                      <td width="79%" id="msg_error" class="text_sign" ><?php echo $msg; ?>								    </tr>                                

                                    <tr>

                                      <td width="21%"  class="new_txt1" align="right" >&nbsp;Admin Email : </td>

                                      <td width="79%" ><input type="text" name="admin_email" id="admin_email" value="<?php echo $row_ad_mail['admin_email']; ?>" class="input_text" autocomplete="off" style="width:250px;"></td>								  

								    </tr>

									 

									

									  <tr>

									  <td >&nbsp;</td>

									   <td><input type="submit" class="btn" name="submit" value="Save"></td>

									  </tr>

						  </table>

					    </form>

    </td>

  </tr>

  

</table>-->

</body>

</html>

