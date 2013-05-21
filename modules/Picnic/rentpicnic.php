<div id="BackColour_Picnic" class="picnic2" onclick="myFunction()"></div>
<div id="picnictext" class="picnictext2">Picnic for Two</div>

<?php
    $dropdown = "<select>
                    <option value='0'>-</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                 </select>";
    $two = "<font color='red'> TWO </font>";        
?>
<div id="choices" class="menucol1">CHOOSE <?php echo $two; ?>SANDWICHES<br>
    <div class="subchoices">
        <?php echo $dropdown; ?> &nbsp; Grilled Eggplant, Tomato, Onions <i> with tapenade & pesto </i>                                  <br>
        <?php echo $dropdown; ?> &nbsp; Grilled Ham and Cheese <i> with dijon mustard </i>                       <br>
        <?php echo $dropdown; ?> &nbsp; Spicy Chicken Cutlet <i> with shredded lettuce <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            & thai chilli mayo </i>  <br>
        <?php echo $dropdown; ?> &nbsp; Fried Fish Fillet <i> with alfalfa sprouts & kaffir lime mayo </i>
    <br>
    <br>
    <br>
    <div id="choices">CHOOSE <?php echo $two; ?>DESSSERTS<br>
    <br>
    <br>
        <div class="subchoices">
        <?php echo $dropdown; ?> &nbsp; Marshmallow Brownie Cup <i> with espresso shot </i>                                  <br>
        <?php echo $dropdown; ?> &nbsp; Honeyed Greek Yoghurt Cup <i> with granola and mixed fruits </i>                       <br>
        <?php echo $dropdown; ?> &nbsp; Two Almond Madelines <br>
        <?php echo $dropdown; ?> &nbsp; A Slice of Cinnamon Apple Pie
        </div>
    </div>
    </div>
</div>
<div id="choices" class="menucol2">CHOOSE <?php echo $two; ?>SIDES<br>
    <div class="subchoices">  
        <?php echo $dropdown; ?> &nbsp; Tofu Broccoli Sugar Peas <i> with torch ginger <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            cardamom drizzle </i>                                  <br>
        <?php echo $dropdown; ?> &nbsp; Tomato Lemongrass Corn Salad <i> with lime laksa vinaigrette </i>                       <br>
        <?php echo $dropdown; ?> &nbsp; Two Chicken Wings <i> with thai lemongrass chilli sauce </i><br>
        <?php echo $dropdown; ?> &nbsp; Fries <i> with thai lemongrass chilli sauce </i>
    <br>
    <br>
    <br>
    <div id="choices">CHOOSE <font color="red"> ONE </font> DRINK PACKAGE<br></div>
    <br>
    <br>
        <div class="subchoices">
        <input type="radio" name="drinks">2 x Bottled Drinks                  <br>
        <input type="radio" name="drinks">2 x Canned Drinks, 1 x Mineral Water<br> 
        <input type="radio" name="drinks">4 x Mineral Water                   <br>
    <br>
    <br>
    <br>
    <div id="choices">RENT A PICNIC BASKET?<br></div>
    <br>
    <br>
    <div class="subchoices">
    <input type="checkbox"><b>+$50</b> deposit
    </div>
    </div>
    </div>
</div>
<div id="choices" class="menucol3">WINE<br>
    <div class="subchoices">

        
        
        <?php echo $dropdown; ?> &nbsp; <b>Sauvignon Blanc</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                 <b>+$50 </b> (750ml) <br> 
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> 12.5% (S. Africa, 2011)</i><br>
        <?php echo $dropdown; ?> &nbsp; <b>Cabernet</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                 <b>+$50 </b> (750ml)<br>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Sauvignon</b> <br>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> 14% (S. Africa, 2011)</i><br>
        <?php echo $dropdown; ?> &nbsp; <b>Lancers White</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                 <b>+$50 </b> (750ml) <br>             
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> 10% (Portugal)</i><br>
        <?php echo $dropdown; ?> &nbsp; <b>Lancers Rose</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                 <b>+$50 </b> (750ml) <br>             
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i> 10% (Portugal)</i><br>
        <?php echo $dropdown; ?> &nbsp; <b>Quinta de Bons</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                                 <b>+$22 </b> (375ml) <br>             
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Ventos Red</b><br>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> 13% (Portugal, 2009)</i><br>
        <?php echo $dropdown; ?> &nbsp; <b>Quinta de Bons</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                                 <b>+$50 </b> (750ml) <br>             
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Ventos Red</b><br>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> 13% (Portugal, 2009)</i><br>                         
                                 
        <input type="text" style="height: 4.5em; width: 13em;" disabled id="btnstyle">
        <input type="submit" value="Next" style="height: 4.5em; width: 7em; 
                       background-color:#DD523C;" id="btnstyle">  
        <br><br>
        <b>(price includes picnic mat, 
        <br>disposable cutlery and trash bag)</b>
    </div>
</div>
<div id="reservenote">
Picnic Baskets returned before 6pm on the same day of purchase will be refunded $50. Picnic Baskets returned after 8.30pm will have their deposit forfeited. If Picnic Baskets are damaged upon return, a $25 repair fee will be deducted from the deposit. This fee is subject to FFT’s discretion. In the event of rain, picnic orders are not refundable.

