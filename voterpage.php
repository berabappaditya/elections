<?php
	 include("config.php"); 
	if ($_SESSION['id']==null) {
		echo "<script>location='index.php'</script>";
	}
	$query1= "select * from students where id='".$_SESSION[id]."'";
	$result = mysqli_query($con, $query1);
	$fetch = mysqli_fetch_array($result); 
	$_SESSION['rollno']=$fetch['RollNo'];
	?>
<!DOCTYPE html>
<html>
<head>
	<title>College Elections</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
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
.first{
		margin-top: 1vw;
		border-radius:5vw 1.5vw;
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
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="AboutUs.php">About us</a></li>
				<li class=""><a href="AboutUs.php">Queries</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Addcandidate.php"><span class="glyphicon glyphicon-user"><b>Candidate</b></span></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><b>SignOut</b></span></a></li>
			</ul>
		</div>
		</div>
	</nav>

	<?php
	$query1= "select * from students where id='".$_SESSION[id]."'";
	$result = mysqli_query($con, $query1);
	$fetch = mysqli_fetch_array($result); 
	?>
	<marquee> <h1 style="text-align: center;color: white;">hello <span style="color: red;"><?php echo $fetch['name'];?> </span>cast your vote for the better Leader</h1><br></marquee>
	<div class="row">
		<div class="col-xs-12 col-md-8 col-lg-8 col-sm-12">
	<div class="container">
		<div class="container">
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse8">Details</a>
						</h4>
					</div>
					<div id="collapse8" class="panel-collapse collapse">
	  				<div class="col-md-5 col-sm-7 col-xs-9 col-lg-4 "  style="background-image:url('images/cand.jpg');border-radius:1px solid black;background-opacity: 1;border-radius: 30px;" >
					   <form action="" method="post">
					   	<h2 style="text-align: center;color: white;margin-bottom: 2vw;;"><i><b>Update</b></i>	</h2>
						<div class="form-group">
							<input type="text" name="RollNo" value="<?php echo $fetch['RollNo']?>" class="form-control" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;color: white;border-bottom: 1px solid white;margin-top: 1vw; " disabled="disabled">
						</div>
						<div class="form-group">
							<input type="Password" class="form-control"  name="password" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;color: white;border-bottom: 1px solid white; " required>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-info" name="update" value="update" style="border-radius: 30px 50px; margin:4% 30% 0% 44%; padding: 2% 8% 2% 8%; opacity: 0.9"> 
						</div>                 
						</form>
								</form>
								<?php
								if (isset($_POST['update'])) {
									$update="UPDATE students SET password='$_POST[password]' WHERE RollNO='$fetch[RollNo]'";
									$query=mysqli_query($con,$update);
									if ($query) {
										echo "<scrit>alert('successfully updated')</script>";
									}
									else
									{
										echo "<scrit>alert('not updated')</script>";
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<!-- <div class="col-lg- col-md-5 col-sm-5 col-xs-5 second" > -->
<div class="container">
	<div class="container">
		<div class="container">
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse5">Election results</a>
						</h4>
					</div>
					<div id="collapse5" class="panel-collapse collapse" style="overflow-x:scroll;">
						<?php
						$query = " SELECT * FROM results";
						$run = mysqli_query($con,$query);
						$row = mysqli_num_rows($run);
						$i = 1;
						if($row==0){
							echo "results are not released yet";
						}
						else {
							?>
							<table border="2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>sno</th>
										<th>rollno</th>
										<th>symbol</th>
										<th>name</th>
										<th>partyname</th>
										<th>votes</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while ($array = mysqli_fetch_array($run)) {
										?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $array['rollno']?></td>
											<td><img src="<?php echo $array['photo']?>" style="height:40px;width:40px;border-radius: 50%;"></td>
											<td><?php echo $array['name']?></td>
											<td><?php echo $array['partyname']?></td>
											<td><?php echo $array['votes']?></td>
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
	</div>
</div>
<br>
 <div class="container" style="margin:none;">
      		<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse3">cast your vote</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse" style="overflow-x:scroll;background-color: none;">
						<?php
						// to chech whether he voted or not
						include "config.php";
						$query = " SELECT * FROM results";
						$run = mysqli_query($con,$query);
						$row = mysqli_num_rows($run);
						if($row==0){
						$query2= "select * from students where id='".$_SESSION[id]."'";
						$result = mysqli_query($con, $query2);
						$fetch = mysqli_fetch_array($result); 
						$query1 = " SELECT * FROM votecount where rollno='$fetch[RollNo]'";
						$run1 = mysqli_query($con,$query1);
						$row1 = mysqli_num_rows($run1);
						if ($row1==1) {
							echo "you have already voted";
						}
						else
						{
							$query = " SELECT * FROM election";
							$run = mysqli_query($con,$query);
							$row = mysqli_num_rows($run);
							$i = 1;
							if($row==0){
								echo "Election are not started:";
							}
							else {
								?>
								<table border="2" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>Sno</th>
											<th>rollno</th>	
											<th>symbol</th>
											<th>name</th>
											<th>partyname</th>
											<th>select</th>

										</tr>
									</thead>
									<tbody>
										<form method="post">
											<tbody>
												<?php
												while ($array = mysqli_fetch_array($run)) {
													?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo $array['rollno']?></td>
														<td><img src="<?php echo $array['photo']?>" style="height:40px;width:40px;border-radius: 50%;"><input type="hidden" name="photo" value="<?php echo $array['photo']?>"></td>
														<td><?php echo $array['name']?><input type="hidden" name="name" value="<?php echo $array['name']?>"></td>
														<td><?php echo $array['partyname']?><input type="hidden" name="partyname" value="<?php echo $array['partyname']?>"></td>
														<td><input type="radio" name="vote" value="<?php echo $array['rollno']?>"></td>
													</tr>
													<?php
													$i++;
												}
												?>

											</tbody>
										</table>
										<button type="submit" class="btn btn-info" name="submit">vote</button>
									</form>
									<?php
								}
							}
						}
						else
						{
							echo "voting has been completed:";
							}
								?>
						
					</div>
				</div>
      </div>
  </div>
</div></div>
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
include "config.php";
	if (isset($_POST['submit'])) {
		$nominee=$_POST['vote'];
		$id=$_SESSION['id'];
		$photo=$_POST['photo'];
		$status=1;
		$query1= "select * from students where id='".$id."'";
			$result = mysqli_query($con, $query1);
			$rows = mysqli_num_rows($result);
			$fetch = mysqli_fetch_array($result);
		$query="insert into votecount set rollno='$fetch[RollNo]',photo='$photo',nominee='$nominee',status='$status'";
		$run=mysqli_query($con,$query);
		if ($run)
		{
			echo "<script>alert('successfully voted');</script>";
		}
		else
		{
			echo "<script>alert('u have already voted');</script>";
		}
	}
?>