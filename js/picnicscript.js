var sandtotal = 0, destotal = 0, sidetotal = 0;
var sand1 = 0, sand2 = 0, sand3 = 0, sand4 = 0;
var des1  = 0, des2  = 0, des3  = 0, des4  = 0;
var side1 = 0, side2 = 0, side3 = 0, side4 = 0;
var radio = false;
var total = 0;
var count1 = 0, previous1 = count1;
var count2 = 0, previous2 = count2;
var count3 = 0, previous3 = count3;
var count4 = 0, previous4 = count4;
var count5 = 0, previous5 = count5;
var count6 = 0, previous6 = count6;

function entottxt(){
    $('#totaltxt').removeAttr('disabled');
}
function checkbasket(){    
        var basket = document.getElementById("basket").checked;
        if(basket==true){
            total += 50;
            document.getElementById("totaltxt").value = "$" + total;
        }
        else{
            total -= 50;
            document.getElementById("totaltxt").value = "$" + total;
        }    
}
function checkwine(price){       
        count1 = parseInt($('#wine1').val()); 
        count2 = parseInt($('#wine2').val()); 
        count3 = parseInt($('#wine3').val()); 
        count4 = parseInt($('#wine4').val()); 
        count5 = parseInt($('#wine5').val()); 
        count6 = parseInt($('#wine6').val()); 
        
        total += ((count1-previous1)*price);      
        previous1 = count1;
        
        total += ((count2-previous2)*price);        
        previous2 = count2;
        
        total += ((count3-previous3)*price);       
        previous3 = count3;
        
        total += ((count4-previous4)*price);        
        previous4 = count4;
        
        total += ((count5-previous5)*price);        
        previous5 = count5;
        
        total += ((count6-previous6)*price);        
        previous6 = count6;
        
        document.getElementById("totaltxt").value = "$" + total;            
}
function checkRadio() {
    var radios = document.getElementsByName('drinks')

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {                       
            radio = true;
            en_picnicbtn(); 
        }
    };    
}
function en_picnicbtn(){
    if(sandtotal == 2 && destotal == 2 && sidetotal==2 && radio==true)
        $('#picnicbtn').removeAttr('disabled');
}
function monitor_sandwich(number){   
    if(number==1){        
        sand1 = parseInt($('#sandwich1').val());          
    }else if(number==2){        
        sand2 = parseInt($('#sandwich2').val());                
    }else if(number==3){        
        sand3 = parseInt($('#sandwich3').val());            
    }else if(number==4){        
        sand4 = parseInt($('#sandwich4').val());                    
    }
    
    sandtotal = sand1 + sand2 + sand3 + sand4;
        
    if(sandtotal==0){
        sandwichzero();        
    }else if(sandtotal==1){
        sandwichone(number);        
    }
    else if(sandtotal==2){
        sandwichtwo(number); 
        en_picnicbtn();
    }                
}
function monitor_dessert(number){    
    if(number==1){        
        des1 = parseInt($('#dessert1').val());          
    }else if(number==2){        
        des2 = parseInt($('#dessert2').val());                
    }else if(number==3){        
        des3 = parseInt($('#dessert3').val());            
    }else if(number==4){        
        des4 = parseInt($('#dessert4').val());                    
    }
    
    destotal = des1 + des2 + des3 + des4;
    
    if(destotal==0){
        dessertzero();
    }else if(destotal==1){
        dessertone(number);        
    }
    else if(destotal==2){
        desserttwo(number);
        en_picnicbtn();
    }                
}
function monitor_side(number){    
    if(number==1){        
        side1 = parseInt($('#side1').val());                  
    }else if(number==2){        
        side2 = parseInt($('#side2').val());                
    }else if(number==3){        
        side3 = parseInt($('#side3').val());            
    }else if(number==4){        
        side4 = parseInt($('#side4').val());                    
    }
    
    sidetotal = side1 + side2 + side3 + side4;
    if(sidetotal==0){
        sidezero();
    }else if(sidetotal==1){
        sideone(number);        
    }
    else if(sidetotal==2){
        sidetwo(number);
        en_picnicbtn();
    }                
}
//==========================================================
function sandwichzero(){
     for(var i=1;i<=4;i++){
          $("#sandwich" + i + " option").remove();
          $("#sandwich" + i ).removeAttr('disabled');
          $("#sandwich" + i ).append("<option value='0'>-</option>");
          $("#sandwich" + i ).append("<option value='1'>1</option>");
          $("#sandwich" + i ).append("<option value='2'>2</option>");
     }
}
function sandwichone(number){
    for(var i=1;i<=4;i++){
        $("#sandwich" + i).removeAttr('disabled');
        $("#sandwich" + i + " option[value='2']").remove();                   
    }    
}
function sandwichtwo(){    
    if(sand1==0)
        $('#sandwich1').attr('disabled', 'disabled');
    if(sand2==0)
        $('#sandwich2').attr('disabled', 'disabled');
    if(sand3==0)
        $('#sandwich3').attr('disabled', 'disabled');
    if(sand4==0)
        $('#sandwich4').attr('disabled', 'disabled');
}
function dessertzero(){
     for(var i=1;i<=4;i++){
          $("#dessert" + i + " option").remove();
          $("#dessert" + i ).removeAttr('disabled');
          $("#dessert" + i ).append("<option value='0'>-</option>");
          $("#dessert" + i ).append("<option value='1'>1</option>");
          $("#dessert" + i ).append("<option value='2'>2</option>");
     }     
}
function dessertone(number){
    for(var i=1;i<=4;i++){
        $("#dessert" + i).removeAttr('disabled');
        $("#dessert" + i + " option[value='2']").remove();
    }      
}
function desserttwo(number){
    if(des1==0)
        $('#dessert1').attr('disabled', 'disabled');
    if(des2==0)
        $('#dessert2').attr('disabled', 'disabled');
    if(des3==0)
        $('#dessert3').attr('disabled', 'disabled');
    if(des4==0)
        $('#dessert4').attr('disabled', 'disabled');
}
function sidezero(){
     for(var i=1;i<=4;i++){
          $("#side" + i + " option").remove();
          $("#side" + i ).removeAttr('disabled');
          $("#side" + i ).append("<option value='0'>-</option>");
          $("#side" + i ).append("<option value='1'>1</option>");
          $("#side" + i ).append("<option value='2'>2</option>");
     }      
}
function sideone(number){
    for(var i=1;i<=4;i++){
        $("#side" + i).removeAttr('disabled');
        $("#side" + i + " option[value='2']").remove();
    }    
}
function sidetwo(number){
    if(side1==0)
        $('#side1').attr('disabled', 'disabled');
    if(side2==0)
        $('#side2').attr('disabled', 'disabled');
    if(side3==0)
        $('#side3').attr('disabled', 'disabled');
    if(side4==0)
        $('#side4').attr('disabled', 'disabled');
}