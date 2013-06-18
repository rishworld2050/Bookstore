	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>hotel</title>

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
<?php
error_reporting(~E_NOTICE);
$name=$_GET["action"];
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("hotels_in_metro1") or die(mysql_error()); 
  $data = mysql_query("select hotel_name, hotel_addr, hotel_contact, hotel_website, hotel_desc, hotel_img from hotels_in_metro1.hotels where hotel_name='$name'") or die(mysql_error()); 
  
 $e = mysql_fetch_array($data);
print "<table width='1243' height='657' border='0' cellspacing='2'>
  <tr>
    <td width='281' height='283'><img src='http://localhost/hotels/images/".$e['hotel_img']."jpg' width='263' height='192' /></td>
    <td width='952' align='center'><p>".$e['hotel_name']."</p><br>
   
      <p>".$e['hotel_addr']."</p>
      <p>".$e['hotel_contact']."</p>
      <p>".$e['hotel_website']."  </p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height='353'><marquee direction='up'><p><i><u>Reviews:</u></i></p>";
	
	print "</marquee>
    <p>Want review by Age:</p>
    <p>Select Age:</p>
    <form name='form' id='form1' action='ub1.php?action=$name' method='post'>
      <select name='age'>
	  <option value='all'>all</option>
        <option value='less 18' >12-17 yrs</option>
        <option value='adult'>18-25 yrs</option>
        <option value='less 30'>26-30 yrs</option>
		<option value='more 30'>>30 yrs</option>
      </select>   <br>
	  <select name='menu'>
	  
        <option value='pasta'>Pasta</option>
        <option value='manuchurian'>Manuchurian</option>
        <option value='jalepano'>Jalepano</option>
		<option value='taco imdiana'>Taco Indiana</option>
      </select>  
	  <select name='time'>
	 
        <option value='12am to 3 am'>12am to 3 am</option>
        <option value=3am to 6am'>3am to 6am</option>
        <option value='6am to 9am'>6am to 9am</option>
		<option value='9am to 12pm'>9am to 12pm</option>
		<option value='12pm to 3pm'>12pm to 3pm</option>
		<option value='3pm to 6pm'>3pm to 6pm</option>
		<option value='6pm to 9pm'>6pm to 9pm</option>
		<option value='9pm to 12pm'>9pm to 12pm</option>
      </select>  
      <input type='submit' name='Submit' value='Submit' />
     
    </form>    <p>&nbsp;  </p></td>
    <td> ".$e['hotel_desc']." </td>
  </tr>
</table>";
?>
</body>
</html>

