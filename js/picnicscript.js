var sandtotal = 0, destotal = 0, sidetotal = 0;
var sand = new Array(); sand[1] = sand[2] = sand[3] = sand[4] = 0;
var des  = new Array(); des[1]  = des[2]  = des[3]  = des[4]  = 0;
var side = new Array(); side[1] = side[2] = side[3] = side[4] = 0;
var radio = false;
var total = 0;
var basketcount = basketprevious = 0;
var sandprevious1 = sandprevious2 = sandprevious3 = sandprevious4 = 0;
var desprevious1 = desprevious2 = desprevious3 = desprevious4 = 0;
var sideprevious1 = sideprevious2 = sideprevious3 = sideprevious4 = 0;
var drinkprevious1 = drinkprevious2 = drinkprevious3 = 0;
var count1 = 0, previous1 = count1; var count2 = 0, previous2 = count2; var count3 = 0, previous3 = count3;
var count4 = 0, previous4 = count4; var count5 = 0, previous5 = count5; var count6 = 0, previous6 = count6;
var picnictype = 0;

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
function computebasket(){       
        basketcount = parseInt($('#basketcust').val());         
        price = 50;
        
        total += ((basketcount-basketprevious)*price);      
        basketprevious = basketcount;               
        //total += baskettotal;
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
function checkfields(){
    if(picnictype==2){
        if(sandtotal != 2 || destotal != 2 || sidetotal!=2 || radio!=true)
            alert("Kindly check if all fields have been chosen correctly");
    }else if(picnictype==4){
        if(sandtotal != 4 && destotal != 4 && sidetotal!=4 && radio!=true)
            alert("Kindly check if all fields have been chosen correctly");
    }else if(picnictype==10){        
        if (total<40){
            alert("Minimum of $40 purchase");
            document.getElementById('basketcust').disabled=true;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=true;
            }
        }
        else{
            document.getElementById('basketcust').disabled=false;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=false;
            }
        }
    }
}
function monitor_sandwich(number){   
    if(number==1){        
        sand[1] = $('#sandwich1').val();          
    }else if(number==2){        
        sand[2] = $('#sandwich2').val(); 
    }else if(number==3){        
        sand[3] = $('#sandwich3').val(); 
    }else if(number==4){        
        sand[4] = $('#sandwich4').val(); 
    }   
    sandtotal = parseInt(sand[1]) + parseInt(sand[2]) + parseInt(sand[3]) + parseInt(sand[4]);        
    
    if(picnictype==2){
        if(sandtotal>2)
            alert("Choose only TWO from the SANDWICHES Category");
        else if (sandtotal==2)
            en_picnicbtn();
    }
    else if (picnictype==4){
        if(sandtotal>4)
            alert("Choose only FOUR from the SANDWICHES Category");
        else if (sandtotal==4)
            en_picnicbtn();
    }else if(picnictype==10){        
        price = 8;
        sand1 = parseInt($('#sandwich1').val()); 
        sand2 = parseInt($('#sandwich2').val()); 
        sand3 = parseInt($('#sandwich3').val()); 
        sand4 = parseInt($('#sandwich4').val()); 
        
        
        total += ((sand1-sandprevious1)*price);      
        sandprevious1 = sand1;
        
        total += ((sand2-sandprevious2)*price);        
        sandprevious2 = sand2;
        
        total += ((sand3-sandprevious3)*price);       
        sandprevious3 = sand3;
        
        total += ((sand4-sandprevious4)*price);        
        sandprevious4 = sand4;                
        
        document.getElementById("totaltxt").value = "$" + total;
        
        if(total>=40){
            document.getElementById('basketcust').disabled=false;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=false;
            }
        }
        else if(total<=40){            
            document.getElementById('basketcust').disabled=true;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=true;
            }
        }
    }
}
function monitor_dessert(number){   
    if(number==1){        
        des[1] = $('#dessert1').val();          
    }else if(number==2){        
        des[2] = $('#dessert2').val(); 
    }else if(number==3){        
        des[3] = $('#dessert3').val(); 
    }else if(number==4){        
        des[4] = $('#dessert4').val(); 
    }   
    destotal = parseInt(des[1]) + parseInt(des[2]) + parseInt(des[3]) + parseInt(des[4]);        
    
    if(picnictype==2){
        if(destotal>2)
            alert("Choose only TWO from the DESSERT Category");
        else if (destotal==2)
            en_picnicbtn();
    }
    else if (picnictype==4){
        if(destotal>4)
            alert("Choose only FOUR from the DESSERT Category");
        else if (destotal==4)
            en_picnicbtn();
    }else if(picnictype==10){        
        price = 5;
        des1 = parseInt($('#dessert1').val()); 
        des2 = parseInt($('#dessert2').val()); 
        des3 = parseInt($('#dessert3').val()); 
        des4 = parseInt($('#dessert4').val()); 
        
        
        total += ((des1-desprevious1)*price);      
        desprevious1 = des1;
        
        total += ((des2-desprevious2)*price);        
        desprevious2 = des2;
        
        total += ((des3-desprevious3)*price);       
        desprevious3 = des3;
        
        total += ((des4-desprevious4)*price);        
        desprevious4 = des4;                
        
        document.getElementById("totaltxt").value = "$" + total;
        
        if(total>=40){
            document.getElementById('basketcust').disabled=false;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=false;
            }
        }
        else if(total<=40){            
            document.getElementById('basketcust').disabled=true;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=true;
            }
        }
    }   
}
function monitor_side(number){   
    if(number==1){        
        side[1] = $('#side1').val();          
    }else if(number==2){        
        side[2] = $('#side2').val(); 
    }else if(number==3){        
        side[3] = $('#side3').val(); 
    }else if(number==4){        
        side[4] = $('#side4').val(); 
    }   
    sidetotal = parseInt(side[1]) + parseInt(side[2]) + parseInt(side[3]) + parseInt(side[4]);        
    
    if(picnictype==2){
        if(sidetotal>2)
            alert("Choose only TWO from the SIDES Category");
        else if (sidetotal==2)
            en_picnicbtn();
    }
    else if (picnictype==4){
        if(sidetotal>4)
            alert("Choose only FOUR from the SIDES Category");
        else if (sidetotal==4)
            en_picnicbtn();
    } 
    else if(picnictype==10){        
        price = 4;
        side1 = parseInt($('#side1').val()); 
        side2 = parseInt($('#side2').val()); 
        side3 = parseInt($('#side3').val()); 
        side4 = parseInt($('#side4').val()); 
        
        
        total += ((side1-sideprevious1)*price);      
        sideprevious1 = side1;
        
        total += ((side2-sideprevious2)*price);        
        sideprevious2 = side2;
        
        total += ((side3-sideprevious3)*price);       
        sideprevious3 = side3;
        
        total += ((side4-sideprevious4)*price);        
        sideprevious4 = side4;                
        
        document.getElementById("totaltxt").value = "$" + total;
        
        if(total>=40){
            document.getElementById('basketcust').disabled=false;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=false;
            }
        }
        else if(total<=40){            
            document.getElementById('basketcust').disabled=true;
            for(var i=1;i<=6;i++){
                document.getElementById('wine'+i).disabled=true;
            }
        }
    }
}
function check_drink(price){
    
        drink1 = parseInt($('#drink1').val()); 
        drink2 = parseInt($('#drink2').val()); 
        drink3 = parseInt($('#drink3').val());         
        
        total += ((drink1-drinkprevious1)*price);      
        drinkprevious1 = drink1;
        
        total += ((drink2-drinkprevious2)*price);        
        drinkprevious2 = drink2;
        
        total += ((drink3-drinkprevious3)*price);       
        drinkprevious3 = drink3;                   
        
        document.getElementById("totaltxt").value = "$" + total;
}
//==========================================================
function wine(){      
     for(var i=1;i<=6;i++){
          $("#wine" + i + " option").remove();          
          for(var j=0;j<=maxvalue;j++){
            $("#wine" + i ).append("<option value='" + j + "'>" + j + "</option>");
          }                    
     }    
}
function drinks(){      
     for(var i=1;i<=3;i++){
          $("#drink" + i + " option").remove();          
          for(var j=0;j<=maxvalue;j++){
            $("#drink" + i ).append("<option value='" + j + "'>" + j + "</option>");
          }                    
     }    
}
function basket(){          
     for(var j=0;j<=maxvalue;j++){
            $("#basketcust").append("<option value='" + j + "'>" + j + "</option>");
          }          
}
function sandwich(){      
     for(var i=1;i<=4;i++){
          $("#sandwich" + i + " option").remove();          
          for(var j=0;j<=maxvalue;j++){
            $("#sandwich" + i ).append("<option value='" + j + "'>" + j + "</option>");
          }                    
     }    
}
function dessert(){           
     for(var i=1;i<=4;i++){
          $("#dessert" + i + " option").remove();          
          for(var j=0;j<=maxvalue;j++){
            $("#dessert" + i ).append("<option value='" + j + "'>" + j + "</option>");
          }                    
     }    
}
function sides(){    
     for(var i=1;i<=4;i++){
          $("#side" + i + " option").remove();          
          for(var j=0;j<=maxvalue;j++){
            $("#side" + i ).append("<option value='" + j + "'>" + j + "</option>");
          }                    
     }    
}

