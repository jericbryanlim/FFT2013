function showDiv(div_number) {
    /*if(div_number==1){        
        document.getElementById(1).style.display = 'block';
        document.getElementById(2).style.display = 'none';
        document.getElementById(3).style.display = 'none';
    }
    else if(div_number==2){
        document.getElementById(1).style.display = 'none';
        document.getElementById(2).style.display = 'block';
        document.getElementById(3).style.display = 'none';
    }
    else if(div_number==3){
        document.getElementById(1).style.display = 'none';
        document.getElementById(2).style.display = 'none';
        document.getElementById(3).style.display = 'block';
    }*/  
    document.getElementById(1).style.display = 'block';
}
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
            
      for(var i=1;i<=4;i++){
          $("#sandwich" + i + " option[value='3']").remove();
          $("#sandwich" + i + " option[value='4']").remove();

          $("#dessert"  + i + " option[value='3']").remove();
          $("#dessert"  + i + " option[value='4']").remove();
      
          $("#side"     + i + " option[value='3']").remove();
          $("#side"     + i + " option[value='4']").remove();
      } 
      for(var i=1;i<=6;i++){
          $("#wine" + i + " option[value='3']").remove();
          $("#wine" + i + " option[value='4']").remove();
      }
      total = document.getElementById("totaltxt").value = "$42";      
      total = 42;
      $('.drinks2').show();
      $('.drinks4').hide();
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
            
      for(var i=0;i<=4;i++){          
          $("#sandwich" + i ).append("<option value='3'>3</option>");          
          $("#sandwich" + i ).append("<option value='4'>4</option>"); 
          
          $("#dessert"  + i ).append("<option value='3'>3</option>");          
          $("#dessert"  + i ).append("<option value='4'>4</option>");          
      
          $("#side"     + i ).append("<option value='3'>3</option>");          
          $("#side"     + i ).append("<option value='4'>4</option>");          
      }  
      for(var i=1;i<=6;i++){
          $("#wine"     + i ).append("<option value='3'>3</option>");
          $("#wine"     + i ).append("<option value='4'>4</option>");
      }
      
      document.getElementById("totaltxt").value = "$84";      
      total = 84;
      $('.drinks2').hide();
      $('.drinks4').show();
    });	
    $('#PICcust').click(function() {	
      $('#PIC2').css({ "position": "relative", "top": "0px", "left": "-50px"});  
      $('#PIC4').css({ "position": "relative", "top": "0px", "left": "-50px"});
      $('#PICcust').css({ "position": "relative", "top": "0px", "left": "-50px"});
      
      $('.picnic2').css("background-color","#000000");
      $('.picnic4').css("background-color","#000000");
      $('.picniccust').css("background-color","#DD523C");
    });
});
$(document).ready(function() {
    
    // Cache selectors for faster performance.
    var $window = $(window),
        $mainMenuBar = $('#mainMenuBar'),
        $mainMenuBarAnchor = $('#mainMenuBarAnchor');
    // Run this on scroll events.
    $window.scroll(function() {
        var window_top = $window.scrollTop();
        var div_top = $mainMenuBarAnchor.offset().top;
       
        if ((window_top + 100) > div_top) {
            // Make the div sticky.
            $mainMenuBar.addClass('stick');
            $('#BackColour').addClass('stick');
            $('#Logo').addClass('stick');
            $('#NavBar_Main').addClass('stick');
            $('#NavBar_Branch').addClass('stick');
        }
        else {
            // Unstick the div.
            $mainMenuBar.removeClass('stick');
            $('#BackColour').removeClass('stick');
            $('#Logo').removeClass('stick');
            $('#NavBar_Main').removeClass('stick');
            $('#NavBar_Branch').removeClass('stick');            
        }          
    });        
});
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {    
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();        
  }
}
function checkEmail() {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}
$(function() {

    var $sidebar   = $("#Social"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 150;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    
});
