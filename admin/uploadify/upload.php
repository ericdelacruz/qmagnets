<?php
include("../includes/include.php");
// JQuery File Upload Plugin v1.4.1 by RonnieSan - (C)2009 Ronnie Garcia
if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_GET['folder'] . '/';
	
	$flename='b_'.time().'_'.rand().'.'.end(explode(".",$_FILES['Filedata']['name']));
	$targetFile =  str_replace('//','/',$targetPath).$flename;
	// Uncomment the following line if you want to make the directory if it doesn't exist
	// mkdir(str_replace('//','/',$targetPath), 0755, true);
	
	
	$sql_in="insert into  video set video_name='".$flename."'  ";
	if(mysql_query($sql_in))
	{
	  
	 move_uploaded_file($tempFile,$targetFile);
	}
}
	
echo '1';

?>