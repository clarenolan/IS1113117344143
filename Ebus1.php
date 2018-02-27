<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

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
        
        <div class="products">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
            <!-- select product options -->
            <label for="salesforce" class="label1">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="label2">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="label3">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="label4">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <!-- Breakdown of the price for the selected option -->
            <label for="subtotal" class="label5">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="label6">
              Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
              <br>
              (- Discount)
            </label>
                
            <br>
            
            <label for="vat" class="label7">
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="label8">
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
              (- Discount + VAT)
            </label>
      
            <br>
            
            <div class="add_btn">   
              <button class="add_btn_style" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
            
          <!-- button for calculating price breakdown of the selected option -->    
          <button class="cal_btn" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          <!-- button for clearing the selected options -->    
          <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice</a>
        </div>
    </body>
</html>