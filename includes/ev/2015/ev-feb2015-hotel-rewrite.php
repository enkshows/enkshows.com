    <div class="module" id="hotel-travel">
      <h1>Hotel + Amenities</h1>
      <div class="desc-lg"></div>
      <div class="module-content">
        <nav class="showcol-l show-nav">
          <ul>
            <li><a href="#show-hotel" class="showcol-btn3 active">Accomodations</a></li>
            <li><a href="#show-taxi" class="showcol-btn3">Taxis Services</a></li>
            <li><a href="#show-airport" class="showcol-btn3">Airport Transportation</a></li>
            <li><a href="#show-shuttle" class="showcol-btn3">Shuttle Service</a></li>
            <li><a href="#show-parking" class="showcol-btn3">Parking</a></li>
            <li><a href="#show-hours" class="showcol-btn3" id="hours">Show Hours/Location</a></li>
          </ul>
        </nav>

        <!-- Hotel + Travel Module -->    
        <div id="concierge-content">
            <div id="show-hotel" class="showcol-content active">
              <p>ENK, together with our travel partner Travel Planners, has negotiated discounted rates at many Las Vegas hotels.
                Please visit Travel Planners for <a href="https://www.tphousing.com/ph2/index2.aspx?EICode=3105&Attcode=1330&WebSessionsResID=23848869" target="_blank">Attendees</a> Or <a href="https://www.tphousing.com/ph2/startres.aspx?EICode=3105&Attcode=1622" target="_blank">Exhibitors</a>. to make reservations or call 800.221.3531 (from the US, Canada &amp; Caribbean) or +1.212.532.1660.
                <br><br>***Please note this link is NOT for those participating in the Complimentary Hotel Incentive program. You will be sent a separate link to book your complimentary rooms. Based on eligibility.</p>
            </div>
            <div id="show-taxi" class="showcol-content">
              <strong>TAXIS</strong><br /> 
              The base rate in Las Vegas is $2.60 per mile. There is an initial charge of $3.30 when the meter starts to run.  
              If you are starting a trip from the airport, there is an additional charge of $1.80 McCarran Airport fee. 
              There is a 5 person maximum and the fare is the same no matter how many passengers are traveling.   
              Be sure you have enough cash because most Taxis do not accept credit cards. 
              There is a $3 fee for use of a credit/debit card.
              <br /><br /> 
              To help calculate your taxi fare, Use <a href="http://www.taxifarefinder.com/main.php?city=LV" target="_blank">Taxifarefinder.com</a>
              <br /> <br /> 
              <strong>Ace Cab</strong>   702.888.4888<br /> 
              <strong>Yellow Cab</strong>   702.873.2000<br /> 
              <strong>Deluxe Taxi</strong>   702.567.0557<br /> 
              <strong>Desert Cab</strong>   702.386.9102<br /> 
              <strong>Henderson Taxi</strong>   702.384.2322<br /> 
              <strong>Lucky Cab</strong>   702.477.7555<br /> 
              <strong>Nellis Cab</strong>   702.248.1111<br /> 
              <strong>Western Cab</strong>   702.736.8000<br /> 
              <strong>Whittlesea/Henderson</strong>   702.384.6111
              <br /> <br /> 
              <strong>CAR/LIMO SERVICE</strong><br>
              Bell-Trans, 702.385.5466.  Limos, town cars, sedans and buses are available. Contact them for prevailing rates.
              <br /> <br /> 
              <strong>THE LAS VEGAS MONORAIL</strong><br /> 
              The Las Vegas Monorail runs from the MGM Grand to the Sahara hotel. 
              The route has <strong>seven stations: MGM Grand, Bally's / Paris, Flamingo, Harrah's / Imperial Palace, 
              Las Vegas Convention Center, Hilton and the Sahara.</strong> 
              <br /> <br /> 
              The monorail is open Monday - Thursday, 7:00 a.m. to 2:00 a.m. and Friday - Sunday, 7 a.m. - 3 a.m. 
              Rates for the monorail are <strong>$5 for one ride, $12 for an unlimited one-day pass and $28 for an unlimited three-day pass.</strong>
            </div>
            <div id="show-airport" class="showcol-content">
              <strong>TAXI</strong><br /> 
              Outside of each airline terminal you will find a taxi line.  
              The ride to the Mandalay Bay Convention Center is approximately 4.6 miles and will take 13-20 minutes. 
              The estimated fare is $23-28 plus $1.80 Airport fee and discretionary tip.
              <br /> <br /> 
              <strong>SHUTTLE SERVICE</strong><br /> 
              <strong>Bell-Trans</strong> <br /> 
              open 24 hours.  $7 one way, $13 round trip <br /> 
              <strong>Executive Las Vegas</strong> <br /> 
              open 24 hours.  $6 one way, $12 round trip. 702.646.4661<br /> 
              <strong>Airline Limousine Corp</strong>  <br /> 
              Open 24 hours.  $7 one way, $13 round trip. 702.487.3187<br /> <br /> 
            </div>
            <div id="show-shuttle" class="showcol-content">
              <strong>COMPLIMENTARY SHUTTLE SERVICE</strong><br /> 
              A complimentary shuttle service will be provided from partnering hotels to the Mandalay Bay Convention center. <a href="https://www.tphousing.com/e/2015/3105_Magic-Feb/MAGIC_February_Shuttle_Service.pdf" target="_blank">Please find the shuttle schedule here.</a>
            </div>
            <div id="show-parking" class="showcol-content">
              <strong>Both self-parking and valet are available at the Mandalay Bay complimentary.</strong>
            </div>
            <div id="show-hours" class="showcol-content">
              <div class="manual-l">
                <strong><?php echo $venue; ?></strong><br>
                <span class="book"> 
                  
                  <?php 
                    for ($i = 0; $i <= count($address); $i++){
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
              <div id="map-canvas" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $long; ?>"></div>
            </div>
        </div>
      </div>
    </div>