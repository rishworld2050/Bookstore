	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>hotel reviews</title>

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
   
  $img = mysql_query("select hotel_img from hotels_in_metro1.hotels where hotel_name='$name'") or die(mysql_error()); 
  $f= mysql_fetch_array($img);

print "<table width='1243' height='657' border='0' cellspacing='2'>
  <tr>
    <td width='281' height='283'><img src='http://localhost/hotels/images/".$f['hotel_img']."jpg' width='263' height='192' /></td>
    <td width='952' align='center'><p>".$name."</p><br>
   
      </td>
  </tr>
  <tr>
    <td height='353'><marquee direction='up'><p><i><u>Reviews:</u></i></p>";
	$info = mysql_query("select review from hotels_in_metro1.reviews where hotel='$name' and age='$_POST[age]' and time='$_POST[menu]' and time='$_POST[time]'") or die(mysql_error());
	}
	while($d = mysql_fetch_array( $info )) {
	print "<p>".$d['review']."</p>";
	}
	print "</marquee>
   </td>
    <td> Food:&nbsp;$_POST[menu] <br>
	     Time:&nbsp;$_POST[time]
		 Age:&nbsp;$_POST[age]</td>
  </tr>
</table>";
?>
</body>
</html>

