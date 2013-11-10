<?PHP 

date_default_timezone_set('Asia/Kolkata');



        require_once("includes/dbconnection.php");

		$lg_id=isset($_REQUEST['lg_id'])?$_REQUEST['lg_id']:"1";

		if(empty($_POST['username']) || empty($_POST['password']))

		{

			setcookie('u_name', " ", time()+3600*24*30);

			setcookie('p_word', " ", time()+3600*24*30);

		    echo "<script>window.location.href='index.php?message=Please type the username and password'</script>";

			exit();

		}

        $query = "SELECT * FROM `admin_information` WHERE `fld_user_name`='".$_POST['username']."' AND `fld_password`='".$_POST['password']."' AND `fld_status`='active'"; 

		$resultSet = mysql_query($query);

		

		if(!mysql_num_rows($resultSet))

		{				

			setcookie('u_name', " ", time()+3600*24*30);

			setcookie('p_word', " ", time()+3600*24*30);

		    echo "<script>window.location.href='index.php?message=Invalid username or password'</script>";

		    exit();

		}

		else

		{

		   //if(isset($_POST['remember']) && $_POST['rem_cookie'] == "rem")

		    if(isset($_POST['remember'])) 

			{

			 

				setcookie('u_name', $_POST['username'], time()+3600*24*30);

				setcookie('p_word', $_POST['password'], time()+3600*24*30);

				

			}

			else

			{

				setcookie('u_name', " ", time()+3600*24*30);

				setcookie('p_word', " ", time()+3600*24*30);

			}

			

			$row = mysql_fetch_array($resultSet);

			

				$id = $row['fld_id'];

				$type = $row['fld_type'];

			

			session_start();

			$_SESSION['username'] = $_POST['username'];

			$_SESSION['type'] = $type;			

			$_SESSION['login_id'] = $id;

			$_SESSION['lg_id'] = $lg_id;

			

			

			$sql_adminlogin_time = "UPDATE `table_admin_information` SET `fld_current_login`='".date("F j,Y h:i a")."' where `fld_id`='".$lg_id."'";

			mysql_query($sql_adminlogin_time);

			

			echo "<script>window.location.href='home.php'</script>";

		    exit();

		}



	

?>

