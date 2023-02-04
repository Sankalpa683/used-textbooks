<?php 

include 'backend/conn.php';

if (isset($_COOKIE['user_logged'])) {
	echo "<html style='display:none;'><script>alert('You have already logged in so we are redirecting you to our home page!')</script></html>";
	echo "<script>setTimeout(() => {
					  window.location.href = 'index';
					}, '100');</script>";
}
else{
	// user ip here
	$ip = $_SERVER['REMOTE_ADDR'];

	// user agent here
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	$sel = "SELECT * FROM `login_activity` WHERE `ip`='$ip' AND `user_agent`='$user_agent' ORDER BY `login_time` DESC LIMIT 1;";
	$query = mysqli_query($conn, $sel);


}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login to Your PustakThana Seller Account</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<body>
	<!-- form starts -->

	
	<div id="container">
		<div id="header">
			<h2>Your Last Login!</h2>
			<p>Tap on picture to directly login.</p>
		</div>
		<center><form class="form" id="recent-form" style="display: flex; flex-direction: row; flex-wrap: wrap;">
			<?php 	
		if (mysqli_num_rows($query) >= 1) {
			while ($assoc = mysqli_fetch_assoc($query)) {
				$token = $assoc['user_id'];

				$user_sel = "SELECT * FROM `users` WHERE `token`='$token';";
				$user_run = mysqli_query($conn, $user_sel);

				while($fetch = mysqli_fetch_assoc($user_run)){
					$user_name = $fetch['username'];
					echo '<form method="post" action=""><div class="form-control" id="recent-login-image">
						<div class="recent-login-image">
							<center><img src="asset/user.png"></center>
							<div class="recent-login-username-text">
								<p style="word-wrap: break-word;">'.$user_name.'</p>
							</div>
						</div>
					</div></form>';
				}
			}
		}
		else{
			echo "<style>#container{display: none;}</style>";
		}
	 ?>
		
	</form></center>

	</div>  
<div class="container">
	<div class="header">
		<h2>Login into Seller Account!</h2>
	</div>
	<form id="form" class="form">

		<div class="form-control">
			<label for="username">Number</label>
			<input type="number" placeholder="Enter your number here" id="number"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>

		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Enter your password here" id="password"  />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		

		<button onclick="clickbtn()" id="clickbtn">Submit</button><br>
		<div class="login-div">
			<span>Don't have an account? <a href="create" style="text-decoration: none;">create here</a></span>
		</div>
	</form>
</div>




	<!-- form ends -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script>
	window.onload = function() {
		NProgress.done();
  
};
NProgress.start();
</script>
<script>
const form = document.getElementById('form');
const number = document.getElementById('number');
const password = document.getElementById('password');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	setSuccessFor();

}

function setErrorFor() {
	Toastify({
	  text: "Please fill all the fields!",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
	
}

function crendentials(){
	Toastify({
	  text: "Incorrect Phone number or password!",
	  duration: 3000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
}

function cookie_not_set(){
	Toastify({
	  text: "There was an error, Please Try Again!",
	  duration: 3000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
}


function redirect(){
	Toastify({
	  text: "Redirecting you to the home page!",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
}
function recent_redirect(){
	Toastify({
	  text: "You are being redirected to our home page directly!",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
}

function setSuccessFor() {

		const clickbtn = document.getElementById('clickbtn');
		const number = document.getElementById('number').value;
		const password = document.getElementById('password').value;
	    $.ajax({
	        type: "POST",
	        url: "backend/login.php",
	        data: "clickbtn="+ clickbtn + "&number="+number + "&password="+password,
	        success: function(data) {
	            if (data == "empty") {
	            	setErrorFor();
	    //         	const formControl = input.parentElement;
					// const small = formControl.querySelector('small');
					// formControl.className = 'form-control error';
					// small.innerText = message;
	            }
	            else if(data == "nope"){
	            	crendentials();
	            }
	            else if(data == "login_activity"){
	            	cookie_not_set();
	            }
	            else{
	            	redirect();
	            	setTimeout(() => {
					  window.location.href = data.location;
					}, "2000");
	            }
	        }
	    });
}
	





function went_wrong_for(){
	Toastify({
	  text: "Sorry! Something went wrong while logging you",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
}



$('#recent-login-image').click(function(){
	var token = "<?php echo $token; ?>";
	var ip = "<?php echo $ip; ?>";
	var user_agent = "<?php echo $user_agent; ?>";
	
	$.ajax({
		type: "POST",
		url: "backend/recent_logged.php",
		data: "clickrecentbtn="+this + "&token="+token + "&ip="+ip +"&user_agent="+user_agent,
		success:function(recent){
			if (recent == "went_wrong") {
				went_wrong_for();
			}
			else if(recent == "login_activity"){
				cookie_not_set();
			}
			else{
				recent_redirect();
	            setTimeout(() => {
					window.location.href = recent.location;
				}, "2000");
			}
		}
	});
});




// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
</script>
</html>