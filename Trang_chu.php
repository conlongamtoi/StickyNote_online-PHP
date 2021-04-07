<!DOCTYPE html>
<html>
<head>
	<title>
		Trang đăng nhập
	</title>
</head>
<body>
	<!--Welcome note-->
		<center>
			<table>
				<tr><b>Chào mừng đến với Sticky Note online, vui lòng đăng nhập hoặc đăng kí để tiếp tục</b></tr>
				<br></br>
			</table>							  
		</center>
	<!--Form login-->
	<center>	
	<table>									
		<form action="login.php" method="post">
			<tr>
				<td><b><i>Username: </i></b></td>  
				<th><input type="text" name="username"></th>
			</tr>
			<tr>
				<td><b><i>Password: </i></b></td>
				<td><input type="text" name="password"></td>
			</tr>
			<td>
			<button>Login</button>
		<!--Register-->
		</form>
			<button onclick="window.location.href='register.php'">Register</button>
			</td>
	</center>
</body>
</html>