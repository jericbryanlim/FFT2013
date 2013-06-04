function showDiv(div_number) {         
    if(div_number==1){        
        //picnic
        document.getElementById(1).style.display = 'block';              
    }      
    //menu overlays
    else if(div_number==3){        
        document.getElementById("NMS_MenuOverlay").style.display = 'block';              
        document.getElementById("NMS_opaqueOverlay").style.display = 'block';
    } 
    else if(div_number==4){
        document.getElementById("SBG_MenuOverlay").style.display = 'block';              
        document.getElementById("SBG_opaqueOverlay").style.display = 'block';
    } 
    else if(div_number==5){
        document.getElementById("SBG_MenuOverlay").style.display = 'none';  
        document.getElementById("NMS_MenuOverlay").style.display = 'none'; 
        document.getElementById("NMS_opaqueOverlay").style.display = 'none';
        document.getElementById("SBG_opaqueOverlay").style.display = 'none';
    } 
}
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