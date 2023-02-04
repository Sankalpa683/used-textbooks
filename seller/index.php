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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body>
	<!-- responsive navbars starts -->
	<div class="topnav" id="myTopnav" style="position: fixed; width: 100%;">
		
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
			<center><h2 style="text-align: center;">PustakThana Seller Account</h2></center>
		</div>
		<div class="nav-options">
			<div class="option-dashboard" id="option">
				<i class="fa-solid fa-house"></i><a href="dashboard">Dashboard</a><i class="fas fa-arrow-right"></i>
			</div>
			<div class="option-ipo" id="option">
				<i class="fa-solid fa-book"></i><a href="#" class="active">Sell Books</a><i class="fas fa-arrow-right"></i>
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
		<h1 class="main-head-text">Sell on PustakThana</h1>
		<div class="main-name-inputs">
			<div class="input-second">
				<div class="first-label">
					<label>Your class book</label>
				</div>
				<div class="first-field">
					<select id="book_class">
					  <option value="class 8">Class 8</option>
					  <option value="class 9">Class 9</option>
					  <option value="class 10" selected>Class 10</option>
					</select>
				</div>
				<div class="second-label">
					<label>Book Subject</label>
				</div>
				<div class="second-field">
					<select id="book_subject">
						<!-- <option value="volvo" >All Subjects</option> -->
					  <option value="Science" selected>Science</option>
					  <option value="Math">Math</option>
					  <option value="English">English</option>
					  <option value="Social">Social</option>
					  <option value="Computer">Computer</option>
					  <option value="Nepali">Nepali</option>
					  <option value="SEE Book">SEE Book</option>
					  <option value="SEE Guide">SEE Guide</option>
					  <option value="Grammer">Grammer</option>
					  <option value="Health">Health</option>
					</select>
				</div>
			</div>
			<div class="input-second">
				<div class="first-label">
					<label>Your age</label>
				</div>
				<div class="first-field">
					<select id="age">
						<option value="<?php echo $age?>" selected><?php echo $age ?> yrs</option>
		<!-- 			  <option value="12">12 yrs</option>
					  <option value="13">13 yrs</option>
					  <option value="14" >14 yrs</option>
					  <option value="15" >15 yrs</option>
					  <option value="16">16 yrs</option>
					  <option value="17" >17 yrs</option>
					  <option value="18">18 yrs</option> -->
					</select>
				</div>
				<div class="second-label">
					<label>Price of your book</label>
				</div>
				<div class="second-field">
					<select id="price">
					  <option value="100" >100 rs</option>
					  <option value="200">200 rs</option>
					  <option value="300">300 rs</option>
					  <option value="400">400rs</option>
					  <option value="500" >500 rs</option>
					  <option value="600">600 rs</option>
					  <option value="700" selected>700 rs</option>
					  <option value="800">800rs</option>
					  <option value="900">900 rs</option>
					  <option value="1000">1000rs</option>
					</select>
				</div>
			</div>

			
		</div>
	<div class="input-button">
				<button id="submitbtn">Submit</button>
			</div>
	</div>
	<!-- min section ends -->
	<!-- left and right div ends -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
	window.onload = function() {
		NProgress.done();
  
};
NProgress.start();
</script>
<script>
	$('#submitbtn').click(function(){
		var submitbtn = $(this);
		var bookclass = $('#book_class').children("option:selected").val();
		var age = $('#age').children("option:selected").val();
		var subject = $('#book_subject').children("option:selected").val();
		var price = $('#price').children("option:selected").val();

		function something_went_wrong(){
			Toastify({
			  text: `Sorry! Something went wrong`,
			  duration: 3000,
			  close: true,
			  gravity: "top", // `top` or `bottom`
			  position: "right", // `left`, `center` or `right`
			  stopOnFocus: true, // Prevents dismissing of toast on hover
			  
			  onClick: function(){} // Callback after click
			}).showToast();
		}

$.confirm({
    title: 'Are You Sure?',
    content: 'Once you submit, this book will be listed for sale.',
    draggable: true,
    buttons: {
        submit: function () {
        	$.ajax({
        		type: "POST",
		        url: "backend/sell.php",
		        data: "submitbtn="+ submitbtn + "&bookclass="+bookclass + "&subject="+subject + "&age="+age + "&price="+price,
		        success:function(datas){
		        	// $.alert(datas);
		        	if (datas == "done") {
		        		$.alert("Your book was successfully listed on sale!");
		        	}
		        	else if(datas = "incorrect"){
		        		something_went_wrong();
		        	}
		        	else{
		        		$.alert(datas);
		        	}
		        }
        	});
            // $.alert('Confirmed!');
        },
        cancel: function () {
            $.alert('Canceled!');
        }
        // somethingElse: {
        //     text: 'Something else',
        //     btnClass: 'btn-blue',
        //     keys: ['enter', 'shift'],
        //     action: function(){
        //         $.alert('Something else?');
        //     }
        // }
    }
});
	});
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