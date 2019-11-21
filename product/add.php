<?php 
	require "layout/header.php";
	require "libraries/function.php";
	require_once "config/config.php";
?>
<?php
	$namepro = $pricepro = $quantitypro = $descriptionpro = $image = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$error = array();

		if (empty($_POST['namepro'])) {
			$error['namepro'] = "Nhập tên sản phẩm";
		}else {
			$namepro = $_POST['namepro'];
		}

		if (empty($_POST['quantitypro'])) {
			$error['quantitypro'] = "Nhập số lượng sản phẩm";
		}else{
			$quantitypro = $_POST['quantitypro'];
		}

		if (empty($_POST['pricepro'])) {
			$error['pricepro'] = "Giá của sản phẩm";
		}else{
			$pricepro = $_POST['pricepro'];
		}

		if (empty($_POST['descriptionpro'])) {
			$error['descriptionpro'] = "Mô tả một vài chi tiết về sản phẩm";
		}else{
			$descriptionpro = $_POST['descriptionpro'];
		}

		if (!empty($_FILES['image'])) {
			$error['image'] = 'Hình ảnh của sản phẩm';
		}else {
			$image = $_POST['image'];
		}

		if ($_FILES['image']['error'] == 0) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
		}
		$query = "INSERT INTO product(name, qty, price, description, thunbar) VALUES('$namepro', '$quantitypro', '$pricepro', '$descriptionpro', '$image')";
		mysqli_connect($conn, $query);
	}
?>
		<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header">Thêm mới sản phẩm</h1>
				</div>
			</div> 
				<!-- /. ROW  -->
			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							Bảng chi tiết sản phẩm
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<form action="" class="form-add-product" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="">Tên sản phẩm: </label>
										<input type="text" class="form-control" id="namepro" name="namepro" placeholder="Tên sản phẩm" value="<?php set_value('namepro') ?>">
										<?php form_error('namepro') ?>
									</div>
									<div class="form-group">
										<label for="">Số lượng sản phẩm: </label>
										<input type="number" min="1" class="form-control" id="quantitypro" name="quantitypro" placeholder="Từ 1 sản phẩm trở lên" value="<?php set_value('quantitypro')?>">
										<?php form_error('quantitypro') ?>
									</div>
									<div class="form-group">
										<label for="">Giá sản phẩm: </label>
										<input type="text" id="pricepro" name="pricepro" class="form-control" placeholder="Giá sản phẩm" value="<?php set_value('pricepro') ?>">
										<?php form_error('pricepro') ?>
									</div>
									<div class="form-group">
										<label for="">Mô tả sản phẩm: &emsp;</label>
										<textarea id="descriptionpro" name="descriptionpro" cols="60" rows="7"></textarea>
										<?php form_error('descriptionpro') ?>
									</div>
									<div class="form-group">
										<label for="">Hình ảnh sản phẩm: </label>
										<input type="file" id="image" name="image" class="form-control">
										<?php form_error('image') ?>
									</div>
									<div class="form-group">
										<button class="btn btn-success" type="submit">Lưu</button>
									</div>
								</form>
							</div>
						</div>
					</div>
						<!--End Advanced Tables -->
				</div>
			</div>
		</div>
<?php
	require "layout/footer.php";
 ?>