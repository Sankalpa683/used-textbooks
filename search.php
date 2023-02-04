<?php 	

if (isset($_GET['query'])) {
	$query = htmlentities($_GET['query']);

	if ($query == "null") {
		header("location: index");
	}
	else{
		echo $query;
	}
}

 ?>