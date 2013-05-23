<div id="Header" class="picnicheader"><div id="PicnicID">Rent a Picnic Basket</div></div>
<div id="hr" class="picnichr"><?php echo $line ?></div>

<!--div id="IntroBody" class="picnic">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquam malesuada molestie. Nam ultricies ornare velit, vel porttitor quam iaculis laoreet. Vestibulum sed eros at leo rutrum ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed eu turpis risus. Donec nec rhoncus dui. Suspendisse a libero vitae enim consequat scelerisque. Ut et justo eget dui tempus tempor. Sed posuere scelerisque libero in porta.
</div-->

<div id="poster"></div>

<div id="picnicnote">*Please allow us 3 working days to get back to you. Reservations are only confirmed when there is an email reply.</div>

<div id="PIC2" onclick="showDiv(1);">
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

<div id="PIC4" onclick="showDiv(2);">
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
<div id="PICcust"  onclick="showDiv(3);">
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
