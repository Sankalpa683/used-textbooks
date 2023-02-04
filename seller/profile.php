<?php 	

include 'backend/conn.php';

if (isset($_COOKIE['user_logged'])) {
	$user_logged = $_COOKIE['user_logged'];
	$user_logged = $_COOKIE['user_logged'];
	$query = "SELECT * FROM `users` WHERE `token`='$user_logged'";
	$run = mysqli_query($conn, $query);

		if (mysqli_num_rows($run) > 0) {
			while ($assoc = mysqli_fetch_assoc($run)) {
				$username = $assoc['username'];
				$age = $assoc['age'];
				$number = $assoc['number'];
				$fb_id = $assoc['fb_id'];
				$password = $assoc['password'];
				$school = $assoc['school'];
				$book_sold = $assoc['book_sold'];
				$order_of_book = $assoc['order_of_book'];
				$pending_book = $assoc['pending_book'];
				$earning = $assoc['earning'];
				$commission = $assoc['commission'];
				$token = $assoc['token'];
				$ip = $assoc['ip'];
				$agent = $assoc['agent'];

									
			}
		}
}
else{
	echo "<html style='display:none;'><script>alert('You have not logged in yet so we are redirecting you to our login page!')</script></html>";
	echo "<script>setTimeout(() => {
					  window.location.href = 'login';
					}, '100');</script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PustakThana Seller Account - Seller PustakThana Account!!</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<body>
	<!-- responsive navbars starts -->
	<div class="topnav" id="myTopnav" style="position: fixed; width: 100%;">
		
  <a href="dashboard" ><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
  <p style="word-break: break-all;"><?php echo $username ?></p>
  <!-- 
  <a href="index"><i class="fa-solid fa-book"></i></a>
  <a href="orders"><i class="fa-solid fa-cart-shopping"></i></a>
  <a href=""><i class="fa fa-money-bill" aria-hidden="true"></i></a>
  <a href="profile"><i class="fa-solid fa-user"></i></a> -->
  <a href="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div>
<!-- <br><br><br> -->
	<!-- responsive navbars ends -->
	<!-- left and right div starts -->
	<div class="home-all">
		
	
	<!-- side navbar starts -->
	<div class="side-navs">
		<div class="nav-logo">
			<h2>PustakThana Seller Account</h2>
		</div>
		<div class="nav-options">
			<div class="option-dashboard" id="option">
				<i class="fa-solid fa-house"></i><a href="dashboard" >Dashboard</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-ipo" id="option">
				<i class="fa-solid fa-book"></i><a href="index">Sell Books</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-portfolio" id="option">
				<i class="fa-solid fa-cart-shopping"></i><a href="orders">Orders</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-portfolio" id="option">
				<i class="fa fa-money-bill" aria-hidden="true"></i><a href="orders">Earnings</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-portfolio" id="option">
				<i class="fa-solid fa-user"></i><a href="#">Profile</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-subscription" id="option">
				<i class="fa-solid fa-right-from-bracket"></i><a href="logout">Logout</a><i class="fas fa-arrow-right"></i>
			</div>
		</div>
		<div class="upgrade-plans">
			<div class="plan-text">
				<p>Donate to PustakThana Team for further improvements!</p>
			</div>
			<div class="plan-button">
				<button>Donate Now</button>
			</div>
		</div>

	</div>
	<!-- side navbar ends -->
	<!-- profile section starts -->
	<div class="profile">
		<div class="profile-banner">
			
		</div>
		<div class="profile-img">
			<img src="asset/user.png">
		</div>
		<div class="profile-user">
			<div class="profile-username">
				<h2 style="word-break: break-all;"><?php echo $username ?></h2>
			</div>
			<div class="profile-userschool">
				<center><p><?php echo $age ?>yrs</p></center>
			</div>
			<div class="profile-userage">
				<h3><?php echo $school ?> School</h3>
			</div>
			<div class="user-desc">
				<div class="desc-booksold">
					<div class="booksold-heading" id="user-about-heading">
						<p>Total sold books</p>
					</div>
					<div class="booksold-amount">
						<h1><?php echo $book_sold ?></h1>
					</div>
				</div>
				<div class="desc-earning">
					<div class="earning-heading" id="user-about-heading">
						<p>Total Pending books</p>
					</div>
					<div class="earning-amount">
						<h1><?php echo $pending_book ?></h1>
					</div>
				</div>
				<div class="desc-earning">
					<div class="earning-heading" id="user-about-heading">
						<p>Total Earning</p>
					</div>
					<div class="earning-amount">
						<h1><?php echo $earning ?>rs</h1>
					</div>
				</div>
			<!-- 	<div class="desc-commission">
					<div class="earning-heading" id="user-about-heading">
						<p>Commssion to PustakThana</p>
					</div>
					<div class="earning-amount">
						<h1>250rs</h1>
					</div>
				</div> -->
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
			</div>
		</div>
	</div>
	<!-- profile section ends -->
	<!-- left and right div ends -->
</body>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script>
	window.onload = function() {
		NProgress.done();
  
};
NProgress.start();
</script>
<!-- <script>
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script> -->
</html>