<?php
	session_start();
	require_once('../Database/database.php');
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
<body>
<?php require_once('header.php');?>
<main>
	<div class="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-xs-12 pd5 thumb-index">
					<img style="width: 100%; border: 0 " src="https://cdn.tgdd.vn/Files/2018/06/18/1096175/cach-lam-cac-loai-nuoc-ep-giam-can-giam-mo-bung-lam-dep-da-hieu-qua-nhat-5.jpg">
				</div>
			</div>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2> Nước ép Shrek</h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Shrek-Juice.com là một trang web của Trung tâm nước ép Shrek, là trung tâm nước ép lớn
						nổi tiếng với nhiều loại nước ép nó cung cấp. Chúng tôi cũng cung cấp dịch vụ ăn uống cho nhiều sự kiện như đám cưới, chương trình và hơn thế nữa. Bao gồm các loại nước ép mới với giá cả phải chăng sẽ làm hài lòng các bạn. 
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div>
						<img class="img-repsonsive" src="https://photo-2-baomoi.zadn.vn/w700_r1/2017_03_04_20_21688522/7ee823adeceb05b55cfa.jpg"> 
					</div>
				</div>
			</div>
		</div>
		<div class="gallery">
			<div class="container-fluid">
				<div class="row" id="on-above"> 
					<div class="col-xs-4 thumb-index">
							<img class="img-repsonsive" src="../image/gioithieu/rsz_pumpkin-juice-e1462766046314.jpg" onclick="openModal();currentSlide(1)">
					</div>
					<div class="col-xs-4 thumb-index">
						<div class="row">
							<div class="col-xs-6 thumb-index">
									<img class="img-repsonsive" src="../image/gioithieu/rsz_sinh-to-dau.jpg" onclick="openModal();currentSlide(2)" style="padding-left: 15px;">
							</div>
							<div class="col-xs-6 thumb-index">
									<img class="img-repsonsive" src="https://spicysouthernkitchen.com/wp-content/uploads/peach-bellini-13.jpg" style="width: 210px;margin-left: 5px"
									onclick="openModal();currentSlide(3)">
							</div>
						</div>
					<div class="row">
						<div class="col-xs-12 thumb-index">
								<img class="img-repsonsive" src="https://image.shutterstock.com/image-photo/fresh-juice-pours-fruit-vegetables-260nw-619386314.jpg" onclick="openModal();currentSlide(4)" style="margin-left: 15px;width: 424px;">
						</div>
					</div>
					</div>
					<div class="col-xs-4 thumb-index">
							<img class="img-repsonsive" src="../image/gioithieu/rsz_viem-co-nen-an-gi3.jpg" onclick="openModal();currentSlide(5)" style="margin-left: 10px;">
					
					</div>
				</div>

			</div>
		</div>
		<div id="myModal" class="modal">
  			<span class="close cursor" onclick="closeModal()">&times;</span>
  				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    			<a class="next" onclick="plusSlides(1)">&#10095;</a>
  		<div class="modal-content">
			<div class="mySlides" style="width: 400px;height: 400px; margin-left: auto; margin-right: auto;">
      			<div class="numbertext">1 / 5</div>
      				<img class="img-repsonsive" src="../image/gioithieu/rsz_pumpkin-juice-e1462766046314.jpg" style="width: 500px;height: 397px;">
    		</div>
			<div class="mySlides">
      			<div class="numbertext">2 / 5</div>
      				<img class="img-repsonsive" src="http://kenhnoitro.info/wp-content/uploads/2015/06/sinh-to-dau.jpg" style="height: 380px;width: 420px;margin-left: 30px;">
    		</div>
			<div class="mySlides">
      			<div class="numbertext">3 / 5</div>
      				<img class="img-repsonsive" src="https://spicysouthernkitchen.com/wp-content/uploads/peach-bellini-13.jpg" style="height: 399px;margin-left: 25px;width: 445px;">
    		</div>
    
   			<div class="mySlides"> 
      			<div class="numbertext">4 / 5</div>
      				<img class="img-repsonsive" src="https://image.shutterstock.com/image-photo/fresh-juice-pours-fruit-vegetables-260nw-619386314.jpg">
    		</div>
    		<div class="mySlides">
     			 <div class="numbertext">5 / 5</div>
      				<img class="img-repsonsive" src="https://coxuongkhop.info/wp-content/uploads/2016/12/viem-co-nen-an-gi3.jpg" style="margin-top: 0px;height: 399px;margin-left: 25px;width: 445px;">
    		</div>
    		<div class="caption-container">
      		<p id="caption"></p>
    		</div>
		</div>
		</div>
		<script type="text/javascript">
    		function openModal() {
  					document.getElementById('myModal').style.display = "block";
			}

			function closeModal() {
 					document.getElementById('myModal').style.display = "none";
			}		

			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
  					showSlides(slideIndex += n);
			}

			function currentSlide(n) {
  			showSlides(slideIndex = n);
			}

			function showSlides(n) {
  			var i;
  			var slides = document.getElementsByClassName("mySlides");
  			var dots = document.getElementsByClassName("demo");
  			var captionText = document.getElementById("caption");
  			if (n > slides.length) {slideIndex = 1}
  			if (n < 1) {slideIndex = slides.length}
  			for (i = 0; i < slides.length; i++) {
      			slides[i].style.display = "none";
  			}
  			for (i = 0; i < dots.length; i++) {
      			dots[i].className = dots[i].className.replace(" active", "");
  			}
 				slides[slideIndex-1].style.display = "block";
  				dots[slideIndex-1].className += " active";
  				captionText.innerHTML = dots[slideIndex-1].alt;
			}
    	</script>
     	<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2> Fruit juices </h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Ai cũng biết rằng trái cây tươi mang lại rất nhiều lợi cho sức khoẻ của con người bởi thành phần dinh dưỡng tự nhiên mà chúng đem lại, và dĩ nhiên nước ép trái cây cũng có những lợi ích tương tự. Không chỉ có màu sắc hấp dẫn, hương vị ngọt ngào, tươi mát, nước ép trái cây còn chứa rất nhiều vitamin thiết yếu cho cơ thể. Đều đặn uống nước ép trái cây mỗi ngày, bạn sẽ có sức đề kháng tốt, một làn da khỏe mạnh…<a href="trangsanpham.php?danhmuc=Fruit">xem sản phẩm</a> 
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title="Fruit juices"
                						data-description="Nước ép giúp bạn thanh lọc cơ thể,ngăn ngừa bệnh tật và bổ sung năng lượng cho cơ thể. Ngoài ra nước ép còn giúp bạn giảm cân hiệu quả,làm đẹp, cải thiện thị lực">
                							<img src="http://product.hstatic.net/1000304357/product/1_709f72b5c1804d1f92ac1e44310ed306.jpg" alt="Fruit juices" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2> Vegetable Juices </h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Rau củ cung cấp cho cơ thể đầy đủ chất xơ, chất khoáng cùng các loại vitamin cần thiết. Do vậy mà những lợi ích từ nước ép rau củ mang lại là rất tốt.Nếu bạn ăn uống không lành mạnh hoặc đã uống rượu/ bia hay hút thuốc lá nhiều. Bạn hãy thử sử dụng nước ép rau quả trong một thời gian xem thế nào. Nó sẽ là giải pháp tuyệt vời giúp bạn thoát khỏi những độc tố. Ngoài ra hàm nước lượng trong nước ép rau tươi giàu chất chống oxy hóa giúp làm sạch tất cả những độc tố trên cơ thể của bạn giúp bạn tràn đầy năng lượng...<a href="trangsanpham.php?danhmuc=Vegetable">xem sản phẩm</a>
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title="Vegetable Juices"
                						data-description="Nước ép rau tươi có chứa nhiều chất xơ giúp bạn tiêu hóa nhanh chóng. Các chất xơ cũng làm cho bạn cảm thấy no lâu hơn. Nó sẽ góp phần tăng cường sự trao đổi chất, cung cấp cho bạn năng lượng dồi dào">
                							<img src="http://product.hstatic.net/1000304357/product/1_6db8097365f14250b5b25603b3a84706.jpg" alt="Vegetable Juices" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2> Smoothies </h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Khác với nước ép, sinh tố vẫn giữ được tất cả các chất xơ của trái cây. Tiêu thụ chất xơ là một trong những phương pháp tốt nhất và ít tốn kém nhất để giúp bạn ngăn ngừa rất nhiều bệnh tật và tăng cường sức khỏe. Sinh tố chứa nhiều chất dinh dưỡng và ít calo. Chúng chứa những thực phẩm nhiều vitamin, khoáng chất, carbohydrat lành mạnh, chất xơ và ít chất béo mà bạn cần để giảm cân nhanh chóng, an toàn và hiệu quả mà không cần nhịn đói. Do vậy chúng là lựa chọn lành mạnh cho những ai muốn giảm cân.<a href="trangsanpham.php?danhmuc=Smoothies">xem sản phẩm</a>
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title="Smoothies"
                						data-description="Sinh tố giàu chất dinh dưỡng,tốt cho hệ tiêu hóa và hệ miễn dịch,là thức uống giảm cân tự nhiên và an toàn. Sinh tố giúp bạn có tinh thần luôn thoải mái, sảng khoái mỗi ngày">
                							<img src="http://kenhnoitro.info/wp-content/uploads/2015/06/sinh-to-dau.jpg" alt="Smoothies" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2> Protein Shakes </h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Cách tốt nhất để cung cấp protein cần thiết trong chế độ ăn là từ thực phẩm rắn. Nhưng có một điều mà tôi tin là sẽ có nhiều người tập thể hình đồng ý đó là không phải lúc nào cũng dễ dàng để có được tất cả lượng protein cần thiết từ bữa ăn. Đặc biệt là khi bạn phải làm việc toàn thời gian và không thể chuẩn bị được tất cả bữa ăn. Đây là lý do protein shake có chỗ đứng trong thế giới của thực phẩm bổ sung. Tất cả bạn cần chỉ là bột protein chất lượng tốt, một bình lắc và một ít nước và bạn sẽ có tất cả protein mình cần để cung cấp cho cơ bắp.<a href="trangsanpham.php?danhmuc=Protein">xem sản phẩm</a>
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title=" Protein Shakes"
                						data-description="Dù mục tiêu của bạn là gì, protein cũng là nền tảng cho bất kỳ chế độ dinh dưỡng nào. Nó là thành phần thiết yếu để đạt được tiến bộ tối ưu về thể chất, vóc dáng cũng như phong độ trong thể thao">
                							<img src="https://media.cooky.vn/recipe/g1/9928/s400x400/recipe9928-635915024057776666.jpg"  alt="Protein Shakes" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2> Winter Menu</h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Vào mùa đông, những thực phẩm giàu dinh dưỡng, chất chống oxy hóa và có tác dụng tăng cường hệ miễn dịch sẽ giúp bạn ấm áp suốt cả mùa giá lạnh.Cơ thể chỉ có thể chống đỡ giá rét tốt nếu khỏe mạnh và có hệ miễn dịch tốt mà thôi. Những đồ uống nóng hổi hay thực phẩm nấu chín sau sẽ giúp bạn ấm áp suốt cả một mùa đông dài.<a href="trangsanpham.php?danhmuc=Winter">xem sản phẩm</a>
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title="Winter Menu"
                						data-description="Mùa đông, nhiệt độ xuống thấp khiến chúng ta luôn cảm thấy rất lạnh, thậm chí là cóng. Để giúp bạn chống đỡ với giá rét suốt cả một mùa đông dài, hãy bổ sung cho cơ thể những li socola nóng giàu dinh dưỡng nào">
                							<img src="https://gonhub.com/wp-content/uploads/2018/10/3-buoc-hoan-thanh-socola-pots-de-dang-hinh-6-1.jpg"  alt="Winter Menu" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>
		<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2>Chocolate Juices</h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Chocolate hay ta quen gọi là socola,có chứa chất chống oxy hóa mạnh mẽ được gọi là flavonoid, cũng như một số magiê rất tốt cho sức khỏe cũng như bảo vệ tim mạch một cách hiệu quả. Những chất dinh dưỡng từ chocolate có thể giúp giảm huyết áp và giảm nguy cơ bệnh tim và đột quỵ rất hữu ích.<a href="trangsanpham.php?danhmuc=Chocolate">xem sản phẩm</a>
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title="Chocolate Juices"
                						data-description="Socola sữa là thức uống ưa thích của nhiều trẻ em và người lớn, Socola sữa cung cấp các chất dinh dưỡng cần thiết cho cơ thể, các vi chất giúp giảm mỡ, tăng cơ bắp, và nhiều lợi ích khác.">
                							<img src="https://www.khodarji.com/riyadh/en/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/_/7_4.jpg"  alt="Chocolate Juices" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>
				<div class="container text-left">
			<div class="row">
				<div class="col-sm-6 col-xs-12 pd5">
					<h2>Mock Tails</h2>
					<div class="content-about">
						<span style="font-family: times, serif; font-size:14pt; font-style:italic">
							Mocktail là một thức uống không cồn, thường được pha chế giống cocktail nhưng không có rượu. Một số loại mocktails nổi tiếng nhất và được yêu thích nhất là virgin bloody Mary và virgin piña colada. Sự khác biệt chính giữa mocktail và cocktail là mocktail không có cồn còn cocktail thì có. Mocktail hoặc “cocktail không cồn” có thể cho phép bạn thưởng thức những thức uống "xịn" tại các bữa tiệc tùng mà không cần phải lo về sức khỏe sau đó.<a href="trangsanpham.php?danhmuc=Mock">xem sản phẩm</a>
						</span>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 pd-none thumb-index">
					<div id="productimg">
     					<section id="containerimg">
            					<div class="thumbnail"
                						data-title="Mock Tails"
                						data-description="Mock Tails cung cấp nhiều chất dinh dưỡng,không có tác động sau khi uống và không gây nghiện.Mock Tails còn an toàn với phụ nữ mang thai và trẻ nhỏ">
                							<img src="https://www.tasteofhome.com/wp-content/uploads/2017/10/exps198161_TH163622B04_12_9b-1-696x696.jpg"  alt="Mock Tails" width="300">
            					</div>
        				</section>
    				</div>
				</div>
			</div>
		</div>			
	</div>	
</main>	
<?php require_once('footer.php');?>
</body>
</html>