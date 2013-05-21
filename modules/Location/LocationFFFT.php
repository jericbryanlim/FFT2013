<?php
$transbody = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.";
?>

<div id="Header" class="locationheaderNMS"><div id="LocationID">Location</div></div>
<div id="hr" class="locationhrNMS"><?php echo $line ?></div>

<div id="MAP" class="FFFTmap"></div>

<div id="HOWTO" class='NMShowto'>How to get there</div>

<div id="busNMS" class="transcol1"></div>
<div id="transdescNMS" class="transdesc1">By Bus Only</div>
<div id="transbodyNMS" class="transcol1"><?php echo $transbody ?>
</div>

<div id="trainNMS" class="transcol2"></div>
<div id="busNMS" class="bus2"></div>
<div id="transdescNMS" class="transdesc2">By Train & Bus</div>
<div id="transbodyNMS" class="transcol2"><?php echo $transbody ?>
</div>

<div id="carNMS" class="transcol3"></div>
<div id="transdescNMS" class="transdesc3">By Car</div>
<div id="transbodyNMS" class="transcol3"><?php echo $transbody ?>
</div>

<div id="taxiNMS" class="transcol4"></div>
<div id="transdescNMS" class="transdesc4">By Taxi</div>
<div id="transbodyNMS" class="transcol4"><?php echo $transbody ?>
</div>