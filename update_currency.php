<?php
session_start();
$ref=$_SERVER['HTTP_REFERER'];
 $mycurr=isset($_REQUEST['cur'])?$_REQUEST['cur']:""; 
 

//session_register('curr');
 $_SESSION['curr']=$mycurr;
 

echo $ref;

/*echo "<script>window.location.href=".$ref."</script>";*/
//header("location:$ref");
?>