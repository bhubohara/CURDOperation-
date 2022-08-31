<?php

require_once('database/connection.php');
 $id=$_GET['id'];

 $sql = "DELETE FROM users WHERE id = {$id}";

 $result = mysqli_query($conn,$sql) or die (" failed. ");

 echo "<script> alert('record is deleted !');</script>"




	?>
	<meta http-equiv="refresh" content="0; url = http://localhost/ims/add-users.php">