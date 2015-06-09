<div id="show-hotel-travel" class="item--content active">
    <h3>Accomodations</h3>
    <ol>
      <?php if ($coupon) : ?>
        <li>
          <strong>EXCLUSIVE RATES WITH HUDSON HOTEL</strong>
          <div class="hotel bg-vendor-hudson">
            <a class="overlay" href="<?php echo $coupon;?>" target="_blank">
              <span class="attend-show hotel-name">Hudson Hotel</span>
              <span class="attend-date hotel-details">Exclusive Rates for <?php echo $showname;?> <?php echo $month;?> <?php echo $year;?></span>
            </a>
          </div>
        </li>
      <?php endif; ?>

      <li>
        <a href="https://www.airbnb.com/" target="_blank" style="font-weight:bold;">AirBNB</a>
        <ul class="no-list">
          <li class="subtitle">About</li>
          <li><p>AirBNB began in 2008 when two designers who had space to share hosted three travelers looking for a place to stay. Now, millions of hosts and travelers choose to create a free Airbnb account so they can list their space and book unique accommodations anywhere in the world.</p></li>
          <li class="subtitle">Accommodations</li>
          <li><p>  From futons on the floor to castles on the hilltop, each Airbnb listings is unique. Search results feature entire homes, private rooms, and shared rooms at every price point. Hosts describe their space in detail, including available amenities and arrival and departure times, and guests leave reviews about their experience.</p></li>
          <li class="subtitle">24/7 Customer Support</li>
          <li><p>Whether you’re traveling or hosting, AIRBNB is there for you before, during, and after your experience. Help Center…contact us by visiting airbnb.com/contact or for urgent matters, call 415-800-5959 or 855-424-7262 </p></li>
        </ul>
      </li>
      <?php if ($hotel) : ?>
      <li class="subtitle">Hotels.Flights.Savings
        <ul class="no-list">
          <li><p>For additional hotel discounts and reservations, please <a href="<?php echo $hotel;?>" target="_blank">click here</a>.</p></li>
        </ul>
      </li> 
      <?php endif; ?>
      <!-- Hotels/Flights/Savaings -->
    </ol>
    <!-- <h3>Exclusive Hotel Rates</h3>
    <p>For additional hotel discounts and reservations, please click <a href="http://www2.quikbook.com/event/enkcclub-october.asp?incentivecode=ENKCCLUBATT&utm_source=ENKCCLUB&utm_medium=site&utm_content=ENKCCLUBATT&utm_campaign=qbprivatelabelsite">Attendees</a> or <a href="http://www2.quikbook.com/event/enkcclub-october.asp?incentivecode=ENKCCLUBEXH&utm_source=ENKCCLUB&utm_medium=site&utm_content=ENKCCLUBEXH&utm_campaign=qbprivatelabelsite">Exhibitors</a>.</p> -->
</div>







