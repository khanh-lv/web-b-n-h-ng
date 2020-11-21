<?php
	session_start();
	require_once('../Database/database.php');
//cap nhat so luong san pham da chon
	if(isset($_POST['updateitem'])){
		foreach ($_SESSION['cart'] as $id_sanpham => $value) {
			if($_POST[$id_sanpham]==0){
				unset($_SESSION['cart'][$id_sanpham]);
			}else{
				$_SESSION['cart'][$id_sanpham]['quantity']=$_POST[$id_sanpham];
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
</head>
<body>
	<!--header start!-->
	<?php
		require_once('header.php');
	?>
	<!--header end!-->
	<!--content start-->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<form method="POST">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>STT</th>
									<th>Thumbnail</th>
									<th>Tên sản phẩm</th>
									<th>Giá tiền</th>
									<th>Số lượng</th>
									<th>Thành tiền</th>
								</tr>
							</thead>
							<tbody>
							<!--hien thi hoa don-->
								<?php
									if(isset($_SESSION['cart'])){
										$count=1;
										$sql='select *from sanpham where id_sanpham in(';
										foreach ($_SESSION['cart'] as $item =>$value) {
											$sql=$sql.$item.',';
										}
										$sql=substr($sql, 0,strlen($sql)-1);
										$sql=$sql.') order by tensanpham ASC';
										$itemlist=resultdata($sql);
										$sum=0;
										if(!empty($itemlist)){
											foreach ($itemlist as $row) {
												echo '<tr>
													<th >'.$count.'</th>
													<th ><img src="'.$row['anh'].'" class="img-thumbnail img-responsive" width="50px;"></th>
													<th>'.$row['tensanpham'].'</th>
													<th>'.$row['giatien'].'</th>
													<th><input type="text" name="'.$row['id_sanpham'].'" value="'.$_SESSION['cart'][$row['id_sanpham']]['quantity'].'" size="1" style="text-align:center;"></th>
													<th>'.($row['giatien']*$_SESSION['cart'][$row['id_sanpham']]['quantity']).'</th>
												</tr>';
												$count++;
												$sum=$sum+$row['giatien']*$_SESSION['cart'][$row['id_sanpham']]['quantity'];
											}
											echo '<tr>
												<th colspan="6" class="text-right text-uppercase text-danger">Total:'.$sum.'</th>
											</tr>';
										}else{
											echo '<h3>không có sản phẩm trong giỏ hàng</h3>';
										}
									}else{
										echo '<h3>không có sản phẩm trong giỏ hàng</h3>';
									}

								?>
								<tr>
									<th colspan="6"><button type="submit" class="btn btn-warning" name="updateitem">Cập nhật giỏ hàng</button></th>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
	<?php
	//xu li thong tin khach hang va them vao database
		if(isset($_POST['fullname'])&&isset($_POST['address'])&&isset($_POST['phone'])){
			if ($_POST['fullname']!=""&&$_POST['address']!=""&&$_POST['phone']!="") {
				$fullname=$_POST['fullname'];
				$address=$_POST['address'];
				$phone=$_POST['phone'];
				date_default_timezone_set('Asia/Bangkok');
				$book_time=date('y/m/d h:m:s A',time());
				$sql='insert into donhang(thoigiandathang,tenkhachhang,diachigiaohang,sodienthoai,tongtien) values
				("'.$book_time.'","'.$fullname.'","'.$address.'","'.$phone.'",'.$sum.')';
				execute($sql);

				$sql='select id_donhang from donhang order by id_donhang DESC limit 1';
				$donhang_idlist=resultdata($sql);
				$id_donhang="";
				foreach ($donhang_idlist as $row) {
					$id_donhang=$row['id_donhang'];
				}
				foreach ($_SESSION['cart'] as $item) {
					$price="";
					$sql='select giatien from sanpham where id_sanpham='.$item['id'];
					$pricelist=resultdata($sql);
					foreach ($pricelist as $row) {
						$price=$row['giatien'];
					}
					$total=$item['quantity']*$price;
					$sql='insert into chitietdonhang(id_donhang,id_sanpham,soluong,tongtien) values
					('.$id_donhang.','.$item['id'].','.$item['quantity'].','.$total.')';
					execute($sql);
				}
				echo ' <script type="text/javascript">
			               window.location="process.php";
			      </script>
			      ';
			}	
		}
	?>
				<div class="col-md-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="text-uppercase text-center">Thông tin khách hàng</h4>
						</div>
						<div class="panel-body">
							<form method="POST">
								<div class="form-group">
									<label>Họ tên:</label>
									<input type="text" name="fullname" class="form-control" placeholder="enter fullname...">
								</div>
								<div class="form-group">
									<label>Địa chỉ giao hàng:</label>
									<input type="text" name="address" class="form-control" placeholder="enter address...">
								</div>
								<div class="form-group">
									<label>Số điện thoại:</label>
									<input type="text" name="phone" class="form-control" placeholder="enter phone number...">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-success" style="background: #ffc235;border: none;">Xác nhận đặt hàng</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--content end!-->
	<!--footer start!-->
	<?php
		require_once('footer.php');
	?>
	<!--footer end!-->

</body>
</html>