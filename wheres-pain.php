
<?php 

include("admin/includes/include.php");

 $fname= $_SESSION['fname'];
 $lname=$_SESSION['lname'];
 $email=$_SESSION['email'];
 $phone=$_SESSION['phone'];
 $location=$_SESSION['location'];
 $other=$_SESSION['other'];

if(count($_POST)>0)
{
 
 $valid=1;
 
 $other2=isset($_REQUEST['other2'])?addslashes($_REQUEST['other2']):"";
 
 if( isset( $_POST['diag'] ))
	{
	if( count( $_POST['diag'] ) > 0 )
    {
       $diag= implode(", ", $_POST['diag']);
    }	
	
	}
	
	$time=isset($_REQUEST['time'])?addslashes($_REQUEST['time']):"";
	
	if( isset( $_POST['otherpain'] ))
	{
	if( count( $_POST['otherpain'] ) > 0 )
    {
       $otherpain= implode(", ", $_POST['otherpain']);
    }	
	
	}
	
	$side=isset($_REQUEST['side'])?addslashes($_REQUEST['side']):"";
	
	if( isset( $_POST['chronic'] ))
	{
	if( count( $_POST['chronic'] ) > 0 )
    {
       $chronic= implode(", ", $_POST['chronic']);
    }	
	
	}
	
	if( isset( $_POST['describe'] ))
	{
	if( count( $_POST['describe'] ) > 0 )
    {
       $describe= implode(", ", $_POST['describe']);
    }	
	
	}
 $submit=isset($_REQUEST['submit'])?addslashes($_REQUEST['submit']):"";
 
 
 
 
	
		  if($valid==1)
		  {
			$fname=ucfirst($fname);
			$msgsub = "Contact";
								
			$msgbody .= " NAME: " .strtoupper($fname) .strtoupper($lname). "<br />";		
				
			$msgbody .= "Phone: " . $phone . "<br />";
			
			
			$msgbody .= "Email: " . $email . "<br />";	
			$msgbody .= "Location of Pain: " . stripslashes($location ). "<br />";
			$msgbody .= "Other painful areas : " . stripslashes($other) . "<br />";
			$msgbody .= "Diagnosis your condition: " . $diag . "<br />";
			$msgbody .= "Length of Time: " . $time . "<br />";
			$msgbody .= "Other parts: " . $otherpain . "<br />";
			$msgbody .= "Side of pain: " . $side . "<br />";
			$msgbody .= "Chronic: " . $chronic . "<br />";	
			$msgbody .= "Describe your pain: " . $describe . "<br />";	
			$msgbody.="Other Conditions not listed:".$other2;
						
			
			
			// Admin email id retrive start here
			 
			 
			 $to="surajitghosh30@gmail.com";  
			// Admin email id retrive end here
			
			 
			$from=stripslashes($fname)."<".$email.">";
			$headers="From:".$from."\nMIME-Version: 1.0\nContent-Type: text/html; charset=ISO-8859-1\nX-Mailer: PHP \n";
						
			$pgnm_c=$_SERVER['PHP_SELF'];
			if (mail($to,$msgsub,$msgbody,$headers))
			{
			echo "<script language='Javascript'>window.location.href='$pgnm_c?rdir=1'</script>";
			session_destroy();
			}
		 
				
	  	  
		  else
		  {
			  echo "<script language='Javascript'>window.location.href='$pgnm_c?rdir=2'</script>";
			session_destroy();
			
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



  ?>


<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>
<?php
if(file_exists("includes/metatags/meta-".basename($_SERVER['PHP_SELF']))) {
	include("includes/metatags/meta-".basename($_SERVER['PHP_SELF'])); 
} else {
	// ONCE META TAG NOT FOUND USE THE DEFAULT TITLE TAG
	echo '<title>Qmagnets</title>';
}
?>
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
         <?php include("includes/banner.php");  ?>
      </div>
    </header>
    <!--===================end header part===================--> 
    <!--===================Start section part===================-->
    <section>
    <div class="body_area">
        <div class="body_box">
          <div class="enqu_body_area">
          <div class="enqu_body_text_area">
            <div class="enqu_body_heading_bg">
              <h1>Where's Your Pain</h1>
            </div>
            <form name="form2" method="post" >
            <div class="enqu_body_text_box">
              <div id="cse-results" style="display: none;"></div>
<div id="static-content">			  
			  <div class="body_left_text_area">
              <?php if($rdir==1){  ?><h3 style=" color:#099"><?php echo $disp;?></h3><?php } else{?><h3 style="color:#F00"><?php echo $disp;  ?></h3><?php }?>
              <br>
              <h2>Are you aware of the diagnosis of your condition? Check all that apply</h2>
                <div class="enqu_field_main_box_area"> 
              <div class="enqu_field_area"> 
              
              
               
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Ankylosing Spondylitis" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Ankylosing Spondylitis</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Bites and Stings" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Bites and Stings</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Bone Fracture" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Bone Fracture</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Carpel Tunnel Syndrome" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Carpel Tunnel Syndrome</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Disc Bulge for back pain"class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Disc Bulge for back pain</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Fibromyalgia" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Fibromyalgia</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Golfer's Elbow (Medial Epicondylitis)"class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Golfer's Elbow (Medial Epicondylitis)</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Headache" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Headache</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Menstrual Pain" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Menstrual Pain</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Migraine" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Migraine</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Multiple Sclerosis" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Multiple Sclerosis</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Nausea" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Nausea</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Osteoarthritis" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Osteoarthritis</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Pinched Nerve" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Pinched Nerve</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Polymyalgia" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Polymyalgia</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Rheumatoid Arthritis" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Rheumatoid Arthritis</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Sciatica" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Sciatica</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Shin Splints" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Shin Splints</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Shingles (Herpes Zoster)" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Shingles (Herpes Zoster)</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Sprain or Strain" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Sprain or Strain</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Tennis Elbow (Lateral Epicondylitis)" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Tennis Elbow (Lateral Epicondylitis)</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Thoracic Outlet Syndrome" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Thoracic Outlet Syndrome</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Trigeminal Neuralgia" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Trigeminal Neuralgia</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Trochanteric Bursitis" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Trochanteric Bursitis</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="diag[]" id="1" value="Whiplash" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Whiplash</div>
                </div>
              
              </div>
              <div class="enqu_text_con">
                <div class="enqu_text_box">Other conditions not listed</div>
                <input type="text" name="other2" style="width:300px; height:18px" class="enqu_textfield" />
              </div>
                </div>
              </div>
               <div class="body_left_text_area"><h2>How long have you experienced pain for this condition?</h2>
                <div class="enqu_field_main_box_area">
                  <div class="enqu_text_box">Length of time</div>
                  <div class="radio_area">
                  
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="time" id="5" value="A few days" class="styled" type="radio" checked="checked"></div>
                    <div class="enqu_field_text">A few days</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="time" id="5" value="A few weeks" class="styled" type="radio"></div>
                    <div class="enqu_field_text">A few weeks</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="time" id="5" value="More than 3 months less than 1 year" class="styled" type="radio"></div>
                    <div class="enqu_field_text">More than 3 months and less than 1 year</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="time" id="5" value="More than 1 year and less than 3 years" class="styled" type="radio"></div>
                    <div class="enqu_field_text">More than 1 year and less than 3 years</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="time" id="5" value="More than 3 years" class="styled" type="radio"></div>
                    <div class="enqu_field_text">More than 3 years</div>
                </div>
            
                </div>
                </div>
                </div>
                <div class="body_left_text_area"><h2>Does your pain refer to other parts of the body?</h2>
                <div class="enqu_field_main_box_area"> 
              <div class="enqu_field_area"> 
                
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="otherpain[]" id="1" value="Down the legs" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Down the legs</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="otherpain[]" id="1" value="Down the arms" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Down the arms</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="otherpain[]" id="1" value="Around the ribs" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Around the ribs</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="otherpain[]" id="1" value="Into the face" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Into the face</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="otherpain[]" id="1" value="In the abdomen" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Into the abdomen</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="otherpain[]" id="1" value="Into the genetals" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Into the genetals</div>
                </div>
                
              </div>
              </div>
              </div>

             <div class="enqu_field_main_box_area2">
                  <div class="enqu_text_box">Does pain refer to one or both side of the body?</div>
                  <div class="radio_area">
                  
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="side" id="5" value="unilateral" class="styled" type="radio" checked="checked"></div>
                    <div class="enqu_field_text">Only one side (unilateral)</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="side" id="5" value="bilateral" class="styled" type="radio"></div>
                    <div class="enqu_field_text">On both sides (bilateral)</div>
                </div>
           
                </div>
                </div>
                <div class="enqu_field_main_box_area2"> 
                <div class="enqu_in_text">It's common for chronic pain to be referred to other parts of the body, such as down the legs or arms. It will help us to help you, if you can be as accurate as possible by indicating which spinal level(s) your pain follows.<br><br>

Referred pain often follows what is called dermatomes, which are areas of skin supplied by nerve fibres from a single nerve root. Please click on the image below to enlarge a dermatome map and select which area most closely maps your referred pain.</div>
              <div class="enqu_field_main_box_area1">
                  <div class="enqu_text_box1">Cervical Spine</div>
                  <div class="enqu_check_area">
                  
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" value="c2" id="1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C2</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="c3"class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C3</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1"  value="c4" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C4</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="c5" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C5</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="c6" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C6</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="c7" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C7</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="c8" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">C8</div>
                </div>
              
                </div>
                </div>
                <div class="enqu_field_main_box_area1">
                  <div class="enqu_text_box1">Thoracic Spine</div>
                  <div class="enqu_check_area">
                 
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T1</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t2" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T2</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t3" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T3</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t4" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T4</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t5" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T5</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t6" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T6</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t7" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T7</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t8" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T8</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t9" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T9</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t10" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T10</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t11" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T11</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="t12" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">T12</div>
                </div>
               
                </div>
                </div>
                <div class="enqu_field_main_box_area1">
                  <div class="enqu_text_box1">Lumbar Spine</div>
                  <div class="enqu_check_area">
                  
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" value="l1" id="1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">L1</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" value="l2" id="1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">L2</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" value="l3" id="1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">L3</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" value="l4" id="1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">L4</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" value="l5"  value="l5" id="1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">L5</div>
                </div>
              
                </div>
                </div>
                <div class="enqu_field_main_box_area1">
                  <div class="enqu_text_box1">Sacrum</div>
                  <div class="enqu_check_area">
                  
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="s1" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">S1</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="s2" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">S2</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="s3" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">S3</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="s4" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">S4</div>
                </div>
             <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="chronic[]" id="1" value="s5" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text1">S5</div>
                </div>
                
                </div>
                </div>
              </div>
              <div class="body_left_text_area"><h2>Which of the following best describes your pain.</h2>
                <div class="enqu_field_main_box_area3"> 
              <div class="enqu_field_area"> 
              
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Constant"class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Constant</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Intermittent" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Intermittent</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Sharp" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Sharp</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Aching" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Aching</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Shooting" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Shooting</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Burning"  class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Burning</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Numbness" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Numbness</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Tingling" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Tingling</div>
                </div>
                <div class="enqu_field_con">
                    <div class="enqu_field_box"><input name="describe[]" id="1" value="Throbbing" class="styled" type="checkbox"></div>
                    <div class="enqu_field_text">Throbbing</div>
                </div>
                
              </div>
              </div>
              </div>
              <div class="enqu_in_text">Please submit your responses and we will send you are treatment protocol and device recommendations within 48 hours.</div>
				<div class="submit_button"><input type="image"  src="images/submit_button.jpg" name="submit" alt="" width="70" height="28" border="0"></div>
            </div>
            </form>
            <div class="enqu_bottom_img"><img src="images/enqu_bottom_img.jpg" alt="" width="920" height="20" border="0"></div>
            </div>
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
