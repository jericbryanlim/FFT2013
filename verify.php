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

