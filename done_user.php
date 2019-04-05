<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Log In</title>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>
    <link rel="stylesheet" type="text/css" href="style/main1.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="wrapper">
		<div id="banner">
		</div><!--banner-->

		<nav id="navigation">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="Useracc.php">My Account</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>

		<div id="content_area">
			<div class="container">
				<div class="row justify-content-center align-self-center">
					<div class="col-9">
						<div class="card">
							<h5 class="card-header">My Profile</h5>
							<div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">First Name : <?php echo $_SESSION['u_fname']; ?></li>
                                    <li class="list-group-item">Last Name : <?php echo $_SESSION['u_lname']; ?></li>
                                    <li class="list-group-item">E-mail : <?php echo $_SESSION['u_email']; ?></li>
                                    <li class="list-group-item">Address : <?php echo $_SESSION['u_address']; ?></li>
                                    <li class="list-group-item">Phone : <?php echo $_SESSION['u_contact']; ?></li>
                                    
                                </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>

		<div id="footer">
			<footer>
				<p>&#169;Pet Care 2019</p>
			</footer>
		</div>
	</div><!--wrapper-->
</body>
</html>