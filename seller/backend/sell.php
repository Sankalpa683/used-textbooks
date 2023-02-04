<?php 
include 'conn.php';
if (isset($_COOKIE['user_logged'])) {
	$user_logged = htmlentities($_COOKIE['user_logged']);
	$query = "SELECT * FROM `users` WHERE `token`='$user_logged'";
	$run = mysqli_query($conn, $query);

}
else{
	echo "<html style='display:none;'><script>alert('You have not logged in yet so we are redirecting you to our login page!')</script></html>";
	echo "<script>setTimeout(() => {
					  window.location.href = 'login';
					}, '100');</script>";
}
if (isset($_POST['submitbtn'])) {

	// echo $class . $age . $subject . $price;

	// if ($class == "class 8") {
	// 	switch ($subject) {
	// 		case 'Science':

	// 			echo "8 Science";
	// 			break;
			
	// 		case 'Math':

	// 			echo "8 math";
	// 			break;

	// 		case 'English':

	// 			echo "8 English";
	// 			break;
			
	// 		case 'Social':

	// 			echo "8 Social";
	// 			break;
				
	// 		case 'Computer':

	// 			echo "8 Computer";
	// 			break;
			
	// 		case 'Nepali':

	// 			echo "8 Nepali";
	// 			break;

	// 		case 'SEE Book':

	// 			echo "8 SEE Book";
	// 			break;
			
	// 		case 'SEE Guide':

	// 			echo "8 SEE Guide";
	// 			break;
				
	// 		case 'Grammer':

	// 			echo "8 Grammer";
	// 			break;
			
	// 		case 'Health':

	// 			echo "8 Health";	
	// 			break;

	// 	}
	// }
	// elseif($class == "class 9"){
	// 	switch ($subject) {
	// 		case 'Science':

	// 			echo "9 Science";
	// 			break;
			
	// 		case 'Math':

	// 			echo "9 math";
	// 			break;

	// 		case 'English':

	// 			echo "9 English";
	// 			break;
			
	// 		case 'Social':

	// 			echo "9 Social";
	// 			break;
				
	// 		case 'Computer':

	// 			echo "9 Computer";
	// 			break;
			
	// 		case 'Nepali':

	// 			echo "9 Nepali";
	// 			break;

	// 		case 'SEE Book':

	// 			echo "9 SEE Book";
	// 			break;
			
	// 		case 'SEE Guide':

	// 			echo "9 SEE Guide";
	// 			break;
				
	// 		case 'Grammer':

	// 			echo "9 Grammer";
	// 			break;
			
	// 		case 'Health':

	// 			echo "9 Health";	
	// 			break;

	// 	}
	// }
	// else{
	// 	switch ($subject) {
	// 		case 'Science':

	// 			echo "Science";
	// 			break;
			
	// 		case 'Math':

	// 			echo "math";
	// 			break;

	// 		case 'English':

	// 			echo "English";
	// 			break;
			
	// 		case 'Social':

	// 			echo "Social";
	// 			break;
				
	// 		case 'Computer':

	// 			echo "Computer";
	// 			break;
			
	// 		case 'Nepali':

	// 			echo "Nepali";
	// 			break;

	// 		case 'SEE Book':

	// 			echo "SEE Book";
	// 			break;
			
	// 		case 'SEE Guide':

	// 			echo "SEE Guide";
	// 			break;
				
	// 		case 'Grammer':

	// 			echo "Grammer";
	// 			break;
			
	// 		case 'Health':

	// 			echo "Health";	
	// 			break;
	// 	}
	// }
		if (mysqli_num_rows($run) > 0) {
			while ($assoc = mysqli_fetch_assoc($run)) {
					// ip here
				$ip = $_SERVER['REMOTE_ADDR'];

				// user agent here
				$user_agent = $_SERVER['HTTP_USER_AGENT'];

				$class = mysqli_real_escape_string($conn, htmlentities($_POST['bookclass']));
				$age = mysqli_real_escape_string($conn, htmlentities($_POST['age']));
				$subject = mysqli_real_escape_string($conn, htmlentities($_POST['subject']));
				$price = mysqli_real_escape_string($conn, htmlentities($_POST['price']));


				$username = $assoc['username'];
				$cookie_age = $assoc['age'];
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
				$book_pic = "https://play-lh.googleusercontent.com/U1POiRsIcbJNx7-bwPL8dJsndGmhrlM_xrUiA1Q65tVGxumjw0ZnYB8x9ZZTqiLdchM";

				if ($user_logged != $token || $age != $cookie_age) {
					echo "incorrect";
				}
				else{
					$insert = "INSERT INTO `sell` (`username`, `user_cookie`, `user_token`, `class`, `book_pic`, `age`, `cookie_age`, `subject`, `price`, `ip`, `user_agent`) VALUES ('$username', '$user_logged', '$token', '$class', '$book_pic', '$age', '$cookie_age', '$subject', '$price', '$ip', '$user_agent');";
					$query = mysqli_query($conn, $insert);

					if ($query) {
						echo "done";
					}
					else{
						echo "nah mate";
						// echo "error: ". mysqli_error($insert);
					}
				}	
			}
		}
	

	
}



?>