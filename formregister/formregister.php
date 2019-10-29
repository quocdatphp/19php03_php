<?php 
	$nameErr = $emailErr = $passErr = $addErr = $phoneErr = $genderErr = $cityErr = "";
	$name = $email = $pass = $add = $phone = $gender = $city = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["usname"])) {
			$nameErr = "Tên của bạn";
		}else {
			$pattern = "[a-zA-Z0-9]";
			if (!preg_match($pattern, $_POST["usname"])) {
				$nameErr = "Tên không được chứa các kí tự";
			}else {
				$name = $_POST["usname"];
			}
		}

		if (empty($_POST["mail"])) {
			$emailErr = "Email của bạn";
		}else {
			$email = ($_POST["mail"]);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailErr = "email nhập không đúng định dạng";
			}
		}

		if (empty($_POST["pass"])) {
			$passErr = "chưa nhập mật khẩu";
		}else {
			$pass = ($_POST["pass"]);
		}

		if (empty($_POST["add"])) {
			$addErr = "chưa nhập địa chỉ";
		}else {
			$add = ($_POST["add"]);
		}

		if (empty($_POST["phone"])) {
			$phoneErr = "chưa nhập số điện thoại";
		}else {
			$phone = ($_POST["phone"]);
		}

		if (empty($_POST["gender"])) {
			$genderErr = "bạn chưa chọn giới tính";
		}else {
			$gender = ($_POST["gender"]);
		}
	}
		if (isset($_POST['submit-signup'])) {
			if ($_POST['submit-signup'] == 'signup') {
				echo "<script>alert('Đăng kí thành công!! Mời bạn đăng nhập')</script>";
			}
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form Register</title>
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
	<div class="containers">
		<div class="innerbox">
			<div class="pinkbox">
				<div class="signup nodisplay">
					<h1>register</h1>
					<form action="#" method="post">
						<input type="text" placeholder="username" name="usname" id="usname" value="<?php if(isset($name)) echo $name?>">
							<div class="warning"><?php echo $nameErr ?></div>
						<input type="email" placeholder="email" name="mail" id="mail" value="<?php echo $email ?>">
							<div class="warning"><?php echo $emailErr ?></div>
						<input type="password" placeholder="password" minlength="6" name="pass" id="pass" value="<?php echo $pass ?>">
							<div class="warning"><?php echo $passErr ?></div>
						<input type="text" placeholder="address" name="add" id="add" value="<?php echo $add ?>">
							<div class="warning"><?php echo $addErr ?></div>
						<input type="tel" name="phone" id="phone" pattern="(09|03|07|08|05)+[0-9]{7,8}" placeholder="vd: phone"
						 value="<?php echo $phone?>">
							<div class="warning"><?php echo $phoneErr ?></div>
						
							<div class="box-gender">
								<input type="radio" name="gender" value="<?php echo $gender ?>"><label for="">Nam</label>
								<input type="radio" name="gender" value="<?php echo $gender ?>"><label for="">Nữ</label>
								<div class="warning"><?php echo $genderErr ?></div>
							</div>
						
						<select name="city" id="">
							<option value="0" class="dropdown">Select country</option>
							<option value="1" class="select-menu" value="<?php echo $city?>">Quảng Nam</option>
							<option value="2" class="select-menu" value="<?php echo $city?>">Đà Nẵng</option>
							<div class="warning"><?php echo $cityErr ?></div>
						</select>
						<button class="button" type="submit" name="submit-signup" id="submit-signup" value="signup">create account</button>
					</form>
				</div>
				<div class="signin">
					<h1>sign in</h1>
					<form action="" method="post" class="more-padding">
						<input type="text" placeholder="your email">
						<input type="password" placeholder="password">
						<div class="checkbox">
							<input type="checkbox" id="remember"><label for="">remember me</label>
						</div>
						<button class="button" type="submit" name="submit-signin" id="submit-signin">login</button>
					</form>
				</div>
			</div>
			<div class="leftbox">
				<h2 class="title"><span>BLOOM</span>&<br>BOUQUET</h2>
				<p class="desc">pick your perfect <span>bouquet</span></p>
				<img src="img/pic1.jpg" alt="" class="flower smaller">
				<p class="account">don't have an account?</p>
				<button class="button" id="signin">login</button>
			</div>
			<div class="rightbox">
				<h2 class="title"><span>BLOOM</span>&<br>BOUQUET</h2>
				<p class="desc">pick your perfect <span>bouquet</span></p>
				<img src="img/pic2.jpg" alt="" class="flower">
				<p class="account">don't have an accout?</p>
				<button class="button" id="signup">sign up</button>
			</div>
		</div>
	</div>
	<script src="css/jquery-3.4.1.js"></script>
	<script src="js.js"></script>
</body>
</html>