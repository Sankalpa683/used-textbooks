<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PustakThana Seller Account - Seller PustakThana Account!!</title>
	<link rel="stylesheet" type="text/css" href="css/order.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<body>
	<!-- responsive navbars starts -->
	<div class="topnav" id="myTopnav" >
		
  <a href="dashboard" ><i class="fa-solid fa-house"></i></a>
  <a href="index"><i class="fa-solid fa-book"></i></a>
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
				<i class="fa-solid fa-house"></i><a href="dashboard">Dashboard</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-ipo" id="option">
				<i class="fa-solid fa-book"></i><a href="index">Sell Books</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-portfolio" id="option">
				<i class="fa-solid fa-cart-shopping"></i><a href="#">Orders</a><i class="fas fa-arrow-right"></i>
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
	<div class="main-container">
		<div class="heading-text">
			<center><h1>Orders</h1></center>
		</div>
		<div class="container-table">
			<table>
  <tr>
    <th>Customer Name</th>
    <th>Book Name</th>
    <th>Customer Address</th>
    <th>Book Price</th>
    <th>Customer Number</th>
    <th>Status</th>
    <th>Customer School</th>
    
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Centro comercial Moctezuma</td>
  </tr>
  <tr>
</table>
		</div>
	</div>
	</div>
	<!-- min section ends -->
	<!-- left and right div ends -->
</body>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script>
	window.onload = function() {
		NProgress.done();
  
};
NProgress.start();
</script>
<script>
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