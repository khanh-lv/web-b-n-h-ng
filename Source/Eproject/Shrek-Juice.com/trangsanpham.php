<?php
	session_start();
	require_once('../Database/database.php');
	//danh muc san pham
	$sql='select * from danhmucsanpham';
	$menu=[];
	$menu=resultdata($sql);
	$menu_color="";
	// hien thi danh sach san pham va phan trang
	$sql='select * from sanpham';
	$count=countdata($sql);
	$page=ceil($count/8);
	$currentpage=1;
	$page_input=$currentpage;
	if(isset($_GET['page'])&&$_GET['page']!=""){
		$currentpage=$_GET['page'];
	}
	$start=($currentpage-1)*8;
	$sql='select * from sanpham limit '.$start.',8';
	$productlist=[];
	$productlist=resultdata($sql);
	//hien thi danh sach san pham theo danh muc
	if(isset($_GET['id_danhmuc'])&&$_GET['id_danhmuc']!=""){
		$id_danhmuc=$_GET['id_danhmuc'];
		$sql='select * from sanpham where id_danhmuc = '.$id_danhmuc;
		$productlist=resultdata($sql);
		$page_input="";
		$menu_color=$id_danhmuc;
	}
	if(isset($_GET['search'])&& $_GET['search']!=""){
		$search=$_GET['search'];
		$sql='select * from sanpham where tensanpham LIKE "%'.$search.'%"';
		$productlist=resultdata($sql);
		$page_input="";
	}
	if(isset($_GET['danhmuc'])&&$_GET['danhmuc']!=""){
		$sql='select sanpham.id_sanpham,sanpham.id_danhmuc,sanpham.tensanpham,sanpham.giatien,sanpham.anh,sanpham.mota from sanpham,danhmucsanpham where danhmucsanpham.tendanhmuc LIKE "'.$_GET['danhmuc'].'%" and sanpham.id_danhmuc=danhmucsanpham.id_danhmuc';
		$productlist=resultdata($sql);
		$page_input="";
		foreach ($productlist as $row) {
			$menu_color=$row['id_danhmuc'];
		}
	}
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
    <script type="text/javascript">
    	$(document).ready(function(){
    		if($("[name=page]").val()!=""){
	    		$("#page").show();
	    	}else{
	    		$("#page").hide();
	    	}
    	})
    </script>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
<body>
	<!--header-->
	<?php
		require_once('header.php');
	?>
	<!--Content-->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<span class="text-uppercase">Danh Mục Sản Phẩm</span></div>
						<?php
							foreach ($menu as $row) {
								if(isset($_GET['id_danhmuc'])&&$row['id_danhmuc']==$_GET['id_danhmuc']){
									echo '<div class="panel-body"><a href="trangsanpham.php?id_danhmuc='.$row['id_danhmuc'].'" style="color:#bf7c24"><span >'.$row['tendanhmuc'].'</span></a><hr></div>';
								}else if(isset($_GET['danhmuc'])&&strlen(strstr($row['tendanhmuc'],$_GET['danhmuc']))>0){
									echo '<div class="panel-body"><a href="trangsanpham.php?id_danhmuc='.$row['id_danhmuc'].'" style="color:#bf7c24"><span >'.$row['tendanhmuc'].'</span></a><hr></div>';
								}else{
								echo '<div class="panel-body" id="'.$row['id_danhmuc'].'"><a href="trangsanpham.php?id_danhmuc='.$row['id_danhmuc'].'"><span >'.$row['tendanhmuc'].'</span></a><hr></div>';
								}
							}

						?>
					</div>
				</div>
				<div class="col-md-9" >
					<input type="text" name="page" value="<?=$page_input?>" style="display: none;">
					<div class="row">
						<?php
							if(!empty($productlist)){
								foreach ($productlist as $row) {
									echo '<div class="col-md-3" id="product">
										<img src="'.$row['anh'].'" class="img-thumbnail img-responsive">
										<a href="chitietsanpham.php?id_sanpham='.$row['id_sanpham'].'"><p class="text-uppercase">'.$row['tensanpham'].'</p></a>
										<p style="color:red;">Giá tiền:'.$row['giatien'].' VND</p>
										<a href="?item='.$row['id_sanpham'].'"><button type="button" class="btn btn-default">Thêm vào giỏ hàng</button></a>
									</div>';
								}
							}else{
								echo '<h3 class="text-uppercase text-center text-danger">Không có sản phẩm phù hợp!</h3>';
							}
						?>
					</div>
					<div id="page">
						<ul class="pagination">
							<?php
								for($i=0;$i<$page;$i++){
									echo '<li><a href="trangsanpham.php?page='.($i+1).'">'.($i+1).'</a></li>';
								}
							?>
						</ul>
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