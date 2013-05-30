<?php
    $dropdown = "
                    <option value='0'>-</option>
                    <option value='1'>1</option><option value='2'>2</option>
                    <option value='3'>3</option><option value='4'>4</option>
                 </select>";
    $four = "<font color='red'> FOUR </font>";   
    
    include_once('../includes/picnicmenu.php');
?>
<div id="2" style="display:none">
    <form id='picnicvalidation' method='post' action='../details.php?type=4'>
    <div id="choices" class="menucol14">CHOOSE <?php echo $four; ?>SANDWICHES<br>
        <div class="sandwiches">            
            <select id="sandwich1" name ="sandwich1" onchange="monitor_sandwich(1);"><?php echo $dropdown; ?> &nbsp; <?php echo $sandC1; ?><br>
            <select id="sandwich2" name ="sandwich2" onchange="monitor_sandwich(2);"><?php echo $dropdown; ?> &nbsp; <?php echo $sandC2; ?><br>
            <select id="sandwich3" name ="sandwich3" onchange="monitor_sandwich(3);"><?php echo $dropdown; ?> &nbsp; <?php echo $sandC3; ?><br>
            <select id="sandwich4" name ="sandwich4" onchange="monitor_sandwich(4);"><?php echo $dropdown; ?> &nbsp; <?php echo $sandC4; ?>
        </div>
    </div>
    <div id="choices" class="menucol14down">CHOOSE <?php echo $two; ?>DESSERTS<br>
        <div class="desserts">
            <select id="dessert1" name="dessert1" onchange="monitor_dessert(1);"><?php echo $dropdown; ?>  &nbsp; <?php echo $desC1; ?><br>
            <select id="dessert2" name="dessert2" onchange="monitor_dessert(2);">><?php echo $dropdown; ?> &nbsp; <?php echo $desC2; ?><br>
            <select id="dessert3" name="dessert3" onchange="monitor_dessert(3);">><?php echo $dropdown; ?> &nbsp; <?php echo $desC3; ?><br>
            <select id="dessert4" name="dessert4" onchange="monitor_dessert(4);">><?php echo $dropdown; ?> &nbsp; <?php echo $desC4; ?>
        </div>       
    </div>
    <div id="choices" class="menucol24">CHOOSE <?php echo $two; ?>SIDES<br>
        <div class="sides">  
            <select id="side1" name="side1" onchange="monitor_side(1);"><?php echo $dropdown; ?> &nbsp; <?php echo $sideC1; ?><br>
            <select id="side2" name="side2" onchange="monitor_side(2);"><?php echo $dropdown; ?> &nbsp; <?php echo $sideC2; ?><br>
            <select id="side3" name="side3" onchange="monitor_side(3);"><?php echo $dropdown; ?> &nbsp; <?php echo $sideC3; ?><br>
            <select id="side4" name="side4" onchange="monitor_side(4);"><?php echo $dropdown; ?> &nbsp; <?php echo $sideC4; ?>
        </div>
    </div>  
    <div id="choices" class="menucol24down">CHOOSE <font color="red"> ONE </font> DRINK PACKAGE<br>
        <div class="drinks">
            <input type="radio" name="drinks" value="bottle" onclick="checkRadio();"><?php echo $drink4C1; ?><br>             
            <input type="radio" name="drinks" value="canned" onclick="checkRadio();"><?php echo $drink4C2; ?><br> 
            <input type="radio" name="drinks" value="mineral" onclick="checkRadio();"><?php echo $drink4C3; ?><br>
        </div>
    </div>  
    <div id="choices" class="menucol24basket">RENT A PICNIC BASKET?<br>
        <div class="basket">
        <input type="checkbox" name="basket" id="basket4" onclick="checkbasket(2)"><b>+$50</b> deposit
        </div>
    </div>
    <div id="choices" class="menucol34">WINE<br>
        <div class="wine">

            <select id="wine1" name ="wine1" onchange="checkwine(50);"><?php echo $dropdown; ?> &nbsp; <?php echo $wine1; ?><br>
            <select id="wine2" name ="wine2" onchange="checkwine(50);"><?php echo $dropdown; ?> &nbsp; <?php echo $wine2; ?><br>
            <select id="wine3" name ="wine3" onchange="checkwine(50);"><?php echo $dropdown; ?> &nbsp; <?php echo $wine3; ?><br>
            <select id="wine4" name ="wine4" onchange="checkwine(50);"><?php echo $dropdown; ?> &nbsp; <?php echo $wine4; ?><br>
            <select id="wine5" name ="wine5" onchange="checkwine(22);"><?php echo $dropdown; ?> &nbsp; <?php echo $wine5; ?><br>
            <select id="wine6" name ="wine6" onchange="checkwine(50);"><?php echo $dropdown; ?> &nbsp; <?php echo $wine6; ?><br>                         
            
            <br>
            <input type="text" style="height: 2em; width: 5.5em;" disabled id="total4txt" name="total4txt">
            <input type="submit" value="Next" style="height: 4.5em; width: 7em; 
                           background-color:#DD523C;" id="picnicbtn" disabled onclick="entottxt();">  
            <br><br>
            <b>(price includes picnic mat, 
            <br>disposable cutlery and trash bag)</b>
        </div>
    </div>
    <div id="reservenote" class="four">
    Picnic Baskets returned before 6pm on the same day of purchase will be refunded $50. Picnic Baskets returned after 8.30pm will have their deposit forfeited. If Picnic Baskets are damaged upon return, a $25 repair fee will be deducted from the deposit. This fee is subject to FFT's discretion. In the event of rain, picnic orders are not refundable.
    </div>
    
    
</div>
