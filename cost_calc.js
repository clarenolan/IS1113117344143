/* global $ */

function calcSub(){
    var argSubTotal;
    
    if (document.getElementById('salesforce').checked){
        argSubTotal = 100;
    }
    else if (document.getElementById('aws').checked){
        argSubTotal =300;
    }
    
    else if (document.getElementById('cloud9').checked){
        argSubTotal = 200;
    }
    
    else if (document.getElementById('gmail').checked){
        argSubTotal=150;
    }
    
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal){
    var discount, vat, total;
    
    discount = parmSubTotal * 0.05;
    vat = (parmSubTotal - discount)*0.10;
    
    total = parmSubTotal - discount + vat;
    
    display(parmSubTotal, discount, vat, total);
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled',true);
}