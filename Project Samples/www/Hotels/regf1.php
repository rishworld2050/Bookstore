<?php

error_reporting(~E_NOTICE);
print "
<form method=post action='login.php?action=check'>
<table border=0>
	<tr>
	<td><font color='red'>*</font>Your Name:</td>
	<td><input type=text name='user_name' size=30 value='".htmlentities($_POST['user_name'])."'></td>
	</tr><tr>
	<td valign=top><font color='red'>*</font>Your Password:</td>
	<td><input type=password name='password' size=30></td>
	</tr><tr>
		<td valign=top><font color='red'>*</font>Confirm Password:</td>
		<td><input type=password name='password1' size=30></td>
		</tr><tr>
	<td><font color='red'>*</font>Contact Number:</td>
	<td><input type=text name='user_phone' size=15 value='".htmlentities($_POST['user_phone'])."'></td>
	</tr><tr>
	<td><font color='red'>*</font>Contact Email:</td>
	<td><input type=text name='user_email' size=30 value='".htmlentities($_POST['user_email'])."'></td>
	</tr>
	
	<tr>
	<td colspan=2><input type=submit value='Register'></td>
	</tr>
</table>";

?>
