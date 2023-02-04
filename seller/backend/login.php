<?php

include 'conn.php';

if (isset($_POST['clickbtn'])) {
	
	$number = mysqli_real_escape_string($conn, htmlentities($_POST['number']));
	$password = mysqli_real_escape_string($conn, htmlentities($_POST['password']));
	// user ip here
	$ip = $_SERVER['REMOTE_ADDR'];

	// user agent here
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	if (empty($number) || empty($password)) {
		echo "empty";
	}
	else{
		$query = "SELECT * FROM `users` WHERE `number`='$number' AND `password`='$password';";
		$run = mysqli_query($conn, $query);

		if (mysqli_num_rows($run) > 0) {
			while ($assoc = mysqli_fetch_assoc($run)) {
				$token = $assoc['token'];

				$cookie_set = setcookie("user_logged", $token, time() + (86400 * 30 * 12), "/"); 

				if ($cookie_set) {
					// logged in user time for recent login goes here
					$login_time = date("Y-m-d H:i:s");

					// user id / token for recent login goes here
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
					echo "fuckew";
				}
			}
		}
		else{
			echo "nope";
		}
	}

}
else{
	header("location: ../login.php");
}



?>