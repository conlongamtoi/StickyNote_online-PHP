<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
</head>
<body>
	<center>
	<?php 
		$username=$_POST["username"];
		$password=$_POST["password"];
		$password1=$_POST["password1"];
		$match=false;
		$fail=false;
	/* Kết nối máy chủ MySQL */
		$link = mysqli_connect("localhost", "root", "", "info");
 
	// Kiểm tra kết nối
		if($link === false){
		    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
		}	
		if ($password==$password1 and $password!='' and $username!='' and strlen($password)>=6) {
	
	//Kiểm tra tên đăng nhập
		$sql = "SELECT id, Username FROM login";
		$result = mysqli_query($link, $sql);
		while($row = mysqli_fetch_assoc($result)) {
	    	if ($username==$row["Username"]){
	    		$match=true;
	    	}
	    }
	} else{
		echo"Tên đăng nhập hoặc mật khẩu không đủ điều kiện, vui lòng thử lại";
		$fail=true;
	}    
	//Insert dữ liệu 
			if ($match==false and $fail==false){
		$sql = "INSERT INTO login (Username, Password) VALUES ('$username', '$password')";
		if(mysqli_query($link, $sql)){
		    echo ("Đăng kí thành công");
		} else{
		    echo "ERROR: Không thể thực thi $sql. " . mysqli_error($link);
		}
 

		}else if($match==true and $fail==false){
			echo "Trùng tên đăng nhập, vui lòng thử lại";
		}
	// Đóng kết nối
		mysqli_close($link);
	?>
	<br>
	<button onclick="window.location.href='Trang_chu.php'">Về trang chủ</button>
	</center> 
</body>
</html>