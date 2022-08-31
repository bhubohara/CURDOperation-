<?php
session_start();

include ('database/connection.php');
$msg="";

if(isset($_POST['submit'])){

  //echo "<pre>";
  //print_r($_POST);

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  $sql=mysqli_query($conn,"select *from users where email='$username'&& password='$password'");
  $num= mysqli_num_rows($sql);
  if ($num>0)
  {
  	$row=mysqli_fetch_assoc($sql);
  	$_SESSION['user_id']= $row['id'];
  	$_SESSION['user_name']= $row['username'];

  	header("Location:dashboard.php");
  }
  else {
  	$msg = "enter valid email or password !";
  }

}
  
  ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Management System </title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	
<div class="container">
	<div class="loginHeader">
		<h2>UMS</h2>

		<p>USER MENAGEMENT SYSTEM</p>

	</div>
	<div class="loginbody">
		
			<form action="" method="POST">
				<div class="loginInputContainer">
				<label for=" ">Username</label>
				<input type="text" name="username" placeholder="username" />
			</div>
			<div class="loginInputContainer"><label for="">password</label>
				<input type="password" name="password" placeholder="password" />
			</div >
			<div class="LoginButtonContainer">
				<input type="submit" name="submit" value="LOGIN">
			</div>

				<div class="error">
					<?php echo $msg

					?>
				</div>

			 </form>

	</div>
</div>
	
</body>
</html>