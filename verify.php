<?php
    include_once('includes/head.php');
    include_once('includes/functions.php');
    
    
    
    if (    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) &&
            isset($_POST['branch']) && isset($_POST['pax']) && isset($_POST['date']) && 
            isset($_POST['hour']) && isset($_POST['mins'])
        ){
        if($_POST['name']=='' || $_POST['email']=='' || $_POST['contact']=='' || $_POST['date']=='' ){
            $message = "<br><br><br><table align='center' width='75%' cellpadding='2' class='confirm'>
                        <td colspan='2' align='center'><h2>Please indicate the following:</h2><font size='4'>";
            if($_POST['name']==''){             
                $message .= "<br>NAME";
            }
            if($_POST['email']==''){             
                $message .= "<br>EMAIL";
            }
            if($_POST['contact']==''){             
                $message .= "<br>CONTACT NUMBER";
            }
            if($_POST['date']==''){             
                $message .= "<br>RESERVATION DATE";
            }
            $message .= "</td>
                        <tr><td colspan='2' align='center'><br><br><br><a href='javascript:history.go(-1)'>BACK</a></td>
                        </table>"; 
            
            $send = FALSE;
        }else{
            $name   = strtoupper(sanitizeString($_POST['name']));
            $email  = strtoupper(sanitizeString($_POST['email']));
            $contact= sanitizeString($_POST['contact']);
            $branch = strtoupper($_POST['branch']);
            $pax    = $_POST['pax'];
            $date   = $_POST['date'];
            $hour   = $_POST['hour'];
            $mins   = $_POST['mins'];
            $info   = $_POST['info'];
                       
            $message =      "<br><table align='center' width='75%' cellpadding='2' class='confirm'>
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
                                    <td>" . $hour . ":" . $mins . "</td>
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
                                    <a href='confirm.php?name=" . $branch . "'><input type='button' value='CONFIRM'></a>
                                    
                              </table>                                                            
                              ";
                                                      
        }       
       
                       
    }
?>    
<div id="fadeConfirm" style="display:block">
            <?php echo $message;?>
</div>

