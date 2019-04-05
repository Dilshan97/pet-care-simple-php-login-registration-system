
<?php

	session_start();

	include_once "dbconnect.php";

	if(isset($_POST['submit2'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$add = $_POST['add'];
		$pn = $_POST['pn'];

		$sql = "INSERT INTO user (u_fname, u_lname, u_email, u_password, u_address, u_contact) 
		VALUES('$fname', '$lname', '$email', '$pwd', '$add', '$pn')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "User Created";
		} 
		else {
			echo "Erro";
		}	
	}

	if(isset($_POST['submit1'])){
		$error = array();

		$username = $_POST['username'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM user WHERE u_email='$username' AND  u_password='$pwd'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			$user = mysqli_fetch_assoc($result);
			
			$_SESSION['u_fname'] = $user['u_fname'];
			$_SESSION['u_lname'] = $user['u_lname'];
			$_SESSION['u_email'] = $user['u_email'];
			$_SESSION['u_address'] = $user['u_address'];
			$_SESSION['u_contact'] = $user['u_contact'];

			header('Location: done_user.php');
		} 
		else {
			$error = "cannot Login";
		}
	}
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
			</ul>
		</nav>

		<div id="content_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="login-form">
							<h2>Login to your account</h2>
							<form action="user.php" name="form1" method="post" class="login-container">
								<p><input type="text" placeholder="Email" required name="username"></p>
								<p><input type="password" placeholder="Password" required name="pwd"></p>
								<?php 
									if(isset($error) && !empty($error)){
										echo "<div  style='color:#FF0000'>$error</div>";
									}
								?>
								<button type="submit" name="submit1" value="Log in">Login</button>
							</form>
						</div>
					</div>

					<div class="col-sm-1">
						<h2 class="orr">OR</h2>
					</div>

					<div class="col-sm-4">
						<div class="signup-form">
							<h2>New User Signup!</h2>
							<form action="user.php" method="POST" name="form2">
								<input type="email" placeholder="Email Address" required name="email"/>
								<input type="password" placeholder="Password" required name="pwd"/>
								<input type="text" placeholder="First Name" required name="fname" />
								<input type="text" placeholder="Last Name" required name="lname"/>					
								<input type="text" placeholder="Address" required name="add"/>
								<input type="tel" placeholder="Phone Number: 1234567890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="pn"/>
								<div id="d2" style="color:#FF0000"></div>
								<button type="submit" name="submit2" class="btn btn-default">Signup</button>
							</form>
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