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

$(document).ready(function(){
    $('#menuSBG').click(function(){
        // Appedning the overlay div
        $('body').append(
                '<div id="fadeOverlay" style="opacity:0.80;display:none;position:fixed;left:133;top:0;width:81%;height:100%;z-index:9999;background:#000;"></div>'
        );
        // Apply fadeIn animation for the smoothing effect.
        $('#fadeOverlay').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
    });
    // Remove the overlay div when clicking on the fade in area.
    $('#message').click(function() {
        $(this).fadeOut("slow", function() {$(this).remove();});
    });
 
});
$(document).ready(function(){
    $('#menuNMS').click(function(){
        // Appedning the overlay div
        $('body').append(
                '<div id="fadeOverlay" style="opacity:0.80;display:none;position:fixed;left:0;top:0;width:100%;height:100%;z-index:9999;background:#000;"></div>'
        );
        // Apply fadeIn animation for the smoothing effect.
        $('#fadeOverlay').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
    });
    // Remove the overlay div when clicking on the fade in area.
    $('#message').click(function() {
        $(this).fadeOut("slow", function() {$(this).remove();});
    });
 
});
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
    $('#btnstyle').bind('click', function(){
        var txtVal =  $('#date').val();
        if(isDate(txtVal));
        else
            alert('Invalid Date');
    });
    
function isDate(txtDate)
{
    var currVal = txtDate;
    if(currVal == '')
        return false;
    
    var rxDatePattern = /^(\d{1,2})(\/)(\d{1,2})(\/)(\d{4})$/; //Declare Regex
    var dtArray = currVal.match(rxDatePattern); // is format OK?
    
    if (dtArray == null) 
        return false;
    
    //Checks for mm/dd/yyyy format.
    dtMonth = dtArray[3];
    dtDay= dtArray[1];
    dtYear = dtArray[5];        
    
    if (dtMonth < 1 || dtMonth > 12) 
        return false;
    else if (dtDay < 1 || dtDay> 31) 
        return false;
    else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
        return false;
    else if (dtMonth == 2) 
    {
        var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
        if (dtDay> 29 || (dtDay ==29 && !isleap)) 
                return false;
    }
    return true;
}

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
