<?php
include "config.php";
if ($_SESSION['rollno']==null) {
		echo "<script>location='index.php'</script>";
}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Nominations</title>
	<style type="text/css">
	.first{
		margin-top: vw;
		border-radius:5vw 1.5vw;
	}
	.main{
		padding: 5vw 0 12vw 0; 
	}
	.three{
		margin-top: 1.5vw;
	}
	.three a{
	text-decoration: none;
	color:white;
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

.three a:hover{
	text-decoration: none;
	background:	#b3ffff;
}
input{
	background-color: red;
	color: blue;
}
</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="styles.css">
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">s
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="images/x-icon" href="https://www.clipartmax.com/png/middle/10-105159_the-last-day-to-vote-in-city-school-elections-is-saturday-vote.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('images/total1.jpg');background-opacity: 1;border-radius: 30px;margin: none">

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<img src="images/title1.png" class="img-responsive">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<img src="images/title2.png" class="img-responsive first" >
		</div>
		</div>
	</div>	
	<nav class="navbar navbar-default"  styl="background: white;">
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
				<li class=""><a href="queries.php">Queries</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="Addcandidate.php"><span class="glyphicon glyphicon-user"><b>Candidate</b></span></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><b>SignOut</b></span></a></li>
				<li><a href="VoterLogin.php"><span class="glyphicon glyphicon-log-in"><b>Voter</b></span></a></li>
			</ul>
		</div>
	</nav>

		<div class="container main" style="background-image:url('images/candback.jp'); background-size: cover; background-repeat: no-repeat; border-radius: 30px;"> 
			<div class="row" >
				<div></div>
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-2 " ></div>
				<!-- <div class="col-md-5 col-sm-7 col-xs-9 col-lg-5 "  >
				</div> -->
			</div>
			<div class="row" >
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-2 " ></div>
				    <div class="col-md-5 col-sm-7 col-xs-9 col-lg-5 " style="background-opacity: 1;border-radius: 30px;" >
				    	<h2 style="text-align: center;color: white;"><b><i>NOMINATIONS</i></b></h2>
						  <form method="post" enctype="multipart/form-data">
								<div class="form-group">
									<input type="text" name="rollno" placeholder="RollNo" value="<?php echo $_SESSION['rollno']?>"class="form-control" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;border-bottom: 1px solid white;color: white; " disabled="disabled">
								</div>
								<div class="form-group">
									<input type="text" name="partyname" placeholder="Party name" class="form-control" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;border-bottom: 1px solid white;color: white; " required>
								</div>
								<div class="form-group">
									<input type="text" name="reason" placeholder="reason for enrolling" class="form-control" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;border-bottom: 1px solid white;color: white; " required>
								</div>
								<div class="form-group">
									<input type="file" class="form-control" name="photo" style="border-radius: ; opacity:0.8;outline:none;background:none;border:none;border-bottom: 1px solid white; color: white;" required>
								</div>
								<div class="form-group">
								<input type="submit" class="btn btn-info" name="submit" style="border-radius: 30px;margin:4% 30% 0% 44%; padding: 2% 4% 2% 4%; opacity: 0.9" >                  
						</div>
							</div>
							
						</form>
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
include("config.php");
if(isset($_POST["submit"]))
{
	$rollno = $_POST['rollno'];
	$reason = $_POST['reason'];
	$partyname = $_POST['partyname'];
	$goto = "uploads/";
	$photo=$_FILES['photo'];
	$size = $_FILES['photo']['size'];
	$name = $_FILES['photo']['name'];
	$temp = $_FILES['photo']['tmp_name'];
	$ext = pathinfo($name, PATHINFO_EXTENSION);
	$newname=$goto.$rollno.".".$ext;
	$query 	= "select * from students where RollNo='".$rollno."'" ;
	$result = mysqli_query( $con, $query);
	$rows = mysqli_num_rows($result);
	if($rows==1)
	{
		if($size<=150*1024)
		{
			if (strtolower($ext)!='png' && strtolower($ext)!='jpg' && strtolower($ext)!='jpeg')
			{
				echo "Please Upload Image File Only (.jpg, .jpeg, .png)";
			}
			else {
				$move = move_uploaded_file($temp,$newname);	
				$status=1;
				$query1 = "INSERT INTO candidate SET rollno='$rollno',photo='$newname',partyname='$partyname',reason='$reason',status='1' ";
				$result1 = mysqli_query( $con, $query1);
				if ($result1) {
					echo "<script> alert('successfully applied')</script>";
					echo "<script> location=''</script>";
					$query2 = "INSERT INTO Appliedcandidates SET rollno='$rollno',photo='$newname',partyname='$partyname',reason='$reason',status='1' ";
					$result2 = mysqli_query( $con, $query2);
				}
				else
				{
					echo "<script> alert('not applied')</script>";
				}
			}
		}
		else
		{
			echo "<script> alert('size of the picture must be less than 150kb')</script>";
		}
	}
	else
		{
			echo "<script> alert('u must be the candidate of the college')</script>";
		}
}
?>