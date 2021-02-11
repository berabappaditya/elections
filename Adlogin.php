<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Charmonman|Open+Sans|Roboto" rel="stylesheet">
	<style>
		html, body{
			font-family: 'Open Sans', sans-serif;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-3 col-md-offset-4 col-lg-3 col-lg-offset-4 colu" >
				<div class="container heading">
					<h1>Admin login</h1>
					<form action="" method="post">
						<div class="form-group">
							<input type="text" name="username" placeholder="username" class="form-control" style="border-radius: 5px;">
						</div>
						<div class="form-group">
						<input type="Password" class="form-control" placeholder="password" name="password">
						</div>
						<div class="form-group">
							<label style="color: white">Not having an account:</label>
								<a href="">click here</a>
						</div>
						<div class="form-group">
							 <input type="submit" class="btn btn-info" name="submit">                  
					</form>
				</div>
			</div>
	</div>
	</div>
</body>
</html>
<?php
		include("config.php");
		if(isset($_POST["submit"]))
		{
		$user = $_POST["username"] ;
		$password = $_POST["password"] ;
		$query 	= "select * from Admin where username='".$user."' AND password='".$password."'" ;
		$result = mysqli_query($con, $query);
		$rows = mysqli_num_rows($result);
		$fetch = mysqli_fetch_array($result);
		if ($rows==1) {
			
			$_SESSION['id'] = $fetch['id'];


			echo "<script>alert('successfully logged Admin')</script>";
		 echo "<script>location=''</script>";
		}
		else{
			echo "not logged";
			}
		}
	?>