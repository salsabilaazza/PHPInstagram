<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center">
<h1><center>Registrasi Sukses<b></b><center></h1>
	<?php
	$mail=$_POST['mail'];
	$nama=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password= str_repeat("#",strlen($password));
	echo "<tr><td>Email Anda</td> <td>:</td> <td>$mail</td></tr>"; 
	echo "<tr><td>Full Name</td> <td>:</td> <td>$nama</td></tr>"; 
	echo "<tr><td>User Name</td> <td>:</td> <td>$username</td></tr>"; 
	echo "<tr><td>Password</td> <td>:</td> <td>$password</td></tr>"; 
?></body>
</table>

</html>