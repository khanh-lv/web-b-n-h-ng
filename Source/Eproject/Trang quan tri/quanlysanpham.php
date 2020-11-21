<?php
	require_once('../Database/database.php');
	if(isset($_GET['ac'])&&isset($_GET['id_sanpham'])){
		if($_GET['ac']=="del"&&$_GET['id_sanpham']!=""){
			$id_sanpham=$_GET['id_sanpham'];
			$sql= 'delete from sanpham where id_sanpham='.$id_sanpham;
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
				        	<li class="active"><a href="quanlysanpham.php">Quản Lý Sản Phẩm</a></li>
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
		<div class="container" style="margin-top:7%">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span>Bảng Danh Sách Sản Phẩm</span>
					<a href="handling.php?name=sanpham" style="margin-left: 70%;"><button type="bunton" class="btn btn-link" style="color: red;">Thêm Sản Phẩm</button></a>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>Thumbnail</th>
								<th>Tên Sản Phẩm</th>
								<th>ID Danh Mục</th>
								<th>Giá Tiền(VND)</th>
								<th>Mô Tả</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql='select * from sanpham';
								$count=countdata($sql);
								$page=ceil($count/10);
								$currentpage=1;
								$page_input=$currentpage;
								if(isset($_GET['page'])&&$_GET['page']!=""){
									$currentpage=$_GET['page'];
								}
								$start=($currentpage-1)*10;
								$sql='select * from sanpham limit '.$start.',10';
								$productlist=[];
								$productlist=resultdata($sql);
								if(!empty($productlist)){
									foreach ($productlist as $row) {
										echo '<tr>
												<td><img src="'.$row['anh'].'" class="img-thumbnail"></td>
												<td width="200px;" class="text-uppercase">'.$row['tensanpham'].'</td>
												<td width="200px;">'.$row['id_danhmuc'].'</td>
												<td width="150px;">'.$row['giatien'].'</td>
												<td>'.substr($row['mota'],0,100).'...'.'</td>
												<td><a href="handling.php?id_sanpham='.$row['id_sanpham'].'"><button type="button" class="btn btn-warning">Sửa</button></a></td>
												<td><a href="?ac=del&id_sanpham='.$row['id_sanpham'].'#section2"><button type="button" class="btn btn-danger">Xóa</button></a></td>
											</tr>';
										}
								}else{
									echo '<h4 class="text-uppercase text-center text-danger">Không có sản phẩm!</h4>';
								}
							?>
							<tr>
								<th colspan="8">
									<ul class="pagination">
										<?php
											for($i=0;$i<$page;$i++){
												echo '<li><a href="?page='.($i+1).'">'.($i+1).'</a></li>';
											}
										?>
									</ul>
								</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

</body>
</html>