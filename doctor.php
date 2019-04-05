

<?php

	session_start();

	include_once "dbconnect.php";

	if(isset($_POST['submit1'])){
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM doctor WHERE doc_email='$username' AND password='$pwd'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			$user = mysqli_fetch_assoc($result);

			$_SESSION['doc_name'] = $user['doc_name'];
			$_SESSION['doc_reg_num'] = $user['doc_reg_num'];
			$_SESSION['doc_city'] = $user['doc_city'];
			$_SESSION['doc_province'] = $user['doc_province'];
			$_SESSION['doc_cnum'] = $user['doc_cnum'];
			$_SESSION['doc_address'] = $user['doc_address'];
			$_SESSION['doc_email'] = $user['doc_email'];
			$_SESSION['doc_ephone'] = $user['doc_ephone'];
			$_SESSION['doc_gender'] = $user['doc_gender'];

			echo "Doctor logged";
			header('Location: done_doctor.php');
		} 
		else {
			echo "cannot Login";
		}
	}


	if(isset($_POST['submit2'])){
		$name = $_POST['name'];
		$licence = $_POST['licence'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$phone = $_POST['phone'];
		$ephone = $_POST['ephone'];
		$gender = $_POST['gender'];

		$sql = "INSERT INTO doctor (doc_name, doc_reg_num, doc_city, doc_province, password, doc_cnum, doc_address, doc_email, doc_ephone, doc_gender) 
			VALUES('$name', '$licence', '$city', '$province', '$pw', '$phone', '$address', '$email', '$ephone', '$gender')";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "doctor Created";
		} 
		else {
			echo "Erro";
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
					<div class="col-sm-5 col-sm-offset-1">
						<div class="login-form">
							<h2>Login to your account</h2>
							<form action="doctor.php" name="form1" method="post" class="login-container">
								<p><input type="text" placeholder="Email" required name="username"></p>
								<p><input type="password" placeholder="Password" required name="pwd"></p>
								<div id="d1" style="color:#FF0000"></div>
								<button type="submit" name="submit1" value="Log in">Login</button>
							</form>
						</div>
					</div>

					<div class="col-sm-1">
						<h2 class="orr">OR</h2>
						&nbsp;&nbsp;&nbsp;&nbsp;
					</div>

					<div class="col-sm-6">
						<div class="signup-form">
							<h2>New User Signup!</h2>
							<form action="doctor.php" method="POST" name="form2">
								<input type="text" name="name" placeholder="Name">
								<input type="text" name="licence" placeholder="Licence Number">
								<textarea type="text" name="address" placeholder="Address"></textarea>
								&nbsp;
								<input type="text" name="city" placeholder="City">
								<input type="text" name="province" placeholder="Province">
								<input type="email" name="email" placeholder="E-mail Address">
								<input type="password" name="pw" placeholder="E-mail Address">
								<input type="tel" name="phone" placeholder="Phone Number: 1234567890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="pn"/>
								<input type="tel" name="ephone" placeholder="Emergency Number: 1234567890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="pn"/>
					  
								<div class="row">
									&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="col2">Male</div>
									<div class="col-2">
										<input type="radio" name="gender" value="male" id="gender-male" checked="checked">
									</div>

									<div class="col2">Female</div>
									<div class="col-2">
										<input type="radio" name="gender" value="female" id="gender-female">
									</div>
								</div>
					 
								
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