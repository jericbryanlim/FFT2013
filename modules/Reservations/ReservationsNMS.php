<div id="Header" class="reservationheaderNMS"><div id="ReservationsID">Reservations</div></div>
<div id="hr" class="reservationhrNMS"><?php echo $line ?></div>

<div id="policyNMS">RESERVATION POLICY</div>

<div id="policyheader" class="dayNMS">Weekdays</div>
<div id="policybody" class="daydetailsNMS">
    No reservations taken for lunch between 12pm - 2pm.
    <br>
    Last reservations taken for dinner at 7.30pm
    <br><br>
    <b>Weekends & Public Holidays</b>
    <br>
    No reservations taken for lunch between 12pm - 6pm<br>
    Last reservations taken for dinner at 7.30pm            
</div>
<!--
<div id="policyheader" class="emailNMS">Reservations through email</div>
<div id="policybody" class="replyNMS">
            2 weeks in advance
    <br />  (reservations are only confirmed 
    <br />when there is an email reply)
</div>
-->

<!-- reservation form -->

<form id="NMS" action="../verify.php" method="post">
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
            <td><input type="date" format="DD/MM/YYYY" min="<?php echo date('Y-m-d', strtotime("+4 days")); ?>" id="date" name='date'></td>      
            <td><input type="time" value="08:00" step="900" name="time"></td>   
        </tr>            
        <tr>
            <td>Additional Information</td>
        </tr>
        <tr>
            <td colspan="4"><textarea cols="100" rows="3"></textarea></td>
            <td><input type="submit" value="Request" style="height: 4.5em; width: 19em; 
                       background-color:#DD523C;" id="btnstyle"></td>
        </tr>
    </table>
</form>