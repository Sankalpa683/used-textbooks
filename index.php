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
		<!-- navbar starts here -->
	<!-- <div class="nav-bar">
		<div class="nav-logo">
			<h2>Pustak<span class="logo-span">Thana</span> </h2>
		</div>
		<div class="nav-button">
			<button>Seller</button>
		</div>
	</div> -->
	<!-- navbar ends here -->

	<!-- classes breadcumb starts -->
	<div class="breadcumb" style="background-color: #fff; padding: 1rem; margin-top:  -3px; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
		<div class="breadcumb-classes">
			<div class="classes-all">
				<button>All</button>
			</div>

			<div class="classes-10">
				<button>Class 10</button>
			</div>
			<div class="classes-9">
				<button>Class 9</button>
			</div>
			<div class="classes-8">
				<button>Class 8</button>
			</div>
		</div>
	</div>
	<!-- classes breadcumd ends -->

	<div class="books">
		<?php  
			$sel = "SELECT * FROM `sell`";
			$query = mysqli_query($conn, $sel);

			if ($query) {
				if (mysqli_num_rows($query) > 0) {
					while($fetch = mysqli_fetch_assoc($query)){
						$id = $fetch['id'];
						$image = $fetch['book_pic'];
						$class = $fetch['class'];
						$subject = $fetch['subject'];
						$price = $fetch['price'];

						echo '<div class="books-detail">
			<div class="book-image">
				<img src="'.$image.'">
			</div>
			<div class="detail-title">
				<h2 style="text-transform: capitalize;">'.$class.' '.$subject.' book</h2>
			</div>
			<div class="book-price">
				<h2>Rs '.$price.'</h2>
			</div>
			<div class="books-button">
				<div class="buy-button">
					<button>Buy</button>
				</div>
				<div class="image-buy">
					<button onclick="detail('.$id.')">Details</button>
				</div>
			</div>
		</div>';
					}
				}
			}
			else{
				echo "nope";
			}
		?>
	</div>
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