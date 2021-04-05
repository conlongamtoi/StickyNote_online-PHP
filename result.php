<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
</head>
<body>
	<center>
	<?php 
		$uname=$_POST["uname"];
		$pwd=$_POST["pwd"];
		$pwd1=$_POST["pwd1"];
		if ($pwd==$pwd1) {
		/* Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu) */
		$link = mysqli_connect("localhost", "root", "", "info");
 
		// Kiểm tra kết nối
		if($link === false){
		    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
		}
		 
	// Thực thi câu lệnh insert
		$sql = "INSERT INTO login (Username, Password) VALUES ('$uname', '$pwd')";
		if(mysqli_query($link, $sql)){
		    echo ("Đăng kí thành công");
		} else{
		    echo "ERROR: Không thể thực thi $sql. " . mysqli_error($link);
		}
 
	// Đóng kết nối
		mysqli_close($link);
		}else{
			echo"Mật khẩu không khớp, vui lòng bấm Back và gõ lại";
		}
	?>
	<button onclick="window.location.href='Trang_chu.php'">Về trang chủ</button>
	</center>
</body>
</html>