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
		//kiểm tra trùng lặp
		$match=false;
		// tạo connection
		$link = mysqli_connect("localhost","root","","info");
		// kiểm tra connection
		if (!$link) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		 
		$sql1 = "SELECT id, Username, FROM login";
		$result = mysqli_query($link, $sql1);
		 
		if (mysqli_num_rows($result) > 0) {
		    // kiểm tra tên và mật khẩu
		    while($row = mysqli_fetch_assoc($result)) {
		    	if ($uname==$row["Username"]){
		    		$match=true;
		    	}
		    }
		}
		 if ($pwd==$pwd1 and $pwd!='' and $uname!='') {
		/* Kết nối máy chủ MySQL */
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
			echo "Lỗi mật khẩu, vui lòng quay lại";
		}
	?>
	<button onclick="window.location.href='Trang_chu.php'">Về trang chủ</button>
	</center> 
</body>
</html>