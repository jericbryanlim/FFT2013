<?php 
include_once('../includes/head.php');
include_once('../modules/NavigationBar/NavigationBar_Branches.php');
include_once('../modules/SubNavigationBar/SubNavigationBar.php');

     if($branch == 'SBG'){       
        include_once('../modules/AboutResto/AboutSBG.php');
        include_once('../modules/Location/LocationSBG.php');
        include_once('../modules/Reservations/ReservationsSBG.php');        
        include_once('../modules/Picnic/Picnic.php');
     }elseif($branch == 'NMS'){
        include_once('../modules/AboutResto/AboutNMS.php');
        include_once('../modules/Location/LocationNMS.php');
        include_once('../modules/Reservations/ReservationsNMS.php');
     }
     elseif($branch == 'FFFT'){
        include_once('../modules/AboutResto/AboutFFFT.php');
        include_once('../modules/Location/LocationFFFT.php');
     }
?>
