<?php
$transbody = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.";
?>

<div id="Header" class="locationheaderSBG"><div id="LocationID">Location</div></div>
<div id="hr" class="locationhrSBG"><?php echo $line ?></div>

<div id="MAP" class="SBGmap"></div>

<div id="HOWTO" class='SBGhowto'>How to get there</div>
<div id="please">Please do not try to walk there</div>

<div id="bus" class="transcol1"></div>
<div id="transdesc" class="transdesc1">By Bus Only</div>
<div id="transbody" class="transcol1"><?php echo $transbody ?>
</div>

<div id="train" class="transcol2"></div>
<div id="bus" class="bus2"></div>
<div id="transdesc" class="transdesc2">By Train & Bus</div>
<div id="transbody" class="transcol2"><?php echo $transbody ?>
</div>

<div id="car" class="transcol3"></div>
<div id="transdesc" class="transdesc3">By Car</div>
<div id="transbody" class="transcol3"><?php echo $transbody ?>
</div>

<div id="taxi" class="transcol4"></div>
<div id="transdesc" class="transdesc4">By Taxi</div>
<div id="transbody" class="transcol4"><?php echo $transbody ?>
</div>