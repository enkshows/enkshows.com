    <div class="module" id="hotel-travel">
      <h1>Hotel + Amenities</h1>
      <div class="desc-lg"></div>
      <div class="module-content">
        <nav class="showcol-l show-nav">
          <ul>
            <li><a href="#show-hotel" class="showcol-btn3 active">Accomodations</a></li>
            <li><a href="#show-car-service" class="showcol-btn3">Taxis & Car Service</a></li>
            <li><a href="#show-airport" class="showcol-btn3">Airport Transportation</a></li>
            <li><a href="#show-parking" class="showcol-btn3">Parking</a></li>
            <li><a href="#show-hours" class="showcol-btn3" id="hours">Show Hours/Location</a></li>
          </ul>
        </nav>

        <!-- Hotel + Travel Module -->    
        <div id="concierge-content">
          <div id="show-hotel" class="showcol-content active">
            <h3>Exclusive Hotel Rates</h3>
            For additional hotel discounts and reservations, please click <a href="http://www2.quikbook.com/event/enkcclub-october.asp?incentivecode=ENKCCLUBATT&utm_source=ENKCCLUB&utm_medium=site&utm_content=ENKCCLUBATT&utm_campaign=qbprivatelabelsite">Attendees</a> or <a href="http://www2.quikbook.com/event/enkcclub-october.asp?incentivecode=ENKCCLUBEXH&utm_source=ENKCCLUB&utm_medium=site&utm_content=ENKCCLUBEXH&utm_campaign=qbprivatelabelsite">Exhibitors</a>.
          </div>
            
          <div id="show-car-service" class="showcol-content">
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

          <div id="show-airport" class="showcol-content">
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
            <?php include( $root . '/includes/_partials/partial-airport-transportation.php');?>
          <div id="show-parking" class="showcol-content">
            <h3 style="font-weight: bold;">Javits Parking</h3>
            <strong>MP 41 LLC, 475 West 41st Street</strong><br>
            Up to 10 hrs - $12<br>
            Up to 12 hrs - $20<br>
            Up to 24 hrs - $45<br>
            <a href="https://www.mpsparking.com/print-specialcoupon.php?id=69">Parking Coupon</a><br><br>
            <strong>EDISON</strong><br>
            451 9th Avenue, between 35th & 36th Street<br>
            412-422 West 33rd @ 9th Avenue<br><br>
            <strong>KINNEY</strong><br>
              150 West 38th Street, 6am - 12am<br>
              252 West 40th Street, 6:30am - 11pm<br><br>
            <strong>MEYERS</strong><br>
              230 West 31st Street, 24 hours<br>
              551 West 38th Street, 7am - 6pm<br><br>
              <strong>PUBLIC PARKING</strong><br>
              493 10th Avenue @ 38th Street, 24 hours<br>
              484 10th Avenue, between 37th & 38th Streets, 24 hours<br>
              330 10th Avenue @ 30th Street, 24 hours<br>
              518 30th Street, between 10th & 11th Avenue, 24 hours<br>
              519 9th Avenue @ 37th Street, 24 hours<br>
              475 9th Avenue @ 37th Street, 24 hours<br>
              451 10th Avenue @ 37th Street, 24 hours<br>
              550 W 37th Street, between 10th & 11th Avenue, 24 hours<br><br>
          </div>

          <div id="show-hours" class="showcol-content">
            <div class="manual-l">
              <strong><?php echo $venue; ?></strong><br>
              <span class="book"> 
                
                <?php 
                  // var_dump($address);
                  for ($i = 0; $i <= count($address) - 1; $i++){
                    echo $address[$i] . '<br>';
                  }
                  
                  
                ?>

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
            <!-- <iframe width="520" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php //echo BASE;?>/maps/<?php //echo $map;?>.html"></iframe> <br /> -->
            <div id="map-canvas" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $long; ?>"></div>
          </div>

          <!-- Show Hours -->
        </div>
      </div>
    </div>