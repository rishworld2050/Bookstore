
<?php 
error_reporting(~E_NOTICE);
include('header.html');
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("hotels_in_metro") or die(mysql_error()); 
 
 if($_POST['age']==all){
 $data = mysql_query("select hotel_name, hotel_addr, hotel_contact, hotel_website from hotels_in_metro.navigation where city='$_POST[city]' and food='$_POST[food]'") or die(mysql_error()); 
 }
 else{
 $data = mysql_query("select hotel_name, hotel_addr, hotel_contact, hotel_website from hotels_in_metro.navigation where city='$_POST[city]' and food='$_POST[food]' and age='$_POST[age]'") 
 or die(mysql_error()); 
 }
 Print "<table border=0 width=100%>"; 
 Print "<tr bgcolor=red>"; 
 Print "<th><center>Name</center></th>  "; 
 Print "<th><center>Address</center></th> "; 
 Print "<th><center>Phone No</center></th>";
 Print "<th><center>Website</center></th>";
  while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr bgcolor=black>";
 Print "<td><center>".$info['hotel_name'] . "</center></td> "; 
 Print "<td><center>".$info['hotel_addr'] . "</center></td> "; 
 Print "<td><center>".$info['hotel_contact'] . "</center></td> "; 
 Print "<td><center><a href=http://".$info['hotel_website'] . ">".$info['hotel_name']."&nbsp;website reference</a></center></td>"; 
  Print "</tr>";
 } 
 Print "</table>"; 
 ?> 


</body>
</html>
