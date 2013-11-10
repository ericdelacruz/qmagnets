<?php

	session_start();

    require_once("includes/dbconnection.php");

	$sql_current_login = "select * from `admin_information` where `fld_id`='".$_SESSION['login_id']."'";

	$result_current_login = mysql_query($sql_current_login);

	$row_current_login    = mysql_fetch_assoc($result_current_login);

	

    $sql_lastlogin_time = "UPDATE `admin_information` SET `fld_last_login`='".$row_current_login['fld_current_login']."' WHERE `fld_id`='".$_SESSION['login_id']."'";

    mysql_query($sql_lastlogin_time);

    session_destroy();

    header("location: index.php");

 ?>