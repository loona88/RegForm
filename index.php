<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
	<title>Main Page</title>
	<link rel="stylesheet" href="style.css">
	<!-- <script src="script.js"></script> -->
</head>
<body>
	<div class="main">
		<form method="post" action="" id="form">
			<div id="h2">
				<h2>REGISTRATION</h2>
			</div>
			<div id="reg_div">
				<table > 
					<tr>
						<td>First Name: </td>
						<td><input type="text" name="frsName" value="<?php echo @$data['frsName']; ?>"></td>
					</tr>
					<tr>
						<td>Login: </td>
						<td><input type="text" name="login" value="<?php echo @$data['login']; ?>"></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td><input type="text" name="lstName" value="<?php echo @$data['lstName']; ?>"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="usPasw"></td>
					</tr>
					<tr>
						<td>Your Birth Date: </td>
						<td ><input type="month" name="mnt" style="width: 180px" value="<?php echo @$data['mnt']; ?>"></td>
					</tr>
					<tr>
						<td>Your Gender: </td>
						<td>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
						</td>
					</tr>
					<tr>
						<td>Phone Number: </td>
						<td><input type="tel" name="phNumb" value="<?php echo @$data['phNumb']; ?>"></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="email" name="eMail" value="<?php echo @$data['eMail']; ?>"></td>
					</tr>
					<tr> 	
						<td>Secure Question:</td>
						<td>
							<select name="secquest" style="width: 185px">
								<option value="false">--none--</option>
								<option value="x1">What is the first name of the person you first kissed?</option>
								<option value="x2">What is the last name of the teacher who gave you your first failing grade?</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Your Answer: </td>
						<td><input type="textarea" name="txtar"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="button" value="Set"></td>
					</tr>
				</table>
				<input type="checkbox" name="chkb[]" value="true">something!!! <br><hr>
				<input type="submit" value="Reg" name="do_register"><br>
			</div>
		</form>
		<form action="" method="post">
			<div id="h2">
				<h2>LOGIN</h2>
			</div>
			<div id="log_div">
				<table>
					<tr>
						<td> Login:</td>
						<td><input type="text" name="login1" placeholder="Your login(First name)"  value="<?php echo @$data['login1']; ?>"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Your password";></td>
					</tr>
				</table><hr>
				<input type="submit" value="Login" name="do_login">
			</div>
		</form>
	</div>
</body>
</html>