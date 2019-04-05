<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pet Registration</title>
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

$link=mysqli_connect("localhost","root","","itpdm");

?>
            
            <div id="content_area">
       <div class="signup-form">          
<form name="form1" action="" method="post" enctype="multipart/form-data">
    
  <input type="text" placeholder="Pet Name" required name="pname" />
  <p>D.O.B :<input type="date" name="bday"></p>
  <input type="file" name="pimage">
  
  <select name="pcategory">
    <option value="">Pet Category</option>  
  <option value="Dog">Dog</option>
  <option value="Cat">Cat</option>
  <option value="Other">Other</option>
  </select>
  <P>
  <select name="pgen">
    <option value="">Select Gender</option>  
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select></p>

      <P> Next vaccine date :<input type="date" name="vdate"></p>
  <p><button type="submit" name="submit1" class="btn btn-default">Save </button></p>
</form>
 
           
           <?php
if(isset($_POST["submit1"]))
{
    $id=$_SESSION["admin"];
$v1=rand(111,999);
$v2=rand(111,999);

$v3=$v1.$v2;

$v3=md5($v3);

$fnm=$_FILES["pimage"]["name"];
$dst="./Images/".$v3.$fnm;
$dst1="Images/".$v3.$fnm;
move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

mysqli_query($link,"insert into pet_data values('','$_POST[pname]','$_POST[pcategory]','$_POST[bday]','$id','$_POST[pgen]','$dst1','$_POST[vdate]')");


}

?>

       </div>
                
                
                
            </div>
            
            
            <footer>
                <p>&#169; Pet Care 2019</p>
            </footer>
        </div>
    </body>
</html>
