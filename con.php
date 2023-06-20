<?php 
	// Check connection 
	global $conn;
	if ($conn==false) { 
	die("Connection failed: " . mysqli_connect_error()); 
	} 
	$name=$_POST['name-3b9a'];
	$email = $_POST['email-3b9a']; 
	$message=$_POST['message-3b9a']; 
	


	$sql = "INSERT INTO contact ('$name','$email','$message')"; 
	//$mysqli->query($sql);
	if(mysqli_query($conn, $sql)){ 
		echo "Done successfully.
        You Will get Confirmation Email Shortly."; 
	} else{ 
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
		//header("Location: index.html"); 
	} 
	mysqli_close($conn); 
?> 