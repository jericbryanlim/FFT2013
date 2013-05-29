<div id="Header" class="reservationheader"><div id="ReservationsID">Reservations</div></div>
<div id="hr" class="reservationhr"><?php echo $line ?></div>

<div id="policy">RESERVATION POLICY</div>

<div id="policyheader" class="day">Weekdays</div>
<div id="policybody" class="daydetails">
    We Accept Reservations
    <br><br>
    <b> Weekends </b>
    <br>
    Reservations accepted from 8am - 10am and 3pm - 7.30pm
    <br>
    Maximum group size of 12
    <br><br>
    <b>Public Holidays</b>
    <br>
    No reservations
</div>

<!-- reservation form -->

<form id="SBG" action="../verify.php" method="post">
    <table>
        <tr>
            <td>Name*<td>
            <td colspan="2">Email*</td>
            <td>Contact Number*</td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" size="60" value="" name="name" maxlength="60"></td>
            <td colspan="2"><input type="text" size="60" value="" id="email" name="email" maxlength="60" onblur='checkEmail()'></td>
            <td><input type="text" size="35" value="" name="contact" maxlength="8" onkeypress='validate(event)'></td>            
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
            <td><input type="text" name="date" id="date" />
            <td>
                <select name="hour">
                  <option value="" disabled="disabled">--</option>                  
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                </select>
                <select name="mins">
                  <option value="" disabled="disabled">--</option>
                  <option value="00">00</option>
                  <option value="15">15</option>
                  <option value="30">30</option>
                  <option value="45">45</option>                  
                </select>
            </td>    
        </tr>            
        <tr>
            <td>Additional Information</td>
        </tr>
        <tr>
            <td colspan="4"><textarea cols="100" rows="3" name="info"></textarea></td>
            <td><input type="submit" value="Request" style="height: 4.5em; width: 19em; 
                       background-color:#DD523C;" id="btnstyle"></td>
        </tr>            
    </table>
</form>

</div>


