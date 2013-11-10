<?php
session_start();
$refp=$_SERVER['HTTP_REFERER'];
$cur=isset($_REQUEST['cur'])?$_REQUEST['cur']:""; 
echo  $_SESSION['curr']=$cur;


?>