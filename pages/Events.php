<?php 
include_once('../includes/head.php');
include_once('../modules/NavigationBar/NavigationBar_Branches.php');
   
    $xml = simplexml_load_file('../includes/EventList.xml');
    $eventid = (int)$_GET['id'];   
    $location = $xml->event[$eventid]->branch;
    $logo = "";
    
?>
<div id='when'>                 <?php echo $xml->event[$eventid]->date; ?>     </div> 
<div id='what'>                 <?php echo $xml->event[$eventid]->title;?>     </div>
<div id='eventbranch'>
    <?php 
        if(strcasecmp($location, "SBG")==0){
            echo "<div class='event_sbg'><br><br><br></div>";
        }else if(strcasecmp($location, "NMS")==0){
            echo "<div class='event_nms'><br><br><br></div>";
        }else if(strcasecmp($location, "FFFT")==0){
            echo "<div class='event_ffft'><br><br><br></div>";
        }else
            echo "";
    ?>
</div>
<div id="hr" class='rule'><?php echo $line ?></div>
<div id="body">  <?php echo $xml->event[$eventid]->body;?>
<br><br><br>
        <img src="../images/Events/<?php echo $_GET['id']; ?>/<?php echo $xml->event[$eventid]->image[0]; ?>.jpg">
            <br><br><br>
        <img src="../images/Events/<?php echo $_GET['id']; ?>/<?php echo $xml->event[$eventid]->image[1]; ?>.jpg">
            <br><br><br>
    <?php
    if ($xml->event[$eventid]->image[2]!='')      
        echo "<img src='../images/Events/" . $_GET['id'] . "/" . $xml->event[$eventid]->image[2] . ".jpg'><br><br><br>";        
    if ($xml->event[$eventid]->image[3]!='')      
        echo "<img src='../images/Events/" . $_GET['id'] . "/" . $xml->event[$eventid]->image[3] . ".jpg'><br><br><br>";
    ?>
</div>
   

