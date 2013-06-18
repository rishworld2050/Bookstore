 	 <?php

print "
<form method=post action='quote1.php?action=check'>
<table border=0>
	<tr>
	<td><font color='red'>*</font>Your Name:</td>
	<td><input type=text name='cust_name' size=30 value='".$_POST['cust_name']."'></td>
	</tr><tr>
	<td valign=top><font color='red'>*</font>Your Address:</td>
	<td><textarea name='cust_address' rows=4 cols=40>$_POST[cust_address]</textarea></td>
	</tr><tr>
	<td><font color='red'>*</font>Contact Number:</td>
	<td><input type=text name='cust_phone' size=15 value='".$_POST['cust_phone']."'></td>
	</tr><tr>
	<td><font color='red'>*</font>Contact Email:</td>
	<td><input type=text name='cust_email' size=30 value='".$_POST['cust_email']."'></td>
	</tr><tr>
		<td valign=top><font color='red'>*</font>Describe in detail your query.</td>
		<td><textarea name='website_detail' cols=50 rows=5>$_POST[website_detail]</textarea></td>
		</tr>
	</table></td>
	</tr><tr>
	<td colspan=2><input type=submit value='Request a Quote'></td>
	</tr>
</table>";

?>

                    
       