<?php 
	include_once("config.php");
?>
<?php 
	$nameErr = $priceErr = $imgErr = "";
	$name = $price = $img = "";
	if (isset($_POST['product'])) {
		if (empty($_POST["name"])) {
			$nameErr = "ban chua chon ten";
		}else {
			$name = ($_POST["name"]);
		}
		if (isset($_POST["price"])) {
			$priceErr = "ban chua nhap gia";
		}else {
			$price = ($_POST["price"]);
		}
		$avatar = $_FILES['avt'];
		$avatarName = 'defaut.jpg';
		if ($avatar['error'] == 0) {
			// Gan ten cho avatar upload len
			$avatarName = $avatar['name'];
			// Upload file vao thu muc
			move_uploaded_file($avatar['tmp_name'], 'uploads/'.$avatarName);
		}
	}
	$sql = "INSERT INTO user(name, price, image) VALUES ('$name', '$price', '$img')";
			// thuc thi cau lenh sql
			mysqli_query($con, $sql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>san pham</title>
</head>
<body>
	<form action="#" method="POST" name="product" id="product" enctype="multipart/form-data">
		<p>
			name <input type="text" name="name" id="name">
		</p>
		<p>
			price <input type="text" name="price" id="price">
		</p>
		<p>
			image <input type="file" name="avt" id="avt">
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>