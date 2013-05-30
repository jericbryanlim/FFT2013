<div id="Header" class="picnicheader"><div id="PicnicID">Rent a Picnic Basket</div></div>
<div id="hr" class="picnichr"><?php echo $line ?></div>

<div id="poster"></div>

<div id="picnicnote">*Please allow us 3 working days to get back to you. Reservations are only confirmed when there is an email reply.</div>

<div id="PIC2" onclick="showDiv();">
<div id="BackColour_Picnic" class="picnic2"></div>
<div id="picnictext" class="picnictext2" style="float:left;">
    <a href="#picnictext" >
        Picnic for Two
    </a>
</div>
</div>
<?php
     include_once('rentpicnic2.php');
?>

<div id="PIC4" onclick="showDiv();">
    <div id="BackColour_Picnic" class="picnic4"></div>
    <div id="picnictext" class="picnictext4">
        <a href="#picnictext">      
            Picnic for Four
        </a>
    </div>
</div>
<?php
     include_once('rentpicnic4.php');
?>
<div id="PICcust"  onclick="showDiv();">
    <div id="BackColour_Picnic" class="picniccust"></div>
    <div id="picnictext" class="picnictextcust">
        <a href="#picnictext">      
            Picnic Customise
        </a>
    </div>
</div>
<?php
     include_once('rentpicniccust.php');
?>

