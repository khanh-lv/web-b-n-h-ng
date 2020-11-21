<?php
	$sql='select * from danhmucsanpham';
	$menu=[];
	$menu=resultdata($sql);
	$countitem=0;
	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $item) {
			$countitem=$countitem+$item['quantity'];
		}
	}
?>	
<script type="text/javascript">
	$(document).ready(function(){
		$cart_color=$('[name=cart_color]').val()
		if($cart_color>0){
			$('#cart_color').css("background", "#ffc235")
			$('#cart_color').css("color", "#ffffff")
			$('#cart_color').css("border-radius", "30px")
		}
	})
</script>
<div id="header">
		<div class="container-fluid">
			<div class="row" id="header-header">
				<div class="container">
					<div class="col-md-9">
						<span style="color: green;">Chào mừng bạn đến với trang web Shrek-Juice.Com</span>
					</div>
					<div class="col-md-3">
						<a href="../trang quan tri/login.php"><span>Log in</span></a>
						<a href="thanhtoan.php"><span>Thanh toán</span></a>
						<a href="trangsanpham.php"><span>Sản phẩm</span></a>		
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
			        	<a class="navbar-brand" href="index.php"><img src="../image/logo/logo5.jpg" title="Shrek-Juice.Com"></a>
			   		</div>
 
					<ul class="nav navbar-nav">
						<li><a href="index.php">Trang chủ</a></li>
						<li class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="trangsanpham.php">Menu
						 	<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php
										foreach ($menu as $row) {
											echo '<li><a href="trangsanpham.php?id_danhmuc='.$row['id_danhmuc'].'"><span >'.$row['tendanhmuc'].'</span></a></li>';
										}
									?>
								</ul>
						</li>
					    <li><a href="gioithieu.php">Giới thiệu</a></li>
				        <li><a href="nhuongquyen.php">Nhượng quyền</a></li>
					    <li><a href="phucvu.php">Phục vụ</a></li>
					    <li><a href="phanhoi.php">Phản hồi và liên hệ</a></li>
					    <li>
					    	<a href="thanhtoan.php" id="cart_color">
					    		<input type="text" name="cart_color" value="<?=$countitem?>" style="display: none;">
					    		<span class="glyphicon glyphicon-shopping-cart" style="font-size: 16px;"><?=$countitem?></span>
					    	</a>
					    </li>
					</ul>
					<div id="search">
						<form action="trangsanpham.php">
						    <div class="input-group">
						      <input type="text" class="form-control" placeholder="sản phẩm..." name="search">
						      <div class="input-group-btn">
						        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						      </div>
						    </div>
						</form>
					</div>
				</div>	
		</nav>
	</div>