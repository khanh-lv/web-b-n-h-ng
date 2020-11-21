<?php
	session_start();
	require_once('../Database/database.php');
	//gio hang
	if(isset($_SESSION['cart'])){
		if(isset($_GET['item'])&&$_GET['item']!=""){
			$item=$_GET['item'];
			if(isset($_SESSION['cart'][$item])){
				$_SESSION['cart'][$item]['quantity']++;
			}else{
				$sql='select * from sanpham where id_sanpham='.$item;
				$data=resultdata($sql);
				if(!empty($data)){
					foreach ($data as $row) {
						$_SESSION['cart'][$item]=[
							"quantity"=>1,
							"id"=>$row['id_sanpham']
						];
					}
				}else{
					echo 'Sản phẩm đã chọn không hợp lệ!';
				}
			}
		}
	}else{
		if(isset($_GET['item'])&&$_GET['item']!=""){
			$item=$_GET['item'];
			$sql='select * from sanpham where id_sanpham='.$item;
				$data=resultdata($sql);
				if(!empty($data)){
					foreach ($data as $row) {
						$_SESSION['cart'][$item]=[
							"quantity"=>1,
							"id"=>$row['id_sanpham']
						];
					}
				}else{
					echo 'Sản phẩm đã chọn không hợp lệ!';
				}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Chào mừng bạn đến với Shrek-Juice.Com</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <style type="text/css">
    	#product_button{
    		border: solid 2px #ffc235;
    		background: #ffc235;
    		color: #ffffff;
    		width: 200px;
    		height: 50px;
    	}
    	#product_button:hover{
    		background: #563b06;
    		border: none;
    	}
    </style>
</head>
<body>
	<!--header start-->
	<?php
		require_once('header.php');
	?>
	<!--header end-->
	<!--content start-->
	<div id="content" style="margin-top: 1%;">
		<!-- carousel-->
		<div class="container-fluid">
		  	<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 500px; width: 100%;">

		    	<!-- Wrapper for slides -->
		    	<div class="carousel-inner" role="listbox">

		    		<div class="item active">
						<img src="https://cdn.tgdd.vn/Files/2018/06/18/1096175/cach-lam-cac-loai-nuoc-ep-giam-can-giam-mo-bung-lam-dep-da-hieu-qua-nhat-5.jpg" style="width:100%;height:auto;">
		      		</div>
		   		</div>

			</div>
		</div>
		<!--san pham hot-->
		<div class="container-fluid" style="margin-top: 5%;margin-bottom: 2%; background:#fff5e5;">
			<div class="row">
				<div class="container">
					<div class="col-md-4" style="text-align: center;">
						<span style="color: #adacab;line-height:27px;">---------------------------------------------------------------------------</span>
					</div>
					<div class="col-md-4" style="text-align: center;">
						<span class="text-uppercase" style="color: #c48648;font-size: 24px;">sản phẩm nổi bật</span>
					</div>
					<div class="col-md-4" style="text-align: center;">
						<span style="color: #adacab;line-height:27px;">---------------------------------------------------------------------------</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<?php
						$sql='select * from sanpham where id_danhmuc in(4,5) order by tensanpham limit 4';
						$productlist=resultdata($sql);
						if(!empty($productlist)){
							foreach ($productlist as $row) {
								echo '<div class="col-md-3" id="product" style="margin-top:2%;margin-bottom:2%;padding-left:20px;padding-right:20px;background:#fff5e5;">
										<img src="'.$row['anh'].'" class="img-thumbnail img-responsive">
										<a href="chitietsanpham.php?id_sanpham='.$row['id_sanpham'].'"><p class="text-uppercase">'.$row['tensanpham'].'</p></a>
										<p style="color:red;">Giá tiền:'.$row['giatien'].' VND</p>
										<a href="?item='.$row['id_sanpham'].'"><button type="button" class="btn btn-default">Thêm vào giỏ hàng</button></a>
									</div>';
							}
						}else{
							echo '<h1 class="text-danger text-uppercase text-center">không có sản phẩm nào!</h1>';
						}
					?>	
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-md-4" style="text-align: center;">
						<span style="color: #adacab;line-height:27px;">---------------------------------------------------------------------------</span>
					</div>
					<div class="col-md-4" style="text-align: center;">
						<span class="text-uppercase" style="color: #c48648;font-size: 24px;">sản phẩm gợi ý</span>
					</div>
					<div class="col-md-4" style="text-align: center;">
						<span style="color: #adacab;line-height:27px;">---------------------------------------------------------------------------</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<?php
						$sql='select *from sanpham where id_danhmuc in(3,2) order by tensanpham limit 4';
						$productlist=resultdata($sql);
						if(!empty($productlist)){
							foreach ($productlist as $row) {
								echo '<div class="col-md-3" id="product" style="margin-top:2%;margin-bottom:2%;padding-left:20px;padding-right:20px;background:#fff5e5;">
										<img src="'.$row['anh'].'" class="img-thumbnail img-responsive">
										<a href="chitietsanpham.php?id_sanpham='.$row['id_sanpham'].'"><p class="text-uppercase">'.$row['tensanpham'].'</p></a>
										<p style="color:red;">Giá tiền:'.$row['giatien'].' VND</p>
										<a href="?item='.$row['id_sanpham'].'"><button type="button" class="btn btn-default">Thêm vào giỏ hàng</button></a>
									</div>';
							}
						}else{
							echo '<h1 class="text-danger text-uppercase text-center">không có sản phẩm nào!</h1>';
						}
					?>	
				</div>
			</div>
			<div class="row" style="text-align: center;margin-bottom: 20px;">
				<div class="col-md-12">
					<a href="trangsanpham.php"><button type="button" id="product_button">Xem tất cả sản phẩm</button></a>
				</div>
			</div>
		</div>
	</div>
	<!--content end-->
	<!--footer start-->
	<?php
		require_once('footer.php');
	?>
	<!--footer end-->
</body>
</html>