<?php
	session_start();
	require_once('../Database/database.php');
	// xu ly thong tin phan hoi
	if(isset($_POST['fullname'])&& isset($_POST['email']) && isset($_POST['phone'])&& isset($_POST['title'])&& isset($_POST['feedback'])){
		if($_POST['fullname']!="" && $_POST['email']!="" && $_POST['phone']!="" && $_POST['title']!="" &&$_POST['feedback']!=""){
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$title=$_POST['title'];
			$feedback=$_POST['feedback'];
			$sql='insert into phanhoi(tenkhachhang,email,sodienthoai,tieude,phanhoi) values("'.$fullname.'","'.$email.'","'.$phone.'","'.$title.'","'.$feedback.'")';
			execute($sql);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chào mừng bạn đến với Shrek-Juice.Com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<script type="text/javascript">
		function checkform(){
				$fullname=$('[name=fullname]').val()
				$email=$('[name=email]').val()
				$phone=$('[name=phone]').val()
				$title=$('[name=title]').val()
				$feedback=$('[name=feedback]').val()
				if($fullname!="" && $email!="" && $phone!="" && $title!="" && $feedback!=""){
					alert('Chúng tôi trân thành cảm ơn ý kiến đóng góp của quý khách hàng!')
					return true
				}else{
					alert('vui lòng điền đầy đủ thông tin bên dưới!')
					return false
				}
		}
	</script>
</head>
<body>
	<?php require_once('header.php');?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="ggmap" style="height: 400px; width: 100%; padding-top: 25px">
					<iframe style="height: 350px;border: 0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9231238519146!2d105.81679641396617!3d21.035761792917327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d127a01e7%3A0xab069cd4eaa76ff2!2zMjg1IMSQ4buZaSBD4bqlbiwgTGnhu4V1IEdpYWksIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1550717864999" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 3%;margin-bottom: 3%;">
		<div class="customfrom">
			<div class="row">
				<div class="col-md-7">
					<div class="panel panel-primary" style="border-radius: 3px;">
						<div class="panel-heading">
							<span class="text-center text-uppercase">ý kiến phản hồi</span>
						</div>
						<div class="panel-body">
							<form method="POST" onsubmit="return checkform()">
								<div class="form-group">
									<label>Họ tên:</label>
									<input type="text" name="fullname" class="form-control" placeholder="Enter your full name...">
								</div>
								<div class="form-group">
									<label>E-mail:</label>
									<input type="email" name="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="form-group">
									<label>Số điện thoại:</label>
									<input type="text" name="phone" class="form-control" placeholder="Enter your phone number..." pattern={0,9}>
								</div>
								<div class="form-group">
									<label>Tiêu đề:</label>
									<input type="text" name="title" class="form-control" placeholder="Enter your title...">
								</div>
								<div class="form-group">
									<label>Ý kiến phản hồi:</label>
									<textarea name="feedback" class="form-control" placeholder="Enter your  feedback..."></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-success" style="background: #ffc235;border: none; width: 100px;height: 40px;" type="submit">Phản hồi</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
				<div class="col-md-5">
					<h3 class="text-uppercase">liên hệ với chúng tôi</h3>
					<h4>Trung tâm nước ép Shrek Juice</h4>
					<ul>
						<li style="color: blue">Địa chỉ:285 Đội Cấn, Liễu Giai, Ba Đình, Hà Nội</li>
						<li style="color: blue">Hotline:0123456789</li>
						<li style="color: blue">Email:info@shrekjuice.com</li>
						<li style="color: blue">Website:shrek-juice.com</li>
					</ul>
					<img src="https://cdn.pixabay.com/photo/2015/10/30/15/07/contact-us-1014232_960_720.png" class="img-responsive" width="100%;" style="margin-top: 2%;">
				</div>
			</div>	
		</div>
	</div>
<?php require_once('footer.php');?>
</body>
</html>