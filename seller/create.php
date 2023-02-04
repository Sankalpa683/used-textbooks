<?php 	

if (isset($_COOKIE['user_logged'])) {
	echo "<html style='display:none;'><script>alert('You have already logged in so we are redirecting you to our home page!')</script></html>";
	echo "<script>setTimeout(() => {
					  window.location.href = 'index';
					}, '100');</script>";
}
else{
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create PustakThana Seller Account</title>
	<link rel="stylesheet" type="text/css" href="css/create.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<body>
	<!-- form starts -->
<div class="container">
	<div class="header">
		<h2>Create Your Seller Account!</h2>
	</div>
	<form id="form" class="form">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="eg: sankk dahal" id="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Age</label>
			<input type="number" placeholder="eg: 17" id="age" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Number</label>
			<input type="number" placeholder="eg: 9865197918" id="number"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Your Facebook ID</label>
			<input type="text" placeholder="eg: https://www.facebook.com/koirala.aashish.3" id="facebookid"  />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Your password will be set automatically" id="password" disabled />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		
		<div class="form-control">
			<label for="username">School</label>
			<input type="School" value="Adarsha" id="school" disabled />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button id="clickbtn">Submit</button><br>
		<div class="login-div">
			<span>Already have an account? <a href="login" style="text-decoration: none;">login here</a></span>
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


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	setSuccessFor();
	// trim to remove the whitespaces
	// const usernameValue = username.value.trim();
	// const emailValue = age.value.trim();
	// const numberValue = number.value.trim();
	// const passwordValue = password.value.trim();
	// const password2Value = school.value.trim();
	
	// if(usernameValue === '') {
	// 	setErrorFor(username, 'Username cannot be blank');
	// } else {
	// 	setSuccessFor(username);
	// }

	// if(emailValue === '') {
	// 	setErrorFor(age, 'Email cannot be blank');
	// } else {
	// 	setSuccessFor(age);
	// }

	// if(numberValue === '') {
	// 	setErrorFor(number, 'Number cannot be blank');
	// } else {
	// 	setSuccessFor(number);
	}
	
	// if(passwordValue === '') {
	// 	setErrorFor(password, 'Password cannot be blank');
	// } else {
	// 	setSuccessFor(password);
	// }
	
	// if(password2Value === '') {
	// 	setErrorFor(school, 'Password2 cannot be blank');
	// } else if(passwordValue !== password2Value) {
	// 	setErrorFor(school, 'Passwords does not match');
	// } else{
	// 	setSuccessFor(school);
	// }


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
function setinvalidnumFor() {
	Toastify({
	  text: "Please enter a valid phone number",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
	
}
function setinvalidageFor() {
	Toastify({
	  text: "Your age must be between 0-to-100",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
	
}

function setinvalidfbidFor() {
	Toastify({
	  text: "Please enter your valid facebook profile link!",
	  duration: 2000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
	
}
function setnumexistFor() {
	Toastify({
	  text: "Phoner Number has already been taken",
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
function exceed_uername(){
	Toastify({
	  text: "Your username exceeds the maximum limit of 15 characters. Please choose a shorter username.!",
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
	  duration: 3000,
	  close: true,
	  gravity: "top", // `top` or `bottom`
	  position: "right", // `left`, `center` or `right`
	  stopOnFocus: true, // Prevents dismissing of toast on hover
	  
	  onClick: function(){} // Callback after click
	}).showToast();
}

function setSuccessFor() {

		const form = document.getElementById('form');
		const clickbtn = document.getElementById('clickbtn');
		const username = document.getElementById('username').value;
		const number = document.getElementById('number').value;
		const fb_id = document.getElementById('facebookid').value;
		const age = document.getElementById('age').value;
		const password = document.getElementById('password').value;
		const school = document.getElementById('school').value;
	    $.ajax({
	        type: "POST",
	        url: "backend/create.php",
	        data: "clickbtn="+ clickbtn + "&username="+username + "&number="+number + "&age="+age + "&fb_id="+fb_id,
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
	            else if(data == "invalid_number"){
	            	setinvalidnumFor();
	            }
	            else if(data == "exceed_uername"){
	            	exceed_uername();
	            }
	            else if(data == "invalid_age"){
	            	setinvalidageFor();
	            }
	            else if(data == "invalid_fb_id"){
	            	setinvalidfbidFor();
	            }
	            else if(data == "exist"){
	            	setnumexistFor();
	            }
	            else if(data == "cookie_not_set"){
	            	cookie_not_set();
	            }
	            else if(data == "login_activity"){
	            	cookie_not_set();
	            }
	            else{
	            	// alert(data);
	            	redirect();
	            	setTimeout(() => {
					  window.location.href = data.location;
					}, "3000");
	            }
	        }
	    });
}
	
// function isEmail(email) {
// 	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }













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