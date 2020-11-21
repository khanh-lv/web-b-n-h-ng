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
				        	<li><a href="danhsachnhuongquyen.php">Danh Sách Đăng Kí Nhượng Quyền</a></li>
				        	<li  class="active"><a href="feedbacklist.php">Ý Kiến Phản Hồi</a></li>
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
				<div class="panel-heading text-uppercase ">Ý kiến phản hồi của khách hàng</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Họ tên</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Tiêu đề</th>
								<th>Ý kiến phản hồi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql='select * from phanhoi';
								$data=resultdata($sql);
								if(!empty($data)){
									$count=1;
									foreach ($data as $row) {
										echo '<tr>
												<td>'.$count.'</td>
												<td>'.$row['tenkhachhang'].'</td>
												<td>'.$row['email'].'</td>
												<td>'.$row['sodienthoai'].'</td>
												<td>'.$row['tieude'].'</td>
												<td>'.$row['phanhoi'].'</td>
											</tr>';
										$count++;
									}
								}else{
									echo '<h4 class="text-uppercase text-center text-danger">Không có ý kiến phản hồi nào từ khách hàng!</h4>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</body>
</html>