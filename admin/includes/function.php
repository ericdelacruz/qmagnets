<?php

function getadminEmail()
{
	$sql = "SELECT fld_admin_email FROM admin_information ";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	return $row['admin_email'];
}

function getPastWorkshop()
{
	$arr_workshop_name = array();
	$sql = "SELECT fld_workshop_name, fld_workshop_id ,fld_workshop_type FROM tbl_workshop WHERE `fld_workshop_type` = 'PAST' ORDER BY `fld_workshop_id` DESC LIMIT 0,5 ";
	$result = mysql_query($sql);
	while($row = mysql_fetch_assoc($result)){
	array_push($arr_workshop_name,$row);
	}
	return $arr_workshop_name;
}

function getUpcommingWorkshop()
{
	$arr_workshop_name = array();
	$sql = "SELECT fld_workshop_name, fld_workshop_id,fld_workshop_type  FROM tbl_workshop WHERE `fld_workshop_type` = 'UPCOMEING' ORDER BY `fld_workshop_id` DESC LIMIT 0,5 ";
	$result = mysql_query($sql);
	while($row = mysql_fetch_assoc($result)){
	array_push($arr_workshop_name,$row);
	}
	return $arr_workshop_name;
}
function getFieldValue($fld_name,$id)
{
	$arr_workshop_name = array();
	$sql = "SELECT  {$fld_name}  FROM tbl_workshop WHERE `fld_workshop_id` = '{$id}' ";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	
	return $row[$fld_name];
}
function getFormatedDate($datetime){
	 $arr1 = explode(" ", $datetime);
	 $arrdate = explode("-" , $arr1[0]);
	
	 $arrtime = explode(":" , $arr1[1]);
	
	 $time = mktime($arrtime[0],$arrtime[1],$arrtime[2],$arrdate[1],$arrdate[2],$arrdate[0]);
	 $datestring = date("F j, Y, g:i a" ,$time); 
	 return $datestring;
	 }

function getCountWorkshop($type)
{
	$arr_workshop_name = array();
	$sql = "SELECT * FROM tbl_workshop WHERE `fld_workshop_type` = '{$type}' ";
	$result = mysql_query($sql);
	$counter = mysql_num_rows($result);
	return $counter;
}

// The following functions written By Abhisek Banerjee

function checkEmail($email) 
{
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
   	{
    	return FALSE;
   	}
   	else
   	{
    	return TRUE;
	}
}

function pickname($Table,$scerchBy,$scerchItem,$key)
{
  //echo "select ".$scerchItem." from ".$Table." where ".$scerchBy."='".$key."'";
	$quary=mysql_query("select ".$scerchItem." from ".$Table." where ".$scerchBy."='".$key."'");
	$tot_rec=(int)mysql_num_rows($quary);
	$returnName='';
	if($tot_rec<>0)
	{
		$fatch_quary=mysql_fetch_array($quary);
		$returnName=$fatch_quary[0];
	}
	return $returnName;
}

// Function for sending Mail
function send_mail($to, $subject, $message ,$from, $cc='') 
{
	$header = "MIME-Version: 1.0\n";
	$header=$header."From: ".$from."\n";
	if($cc<>""){
		$header=$header."CC: ".$cc."\n";
	}	
	$header=$header."Content-Type: text/html; charset=\"iso-8859-1\"\n";
	$flag=mail($to, $subject, $message, $header);
	if($flag==false)	//delete
		$_SESSION['mail_display']="<b>To:</b> $to<br><b>From:</b> $from<br><b>Subject:</b> $subject<br><b>Message:</b><br>$message";	//delete
	return  $flag;
}

//Fynction for generating random number, if specified the return value should have that number of character
function genRandomString($num) {
    $length = $num;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $string = '';    

    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }

    return $string;
}

// The below function functions to return limited words(as desired) from string given in parameter
function limited_word($str,$num='',$strptags='')
{
	$wrds=explode(" ",strip_tags($str,$strptags));
	array_pop($wrds);
	
	if($num<>'')
	{
		for($i=0;$i<$num;$i++)
		{
			$restr.=$wrds[$i]." ";			
		}	
		$restr=substr($restr,0,-1);
	}
	else
	{
		$restr=implode(" ",$wrds);
	}
	
	return $restr;
}
// The Above functions written By Abhisek Banerjee

?>
