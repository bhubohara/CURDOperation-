
<?php 	

	session_start();
	

include'connection.php';



	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	
	

	//adding record
  
  	$sql = "INSERT INTO `users`( `first_name`, `last_name`, `email`, `password`) VALUES 
  	('$first_name','$last_name','$email', '$password')";

  		

  	 
if ($conn->query($sql) === TRUE) {

 

echo "<<script> alert('New user is added !')</script>";
 ?>


 <meta http-equiv="refresh" content="0; url = http://localhost/ims/add-users.php">

 <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>