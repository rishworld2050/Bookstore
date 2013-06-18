				<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Login/Register</title>

<link href='css/templatemo_style.css' rel='stylesheet' type='text/css' />
<link rel='stylesheet' type='text/css' href='css/ddsmoothmenu.css' />

<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/ddsmoothmenu.js'>


</script>

<script type='text/javascript'>

ddsmoothmenu.init({
	mainmenuid: 'templatemo_menu', 
	orientation: 'h', 
	classname: 'ddsmoothmenu',
	contentsource: 'markup' 
})
 
</script>

<link rel='stylesheet' type='text/css' media='all' href='css/jquery.dualSlider.0.2.css' />

<script src='js/jquery-1.3.2.min.js' type='text/javascript'></script>
<script src='js/jquery.easing.1.3.js' type='text/javascript'></script>
<script src='js/jquery.timers-1.2.js' type='text/javascript'></script>
<link rel='stylesheet' href='css/slimbox2.css' type='text/css' media='screen' /> 
<script type='text/JavaScript' src='js/slimbox2.js'></script> 

</head>
<body>
<div id='templatemo_header_wrapper'>
	<div id='templatemo_header'>
	<div id='site_title'></div>
        <div id='templatemo_menu' class='ddsmoothmenu'>
            <ul>
                <li><a href='index.php' class='selected'>Home</a></li>
                <li><a href='about.php'>About</a>
                    
                </li>
                <li><a href='Hotels.php'>Hotels</a>
                    
                </li>
                
                <li><a href='contact.php'>Contact</a></li>
				 <li><a href='login.php'>Login</a></li>
            </ul>
            <br style='clear: left' />
        </div> 
        <div class='clear'>
          <h1><strong><img src="images/12570097-currency-brl-rate-concept-symbol-button-on-white-background.jpg" alt="sdfgh" width="399" height="94" longdesc="../../../Users/100RB/Pictures/12570097-currency-brl-rate-concept-symbol-button-on-white-background.jpg" /> Best Restaurant Locator</strong></h1>
        </div>
    </div> 
</div> 

<div id="templatemo_main">
	<h1>New User!</h1>
    <h4>Register below in order to acess the services!</h4>
    	<div class="half left">
    	 
<?php

/*include('regf.php');
<?php
include('header.html');*/
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
        </div>   
    </div>
        
    <div class="half right">
	<h1>Already Registered!</h1>
	<h3>Login Below!</h3>
<?php
error_reporting(E_PARSE);
 //include('loginform.php');
?>	
        
        
    </div>  
   
    


</body>
</html>