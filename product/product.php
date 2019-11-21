<?php 
	session_start();
	require "layout/header.php";
	require_once "config/config.php";
?>
		<!-- /. NAV SIDE  -->
			<div id="page-wrapper" >
			<div id="page-inner">
			 <div class="row">
					<div class="col-md-12">
						<h1 class="page-header">
							Danh sách sản phẩm  <small><a href="add.php" class="btn btn-success">Thêm sản phẩm</a></small>
						</h1>
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
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Số thứ tự</th>
											<th>Tên sản phẩm</th>
											<th>số lượng sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>mô tả sản phẩm</th>
											<th>Hình ảnh sản phẩm</th>
											<th>Thao tác</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td>Trident</td>
											<td>Internet Explorer 4.0</td>
											<td>Win 95+</td>
											<td class="center">4</td>
											<td>100</td>
											<td class="center">X</td>
											<td><a href="" class="btn btn-xs btn-info">Sửa sản phẩm <i class="fa fa-edit"></i></a>
												<a href="" class="btn btn-xs btn-danger">Xoá sản phẩm <i class="fa fa-times"></i></a>
											</td>
										</tr>
										<tr class="even gradeC">
											<td>Trident</td>
											<td>Internet Explorer 5.0</td>
											<td>Win 95+</td>
											<td class="center">5</td>
											<td class="center">C</td>
										</tr>
										<tr class="odd gradeA">
											<td>Trident</td>
											<td>Internet Explorer 5.5</td>
											<td>Win 95+</td>
											<td class="center">5.5</td>
											<td class="center">A</td>
										</tr>
										<tr class="even gradeA">
											<td>Trident</td>
											<td>Internet Explorer 6</td>
											<td>Win 98+</td>
											<td class="center">6</td>
											<td class="center">A</td>
										</tr>
									</tbody>
								</table>
							</div>
							
						</div>
					</div>
					<!--End Advanced Tables -->
				</div>
			</div>
		</div>
<?php 
	include "layout/footer.php";
 ?>
