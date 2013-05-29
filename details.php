<?php
    include_once('includes/head.php');
    include_once('includes/functions.php');
    
    
    
    if (    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) &&
            isset($_POST['branch']) && isset($_POST['pax']) && isset($_POST['date']) && isset($_POST['time'])
        ){
        if($_POST['date']==''){
            $message = "<br><br><br><br><br><br><br><table align='center' width='75%' cellpadding='2'>
                        <td colspan='2' align='center'><h2>Please indicate date of reservation </h2></td>
                        <tr><td colspan='2' align='center'><a href='javascript:history.go(-1)'>BACK</a></td>
                        </table>"; 
            $send = FALSE;
        }else{
            $name   = strtoupper(sanitizeString($_POST['name']));
            $email  = strtoupper(sanitizeString($_POST['email']));
            $contact= sanitizeString($_POST['contact']);
            $branch = strtoupper($_POST['branch']);
            $pax    = $_POST['pax'];
            $date   = $_POST['date'];
            $time   = $_POST['time'];
            $info   = $_POST['info'];
                       
            $message =      "<br><table align='center' width='75%' cellpadding='2'>
                                <tr>
                                    <td colspan='2' align='center'><h2>Kindly confirm details of Reservation</h2></td>
                                </tr>
                                <tr>
                                    <td>Name</td> 
                                    <td>" . $name . "</td>  
                                </tr>
                                <tr>
                                    <td>Email</td> 
                                    <td>" . $email . "</td> 
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td>" . $contact . "</td> 
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td>" . $branch . "</td> 
                                </tr>
                                <tr>
                                    <td>No. of Pax</td> 
                                    <td>" . $pax . "</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>" . $date . "</td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td>" . $time . "</td>
                                </tr>
                                <tr>
                                    <td>Additional Info</td>
                                    <td>" . $info . "</td>
                                </tr>                                                                                                            
                                <tr></tr><tr></tr><tr></tr>
                                <tr>
                                    <td></td>
                                    <td align='right'><br><br><br>                                    
                                    <a href='javascript:history.go(-1)'><input type='button' value='CHANGE RESERVATION DETAILS'></a>
                                    <a href='confirm.php'><input type='button' value='CONFIRM'></a>
                              </table>                                                            
                              ";
                                                      
        }       
       
                       
    }
?>    
<div id="fadeConfirm" style="display:block">
            <?php echo $message;?>
</div>

<!--
<form id="SBG" action="../verify.php" method="post">
    <table>
        <tr>
            <td>Name*<td>
            <td colspan="2">Email*</td>
            <td>Contact Number*</td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" size="60" value="" name="name" maxlength="60" required></td>
            <td colspan="2"><input type="email" size="60" value="" name="email" maxlength="60" required></td>
            <td><input type="text" size="35" value="" name="contact" maxlength="8" required onkeypress='validate(event)'></td>            
        </tr>
        <tr>
            <td>Which branch*</td>
            <td>Pax*</td>
            <td>Date*</td>
            <td>Time*</td>
            <td rowspan="2"><li>Please allow us 3 working days to get <br />
                back to you. Reservations are only                  <br />
                confirmed when there is an email reply.</li>
            </td>
        </tr>
        <tr>
            <td>
                <select name="branch">
                  <option value="" disabled="disabled">----------Choose a Branch----------</option>
                  <option value="SBG">   Singapore Botanical Garden</option>
                  <option value="NMS"> National Museum of Singapore</option>
                </select>
            </td>
            <td>
                <select name="pax">
                  <option value="" disabled="disabled">-</option>  
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
            </td>    
            <td>
                
                <input type="date" format="DD/MM/YYYY" min="<?php echo date('Y-m-d', strtotime("+4 days")); ?>" id="date" name='date'></td>            
                
            <td><input type="time" value="08:00" step="900" name="time"></td>    
        </tr>            
        <tr>
            <td>Additional Information</td>
        </tr>
        <tr>
            <td colspan="4"><textarea cols="100" rows="3" name="info"></textarea></td>
            <td><input type="submit" value="Request" style="height: 4.5em; width: 19em; 
                       background-color:#DD523C;" id="btnstyle"></td>
        </tr>
        <tr><td><div id="results"><div></td>
        </tr>    
    </table>
</form>
-->