//====================================================================================

$(document).ready(function() {
    $('#PIC2').click(function() {			 
      $('#PIC2').css({ "position": "relative", "top": "0px", "left": "-50px"}); 
      $('#PIC4').css({ "position": "relative", "top": "500px", "left": "-50px"});
      $('#PICcust').css({ "position": "relative", "top": "500px", "left": "-50px"});
      
      $('.picnic2').css("background-color","#DD523C");
      $('.picnic4').css("background-color","#000000");
      $('.picniccust').css("background-color","#000000");
      
      $('.menucol1').css("margin-top", "+5415px");
      $('.menucol1down').css("margin-top", "+5570px");
      $('.menucol2').css("margin-top", "+5415px");
      $('.menucol2down').css("margin-top", "+5570px");
      $('.menucol3').css("margin-top", "+5415px");
      $('.menucol3down').css("margin-top", "+5570px");
      $('.menucol2basket').css("margin-top", "+5670px");
      $('.two').css("margin-top", "+5850px");
      
      picnictype = maxvalue = 2;     
      sandtotal = 0, destotal = 0, sidetotal = 0;
      sandwich();
      dessert();
      sides();
      wine();           
      
      document.getElementById("totaltxt").value = "$42"; 
      document.forms["form"]["qty1"].value = document.forms["form"]["qty2"].value = document.forms["form"]["qty3"].value = "TWO";
      document.getElementById("pricesand").style.display = 'none'; 
      document.getElementById("pricedes").style.display = 'none';
      document.getElementById("priceside").style.display = 'none'; 
      total = 42;
      $('.drinks2').show();
      $('.drinks4').hide();
      $('.drinkscust').hide();
      $('#drinkpack').show();
      $('#drinkonly').hide();  
      $('.basketcust').hide();  
      $('.basket').show();  
      $('#minimum').hide();    
      
      $("#basket").prop("checked", false);
      $(".drinks2").prop("checked", false);
      $(".drinks4").prop("checked", false);
    });	
    $('#PIC4').click(function() {			 
      $('#PIC2').css({ "position": "relative", "top": "0px", "left": "-50px"});  
      $('#PIC4').css({ "position": "relative", "top": "0px", "left": "-50px"});
      $('#PICcust').css({ "position": "relative", "top": "+500px", "left": "-50px"});
      
      $('.picnic2').css("background-color","#000000");
      $('.picnic4').css("background-color","#DD523C");
      $('.picniccust').css("background-color","#000000");
      
      $('.menucol1').css("margin-top", "+5485px");
      $('.menucol1down').css("margin-top", "+5640px");
      $('.menucol2').css("margin-top", "+5485px");
      $('.menucol2down').css("margin-top", "+5640px");
      $('.menucol3').css("margin-top", "+5485px");
      $('.menucol3down').css("margin-top", "+5640px");
      $('.menucol2basket').css("margin-top", "+5770px");
      $('.two').css("margin-top", "+5925px");
      
      picnictype = maxvalue = 4;       
      sandtotal = 0, destotal = 0, sidetotal = 0;
      sandwich();
      dessert();
      sides();
      wine();                        
      
      document.getElementById("totaltxt").value = "$84";  
      document.forms["form"]["qty1"].value = document.forms["form"]["qty2"].value = document.forms["form"]["qty3"].value = "FOUR";  
      document.getElementById("pricesand").style.display = 'none'; 
      document.getElementById("pricedes").style.display = 'none';
      document.getElementById("priceside").style.display = 'none';
      total = 84;
      $('.drinks2').hide();
      $('.drinks4').show();
      $('.drinkscust').hide();
      $('#drinkpack').show();
      $('#drinkonly').hide();
      $('.basketcust').hide();  
      $('.basket').show(); 
      $('#minimum').hide();
      
      $("#basket").prop("checked", false);
      $(".drinks2").prop("checked", false);
      $(".drinks4").prop("checked", false);
    });	
    $('#PICcust').click(function() {	
      $('#PIC2').css({ "position": "relative", "top": "0px", "left": "-50px"});  
      $('#PIC4').css({ "position": "relative", "top": "0px", "left": "-50px"});
      $('#PICcust').css({ "position": "relative", "top": "0px", "left": "-50px"});
      
      $('.picnic2').css("background-color","#000000");
      $('.picnic4').css("background-color","#000000");
      $('.picniccust').css("background-color","#DD523C");
      
      $('.menucol1').css("margin-top", "+5555px");
      $('.menucol1down').css("margin-top", "+5710px");
      $('.menucol2').css("margin-top", "+5555px");
      $('.menucol2down').css("margin-top", "+5710px");
      $('.menucol3').css("margin-top", "+5555px");
      $('.menucol3down').css("margin-top", "+5710px");
      $('.menucol2basket').css("margin-top", "+5840px");
      $('.two').css("margin-top", "+6000px");
      
      document.forms["form"]["qty1"].value = document.forms["form"]["qty2"].value = document.forms["form"]["qty3"].value = "";  
      document.getElementById("pricesand").style.display = 'block'; 
      document.getElementById("pricedes").style.display = 'block';
      document.getElementById("priceside").style.display = 'block'; 
      
      $('.drinks2').hide();
      $('.drinks4').hide();
      $('.drinkscust').show();
      $('#drinkpack').hide();
      $('#drinkonly').show();
      $('.basketcust').show();  
      $('.basket').hide(); 
      $('#minimum').show();
      
      document.getElementById('basketcust').disabled=true;
      for(var i=1;i<=6;i++){
        document.getElementById('wine'+i).disabled=true;
      }
      document.getElementById("totaltxt").value = "$0";  
      
      picnictype = maxvalue = 10;         
      sandwich();
      dessert();
      sides();
      wine(); 
      drinks();
      basket();
    });
});