	<?php include("config.php"); 
	if ($_SESSION['username']==null) {
		echo "<script>location='index.php'</script>";
	}
	?>

	<?php
	if(isset($_POST['disqualify'])) {
		$id=$_POST['disqualify'];

		echo $delete = "DELETE FROM candidate WHERE rollno='".$id."'";
		$qu=mysqli_query($con,$delete);

		if ($qu) {
			echo "<script>alert('successfully deleted');</script>";
		}
		else
		{
			echo "not deleted";
		}
	}
?>
<?php
	if(isset($_POST['approve'])) {
		$rollno=$_POST['approve'];
		// echo "<script>echo $rollno</script>";
		$select = "select *FROM students WHERE RollNo='".$rollno."'";
		$qu=mysqli_query($con,$select);
		$array = mysqli_fetch_array($qu);
		$select1 = "select *FROM appliedcandidates WHERE rollno='".$rollno."'";
		$qu1=mysqli_query($con,$select1);
		$array1 = mysqli_fetch_array($qu1);
		$query = "INSERT INTO presmem SET name='$array[name]',partyname='$array1[partyname]',rollno='$rollno',photo='$array1[photo]',status='1' ";
		$quer=mysqli_query($con,$query);
		if ($quer) {
			echo "<script>alert('successfully approved')</script>";
			$query2 = "delete from candidate where rollno='$rollno'";
			mysqli_query($con,$query2);
			echo "<script>location=''</script>";
			// $query1 = "INSERT INTO appliedcandidates SET rollno='$rollno',photo='$photo',status='1' ";
		//$quer=mysqli_query($con,$query1);
		}
		else
		{
			 echo "<script>alert('not approved');</script>";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style type="text/css">
	.first{
		margin-top: 1vw;
		border-radius:5vw 1.5vw;
	}
	.three{
		margin-top: 10vw;
	}
	.three a{
	text-decoration: none;
	color:white;
}
.three a:hover{
	text-decoration: none;
	background:	#b3ffff; 
}

  /* styles for footer div*/

.generic-anchor {
  color: #8DB9ED;
}
.generic-anchor:visited {
  color: #8DB9ED;
}
.generic-anchor:hover {
  color: #ccc;
}

.flex-rw {
  display: flex;
  flex-flow: row wrap;

}

main {
  flex: 1 1 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  font: 10em "Oswald", sans-serif;
  color: #9b9b9b;
  line-height: 1;
}

footer {
  background: #373737;
  margin-top: 10vw;
  width: 100%;
}

.footer-list-top {
  width: 33.333%;
}

.footer-list-top > li {
  text-align: center;
  padding-bottom: 10px;
}

.footer-list-header {
  padding: 10px 0 5px 0;
  color: #fff;
  font: 2.3vw "Oswald", sans-serif;
}

.footer-list-anchor {
  font: 1.3em "Open Sans", sans-serif;
}

.footer-social-section {
  width: 100%;
  align-items: center;
  justify-content: space-around;
  position: relative;
  margin-top: 5px;
}

.footer-social-section::after {
  content: "";
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 10px;
  border-top: 1px solid #ccc;
  width: calc(100% - 20px);
}

.footer-social-overlap {
  position: relative;
  z-index: 2;
  background: #373737;
  padding: 0 20px;
}

.footer-social-connect {
  display: flex;
  align-items: center;
  font: 3.5em "Oswald", sans-serif;
  color: #fff;
}

.footer-social-small {
  font-size: 0.6em;
  padding: 0px 20px;
}

.footer-social-overlap > a {
  font-size: 3em;
}

.footer-social-overlap > a:not(:first-child) {
  margin-left: 0.38em;
}

.footer-bottom-section {
  width: 100%;
  padding: 10px;
  border-top: 1px solid #ccc;
  margin-top: 10px;
}

.footer-bottom-section > div:first-child {
  margin-right: auto;
}

.footer-bottom-wrapper {
  font-size: 1.5em;
  color: #fff;
}

.footer-address {
  display: inline;
  font-style: normal;
}

@media only screen and (max-width: 768px) {
  .footer-list-header {
    font-size: 2em;
  }

  .footer-list-anchor {
    font-size: 1.1em;
  }

  .footer-social-connect {
    font-size: 2.5em;
  }

  .footer-social-overlap > a {
    font-size: 2.24em;
  }

  .footer-bottom-wrapper {
    font-size: 1.3em;
  }
}
@media only screen and (max-width: 568px) {
  main {
    font-size: 5em;
  }

  .footer-list-top {
    width: 100%;
  }

  .footer-list-header {
    font-size: 3em;
  }

  .footer-list-anchor {
    font-size: 1.5em;
  }

  .footer-social-section {
    justify-content: center;
  }

  .footer-social-section::after {
    top: 25%;
  }

  .footer-social-connect {
    margin-bottom: 10px;
    padding: 0 10px;
  }

  .footer-social-overlap {
    display: flex;
    justify-content: center;
  }

  .footer-social-icons-wrapper {
    width: 100%;
    padding: 0;
  }

  .footer-social-overlap > a:not(:first-child) {
    margin-left: 20px;
  }

  .footer-bottom-section {
    padding: 0 5px 10px 5px;
  }

  .footer-bottom-wrapper {
    text-align: center;
    width: 100%;
    margin-top: 10px;
  }
}
@media only screen and (max-width: 480px) {
  .footer-social-overlap > a {
    margin: auto;
  }

  .footer-social-overlap > a:not(:first-child) {
    margin-left: 0;
  }

  .footer-bottom-rights {
    display: block;
  }
}
@media only screen and (max-width: 320px) {
  .footer-list-header {
    font-size: 2.2em;
  }

  .footer-list-anchor {
    font-size: 1.2em;
  }

  .footer-social-connect {
    font-size: 2.4em;
  }

  .footer-social-overlap > a {
    font-size: 2.24em;
  }

  .footer-bottom-wrapper {
    font-size: 1.3em;
  }
}
</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="icon" type="images/x-icon" href="https://www.clipartmax.com/png/middle/10-105159_the-last-day-to-vote-in-city-school-elections-is-saturday-vote.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('images/total1.jpg');background-opacity: 1;border-radius: 30px;margin: none;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<img src="images/title1.png" class="img-responsive">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<img src="images/title2.png" class="img-responsive first">
		</div>
		</div>
	</div>		
	<nav class="navbar navbar-inverse"  styl="background: white;">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><b>COLLEGE ELECTIONS</b></a>
		</div>

		<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav">
				<li class=""><a href="#">Home</a></li>
				<li class=""><a href="#">About us</a></li>
				<li class=""><a href="#">Queries</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><b>SignOut</b></span></a></li>
			</ul>
		</div>
	</nav>
    
	
 			<!-- accordion for admin panel -->
 			<!-- accordion header displayed at th eleft corner -->
      <div class="container-fluid">
			<div class="panel-group" id="accordion" style="margin: 1vw 2vw 0vw 1vw;">
				<div class="panel panel-default col-xs-12 col-lg-2 col-sm-12 col-md-3" style="background: #0080ff;margin: 1vw 2vw 0vw 1vw;">
					<div class="panel-heading"  style="background: #0080ff;color:black;text-align: center;">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion"><b><i>MENU</i></b></a>
						</h4>
					</div>
					<div class="panel-heading"  style="background: #0080ff;color:#ccffff">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><b><i>AdminDetails</i></b></a>
						</h4>
					</div>
					<div class="panel-heading"  style="background: #0080ff;color:#ccffff">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Insert Voters</a>
						</h4>
					</div>
					<div class="panel-heading" style="background: #0080ff;color:#ccffff">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Candidates List</a>
						</h4>
					</div>
					<div class="panel-heading"  style="background: #0080ff;color:#ccffff">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Voters List</a>
						</h4>
					</div>
					<div class="panel-heading"  style="background: #0080ff;color:#ccffff">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Conduct election/send results</a>
						</h4>
					</div>
					<div class="panel-heading"  style="background: #0080ff;color:#ccffff">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Election status</a>
						</h4>
					</div>
				</div>
   				<!-- body of the accordion displayed right to the admin panel -->
   				<div id="collapse8" class="panel-collapse collapse">
	  				<div class="col-md-5 col-sm-7 col-xs-9 col-lg-4 "  style="background-image:url('images/cand.jpg');border-radius:1px solid black;background-opacity: 1;border-radius: 30px;" >
					   <form action="" method="post">
					   	<h2 style="text-align: center;color: white;margin-bottom: 2vw;;"><i><b>Update</b></i>	</h2>
						<div class="form-group">
							<input type="text" name="username"  class="form-control" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;color: white;border-bottom: 1px solid white;margin-top: 1vw; " required>
						</div>
						<div class="form-group">
							<input type="Password" class="form-control"  name="password" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;color: white;border-bottom: 1px solid white; " required>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-info" name="update" value="update" style="border-radius: 30px 50px; margin:4% 30% 0% 44%; padding: 2% 8% 2% 8%; opacity: 0.9"> 
						</div>                 
						</form>
						<?php
						include "config.php";
							if (isset($_POST['update'])) {
								$user=$_POST['username'];
								$pass=$_POST['password'];
								$query 	= "update  admin set username='$user',password='$pass' where 1";
								$result = mysqli_query($con, $query);
								$rows = mysqli_num_rows($result);
								if ($result) {
									echo "<script>alert('updated')</script>";
								}
								else
									{
									echo "<script>alert('not updated')</script>";
								}
								echo "<script>location='';</script>";
							}
						?>
				</div>
	  			</div>

				<div class="panel panel-default col-xs-12 col-lg-9 col-sm-9 col-md-9">
					
					<div id="collapse1" class="panel-collapse collapse">
	  				<form method="post" enctype="multipart/form-data">
	  					<div class="form-group">
	  						<input type="file" class="form-control" name="bulk" style="border-radius: 30px; opacity: 0.8">
	  					</div>
	  					<div class="form-group">
	  						<label>data in csv should be in the format of rollno,name,department,section</label>
	  						<input type="submit" class="btn btn-info" name="bulk_data" style="border-radius: 30px; opacity: 0.8">
	  					</div>
	  				</form>
	  			</div>
					<div id="collapse2" class="panel-collapse collapse" style="overflow-x:scroll;">
	  				<?php
	  				$query = " SELECT * FROM candidate ";
	  				$run = mysqli_query($con,$query);
	  				$row = mysqli_num_rows($run);
	  				$i = 1;
	  				if($row==0){
	  					echo "no one are pending:";
	  				}
	  				else {
	  					?>
	  					<table border="2" class="table table-bordered table-striped table-hover">
	  						<thead>
	  							<tr>
	  								<th>Sno</th>
	  								<th>rollno</th>	
	  								<th>party name</th>
	  								<th>symbol</th>
	  								<th>reason</th>
	  								<th>Add</th>
	  								<th>remove</th>
	  							</tr>
	  						</thead>
	  						<tbody>
	  							<?php
	  							while ($array = mysqli_fetch_array($run)) {
	  								?>
	  								<form method="post">
	  									<tr>
	  										<td><?php echo $i; ?></td>
	  										<td><!-- <span name="rollno" value="<?php echo $array['rollno'] ?>"> --><?php echo $array['rollno'] ?><!-- </span> --></td>
	  										<td><!-- <span name="rollno" value="<?php echo $array['partyname'] ?>"> --><?php echo $array['partyname'] ?><!-- /span> --></td>
	  										<td><img src="<?php echo $array['photo']?>" style="height:40px;width:40px;border-radius: 50%;"></td>
	  										<td><!-- <span name="rollno" value="<?php echo $array['reason'] ?>"> --><?php echo $array['reason'] ?><!-- </span> --></td>
	  										<td><button type="submit" name="approve" value="<?php echo $array['rollno'] ?>" class="btn btn-info">Approve</button></td>
	  										<td><button type="submit" name="disqualify" value="<?php echo $array['rollno'] ?>" class="btn btn-info">Eliminate</button></td>
	  									</tr>
	  								</form>
	  								<?php
	  								$i++;
	  							}
	  							?>
	  						</tbody>
	  					</table>
	  					<?php
	  				}
	  				?>
	  			</div>
					<div id="collapse3" class="panel-collapse collapse" style="overflow-x:scroll;">
						<?php
						$query = " SELECT * FROM students ";
						$run = mysqli_query($con,$query);
						$row = mysqli_num_rows($run);
						$i = 1;
						if($row==0){
							echo "no result found with this data:";
						}
						else {
							?>
							<table border="2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>sno</th>
										<th>rollno</th>
										<th>name</th>
										<th>class</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while ($array = mysqli_fetch_array($run)) {
										?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $array['RollNo']?></td>
											<td><?php echo $array['name']?></td>
											<td><?php echo $array['department']."-".$array['section']?></td>
										</tr>
										<?php
										$i++;
									}
									?>
								</tbody>
							</table>
							<?php
						}
						?>
					</div>
					<div id="collapse4" class="panel-collapse collapse fourth">
						<form method="post">
							<button type="submit" name="conduct" class="btn btn-info" style="align-content:center;">
								conduct_elections			
							</button><br>
							<br>	
							<button type="submit" name="announce" class="btn btn-info">
								announce results
							</button>
						</form>
					</div>
						<div id="collapse5" class="panel-collapse collapse" style="overflow-x:scroll;">
							<?php
							$query = " SELECT * FROM presmem";
							$run = mysqli_query($con,$query);
							$row = mysqli_num_rows($run);
							$i = 1;
							if($row==0){
								echo "no result found with this data:";
							}
							else {
								?>
								<table border="2" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>Sno</th>
											<th>rollno</th>	
											<th>name</th>
											<th>partyname</th>
											<th>symbol</th>
											<th>votes</th>
										</tr>
									</thead>
									<tbody>
										<?php

										$query = " SELECT * FROM presmem";
										$run = mysqli_query($con,$query);
										while ($fetch = mysqli_fetch_array($run)) {
											$quer="select * from votecount where nominee='".$fetch['rollno']."'";
											$run1 = mysqli_query($con,$quer);
											$rows = mysqli_num_rows($run1);
											?>

											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $fetch['rollno'] ?></td>
												<td><?php echo $fetch['name'] ?></td>
												<td><?php echo $fetch['partyname'] ?></td>
												<td><img src="<?php echo $fetch['photo']?>" style="height:40px;width:40px;border-radius: 50%;"></td>
												<td> <?php echo $rows?></td>
											</tr>
											<?php
											$i++;
										}
										
										?>
									</tbody>
								</table>
								<?php
							}
							?>
						</div>
				</div>
			</div> 
		</div>
    


</body>
	<footer class="flex-rw">

		<ul class="footer-list-top">
			<li>
				<li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">About Us</a></li>

				<li><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">Acknowledgement</a></li>

				<li><a href='/shop/about-show-schedule' class="generic-anchor footer-list-anchor" itemprop="significantLink">Connect With Us</a></li>
			</ul>
			<ul class="footer-list-top">
				<li>
					<li><a href='https://technicalhub.io/' class="generic-anchor footer-list-anchor">Technical-Hub</a></li>
					<li><a href='https://www.aec.edu.in/' class="generic-anchor footer-list-anchor">Our College</a></li>
					<li><a href='#' class="generic-anchor footer-list-anchor" target="_blank">Support Team</a></li>
				</ul>
				<ul class="footer-list-top">
					<li id='help'>
						<li id='find-a-store'><a href='queries.php' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
						<li id='user-registration'><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">College Democracy</a></li>
						<li id='order-tracking'><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">Miscellaneous</a></li>
					</ul>
					<section class="footer-social-section flex-rw">
						<span class="footer-social-overlap footer-social-connect">
							CONNECT <span class="footer-social-small">with</span> US
						</span>
						<span class="footer-social-overlap footer-social-icons-wrapper">
							<a href="https://www.linkedin.com/company/technicalhub/?originalSubdomain=in" class="generic-anchor" target="_blank" title="LinkedIn" itemprop="significantLink"><i class="fa fa-linkedin"></i></a>
							<a href="https://www.facebook.com/technicalhubio/" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/technicalhubio?lang=en" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/technicalhubio/" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fa fa-instagram"></i></a>
							<a href="https://www.youtube.com/channel/UCxkP6bJRc5JGeV-h0uif4tQ" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
						</span>
					</section>
					<section class="footer-bottom-section flex-rw">
						<div class="footer-bottom-wrapper">   
							<i class="fa fa-copyright" role="copyright">

							</i> 2019 <address class="footer-address" role="company address">Aditya Endineering College</address><span class="footer-bottom-rights"> - All Rights Reserved - </span>
						</div>
						<div class="footer-bottom-wrapper">
							<a href="#" class="generic-anchor" rel="nofollow">Terms</a> | <a href="#" class="generic-anchor" rel="nofollow">Privacy</a>
						</div>
					</section>
				</footer>

</html>
<?php
if (isset($_POST['announce'])) {
	include "config.php";
	$query = " SELECT * FROM presmem";
	$run = mysqli_query($con,$query);
	echo "<scrit>alert('Election Results are being Announced')</script>";
	while ($fetch = mysqli_fetch_array($run)) {
		$quer="select * from votecount where nominee='".$fetch['rollno']."'";
		$run1 = mysqli_query($con,$quer);
		$rows = mysqli_num_rows($run1);
		$i++;
		$query2 = "INSERT INTO results SET name ='$fetch[name]',partyname='$fetch[partyname]',rollno='$fetch[rollno]',photo='$fetch[photo]',votes='$rows'";
		$quer=mysqli_query($con,$query2);
	}
}	
?>
<?php
include "config.php";
if (isset($_POST['bulk_data']))
 {
	if ($_FILES['bulk']['name']) 
	{
		$filename= explode('.', $_FILES['bulk']['name']);
		if (end($filename)=="csv")
		{
			$handle = fopen($_FILES['bulk']['tmp_name'], "r");
			while ($data = fgetcsv($handle))
			{
				$item1=mysqli_real_escape_string($con, $data[0]);
				$item2=mysqli_real_escape_string($con, $data[1]);
				$item3=mysqli_real_escape_string($con, $data[2]);
				$item4=mysqli_real_escape_string($con, $data[3]);
				$password='123';
				$sql="insert into students set RollNo='$item1',name='$item2',department='$item3',section='$item4',password='$password',status='1'";
				$query= mysqli_query($con,$sql);
					// if ($query) {
					// 	echo "<script>alert('successfully imported')</script>";
					// }
			}
			echo "<script>location='';</script>";
			fclose($handle);
		}
		else
		{
			echo "<script>alert('upload only csv file')</script>";
		}
	}
}
?>
<?php
if(isset($_POST['conduct']))
{
$query = " SELECT * FROM presmem";
$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);
while ($array = mysqli_fetch_array($run)) {
	$query = "INSERT INTO election SET name='$array[name]',partyname='$array[partyname]',rollno='$array[rollno]',photo='$array[photo]',status='1' ";
		$quer=mysqli_query($con,$query);
		}

}
?>
						