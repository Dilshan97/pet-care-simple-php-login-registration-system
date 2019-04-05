<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Account</title>
         <link rel="stylesheet" type="text/css" href="style/main.css" />
        <link rel="stylesheet" type="text/css" href="style/main1.css" />
        
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">  
                <a href="logout.php"><h4 align="right">Log out</h4></a>
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="Useracc.php">My Account</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
         
            
                <ul id="nav-tabs">
                    <li><a href="petreg.php">Pet Registration</a></li>
                   
                </ul>
            
            
            
               <?php
               session_start();

if(!isset($_SESSION["admin"]))
{
?>

<script type="text/javascript">
window.location="reg.php";
</script>
            <?php

      

}

               
            $link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "itpdm");

$Id=$_SESSION["admin"];
            $res3 = mysqli_query($link, "select * from pet_data where petOwnerid='$Id' ");
    while ($row3 = mysqli_fetch_array($res3)) {
        
       
	
     
        
    
?>
            
            <div id="content_area">
                
                
                
                <img src="../ITPDM/<?php echo $row3["petImage"]; ?>" alt="" class="imgLeft"/>
                <h2>Pet Name :- <?php echo $row3["petName"]; ?></h2>
                <h4>D.O.B :- <?php echo $row3["petBirthday"]; ?></h4>
                <h4>Category :- <?php echo $row3["petCategory"]; ?></h4>
                <h4>Gender :- <?php echo $row3["petSex"]; ?></h4>
                <h4>Next Vaccination Date :- <?php echo $row3["petVaccineDate"]; ?></h4>


             <!--<img src="Images/side.jpg" class="imgLeft" /> -->
                
                
                
            </div>
          <?php
            }
            ?>
            
            <div id="sidebar">
                <img src="Images/sideimage.jpg" alt="" width="225" height="375" />

            </div>
            
            <footer>
                <p>&#169; Pet Care 2019</p>
            </footer>
        </div>
    </body>
</html>
