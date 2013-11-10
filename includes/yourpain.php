<?php 
session_start();
if(count($_POST)>0)
{
 $_SESSION['fname']=$_POST['fname']; 
$_SESSION['lname']=$_POST['lname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
if( isset( $_POST['location'] ))
	{
	if( count( $_POST['location'] ) > 0 )
    {
       $location= implode(", ", $_POST['location']);
    }	
	
	}
$_SESSION['location']=$location;
$_SESSION['other']=$_POST['otherpain'];



}

//echo $_SESSION['fname'];

  ?>
<script type="text/javascript">
function check()
{  
    if(document.getElementById("fname").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give First Name';
		document.getElementById("fname").style.borderColor='red';
		document.getElementById("fname").focus();
		return false;
	}	
	else	{	
		document.getElementById("fname").style.borderColor='';
	}
	if(document.getElementById("lname").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give Last Name';
		document.getElementById("lname").style.borderColor='red';
		document.getElementById("lname").focus();
		return false;
	}	
	else	{	
		document.getElementById("lname").style.borderColor='';
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
	
	if(document.getElementById("phone").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Give Email';
		document.getElementById("phone").style.borderColor='red';
		document.getElementById("phone").focus();
		return false;
	}	
	else	{	
		document.getElementById("phone").style.borderColor='';
	}
	


function clearall()
{
	
	
	document.getElementById('fname').value="";
	document.getElementById('lname').value="";
	document.getElementById('email').value="";
	document.getElementById('phone').value="";
	document.getElementById('message').value="";
	
}
	
}
</script>	

<form name="form" method="post" action="" onsubmit="return check();">
<div class="body_right_feild_area">
            <div class="body_right_heading_bg">Where's Your Pain </div>
            <div class="right_box_body_bg">
              <div class="right_field_area">
              <div class="field_con">
                  <div class="feild_box">&nbsp;</div>
                  <div  id="msg_error" style=" color:#a7a54f"></div>
                </div>
                <div class="field_con">
                  <div class="feild_box">First Name :</div>
                  <input type="text" name="fname" id="fname" style="width:216px; height:18px" class="textfield" />
                </div>
                <div class="field_con">
                  <div class="feild_box">Last Name *</div>
                  <input type="text" name="lname" id="lname" style="width:216px; height:18px" class="textfield" />
                </div>
                <div class="field_con">
                  <div class="feild_box">Email *</div>
                  <input type="text" name="email" id="email" style="width:216px; height:18px" class="textfield" />
                </div>
                <div class="field_con">
                  <div class="feild_box">Phone :</div>
                  <input type="text" name="phone" id="phone" style="width:216px; height:18px" class="textfield" />
                </div>
              </div>
              <span>Please indicate the location(s) of your pain:</span>
              <div class="check_main_box_area"> 
              <div class="check_area"> 
              
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location1" value="Lower Back" class="styled" type="checkbox"></div>
                    <div class="check_text">Lower Back</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location2" value="Ankle" class="styled" type="checkbox"></div>
                    <div class="check_text">Ankle</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location3" value="Foot" class="styled" type="checkbox"></div>
                    <div class="check_text">Foot</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location4" value="Knee" class="styled" type="checkbox"></div>
                    <div class="check_text">Knee</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location5" value="Shoulder" class="styled" type="checkbox"></div>
                    <div class="check_text">Shoulder</div>
                </div>
               
              </div>
              <div class="check_area1"> 
               
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location6" value="Upper Back" class="styled" type="checkbox"></div>
                    <div class="check_text1">Upper Back</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location7" value="Elbow" class="styled" type="checkbox"></div>
                    <div class="check_text1">Elbow</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location8" value="Heel" class="styled" type="checkbox"></div>
                    <div class="check_text1">Heel</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location9" value="Neck" class="styled" type="checkbox"></div>
                    <div class="check_text1">Neck</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location10" value="SIJ" class="styled" type="checkbox"></div>
                    <div class="check_text1">SIJ (Sacroiliac Joint)</div>
                </div>
              
              </div>
              <div class="check_area2"> 
             
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location11" value="Abdomen" class="styled" type="checkbox"></div>
                    <div class="check_text2">Abdomen</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location12" value="Finger" class="styled" type="checkbox"></div>
                    <div class="check_text2">Finger</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location13" value="Hip" class="styled" type="checkbox"></div>
                    <div class="check_text2"> Hip</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location14" value="Pelvic" class="styled" type="checkbox"></div>
                    <div class="check_text2">Pelvic</div>
                </div>
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location15" value="Tooth" class="styled" type="checkbox"></div>
                    <div class="check_text2">Tooth</div>
                </div>
              </div>
              <div class="check_area3"> 
               
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location16" value="TMJ" class="styled" type="checkbox"></div>
                    <div class="check_text3">TMJ (Temporomandibular Joint) </div>
                </div>
         
              </div>
              <div class="check_area2"> 
              
                <div class="check_con">
                    <div class="check_box"><input name="location[]" id="location17" value="Wrist" class="styled" type="checkbox"></div>
                    <div class="check_text2"> Wrist</div>
                </div>
              
              </div>
              </div>
              <div class="field_con">
                  <div class="feild_box1">Other painful areas</div>
                  <input type="text" name="otherpain" style="width:175px; height:18px" class="textfield" />
                </div>
              <div class="continue_button"><input type='image' name="submit" src="images/continue_button.jpg" alt="" width="96" height="28" border="0"></div>
            </div>
            <div class="body_right_bottom_img"><img src="images/body_right_bottom_img.jpg" alt="" width="324" height="36" border="0"></div>
              </div>