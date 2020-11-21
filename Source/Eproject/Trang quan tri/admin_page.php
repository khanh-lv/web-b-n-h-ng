<?php
	require_once('../Database/database.php');
	if(isset($_GET['ac'])&&isset($_GET['id_danhmuc'])){
		if($_GET['ac']=="del"&&$_GET['id_danhmuc']!=""){
			$id_danhmuc=$_GET['id_danhmuc'];
			$sql='delete from sanpham where id_danhmuc='.$id_danhmuc;
			execute($sql);
			$sql= 'delete from danhmucsanpham where id_danhmuc='.$id_danhmuc;
			execute($sql);
		}
	}
	
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
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" href="admin_page.php">Administrators</a>
			    </div>
			    <div>
			      <div class="collapse navbar-collapse" id="myNavbar">
				        <ul class="nav navbar-nav">
				        	<li class="active" ><a href="admin_page.php">Quản Lý Danh Mục</a></li>
				        	<li><a href="quanlysanpham.php">Quản Lý Sản Phẩm</a></li>
				        	<li><a href="danhsachnhuongquyen.php">Danh Sách Đăng Kí Nhượng Quyền</a></li>
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
		<div id="content">
			<div class="container" style="margin-top: 7%;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span>Bảng Danh Mục Sản Phẩm</span>
						<a href="handling.php?name=danhmuc" style="margin-left: 70%;"><button type="bunton" class="btn btn-link" style="color: red;">Thêm Danh Mục</button></a>
					</div>
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>STT</th>
									<th>ID Danh Mục</th>
									<th>Tên Danh Mục</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql='select *from danhmucsanpham';
									$menulist=resultdata($sql);
									$count=1;
									if(!empty($menulist)){
										foreach ($menulist as $row) {
											echo '<tr>
													<td>'.$count.'</td>
													<td>'.$row['id_danhmuc'].'</td>
													<td>'.$row['tendanhmuc'].'</td>
													<td><a href="handling.php?id_danhmuc='.$row['id_danhmuc'].'"><button type="button" class="btn btn-warning">Sửa</button></a></td>
													<td><a href="?ac=del&id_danhmuc='.$row['id_danhmuc'].'"><button type="button" class="btn btn-danger">Xóa</button></a></td>
												</tr>';
											$count++;
										}
									}else{
										echo '<h4 class="text-uppercase text-center text-danger">Không có danh mục sản phẩm!</h4>';
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</body>
</html>