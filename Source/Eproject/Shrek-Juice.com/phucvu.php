<?php
	session_start();
	require_once('../Database/database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Chào mừng bạn đến với Shrek-Juice.Com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand"/>
    <link rel="stylesheet" href="include/css/style_directional.css" type="text/css">
    <script type="text/javascript">
    setInterval(function title1(){
		var title=document.getElementById('title');
		title.style.color='red';
	},1000);
	setInterval(function title1(){
		var title=document.getElementById('title');
		title.style.color='blue';
	},2000);
	setInterval(function title1(){
		var title=document.getElementById('title');
		title.style.color='black';
	},3000);

	 setInterval(function title1(){
		var title=document.getElementById('title2');
		title.style.color='red';
	},1000);
	setInterval(function title1(){
		var title=document.getElementById('title2');
		title.style.color='blue';
	},2000);
	setInterval(function title1(){
		var title=document.getElementById('title2');
		title.style.color='black';
	},3000);

	 setInterval(function title1(){
		var title=document.getElementById('title3');
		title.style.color='red';
	},1000);
	setInterval(function title1(){
		var title=document.getElementById('title3');
		title.style.color='blue';
	},2000);
	setInterval(function title1(){
		var title=document.getElementById('title3');
		title.style.color='black';
	},3000);

	 setInterval(function title1(){
		var title=document.getElementById('nhanhtay');
		title.style.color='red';
	},1000);
	setInterval(function title1(){
		var title=document.getElementById('nhanhtay');
		title.style.color='blue';
	},2000);
	setInterval(function title1(){
		var title=document.getElementById('nhanhtay');
		title.style.color='black';
	},3000);
    </script>
    <style type="text/css">
    	h3{
    		font-weight: bold;
    		text-align: center;
    	}
    </style>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
	<body>
	<!--header-->
	<?php
		require_once('header.php')
	?>
	<!--header end-->
	<div class="container" style="margin-top: 3%;margin-bottom: 5%;">
		<div class="row">
			<div class="col-sm-6"  style="border-right: 1px solid black;" >
				<h3 id="title">Shrek-Juice</h3>
				<p><i class="fas fa-wine-bottle" style="color: orange;font-size: 30px;"></i>Chào mừng đến với <a href="">Shrek-Juice</a>-Hân hạnh được phục vụ bạn</p>
				<table class="table">
					<tr>
						<td>Thời gian mở cửa :</td>
						<td style="color: red;">6:00 AM</td>
					</tr>
					<tr>
						<td>Thời gian đóng cửa :</td>
						<td style="color: red;">23:30 PM</td>
					</tr>
					<tr>
						<td>Thời gian nhận ship hàng:</td>
						<td style="color: red;">8:00 AM - 22:00 PM</td>
					</tr>
					<tr>
						<td>Chất lượng phục vụ:</td>
						<td><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i></td>
					</tr>
					<tr>
						<td>Chất lượng sản phẩm:</td>
						<td><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i><i class="fas fa-star" style="color: yellow;"></i></td>
					</tr>
				</table>
				<div><span> Hân hạnh được phục vụ quý khách  </span><i class="fas fa-heart" style="color: red;font-size: 20px;" ></i></div>
			</div>
			<div class="col-sm-6" style="padding-top: 5px;">
				<h3 id="title2">Chính sách phục vụ</h3>
				<div style="padding-left: 40px;">
					<i class="fas fa-play" style="color: red;"></i>Chúng tôi cam kết  sản phẩm<span style="color: red"> 100%</span><span> tự nhiên !!</span>
				</div>
				<div style="margin-top: 10px;padding-left: 40px;">
					<i class="fas fa-play" style="color: red;"></i><span>Giao hàng tận tay-thanh toán khi nhận hàng !!</span>
				</div>
				<div style="margin-top: 10px;padding-left: 40px;">
					<i class="fas fa-play" style="color: red;"></i> Cam kết hoàn lại tiền lên tới<span style="color: red"> 200%!!</span><span> nếu bị lỗi sản phẩm</span>
				</div>
				<div style="margin-top: 10px;padding-left: 40px;">
					<i class="fas fa-play" style="color: red;"></i><span>Miễn phí Giao hàng</span>
				</div>
				<div style="margin-top: 10px;padding-left: 40px;">
					<i class="fas fa-play" style="color: red;"></i><span>Các chương trình khuyến mại được cập nhập thường xuyên!!</span>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<?php
		require_once('footer.php');
	?>
</body>
</html>