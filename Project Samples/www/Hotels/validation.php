<?php
include('header.html');
error_reporting(E_PARSE);
		switch($_GET["action"]) {
			case "check";
				if(strlen($_POST["user_name"]) > 0 && strlen($_POST["password"]) > 0 && strlen($_POST["password1"]) > 0 && strlen($_POST["user_phone"]) > 0  && strlen($_POST["user_email"]) > 0) {
				if($_POST["password"]==$_POST["password1"]) {
				 $con = mysql_connect("localhost","root","");
                             if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotels_in_metro", $con);

$sql="INSERT INTO users (user_name, password, ph_no, email)
VALUES
('$_POST[user_name]','$_POST[password]','$_POST[user_phone]','$_POST[user_email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con);
					print "Registration Successful.<br> Fill the form below to register another user.";
					
					include('regf.php');
					
				}else{
                     print "<font color=red>Passwords do not match</font>";
                     include('regf1.php');
                         }					
}						 else {
					
					print "<font color='red'><b>You did not fill out all of the required fields.  Please try again.</b></font><br>";
					include('regf1.php');
				}
			break;
			
			default:
				include('regf.php');
			break;
		}
		?>