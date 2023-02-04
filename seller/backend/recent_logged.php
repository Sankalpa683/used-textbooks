<?php 

include 'conn.php';

if (isset($_POST['clickrecentbtn'])) {
	$token = mysqli_real_escape_string($conn, htmlentities($_POST['token']));
	$ip = mysqli_real_escape_string($conn, htmlentities($_POST['ip']));
	$user_agent = mysqli_real_escape_string($conn, htmlentities($_POST['user_agent']));

	if (empty($token) || empty($ip) || empty($user_agent)) {
		echo "went_wrong";
	}
	else{
		$cookie_set = setcookie("user_logged", $token, time() + (86400 * 30 * 12), "/");

		if ($cookie_set) {
			header('Content-Type: application/json');
			echo json_encode(['location'=>'/pustakworld/seller/index']);
		}
		else{
			echo "login_activity";
		}
	}
}

?>