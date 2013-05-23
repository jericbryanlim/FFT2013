function showDiv(div_number) {
    if(div_number==1){        
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
    }                            
}  
$(document).ready(function() {
    $('#PIC2').click(function() {			 
      $('#PIC2').css({ "position": "relative", "top": "0px"});  
      $('#PIC4').css({ "position": "relative", "top": "500px"});
      $('#PICcust').css({ "position": "relative", "top": "500px"});
      
      $('.picnic2').css("background-color","#DD523C");
      $('.picnic4').css("background-color","#000000");
      $('.picniccust').css("background-color","#000000");
    });	
    $('#PIC4').click(function() {			 
      $('#PIC2').css({ "position": "relative", "top": "0px"});  
      $('#PIC4').css({ "position": "relative", "top": "0px"});
      $('#PICcust').css({ "position": "relative", "top": "+500px"});
      
      $('.picnic2').css("background-color","#000000");
      $('.picnic4').css("background-color","#DD523C");
      $('.picniccust').css("background-color","#000000");
    });	
    $('#PICcust').click(function() {	
      $('#PIC2').css({ "position": "relative", "top": "0px"});  
      $('#PIC4').css({ "position": "relative", "top": "0px"});
      $('#PICcust').css({ "position": "relative", "top": "0px"});
      
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
