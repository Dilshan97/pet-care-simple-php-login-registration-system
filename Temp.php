<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="style/main.css" />
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
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                <img src="Images/sideimage.jpg" alt="" width="225" height="375" />
            </div>
            
            <footer>
                <p>&#169; Pet Care 2019</p>
            </footer>
        </div>
    </body>
</html>
