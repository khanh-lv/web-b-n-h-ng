<?php
	session_start();
	require_once('../Database/database.php');
	//gio hang
	if(isset($_POST['number'])){
		$number=$_POST['number'];
		$item=$_GET['id_sanpham'];
		if(isset($_SESSION['cart'][$item])){
			$_SESSION['cart'][$item]['quantity']=$_SESSION['cart'][$item]['quantity']+$number;
		}else{
			$_SESSION['cart'][$item]=[
				"quantity"=>$number,
				"id"=>$cart
			];
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
    	$number=1;
    	function add(){
	   		if($('[name=number]').val()>=1){
	   			$number=$number+1
	   			$('[name=number]').val($number)
	    	}else{
	    		$('[name=number]').val($number)
	    	}
	   	}
	    function sub(){
	   		if($number>1){
	    		$number= $number-1
	    		$('[name=number]').val($number)	
	    	}else{	
	    			$number=1;
	    			$('[name=number]').val($number)	
	    		}
	    	
	   }
	   $(document).ready(function(){
	   	$('[name=number]').val($number)
	   })
	    
    </script>
    <style type="text/css">
    	#mota .btn-default{
	    background: #ffc235;
	    color:#FFFFFF;
	    border:#ffc235;
	   	border-radius: 30px;
	   	margin-left: 20px;
	   	border: none;
	}
	#mota .btn-default:hover{
		background: #c6ba2d;
	}
	#mota .btn-default:focus{
		background: #c6ba2d;
	    border-radius: 30px;
	}    	
	#child{
		width: 100%;
		border: dashed 1px #ffc235;
		background: #ffe6b7;
	   	border-radius: 10px;
		text-transform: uppercase;
		margin-top: 7%;
		padding-left: 10px;
		padding-right: 10px;
		padding-bottom: 20px;
		padding-top: 5px;
	}
	#child-1{
	 	width: 25%;
		text-align: center;
		color: #ffffff;
		background: #4286f4;
		padding-top: 5px;
		font-size: 14px;
		padding-left: 10px;
		padding-right: 10px;
		float: left;
	}
	#child-2{
		width: 25%;
		text-align: center;
		color: #ffffff;
		background: #a51837;
		padding-top: 5px;
		font-size: 14px;
		padding-left: 10px;
		padding-right: 10px;
		float: left;
	}
	#child-3{
	    width: 25%;
	    text-align: center;
	    color: #ffffff;
	    background: #7a18af;
	    padding-top: 5px;
	    font-size: 14px;
	    padding-left: 10px;
	    padding-right: 10px;
	    float: left;
	}
	#child-4{
	    width: 25%;
	    text-align: center;
	    color: #ffffff;
	    background: #1edb11;
	    padding-top: 5px;
	    font-size: 14px;
	    padding-left: 10px;
	    padding-right: 10px;
		float: left;
	}
	#child2 .btn{
	    background:#ffc235;
	    color: #ffffff;
	    text-align: center;
	    text-transform: uppercase;
	    width: 60%;
	    height: 50px;
	    border: none; 
	}
    </style>
</head>
<body>
	<!--header-->
	<?php
		require_once('header.php');
	?>
	<!--Content-->
	<div id="content" style="margin-bottom: 3%; margin-top: 3%;">
		<?php
			$product=[];
			if(isset($_GET['id_sanpham'])&&$_GET['id_sanpham']!=""){
				$sql='select * from sanpham where id_sanpham='.$_GET['id_sanpham'];
				$product=resultdata($sql);
			}else{
				echo '<h3 class="text-uppercase text-center text-danger">rất tiếc!sản phẩm không tồn tại</h3>';
			}
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-5" style="border-radius: 10px;border: solid 1px #ffc235;padding-top: 10px;padding-bottom: 10px;">
					<?php
						foreach ($product as $row) {
							echo '<img src="'.$row['anh'].'" class="img-responsive" width="100%">';
						}
					?>
				</div>
				<div class="col-md-7" style="padding-left: 5%;">
					<div id="mota">
						<?php
							foreach ($product as $row) {
								echo'<h3 class="text-left text-uppercase" style="color:#ffc235">'.$row['tensanpham'].'</h3>
								<h4 class="text-left" style="color:red">Giá tiền:'.$row['giatien'].'đ</h4>
								<p>'.$row['mota'].'</p>
								<div style="padding-top:2%;">
									<form method="POST">
										<button type="button" style="width: 30px;height: 30px;background: #ffffff;" onclick="sub()">-</button><input type="text" name="number" size="1" style="text-align: center;height: 30px;"><button type="button" style="width: 30px;height: 30px;background: #ffffff" onclick="add()">+</button>
										<button type="submit" class="btn btn-default" style="border:none">Thêm vào giỏ hàng</button>
									</form>
								</div>';
							}
						?>
					</div>
					<div id="child" class="row">
						<div style="width: 100%;">
							<h4 class="text-center" style="color: #fc53d2;">
								Mọi thắc mắc xin liên hệ:0123456789
							</h4>
						</div>
						<div id="child-1" class="col-md-3">
							<p style="text-align: center; font-size: 12px;">sản phẩm</p>
							<p style="font-size: 8px;">----100%----</p>
							<p style="text-align: center; font-size: 12px;">tự nhiên</p>
						</div>
						<div id="child-2" class="col-md-3">
							<p style="text-align: center; font-size: 12px;">thanh toán</p>
							<p style="font-size: 8px;">----khi----</p>
							<p style="text-align: center; font-size: 12px;">nhận hàng</p>
						</div>
						<div id="child-3" class="col-md-3">
							<p style="text-align: center; font-size: 12px;">hoàn tiền</p>
							<p style="font-size: 8px;">----200% nếu----</p>
							<p style="text-align: center; font-size: 12px;">lỗi hoặc sai</p>
						</div>
						<div id="child-4" class="col-md-3">
							<p style="text-align: center; font-size: 12px;">giao hàng</p>
							<p style="font-size: 8px;">----đến----</p>
							<p style="text-align: center; font-size: 12px;">tận nơi</p>
						</div>
					</div>
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