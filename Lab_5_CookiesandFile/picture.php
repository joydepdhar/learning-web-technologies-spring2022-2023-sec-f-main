<?php
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<body>
	</body>

	<table height="50px" width="100%" border="1">
		<tr height="100px">
			<td colspan="2">
				<center>
					<h1>Logged in as <a href="profile.html"><?=$_COOKIE['uname']?></a><a href="logout.php">| Logout</a></h1>
				</center>
				<img src="Xcompany.PNG" width="280" height="150" />
			</td>
		</tr>
		<tr height="150px">
			<th>Account</th>
			<th rowspan="2">
				<fieldset>
					<legend><b>PROFILE PICTURE</b></legend>
					<form action="registration.php" method="post" enctype="multipart/form-data">
						<img width="128" src="<?=$_COOKIE['picture']?>"/>
						<br />
						<input type="file" name="picture">
						<hr />
						<input type="submit" name="submit" value="Submit">
					</form>
				</fieldset>
			</th>
		</tr>
		<tr>
			<td>
				<a href="Dashboard.php"><u>. Dashboard</u></a><br>
				<a href="profile.php"><u>. View Profile</u></a><br>
				<a href="edit_profile.php"><u>. Edit Profile</u></a><br>
				<a href="picture.php"><u>. Change Profile Picture</u></a><br>
				<a href="change_password.html"><u>. Change Password</u></a><br>
				<a href="logout.php"><u>. Logout</u></a><br>
				<br>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				Copyright(C) 2017
			</td>
		</tr>
	</table>
</head>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>

