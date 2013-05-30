<?php
    include_once('includes/head.php');
    include_once('includes/functions.php');
    
     $branch = $_GET['name'];

$subject = 'Reservation @' . $branch;
    if ($branch=='SBG'){
        $mail = 'eat@foodforthought.com.sg';
    }else{
        $mail = 'together@foodforthought.com.sg';
    }   
    echo $message;
    if (mail($mail, $subject, $message)) {
        $message = "<br><br><br><br><br><br><br><table align='center' width='75%' cellpadding='2' class='confirm'>
                    <td colspan='2' align='center'><h2>YOUR BOOKING HAS BEEN SENT!</h2><br>
                    Your reservation is only successful upon receiving confirmation.<br>
                    Please check your junk mail in case.<br><br>
                    Redirecting you back to the Reservation Page";          
        if ($branch=='SBG'){
            header("Refresh: 10;url=../FFT2013/pages/branches.php?name=SBG#ReservationsID"); 
        }elseif($branch=='NMS'){
            header("Refresh: 10;url=../FFT2013/pages/branches.php?name=NMS#ReservationsID"); 
        }                     
    } else {
        echo "Email could not be sent at this time. Try again later";
    }
?>               

<div id="fadeConfirm" style="display:block">
            <?php echo $message;?>
</div>

 