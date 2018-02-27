/* global $ */

function validateDetails(){
    
    var pin, full_name, email, test;
    
    test = 0;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        test += 1;
        }
        
    full_name = document.getElementById("fullname").value;
    
    if (full_name==""){
        alert("Please enter your name.");
    }
    else if (isNaN(full_name)){
        test+=1;
    }
    else{
        alert("Please enter your name correctly.") ;
    }
    
    email = document.getElementById("email").value;
    
    if (email==""){
        alert("Please enter your e-mail address.");
    }
    else if (isNaN(email)){
        test+=1;
    }
    else{
        alert("Please enter your e-mail address correctly.");
    }
    
    if (test==3) {
        enablebtnPurchase();
    }
    else {
        disablebtnPurchase();
        }
    
        
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}