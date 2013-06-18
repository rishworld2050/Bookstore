				<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Contact Us</title>

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
        <div class='clear'></div>
    </div> 
</div> 

<div id="templatemo_main">
	<h1>Contact Information</h1>
    <h4>Send us a message now!</h4>
    	<div class="half left">
<?php

error_reporting(E_PARSE);
?>
	<!--<td bgcolor='#ffffff' align=left>-->
	
		<?php
		switch($_GET["action"]) {
			case "check";
				if(strlen($_POST["cust_name"]) > 0 && strlen($_POST["cust_address"]) > 0 && strlen($_POST["cust_phone"]) > 0 && strlen($_POST["cust_email"]) > 0  && strlen($_POST["website_detail"]) > 0) {
				
				 $con = mysql_connect("localhost","root","");
                             if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotels_in_metro", $con);

$sql="INSERT INTO feedback (name, address, phone, email, detail)
VALUES
('$_POST[cust_name]','$_POST[cust_address]','$_POST[cust_phone]','$_POST[cust_email]', '$_POST[website_detail]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con);
					print "Registration Successful.<br> Fill the form below to register another user.";
					
					include('quote_form.inc.php');
					
				} else {
					
					print "<font color='red'><b>You did not fill out all of the required fields.  Please try again.</b></font><br>";
					include('quote_form1.php');
				}
			break;
			
			default:
				include('quote_form1.php');
			break;
		}
		?>
		 </div>   
    </div>
        
    <div class="half right">
    	<h4>Mailing Address</h4>
        <h6><strong>Company Name</strong></h6>
          	330-660 Aliquam semper dignissim,<br />
            Fusce cursus turpis lacus, 11880<br />
            Sit amet tortor et<br /><br />
				
		<strong>Phone:</strong> 020-040-0680 <br />
        <strong>Email:</strong> <a href="mailto:">Email Us</a>  <br />
       
        
        
    </div>  
   
    
</div> 

</body>
</html>
		
		
		
