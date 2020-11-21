<?php
	session_start();
	require_once('../Database/database.php');
	if(isset($_POST['fullname'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['job'])&&isset($_POST['capital'])
	&&isset($_POST['exp'])){
		if($_POST['fullname']!=""&&$_POST['email']!=""&&$_POST['phone']!=""&&$_POST['address']!=""&&$_POST['job']!=""&&$_POST['capital']!=""&&$_POST['exp']!=""){
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$job=$_POST['job'];
			$capital=$_POST['capital'];
			$exp=$_POST['exp'];
			$sql='insert into nhuongquyen(hoten,email,sodienthoai,diachi,nghenghiep,von,kinhnghiem) values
			("'.$fullname.'","'.$email.'","'.$phone.'","'.$address.'","'.$job.'","'.$capital.'","'.$exp.'")
			';
			execute($sql);
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
    	<script type="text/javascript">
		function checkform(){
				$fullname=$('[name=fullname]').val()
				$email=$('[name=email]').val()
				$phone=$('[name=phone]').val()
				$address=$('[name=address]').val()
				$job=$('[name=job]').val()
				$capital=$('[name=capital]').val()
				$exp=$('[name=exp]').val()
				if($fullname!="" && $email!="" && $phone!="" && $address!=""&& $job!=""&& $capital!="" && $exp!=""){
					alert('Chúng tôi đã ghi nhận đơn đăng kí của bạn. Vui lòng chờ phản hồi từ quản trị viên!')
					return true
				}else{
					alert('vui lòng điền đầy đủ thông tin bên dưới!')
					return false
				}
		}
	</script>
</head>
<body>
	<!--header start-->
	<div id="header">
		<?php
			require_once('header.php');
		?>
	</div>
	<!--header end-->
	<!--content start-->
	<div id="content" style="">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span class="text-center text-uppercase">Đăng kí nhượng quyền</span>
						</div>
						<div class="panel-body">
							<form method="POST" onsubmit="return checkform()">
								<div class="form-group">
									<label>Họ tên:</label>
									<input type="text" name="fullname" class="form-control" >
								</div>
								<div class="form-group">
									<label>Email:</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label>Số điện thoại:</label>
									<input type="text" name="phone" class="form-control" >
								</div>
								<div class="form-group">
									<label>Địa chỉ kinh doanh:</label>
									<input type="text" name="address" class="form-control">
								</div>
								<div class="form-group">
									<label>Nghề nghiệp:</label>
									<input type="text" name="job" class="form-control">
								</div>
								<div class="form-group">
									<label>Vốn kinh doanh(VND):</label>
									<input type="text" name="capital" class="form-control" placeholder=">100.000.000 VND" >
								</div>
								<div class="form-group">
									<label>Kinh nghiệm kinh doanh:</label>
									<textarea name="exp" class="form-control" ></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-success" type="submit" style="background: #ffc235;border: none; width: 100px;height: 40px;">Đăng kí</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="child-1">
						<img src="../image/nhuongquyen/nhuongquyen.png" class="img-responsive" width="100%">
					</div>
					<div class="child2" style="margin-top: 2%;">
						<ul style="color: red;font-size: 18px">
							<li>Lợi nhuận cao</li>
							<li>Uy tin hàng đầu</li>
							<li>Phát triển bền vững cùng chúng tôi</li>
						</ul>
						<h3 style="color:blue">Chúng tôi sẽ phản hồi và liên hệ với bạn trong thời gian sớm nhất.</h4>
					</div>
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