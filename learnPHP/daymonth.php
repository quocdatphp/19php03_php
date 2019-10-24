<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ngày tháng</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$n = "";
		if (isset($_POST["number"])) {
			$n = $_POST["number"];
			switch ($n) {
				case '1':
				case '3':
				case '5':
				case '7':
				case '8':
				case '10':
				case '12':
					echo "thang". " ".$n." "."co 31 ngay";
					break;
				case '2':
					echo "thang". " ".$n." "."co 28 hoac 29 ngay";
				default:
					echo "thang". " ".$n." "."co 30 ngay";
					break;
			}
		}
	?>
	<h1>Mời bạn nhập ngày</h1>
	<form action="" method="post">
		<p>Chỉ được nhập từ 1 đến 12: <input type="number" name="number" id="number" max="12" min="1" value="<?php echo $n ?>"></p>
		<input type="submit" value="kiểm tra" name="submit">
	</form>
</body>
</html>