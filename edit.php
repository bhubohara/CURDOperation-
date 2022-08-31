<?php 
session_start();
include('database/connection.php');
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit</title>

	<link rel="stylesheet" type="text/css" href="css/edit-form.css">
</head>
<body>


<div id="userAddFormContainer">

	<h2 style="text-align: center;">Record update </h2>

	<?php 

	$id = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id= {$id}";

		$result = mysqli_query($conn,$sql) or die("failed");

		if(mysqli_num_rows($result)>0)	{

			while($row=mysqli_fetch_assoc($result)){
	 ?>
<form action="update-edit.php " method="post" class="appForm">

								
			<div  class="appFormInputContainer">
				<label for=""> First Name</label>
					
					<input type="hidden" name="id" value="<?php echo $row['id'];?>">

					<input type="text" class="appFormInput"  name="first_name" id="first_name" value="<?php echo $row['first_name'];?>"></div>
						<div class="appFormInputContainer">
							<label for=""> Last Name</label>
								<input type="text"  class="appFormInput"  name="last_name" id="last_name" value="<?php echo $row['last_name'];?>">
								</div>

			<div class="appFormInputContainer">
				<label for=""> Email</label>
					<input type="email" class="appFormInput"   name="email" value="<?php echo $row['email'];?>" id="email">
						</div>
						<div class="appFormInputContainer">
							<label for=""> Password</label>
						<input type="password" class="appFormInput"  name="password" id="password">
										
							</div>

						
		<button type="submit" class="appBtn" id="appBtn"><i class="fa fa-plus"></i>Update
	</button>


		</form>
	<?php }

	} ?>

</div>
		
	</body>
	</html>