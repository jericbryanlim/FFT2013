<?php
    include_once('includes/functions.php');
    if (    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) &&
            isset($_POST['branch']) && isset($_POST['pax']) && isset($_POST['date']) && isset($_POST['time'])
        ){
        if(($_POST['branch']=='-') || $_POST['pax']==0){
            //header( 'Location: https://localhost/FFT2013/pages/branches.php?name=SBG#ReservationsID' );
        }else{
            $name   = strtoupper(sanitizeString($_POST['name']));
            $email  = strtoupper(sanitizeString($_POST['email']));
            $contact= sanitizeString($_POST['contact']);
            $branch = strtoupper($_POST['branch']);
            $pax    = $_POST['pax'];
            $date   = $_POST['date'];
            $time   = $_POST['time'];

            echo $message = $name . "<br>" . $email . "<br>" . $contact . "<br>" . $branch . "<br>" . $pax . "<br>" . $date . "<br>" . $time;
            
            $subject = 'Reservation @' . $branch;
            $mail = 'eat@foodforthought.com.sg';
            
            if (mail($mail, $subject, $message)) {
                echo "email sent";
            } else {
                echo "[B]email could not be sent[/B]";
            }            
        }
    }
    //header( 'Location: https://localhost/FFT2013/pages/branches.php?name=SBG#ReservationsID' ) ;
?>
