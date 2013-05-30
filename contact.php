<?php
    include_once('includes/head.php');
    include_once('includes/functions.php');
    
    $message = "<form action='verify.php' method='post'>
                <table class='contact'>
                    <tr>
                        <td>Name*<td>
                        <td colspan='2'>Email*</td>
                        <td>Contact Number*</td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type='text' size='60' value='' name='name'  maxlength='60'></td>
                        <td colspan='2'><input type='text' size='60' value='' name='email' maxlength='60' id='email' onblur='checkEmail()'></td>
                        <td><input type='text' size='35' value='' name='contact' maxlength='8' onkeypress='validate(event)'></td>            
                    </tr>
                    <tr>
                        <td>Branch</td>
                        <td></td>
                        <td>Collection Date*</td>
                        <td>Collection Time*</td>
                        <td rowspan='2'><li>Please allow us 3 working days to get <br />
                                            back to you. Reservations are only                  <br />
                                            confirmed when there is an email reply.</li>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Singapore Botanical Garden</b>
                        </td>
                        <td>                            
                        </td>    
                        <td><input type='text' name='date' id='date' />
                        <td>
                            <select name='hour'>
                                <option value='' disabled='disabled'>--</option>                  
                                <option value='09'>09</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='15'>15</option>
                                <option value='16'>16</option>
                            </select>
                            <select name='mins'>
                                <option value='' disabled='disabled'>--</option>
                                <option value='00'>00</option>
                                <option value='15'>15</option>
                                <option value='30'>30</option>
                                <option value='45'>45</option>                  
                            </select>
                        </td>    
                    </tr>            
                    <tr>
                        <td>Additional Information</td>
                    </tr>
                    <tr>
                        <td colspan='4'><textarea cols='100' rows='3' name='info'></textarea></td>
                        <td><input type='submit' value='Request' style='height: 4.5em; width: 19em; 
                                background-color:#DD523C;' id='btnstyle'></td>
                    </tr>            
                </table>
                </form>";    
?>    
<div id="fadeContact" style="display:block">
            <?php echo $message;?>
</div>