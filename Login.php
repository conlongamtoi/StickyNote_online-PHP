<!DOCTYPE html>
<html>
<head>
	<title>Thông báo</title>
</head>
<body>
	<center>
	<?php
	$username=$_POST["username"];
	$password=$_POST["password"];
	$check=false;
	// tạo connection
	$link = mysqli_connect("localhost","root","","info");
	// kiểm tra connection
	if (!$link) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//lấy dữ liệu	 
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
	}	 
	mysqli_close($link);
	?>
	</center>
</body>
</html>