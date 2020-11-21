<?php
	require_once('../Database/database.php');
	$status="";
	if(isset($_GET['name'])&&$_GET['name']!=""){
		$status=$_GET['name'];
	}else if(isset($_GET['id_danhmuc'])&&$_GET['id_danhmuc']!=""){
		$status="editmenu";
	}else if(isset($_GET['id_sanpham'])&&$_GET['id_sanpham']!=""){
		$status="editproduct";
	}else{
		header('location:index.php');
	}
	//sua danh muc san pham
	if(isset($_GET['id_danhmuc'])&&$_GET['id_danhmuc']!=""){
		$sql='select * from danhmucsanpham where id_danhmuc='.$_GET['id_danhmuc'];
		$menu_item="";
		$data=resultdata($sql);
		if(!empty($data)){
			foreach ($data as $row) {
				$menu_item=$row['tendanhmuc'];
			}
		}else{
			die();
		}
		if(isset($_POST['menu_item_new'])&&$_POST['menu_item_new']!=""){
			$sql='update danhmucsanpham set tendanhmuc="'.$_POST['menu_item_new'].'" where id_danhmuc='.$_GET['id_danhmuc'];
			execute($sql);
			header('location:');
		}
	}
	//
	//sua thong tin san pham
	if(isset($_GET['id_sanpham'])&&$_GET['id_sanpham']!=""){
		$sql='select * from sanpham where id_sanpham='.$_GET['id_sanpham'];
		$data=resultdata($sql);
		$product_name=$product_id_danhmuc=$product_price=$product_link=$product_describe="";
		if(!empty($data)){
			foreach ($data as $row) {
				$product_name=$row['tensanpham'];
				$product_id_danhmuc=$row['id_danhmuc'];
				$product_price=$row['giatien'];
				$product_link=$row['anh'];
				$product_describe=$row['mota'];
			}
		}else{
			die();
		}
		if(isset($_POST['product_name'])&&isset($_POST['product_id_danhmuc'])&&isset($_POST['product_price'])&&isset($_POST['product_link'])&&isset($_POST['product_describe'])){
			if($_POST['product_name']!=""&&$_POST['product_id_danhmuc']!=""&&$_POST['product_price']!=""&&$_POST['product_link']!=""
				&&$_POST['product_describe']!=""){
				$sql='update sanpham set tensanpham="'.$_POST['product_name'].'" where id_sanpham='.$_GET['id_sanpham'];
				execute($sql);
				$sql='update sanpham set id_danhmuc="'.$_POST['product_id_danhmuc'].'" where id_sanpham='.$_GET['id_sanpham'];
				execute($sql);
				$sql='update sanpham set giatien="'.$_POST['product_price'].'" where id_sanpham='.$_GET['id_sanpham'];
				execute($sql);
				$sql='update sanpham set anh="'.$_POST['product_link'].'" where id_sanpham='.$_GET['id_sanpham'];
				execute($sql);
				$sql='update sanpham set mota="'.$_POST['product_describe'].'" where id_sanpham='.$_GET['id_sanpham'];
				execute($sql);
				header('location:quanlysanpham.php');
			}
		}
	}
	//
	//tao danh muc san pham moi
	if(isset($_POST['tendanhmuc'])&&$_POST['tendanhmuc']!=""){
		$sql='insert into danhmucsanpham(tendanhmuc) values("'.$_POST['tendanhmuc'].'")';
		execute($sql);
	}
	//
	//them san pham moi
	if(isset($_POST['name'])&&isset($_POST['id_danhmuc'])&&isset($_POST['price'])&&isset($_POST['link'])&&isset($_POST['describe'])){
		var_dump($_POST);
		if($_POST['name']!=""&&$_POST['id_danhmuc']!=""&&$_POST['price']!=""&&$_POST['link']!=""&&$_POST['describe']!=""){
			$sql='insert into sanpham(tensanpham,id_danhmuc,giatien,anh,mota) values
			("'.$_POST['name'].'","'.$_POST['id_danhmuc'].'","'.$_POST['price'].'","'.$_POST['link'].'","'.$_POST['describe'].'")';
			var_dump($sql);
			execute($sql);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$status=$('[name=status]').val()
			if($status=="danhmuc"){
				$('#createmenu').show()
				$('#editmenu').hide()
				$('#editproduct').hide()
				$('#createproduct').hide()
			}else if($status=="sanpham"){
				$('#createmenu').hide()
				$('#editmenu').hide()
				$('#editproduct').hide()
				$('#createproduct').show()
			}else if($status=="editmenu"){
				$('#createmenu').hide()
				$('#editmenu').show()
				$('#editproduct').hide()
				$('#createproduct').hide()
			}else if($status=="editproduct"){
				$('#createmenu').hide()
				$('#editmenu').hide()
				$('#editproduct').show()
				$('#createproduct').hide()
			}
		})
	</script>
	<style type="text/css">
		.navbar-inverse{
			border-radius: 0px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
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
				        	<li ><a href="admin_page.php">Quản Lý Danh Mục</a></li>
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
	<div class="container">
		<input type="text" name="status" value="<?=$status?>" style="display: none;">
		<div class="panel panel-primary" id="editmenu">
			<div class="panel-heading">
				<h4 class="text-uppercase text-center">Sửa danh mục sản phẩm</h4>
			</div>
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
						<label>Tên danh mục</label>
						<input type="text" name="menu_item_new" class="form-control" value="<?=$menu_item?>">
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Cập nhật</button>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-primary" id="createmenu">
			<div class="panel-heading">
				<h4 class="text-uppercase text-center">Tạo danh mục sản phẩm mới</h4>
			</div>
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
						<label>Tên danh mục</label>
						<input type="text" name="tendanhmuc" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Tạo danh mục</button>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-primary" id="editproduct">
			<div class="panel-heading">
				<h4 class="text-uppercase text-center">Sửa thông tin sản phẩm</h4>
			</div>
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
						<label>Tên sản phẩm</label>
						<input type="text" name="product_name" class="form-control" value="<?=$product_name?>">
					</div>
					<div class="form-group">
						<label>ID Danh mục</label>
						<input type="text" name="product_id_danhmuc" class="form-control" value="<?=$product_id_danhmuc?>">
					</div>
					<div class="form-group">
						<label>Giá tiền</label>
						<input type="text" name="product_price" class="form-control" value="<?=$product_price?>">
					</div>
					<div class="form-group">
						<label>Link ảnh</label>
						<input type="text" name="product_link" class="form-control" value="<?=$product_link?>">
					</div>
					<div class="form-group">
						<label>Mô tả</label>
						<textarea name="product_describe" class="form-control"><?=$product_describe?></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Cập nhật</button>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-primary" id="createproduct">
			<div class="panel-heading">
				<h4 class="text-uppercase text-center">Thêm sản phẩm mới</h4>
			</div>
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
						<label>Tên sản phẩm</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>ID Danh mục</label>
						<input type="text" name="id_danhmuc" class="form-control">
					</div>
					<div class="form-group">
						<label>Giá tiền</label>
						<input type="text" name="price" class="form-control">
					</div>
					<div class="form-group">
						<label>Link ảnh</label>
						<input type="text" name="link" class="form-control">
					</div>
					<div class="form-group">
						<label>Mô tả</label>
						<input type="text" name="describe" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Thêm sản phẩm</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>