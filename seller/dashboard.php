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
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<body>
	<!-- responsive navbars starts -->
	<div class="topnav" id="myTopnav" >
		
  <a href="#" ><i class="fa-solid fa-house" title="home"></i></a>
  <a href="index"><i class="fa-solid fa-book" title="home"></i></a>
  <a href="orders"><i class="fa-solid fa-cart-shopping"></i></a>
  <a href=""><i class="fa fa-money-bill" aria-hidden="true"></i></a>
  <a href="profile"><i class="fa-solid fa-user"></i></a>
  <a href="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div><br>
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
				<i class="fa-solid fa-house"></i><a href="#" >Dashboard</a><i class="fas fa-arrow-right"></i>
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
				<i class="fa-solid fa-user"></i><a href="profile">Profile</a><i class="fas fa-arrow-right"></i>
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
	<!-- main section starts -->
	<div class="main">

		<div class="main-dashboard">
			<div class="dashboard-book-sold" >
				<div class="book-sold-texts">
					<div class="sold-texts-p">
						<p>Total book sold</p>
					</div>
					<div class="sold-texts-h1">
						<h1 style="word-wrap: break-word;"><?php echo $book_sold ?></h1>
					</div>
				</div>
			</div>
			<div class="dashboard-book-orders">
				<div class="book-orders-texts">
					<div class="orders-texts-p">
						<p>Total book order</p>
					</div>
					<div class="orders-texts-h1">
						<h1 style="word-wrap: break-word;"><?php echo $order_of_book ?></h1>
					</div>
				</div>
			</div>
			<div class="dashboard-books-pending">
				<div class="book-pending-texts">
					<div class="pending-texts-p">
						<p>Total pending book</p>
					</div>
					<div class="pending-texts-h1">
						<h1 style="word-wrap: break-word;"><?php echo $pending_book ?></h1>
					</div>
				</div>
			</div>
		</div>
			<div class="dashboard-revenues">
				<div class="revenues-earning">
					<div class="revenues-earning-heading">
						<p style="font-size: 20px;">Total Earnings</p>
					</div>
					<div class="revenues-earning-rs">
						<h1 style="word-wrap: break-word;">Rs <?php echo $earning ?></h1>
					</div>
				</div>
				<div class="revenues-commission">
					<div class="revenues-commission-heading">
						<p style="font-size: 20px;">Your Password</p>
					</div>
					<div class="revenues-commission-rs">
						<h1 style="word-wrap: break-word;"><?php echo $password ?></h1>
					</div>
				</div>
			</div>
			<div class="dashboard-pending">

				<div class="pending-heading">
					<div class="heading-text">
						<h2>Pending books</h2>
					</div>
				</div>
				<div class="pending-books">
					<div class="dashboad-pending-book owner-name">
						<span class="owner-name">Class</span>
						<span class="name-list">10</span>
					</div>
					<div class="dashboad-pending-book book-subject">
						<span class="subject-owner">Subject</span>
						<span class="subject-list">Science</span>
					</div>
					<div class="dashboad-pending-book book-price">
						<span class="price-text">Price</span>
						<span class="price-list">120rs</span>
					</div>
					<div class="dashboad-pending-book book-status">
						<span class="status-text">Status</span>
						<span class="status-list">Pending</span>
					</div>
				</div>

			</div>
	</div>
	<!-- main section ends -->
	<!-- dashboard pending books starts -->

	<!-- dashboard pending books ends -->

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script>
	window.onload = function() {
		NProgress.done();
  
};
NProgress.start();
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>