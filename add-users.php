<?php 
session_start();
include 'database/connection.php';
if(!isset($_SESSION['user_id'])){

	header("Location:login.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/users-add-form.css">

		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

	<title>Dashboard </title>
	
</head>
<body>
	<div id="main_container">
	<!-- sidebar-->

	<?php include('partial/sidebar.php');   ?>
			
		</div>
		<div class="dashboard_contain_container" id="dashboard_contain_container">
			
			<!-- topnavigation logout -->
			<?php include('partial/topnav-add.php'); ?>

			<div class="dashboard_containt">
		
						<h2 class="header-insert"> <i class= "fa fa-plus"></i>Insert Users</h2>

						<div class="dashboard_contain_main">
							<div id="userAddFormContainer">
					
								<form action="database/user-add.php" method="post" class="appForm">

								<div  class="appFormInputContainer">
									<label for=""> First Name</label>
									<input type="text" class="appFormInput"  name="first_name" id="first_name"></div>
									<div class="appFormInputContainer">
										<label for=""> Last Name</label>
									<input type="text"  class="appFormInput"  name="last_name" id="last_name">
								</div>

									<div class="appFormInputContainer">
									<label for=""> Email</label>
									<input type="email" class="appFormInput"   name="email" id="email">
									</div>
									<div class="appFormInputContainer">
										<label for=""> Password</label>
									<input type="password" class="appFormInput"  name="password" id="password">
										
									</div>

								<button type="submit" class="appBtn" id="appBtn"><i class="fa fa-plus"></i>Add User</button>

							</form>

							</div>

						 </div>
						
					</div>
								
		         					</tbody>

            
								</table>
								
							</div>
						</div>
							</div>
			</div> -->

				</div>

			</div>

		</div>
	</div>

<script src="js/script.js" >
	
</script>

</body>
</html>