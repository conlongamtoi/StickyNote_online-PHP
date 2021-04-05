<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
	<?php
	$username=$_POST["uname"];
	$password=$_POST["pwd"];
	$check=false;
	// tạo connection
	$link = mysqli_connect("localhost","root","","info");
	// kiểm tra connection
	if (!$link) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	 
	$sql = "SELECT id, Username, Password FROM login";
	$result = mysqli_query($link, $sql);
	 
	if (mysqli_num_rows($result) > 0) {
	    // kiểm tra tên và mật khẩu
	    while($row = mysqli_fetch_assoc($result)) {
	    	if (($username==$row["Username"]) and ($password==$row["Password"])){
	    		$check=true;
	    	}
	    }
	    	if ($check==true){
	    		echo "Hi, $username";
	    	} else {
	    		echo"Wrong, check again";
	    	}
	       /* echo "id: " . $row["id"]. " - Name: " . $row["Username"]. " "
	            . $row["Password"]. "<br>"; */
	    
	}
	 
	mysqli_close($link);
	?>
	</center>
</body>
</html>