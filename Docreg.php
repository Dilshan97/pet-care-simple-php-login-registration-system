<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="style/main.css" />
        <link rel="stylesheet" type="text/css" href="style/main1.css" />
    </head>
    <body>
       <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="Useracc.php">My Account</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            
           <?php
session_start();

 $link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "itpdm");

?>

           
            <div id="content_area">
                
                

		<div class="container">

			<div class="row">

				<div class="col-sm-4 col-sm-offset-1">

					<div class="login-form"><!--login form-->

						<h2>Login to your account</h2>

						<form class="login-container" name="form1" action"" method="post">
						<p><input type="text" placeholder="Email" required name="username"></p>
						<p><input type="password" placeholder="Password" required name="pwd"></p>
						<div id="d1" style="color:#FF0000"></div>
							
							<button type="submit" name="submit1" value="Log in">Login</button>

						</form>

					</div><!--/login form-->

				</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
<?php

				if(isset($_POST["submit1"]))
{
$res=mysqli_query($link,"select * from user where doc_nic='$_POST[username]' && password='$_POST[pwd]'");
while($row=mysqli_fetch_array($res))
{
$_SESSION["admin"]=$row["doc_nic"];
?>
<script type="text/javascript">
window.location="docacc.php";
</script>
<?php
}

?>
<script type="text/javascript">
document.getElementById("d1").innerHTML="Email or Password is wrong";
</script>
<?php


?>


</script>

<?php

}
	?>

				<div class="col-sm-1">

					<h2 class="orr">OR</h2>

				</div>

				<div class="col-sm-4">

					<div class="signup-form"><!--sign up form-->

						<h2>New User Signup!</h2>

						<form  name="form2" action"" method="post">

							
                                                        <input type="text" placeholder="NIC" required name="nic"/>


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
				<?php
if(isset($_POST['submit2'])){
		
			$email = $_POST['email'];
			

			$query = mysqli_query($link,"SELECT * FROM user WHERE u_email='$email' ");
			if(mysqli_num_rows($query) > 0 )//check if there is already an entry for that username 
			{ 
			?>
<script type="text/javascript">
document.getElementById("d2").innerHTML="Email already exists!";
</script>
<?php

				
			}else{
			    $_SESSION["admin"]=$_POST['email'];
			    $admin=$_SESSION["admin"];
				mysqli_query($link,"insert into user values('','$_POST[fname]','$_POST[lname]','$admin','$_POST[pwd]','$_POST[add]','$_POST[pn]')");
?>
<script type="text/javascript">
window.location="Useracc.php";
</script>
<?php



}

}

?>

			</div>

		</div>

	


                
            </div>
            
            
            <div id="footer">
            <footer>
                <p>&#169; Pet Care 2019</p>
            </footer>
                </div>
    </body>
</html>
