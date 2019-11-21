<?php 
	$conn = mysqli_connect("127.0.0.1", "root", "", "prod");

	if (mysqli_connect_errno()) {
		echo "Lỗi kết nối đến database" .mysqli_connect_errno();
	}
 ?>