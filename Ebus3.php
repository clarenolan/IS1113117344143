<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Receipt</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    
    <body>
        
        <ul class="a">
          <li><a href="Homepage.html">Home</a></li> 
          <li><a href="cv_page1.html">CV</a></li>
          <li><a href="interests.html">Interests</a></li>
          <li><a href="EbusHome.html">Shop</a></li>
        </ul>
        
        <ul class="c">
          <li><a href="EbusHome.html">Home</a></li>
          <li><a href="aboutcloud.html">About Cloud</a></li> 
          <li><a href="Ebus1.php">Products</a></li>
          
        </ul>
        
        <h4 class="ebus3_heading">Purchase Receipt</h4>
        
        <?php  
        
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="ebus3_name">
            <?php
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="ebus3_email">
            <?php
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="ebus3_total">
            <?php
           echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
    </body>
</html>
