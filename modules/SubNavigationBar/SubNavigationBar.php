<?php 
    $branch = $_GET['name'];
?>
<div id="BackColour_SubNavBar">     
<div id="SubNavBar" class="NavBarCol1"><a href="#AboutID">
        <?php
          if($branch == 'SBG')  
              echo 'About FFT @ SBG';
          elseif($branch == 'NMS')
              echo 'About FFT @ NMS';
          elseif($branch == 'FFFT')
              echo 'About FFT @ FFFT'; 
        ?>
        </a></div>
<div id="SubNavBar" class="NavBarCol2"><a href="#LocationID">Location</a></div>
<div id="SubNavBar" class="NavBarCol3"><a href="#ReservationsID">Reservations</a></div>
<?php
    $menuitem = "<div id='SubNavBar' class='NavBarCol4'><a href='" . "#PicnicID'>Rent a Picnic Basket</a></div>";
     if($branch == 'SBG')  
        echo $menuitem;
?>