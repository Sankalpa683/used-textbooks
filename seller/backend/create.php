<?php 	

include 'conn.php';

if (isset($_POST['clickbtn'])) {

	// username value here
	$username = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
	// user age value here

	$age = mysqli_real_escape_string($conn, htmlentities($_POST['age']));
	// user number value here
	$number = mysqli_real_escape_string($conn, htmlentities($_POST['number']));

	// validating user number goes here
	function is_valid_phone_number($number) {
	    return preg_match('/^\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/', $number);
	}
	// user fb profile here
	$fb_id = mysqli_real_escape_string($conn, htmlentities($_POST['fb_id']));

	// validating user fb profile goes here
	function valid_facebook_id($fb_id) {
	    return preg_match('/(?:(?:http|https):\/\/)?(?:www.|m.)?facebook.com\/(?!home.php)(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\.-]+)/i', $fb_id);
	}
	// user password for each new user goes here
	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  	$password = substr(str_shuffle($data), 0, 10);

	// token for new each user for recognizing who created account and for further logged in use here
	$bytes = random_bytes(5);
  	$token = bin2hex($bytes).time();

  	// user fb profile here
	$school = "Adarsha";

	// user book_sold here
	$book_sold = 0;

	// user book_order here
	$book_order = 0;

	// user pending_book here
	$pending_book = 0;

	// user earning here
	$earning = 0;

	// user commission here
	$commission = 0;

	// user ip here
	$ip = $_SERVER['REMOTE_ADDR'];

	// user agent here
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

  	// checking if the user type enter value is empty of not
	if (empty($username) || empty($age) || empty($number) || empty($fb_id)) {
		echo "empty";
	}
	// validating backend user phone number goes here
	elseif (!is_valid_phone_number($number)) {
		echo "invalid_number";
	}
	elseif(strlen($username) > 15){
		echo "exceed_uername";
	}
	// validating backend user age goes here
	elseif(strlen($age) > 3){
		echo "invalid_age";
	}
	// validating backend user facebook profile link goes here
	elseif(!valid_facebook_id($fb_id)){
		echo "invalid_fb_id";
	}
	else{
		// checking whether the number where user entered is already available on database or not
		$sel = "SELECT * FROM `users` WHERE `number`='$number';";
		$query = mysqli_query($conn, $sel);

		if (mysqli_num_rows($query) > 0) {
			echo "exist";
		}
		else{
			// if not available then add user detail on to the database

			$insert = "INSERT INTO `users` (`username`, `age`, `number`, `fb_id`, `password`, `school`, `book_sold`, `order_of_book`, `pending_book`, `earning`, `commission`, `token`, `ip`, `agent`) VALUES ('$username', '$age', '$number', '$fb_id', '$password', '$school', '$book_sold', '$book_order', '$pending_book', '$earning', '$commission', '$token', '$ip', '$user_agent');";

			$result = mysqli_query($conn, $insert);

			if ($result) {
				$cookie_set = setcookie("user_logged", $token, time() + (86400 * 30 * 12), "/"); 

				if ($cookie_set) {
					// logged in user time for recent login goes here
					$login_time = date("Y-m-d H:i:s");

					// user id /token for recent login goes here
					$user_id = $token;

					// logged out for recent token goes here
					$logged_out = NULL;

					$login_insert = "INSERT INTO `login_activity` (`user_id`, `login_time`, `logout_time`, `ip`, `user_agent`) VALUES ('$user_id', '$login_time', '$logged_out', '$ip', '$user_agent');";

					$login_query = mysqli_query($conn, $login_insert);

					if ($login_query) {
						header('Content-Type: application/json');
						echo json_encode(['location'=>'/pustakworld/seller/index']);
					}
					else{
						echo "login_activity";
					}
					
				}
				else{
					echo "cookie_not_set";
				}
			}
			else{
				echo "failure";
			}
			
		}
	}
}
else{
	header("location: ../create.php");
}



?>