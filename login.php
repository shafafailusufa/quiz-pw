<?php
		
	$servername = "localhost";
	$username = "root";
	$password = " ";
	$database = "quiz-pw"

	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn){
		die("connection gagal : " . mysqli_connect_error());
	}
	echo "connection sukses!";
	mysqli_close($conn);

?>