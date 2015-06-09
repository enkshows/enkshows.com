<div id="hotel-travel" class="module">
     
  <h1>Hotel + Amenities</h1>
  <div class="desc-lg"></div>
  <div class="module-content">
    <div class="showcol-l">
      <div id="btn1" class="showcol-btn3 active">Hotels</div>
      <div id="btn2" class="showcol-btn3">Taxis & Car Service</div>
      <div id="btn3" class="showcol-btn3">Shuttles for the Show</div>
      <div id="btn4" class="showcol-btn3">Airport Transportation</div>
      <div id="btn5" class="showcol-btn3">Parking</div>
      <div id="btn6" class="showcol-btn3">Show Hours/Location</div>
    </div><!-- Nav Menu -->
    <div id="concierge-content">
      <div id="concierge-content1" class="showcol-content">
        <h3>Exclusive Hotel Rates</h3>
        For additional hotel discounts and reservations, please click <a href="http://www2.quikbook.com/event/enkcclub-october.asp?incentivecode=ENKCCLUBATT&utm_source=ENKCCLUB&utm_medium=site&utm_content=ENKCCLUBATT&utm_campaign=qbprivatelabelsite">Attendees</a> or <a href="http://www2.quikbook.com/event/enkcclub-october.asp?incentivecode=ENKCCLUBEXH&utm_source=ENKCCLUB&utm_medium=site&utm_content=ENKCCLUBEXH&utm_campaign=qbprivatelabelsite">Exhibitors</a>.
      </div>
      <div id="concierge-content2" class="showcol-content">
        <strong>TAXIS</strong>
        <p>The meter is required to be engaged or "hired" when a taxicab is occupied by anyone in addition to the driver.  The Standard City Rate is $2.50 upon entry and $0.50 for each additional unit.  The unit fare is:<br><br>
        1/5 of a mile, when the taxicab is traveling at 6 miles an hour or more; or <br>
        60 seconds when not in motion or traveling at less than 6 miles per hour. <br>
        Night surcharge of $.50 after 8:00 PM & before 6:00 AM <br>
        Peak hour Weekday Surcharge of $1.00 Monday - Friday after 4:00 PM & before 8:00 PM <br>
        New York State Tax Surcharge of $.50 per ride.</p>
        <strong>SKYLINE LIMOUSINE</strong><br />
        <p>ENK will have a dispatcher from <a href="http://www.skylineride.com/" target="_blank">Skyline</a> limousine at the Show venue so that guests may arrange private transportation during the Exhibition. Skyline has a very large fleet of Town Cars: non-smoking cars are available upon request.</p>
        <p>To pre-arrange an account Skyline, please print and complete the <a target="_blank" href="../../../pdf/skyline_credit_app.pdf">credit application</a>, and mail or fax it to them directly.</p>
      </div>
      <div id="concierge-content3" class="showcol-content">
        <strong>SHUTTLE SERVICE</strong>
        <p>ENK provides complimentary Shuttle Service on Show days. The buses are scheduled as follows: every 30 minutes from 8am-3pm, and every 15-20 minutes after 3pm, from the beginning of each route (see list below). It will take approximately 10-15 minutes between each stop. (Pick-up times will vary slightly due to traffic conditions).
        Day 1 & 2 - 8am to 7pm. Day 3 - 8am to 6pm.  It will take approximately 10-15 minutes between each stop. (Pick-up times will vary slightly due to traffic conditions.)</p>
        <br /><br />
        <strong>SHUTTLE PICKUP & DROP OFF LOCATIONS</strong><br />
        <ul>
          <li>Penn Station: On 8th Avenue at 31st Street on the Southeast corner. </li>
          <li>Port Authority: On 8th Avenue and 42nd street, the Northwest Corner, in front of Duane Reade.</li>
        </ul>           
      </div>
      <div id="concierge-content4" class="showcol-content">
        <strong>AIRPORT TRANSPORTATION</strong><br>
        When traveling from the Airport and paying via credit card, you will need to pay in advance via the credit card machine 
        at the Airport Taxi stand.  Traveling from other destinations, before entering the taxi, check to ensure they accept credit cards.
        <br><br>
        <strong>JFK INTERNATIONAL AIRPORT</strong><br>
        <strong>Fares:</strong> $45.00 flat rate plus any tolls plus NY State Tax Surcharge of $.50 per trip to/from Manhattan. Destinations outside of Manhattan are charged via the meter rate.
        For multiple stops or pickups, the flat rate of $45.00 will be collected at the first stop. Then the taxi meter will be turned on and the last passenger will then pay the final meter rate.<br><br>

        <strong>NEWARK INTERNATIONAL AIRPORT</strong><br>
        <strong>Fares:</strong> $50-$75 (aprox.) to any Manhattan location.  Additional charges include all tolls, luggage over 24 inches.  
        <br><br>

        <strong>LAGUARDIA AIRPORT</strong><br>
        <strong>Fares:</strong> $26-30.00 plus any tolls PLUS NY State Tax Surcharge of $.50 per trip to/from Manhattan.
        <br /> <br />
        <strong>AIRPORT SHUTTLE</strong><br />
        <strong>Fares:</strong>  $15-$19 per person, depending on pickup point and destination<br/>
        <strong>Details:</strong>  Available 24 hours a day; door to door service. No reservations are required from the airport.   Reservations required going to the airport. 
        <br/><br/>
        <strong>SuperShuttle</strong><br/>
        718.482.8585, ext. 3263 -or-<br/>
        1.800.Blue Van (258.3826)<br/><br/>
      </div>
      <div id="concierge-content5" class="showcol-content">
        <?php if ($address[4] == "piers"){
          include("../../../includes/parking-piers.php");
        } else {
          include("../../../includes/parking-javits.php");
        }
        ;?>
      </div>
      <div id="concierge-content6" class="showcol-content">
        <div class="manual-l">
          <strong><?php echo $address[0]; ?></strong><br>
          <span class="book"> 
            <?php echo $address[1]; ?><br>
            <?php echo $address[2]; ?><br>
            <?php echo $address[3]; ?><br>
          </span>
        </div>
        <div class="manual-r">
          <strong>HOURS</strong><br>
          <span class="book">
            <?php echo $dayone ; ?><br>
            <?php echo $daytwo; ?><br>
            <?php echo $daythree; ?><br><br></br>
          </span>
        </div>
        <iframe width="520" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo BASE;?>/maps/<?php echo $address[4];?>.html"></iframe> <br />
      </div>

    </div>
  </div> <!-- END module-content --> 
</div> <!-- Hotel + Travel Module -->    