$(function() {				
    $( "#datepicker" ).datepicker({
            inline: true
    });
    //var pickerOpts = {dateFormat:"d MM yy"};  
        //$("#date").datepicker(pickerOpts);
        $( "#date" ).datepicker({ minDate: +4, dateFormat:"d MM yy"});	         
});