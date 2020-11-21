<?php
	require_once('../Database/database.php');
?>
<!DOCTYPE html>
<html>
<head>
		
	  <title>Welcome to Admintration Page</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <style>
	  body {
	    position: relative; 
	  }
	  .img-thumbnail{
	  	max-width: 50px;
	  }
	  </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			    <div class="navbar-header">
			    	<a class="navbar-brand" href="admin_page.php">Administrators</a>
			    </div>
			    <div>
			      <div class="collapse navbar-collapse" id="myNavbar">
				        <ul class="nav navbar-nav">
				        	<li ><a href="admin_page.php">Quản Lý Danh Mục</a></li>
				        	<li><a href="quanlysanpham.php">Quản Lý Sản Phẩm</a></li>
				        	<li  class="active"><a href="danhsachnhuongquyen.php">Danh Sách Đăng Kí Nhượng Quyền</a></li>
				        	<li><a href="feedbacklist.php">Ý Kiến Phản Hồi</a></li>
				        	<li><a href="orderlist.php">Đơn Hàng</a></li>
				        </ul>
			        	<ul class="nav navbar-nav navbar-right">
					        <li><a href="../Shrek-juice.com/index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					    </ul>
			      </div>
			    </div>
			</div>
	</nav>     

	<div class="container" style="margin-top: 7%;">
			<div class="panel panel-primary">
				<div class="panel-heading text-uppercase ">Danh sách đăng kí nhượng quyền thương hiệu</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Họ tên</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ cửa hàng</th>
								<th>Nghề nghiệp</th>
								<th>Vốn đầu tư(VND)</th>
								<th>Kinh nghiệm kinh doanh</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql='select * from nhuongquyen';
								$data=resultdata($sql);
								if(!empty($data)){
									$count=1;
									foreach ($data as $row) {
										echo '<tr>
												<td>'.$count.'</td>
												<td>'.$row['hoten'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['sodienthoai'].'</td>
												<td>'.$row['diachi'].'</td>
												<td>'.$row['nghenghiep'].'</td>
												<td>'.$row['von'].'</td>
												<td>'.$row['kinhnghiem'].'</td>
											</tr>';
										$count++;
									}
								}else{
									echo '<h4 class="text-uppercase text-center text-danger">Không có đăng kí nhượng quyền thương hiệu nào!</h4>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</body>
</html>