
<?php 	

	session_start();
	
include'database/connection.php';



	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$id =$_POST['id'];

	
	

	//adding record
  
  $sql ="UPDATE users SET first_name = ' $first_name', last_name='$last_name', email='$email', password='$password' WHERE id = $id";
  		

  	 
if($conn->query($sql) === TRUE) {

 

echo "<<script> alert(' user data is updated !')</script>";
 ?>


 <meta http-equiv="refresh" content="0; url = http://localhost/ims/add-users.php">

 <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>