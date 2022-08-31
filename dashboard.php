<?php 
session_start();
include('database/connection.php');


if(!isset($_SESSION['user_id'])){

	header("Location:login.php");
	 
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">

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
				

			

					

					<div class="column column-7">
						<h2 class="header-insert"> <i class= "fa fa-list"></i>List users</h2>

						<div class="section_content">
							<div class="users">
								<table>
									<thead>
										<tr>
											<th scope="col">id</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Email</th>
											<th>Created At</th>
											<th>Updated At</th>
											<th>Action</th>
										</tr>
										
									</thead>

            									
									<tbody>
											<?php 
											include_once 'database/show-user.php';
									  while($row = $result->fetch_assoc()) {
									  	?>
										      
										<tr>
											<td><?php echo $row['id'];?></td>
											<td><?php echo $row['first_name'];?></td>
											<td><?php echo $row['last_name'];?></td>
											<td><?php echo $row['email'];?></td>
											<td><?php echo $row['created_at'];?></td>
											<td><?php echo $row['updated_at'];?></td>
											<td>
												<a href="edit.php?id= <?php echo $row['id'];?>"><i class="fa fa-pencil"></i> Edit</a>

												<a 
												href="delete.php ?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i>  Delete</a>
											</td>
												
										</tr>
										<?php
										     
										     }
										     	?>
		         					</tbody>

            
								</table>
								
							</div>
						</div>
								

							</div>

				
				


				
			</div>
					




				</div>

					
			
			</div>


		</div>
	</div>

<script src="js/script.js" >
	
</script>

</body>
</html>