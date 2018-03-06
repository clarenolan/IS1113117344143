<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
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
        
        <h4 class="ebus2_heading"></h4> Enter payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="user_name" class="lbl_name">
                Name
                <input type="name" id="txtname" name="user_name" placeholder="Name">
            </label>
            
            <br>
            
            <label for="user_email" class="lbl_email">
                Email address
                <input type="email" id="txtemail" name="user_email" placeholder="example@gmail.com">
            </label>
            
            <br>

            <label for="user_pin" class="lbl_pin">
                PIN
                <input type="pin" id="txtpin" name="user_pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
            
            </label>
            
            <br>
            <br>
            
            <button class="btn_proceed" type="submit" id="btnPurchase" >Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button class="btn_validate" onClick="validateName()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
        
    </body>
</html>