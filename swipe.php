<?php 
include 'seller/backend/conn.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PustakThana- Book selling and Buying of 10,9 & 8 Classes!</title>
	<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.6/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.6/dist/sweetalert2.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
	.card-container {
  display: flex;
  justify-content: center;
}

.card {
  width: 400px;
  height: 300px;
  background-color: white;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
  border-radius: 10px;
  overflow: hidden;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.card-header {
  background-color: lightgray;
  padding: 20px;
}

.card-body {
  padding: 20px;
}

</style>

</head>
<body>	<!-- responsive navbars starts -->
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

	<!-- responsive navbars starts -->
	<div class="topnav" id="Topnav" style="position: fixed; width: 100%; bottom: 0;">
		
  <a href="#" ><i class="fa-solid fa-house" title="home"></i></a>
  <a id="category-link"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
  <a href="seller/login"><i class="fa fa-plus" aria-hidden="true" style="background-color: #3880EC; color: #fff; padding:6px; border-radius: 50%;"></i></a>
  <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
  <a href=""><i class="fa-solid fa-user"></i></a>
  <!-- <a href="logout"><i class="fa-solid fa-right-from-bracket"></i></a> -->
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div>
<!-- <br><br><br> -->
	<!-- responsive navbars ends -->
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

	<!-- footer section starts -->
	<!-- <div class="footer">
		
		<div class="footer-links">
			<center>
				<a href="faqs" target="_blank">Faqs</a>
				<a href="team" target="_blank">Team</a>
				<a href="about" target="_blank">About</a>
			</center>
		</div>
	</div> -->
	<!-- footer section ends -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.js"></script>
<script></script>
<script>
	// search option here
	$('#search_marketplace').click(function(){
		swal("Search Books", {
		  content: "input",
		})
		.then((value) => {
			if(value == ""){
				// swal("Please enter something..");

			}
			else if(value == "null"){
				swal(`Value is null`);
			}
			else{
				window.location = `search.php?query=${value}`;
		 		// swal(`You typed: ${value}`);
		 	}
		});
	});
// 	Push.create("Hello world!", {
//     body: "How's it hangin'?",
//     timeout: 4000,
//     onClick: function () {
//         window.focus();
//         this.close();
//     }
// });
	function detail(id){
		window.location = `detail.php?id=${id}`;
	}
		window.onload = function() {
		NProgress.done();
  
};
NProgress.start();
</script>
</script>
</html>