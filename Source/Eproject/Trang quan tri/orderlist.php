<?php
	require_once('../Database/database.php');
	$status="";
	if(isset($_GET['id_donhang'])&&$_GET['id_donhang']!=""){
		$id_donhang=$_GET['id_donhang'];
		$sql='select chitietdonhang.id_donhang,sanpham.anh,sanpham.tensanpham,chitietdonhang.soluong,chitietdonhang.tongtien from chitietdonhang,sanpham where chitietdonhang.id_donhang='.$id_donhang.' and chitietdonhang.id_sanpham=sanpham.id_sanpham';
		$orderdetail=resultdata($sql);
		if(!empty($orderdetail)){
			$status="1";
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
	  <script type="text/javascript">
	  	$(document).ready(function(){
	  		if($('[name=status]').val()==""){
	  			$('#orderlist').show()
	  			$('#orderdetail').hide()
	  		}else{
	  			$('#orderlist').hide()
	  			$('#orderdetail').show()
	  		}
	  	})
	  </script>
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
				        	<li><a href="feedbacklist.php">Ý Kiến Phản Hồi</a></li>
				        	<li class="active"><a href="orderlist.php">Đơn Hàng</a></li>
				        </ul>
			        	<ul class="nav navbar-nav navbar-right">
					        <li><a href="../Shrek-juice.com/index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					    </ul>
			      </div>
			    </div>
			</div>
	</nav>     

	<div class="container" style="margin-top: 7%;">
			<input type="text" name="status" value="<?=$status?>" style="display: none;">
			<div class="panel panel-primary" id="orderlist">
				<div class="panel-heading text-uppercase ">Danh sách đơn hàng </div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>ID đơn hàng</th>
								<th>Thời gian đặt hàng</th>
								<th>Tên khách hàng</th>
								<th>Địa chỉ giao hàng</th>
								<th>Số điện thoại</th>
								<th>Tổng tiền</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql='select * from donhang';
								$data=resultdata($sql);
								if(!empty($data)){
									$count=1;
									foreach ($data as $row) {
										echo '<tr>
												<td>'.$count.'</td>
												<td>'.$row['id_donhang'].'</td>
												<td>'.$row['thoigiandathang'].'</td>
												<td>'.$row['tenkhachhang'].'</td>
												<td>'.$row['diachigiaohang'].'</td>
												<td>'.$row['sodienthoai'].'</td>
												<td>'.$row['tongtien'].'</td>
												<td><a href="?id_donhang='.$row['id_donhang'].'">chi tiết đơn hàng</a></td>
											</tr>';
										$count++;
									}
								}else{
									echo '<h4 class="text-uppercase text-center text-danger">Không có đơn hàng nào được đặt!</h4>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-primary" id="orderdetail">
				<div class="panel-heading text-uppercase ">chi tiết đơn hàng</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Hình ảnh sản phẩm</th>
								<th>Tên Sản phẩm</th>
								<th>Số lượng</th>
								<th>Tổng tiền</th>
							</tr>
						</thead>
						<tbody>
							<?php
								if(!empty($orderdetail)){
									$count=1;
									foreach ($orderdetail as $row) {
										echo '<tr>
												<td>'.$count.'</td>
												<td><img src="'.$row['anh'].'" class="img-thumbnail"></td>
												<td>'.$row['tensanpham'].'</td>
												<td>'.$row['soluong'].'</td>
												<td>'.$row['tongtien'].'</td>
											</tr>';
										$count++;
									}
								}else{
									echo '<h4 class="text-uppercase text-center text-danger">Không có sản phẩm trong đơn hàng này!</h4>';
								}
							?>
							<tr>
								<th colspan="5"><a href="orderlist.php"><button type="button" class="btn btn-primary" style="width: 100px;height: 35px;">Back</button></a></th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</body>
</html>