<?php
include 'backend/conn.php';
if (isset($_COOKIE['user_logged'])) {
	$user_logged = $_COOKIE['user_logged'];
	$query = "SELECT * FROM `users` WHERE `token`='$user_logged'";
	$run = mysqli_query($conn, $query);

		if (mysqli_num_rows($run) > 0) {
			while ($assoc = mysqli_fetch_assoc($run)) {
				$token = $assoc['token'];

				
				// if ($unset) {
					$user_id = $token;
					$logout_time = date("Y-m-d H:i:s");
					$update = "UPDATE `login_activity` SET `logout_time` = '$logout_time' WHERE `user_id` = '$user_id'";
					$update_query = mysqli_query($conn, $update);

					if ($update_query) {
						$unset = setcookie("user_logged", $token, time() - (86400 * 30 * 12), "/");
						if ($unset) {
							header("location: login");
						}
						else{
							echo "Something went wrong!";
						}
					}
					else{
						echo "Something went wrong!";
					}
				// }
				
				
			}
		}
	
}
else{
	header("location: login.php");
}
// require_once 'config.php';

// unset($_SESSION['facebook_access_token']);


// unset($_SESSION['fb_user_id']);
// unset($_SESSION['fb_user_name']);
// unset($_SESSION['fb_user_email']);
// unset($_SESSION['fb_user_pic']);


// header("Location:index.php");
?>
