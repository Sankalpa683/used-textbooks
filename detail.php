<?php 	
// print_r($_GET);
include 'seller/backend/conn.php';
if (isset($_GET['id'])) {
	$id = mysqli_real_escape_string($conn, htmlentities($_GET['id']));
	if (!empty($id)) { 
			$sel = "SELECT * FROM `sell` WHERE `id`='$id';";
			$query = mysqli_query($conn, $sel);

			if ($query) {
				
			}
			else{
				header("location: index");
			}
	}
	else{
		header("location: index");
	}
}
else{
	header("location: index");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PustakThana - Details of Science Book</title>
	<link rel="stylesheet" type="text/css" href="css/detail.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<!-- oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" -->
<body >
<!-- responsive navbars starts -->
	<div class="topnav" id="myTopnav" style="position: fixed; width: 100%; background-color: #3b5998;">
		<div class="topnav-user-image">
			<img src="seller/asset/user.png" style="width: 40px; padding: 5px; cursor: pointer;">
		</div>
  <!-- <a href="dashboard" ><i class="fa fa-arrow-left" aria-hidden="true"></i></a> -->
  <!-- <p style="word-break: break-all;">PustakThana</p> -->
  <input type="text" placeholder="Search Marketplace" style="padding: 5px 20px; margin: 0px 10px; height: 20px; margin-top: 13px; border-radius: 20px; border: none; outline: none;" id="search_marketplace">
  <!-- 
  <a href="index"><i class="fa-solid fa-book"></i></a>
  <a href="orders"><i class="fa-solid fa-cart-shopping"></i></a>
  <a href=""><i class="fa fa-money-bill" aria-hidden="true"></i></a>
  <a href="profile"><i class="fa-solid fa-user"></i></a> -->
  <a href="logout" style="color: #fff;"><i class="fa-solid fa-right-from-bracket"></i></a>
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div>
<!-- <br><br><br> -->
	<!-- responsive navbars ends -->
	<!-- detail section starts -->
	<?php 	
		if (mysqli_num_rows($query) > 0) {
			while($fetch = mysqli_fetch_assoc($query)){
				$id = $fetch['id'];
				$image = $fetch['book_pic'];
				$class = $fetch['class'];
				$subject = $fetch['subject'];
				$price = $fetch['price'];
				$username = $fetch['username'];


				echo '<div class="detail">
		<div class="detail-image" >
			<img src="'.$image.'">	
		</div>
		<div class="detail-texts">
			
			<div class="text-title">
				<center><h2 style="text-transform: capitalize; word-break: break-all;">'.$class.' '.$subject.' Book</h2></center>
			</div>
			<div class="text-price">
				<center><h3 style="background-color: #F2D7D5;
	padding: 0.5rem 1rem;
	border-radius: 2rem;
	font-size: 16px;
	width: fit-content;
	color: #17202A;">'.$price.'rs</h3></center>
			</div>
			<div class="text-seller" style="display: flex; justify-content: space-between; max-width: 500px; width: 100%; padding-bottom: 20px;">
				<div class="seller-name">
					<h4 style="font-weight: bold;">Seller Information</h2>
					<div class="seller-name-infos" style="display: flex;">
					<img src="seller/asset/user.png" style="width: 50px; border-radius: 50%;">
					<p style="font-weight: bold; padding-left: 7px; word-break: break-all; color: transparent; text-shadow: 0 0 8px rgba(0,0,0,0.5);">'.$username.'</p>
					</div>
				</div>
				<div class="seller-school">
					<h4 style="color: #206EDB;">Seller Detail</h2>
				</div>
			</div>
			<div class="detail-buttons">
				<div class="button-buy">
					<button onclick="buy_btn()">Buy</button>
				</div>
				<div class="button-cancel">
					<a href="index"><button>Cancel</button></a>
				</div>
			</div>
		</div>

	</div>';

			}
		}
		else{
			header("location: index");
		}
	?>
	<!-- detail section ends -->
	<!-- responsive navbars starts -->
	<div class="topnav" id="Topnav" style="position: fixed; width: 100%; bottom: 0;">
		
  <a href="index" ><i class="fa-solid fa-house" title="home"></i></a>
  <a href=""><i class="fa fa-list-alt" aria-hidden="true"></i></a>
  <a href="seller/login"><i class="fa fa-plus" aria-hidden="true" style="background-color: #3880EC; color: #fff; padding:6px; border-radius: 50%;"></i></a>
  <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
  <a href=""><i class="fa-solid fa-user"></i></a>
  <!-- <a href="logout"><i class="fa-solid fa-right-from-bracket"></i></a> -->
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div>
<!-- <br><br><br> -->
	<!-- responsive navbars ends -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.js"></script>
<script>
		window.onload = function() {
		NProgress.done();
  
};
NProgress.start();

function buy_btn(){
	window.location = "checkout";
}
</script>
<!-- </script> -->
</html>