<?php
    include_once('includes/head.php');
    include_once('includes/functions.php');
    include_once('includes/picnicmenu.php');  

    $type = $_GET['type'];
    
    if($type==2){
        $pictype = 'FOR TWO';
    }else if ($type==4){
        $pictype = 'FOR FOUR';
    }else{
        $pictype = 'CUSTOMISE';
    }   
    $sandwich = '';
    $dessert  = '';   
    $side    = '';
    $wine    = '';
    
    if(isset($_POST['sandwich1']))
        $sandwich    .= $_POST['sandwich1'] . " " . $sandC1 . "<br>";
    if(isset($_POST['sandwich2']))
        $sandwich    .= $_POST['sandwich2'] . " " . $sandC2 . "<br>";
    if(isset($_POST['sandwich3']))
        $sandwich    .= $_POST['sandwich3'] . " " . $sandC3 . "<br>";
    if(isset($_POST['sandwich4']))
        $sandwich    .= $_POST['sandwich4'] . " " . $sandC4 . "<br>";
    
    if(isset($_POST['dessert1']))
        $dessert    .= $_POST['dessert1'] . " " . $desC1 . "<br>";
    if(isset($_POST['dessert2']))
        $dessert    .= $_POST['dessert2'] . " " . $desC2 . "<br>";
    if(isset($_POST['dessert3']))
        $dessert    .= $_POST['dessert3'] . " " . $desC3 . "<br>";
    if(isset($_POST['dessert4']))
        $dessert    .= $_POST['dessert4'] . " " . $desC4 . "<br>";
  
    if(isset($_POST['side1']))
        $side    .= $_POST['side1'] . " " . $sideC1 . "<br>";
    if(isset($_POST['side2']))
        $side    .= $_POST['side2'] . " " . $sideC2 . "<br>";
    if(isset($_POST['side3']))
        $side    .= $_POST['side3'] . " " . $sideC3 . "<br>";
    if(isset($_POST['side4']))
        $side    .= $_POST['side4'] . " " . $sideC4 . "<br>";
    
    if($type==2){
        if($_POST['drinks'] == 'bottle')
            $drinks = $drink2C1 . "<br>"; 
        else if($_POST['drinks'] == 'canned')
            $drinks = $drink2C2 . "<br>";
        else if($_POST['drinks'] == 'mineral')
            $drinks = $drink2C3 . "<br>";
    }    
    
    if(isset($_POST['basket']))
        $basket = "YES<br>";
    else
        $basket = "NO<br>";
    
    if($_POST['wine1']==0 && $_POST['wine2']==0 && $_POST['wine3']==0 && $_POST['wine4']==0 && $_POST['wine5']==0 && $_POST['wine6']==0)
        $wine    .= "NONE<br>";
    else{
        if($_POST['wine1']!=0)
            $wine    .= $_POST['wine1'] . " " . $wine1 . "<br>";
        if($_POST['wine2']!=0)
            $wine    .= $_POST['wine2'] . " " . $wine2 . "<br>";
        if($_POST['wine3']!=0)
            $wine    .= $_POST['wine3'] . " " . $wine3 . "<br>";
        if($_POST['wine4']!=0)
            $wine    .= $_POST['wine4'] . " " . $wine4 . "<br>";
        if($_POST['wine5']!=0)
            $wine    .= $_POST['wine5'] . " " . $wine5 . "<br>";
        if($_POST['wine6']!=0)
            $wine    .= $_POST['wine6'] . " " . $wine6 . "<br>";
    }
    
    $total = $_POST['totaltxt'];
    
            $message =      "<br><table align='center' width='75%' cellpadding='2' class='confirm'>
                                <tr>
                                    <td colspan='2' align='center'><h2>PLEASE CONFIRM YOUR RESERVATION FOR PICNIC " . $pictype . "</h2></td>                        
                                </tr>
                                <tr>
                                    <td><h3>SANDWICHES</h3></td> 
                                </tr>
                                <tr>    
                                    <td>" . $sandwich . "<br></td>  
                                </tr>
                                <tr>
                                    <td><h3>DESSERTS</h3></td> 
                                </tr>
                                <tr>    
                                    <td>" . $dessert . "<br></td>  
                                </tr>
                                <tr>
                                    <td><h3>SIDES</h3></td> 
                                </tr>
                                <tr>    
                                    <td>" . $side . "<br></td>  
                                </tr>
                                <tr>
                                    <td><h3>DRINK PACKAGE</h3></td> 
                                </tr>
                                <tr>    
                                    <td>" . $drinks . "<br></td>  
                                </tr>
                                <tr>
                                    <td><h3>RENT A PICNIC BASKET</h3></td> 
                                </tr>
                                <tr>    
                                    <td>" . $basket . "<br></td>  
                                </tr>
                                <tr>
                                    <td><h3>WINE</h3></td> 
                                </tr>
                                <tr>    
                                    <td>" . $wine . "<br></td>  
                                </tr> 
                                <tr> 
                                    <td colspan='2'>" . $line . "</td>
                                </tr>
                                <tr>
                                    <td align='right'><h2>TOTAL</h2></td>
                                    <td><h2><b>" . $total . "</b></h2></td> 
                                </tr>
                                <tr></tr><tr></tr><tr></tr>
                                <tr>
                                    <td></td>
                                    <td align='right'><br><br><br>                                    
                                    <a href='pages/branches.php?name=SBG#picnictext'><input type='button' value=' CANCEL '></a>
                                    <a href='contact.php'><input type='button' value='CONFIRM'></a>
                              </table>                                                            
                              ";                                                                                                     
?>    
<div id="fadeConfirm" style="display:block">
            <?php echo $message;?>
</div>