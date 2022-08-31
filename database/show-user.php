<?php
	
	include'connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
$conn->close();
?>