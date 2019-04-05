<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact-us</title>
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
            
            
            
            <div id="content_area">
                
                	 <div id="contact-page" class="container">

    	
    			   	 
   			    	
   	
    		<div class="row"> 
 	
	    		<div class="col-sm-8">

                
                <div class="contact-form">

	    				<h2 class="title text-center">Contact Us</h2>

	    				<div class="status alert alert-success" style="display: none"></div>

				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">

				            <div class="form-group col-md-6">

				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">

				            </div>

				            <div class="form-group col-md-6">

				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">

				            </div>

				            <div class="form-group col-md-12">

				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">

				            </div>

				            <div class="form-group col-md-12">

				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>

				            </div> 
                       
				            <div class="form-group col-md-12">

				                <input type="submit" name="submit"  onclick="alert('Message successfully sent')" class="btn btn-primary pull-right" value="Submit">

				            </div>

				        </form>

	    			</div>

	    		</div>
                </div>
                         </div>
            </div>


<?php


			if(isset($_POST["submit"]))

			{

			  $link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "itpdm");
				mysqli_query($link,"insert into message values('','$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')");


				}
				?>
                
                
            </div>
            
            <div id="sidebar">
                <img src="Images/side.jpg" alt="" width="225" height="375" />
            </div>
            
            <footer>
                <p>&#169; Pet Care 2019</p>
            </footer>
        
        
        
        
        
        

    </body>
</html>
