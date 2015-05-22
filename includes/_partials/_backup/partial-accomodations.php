<div id="show-hotel" class="showcol-content active">
  <h3 style="margin-bottom: 15px;">Accomodations</h3>
  <ol style="clear: both;">
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
      <ul>
        <li><p><p><strong>About</strong>  AirBNB began in 2008 when two designers who had space to share hosted three travelers looking for a place to stay. Now, millions of hosts and travelers choose to create a free Airbnb account so they can list their space and book unique accommodations anywhere in the world.</p></p></li>
        <li><p><strong>Accommodations</strong>  From futons on the floor to castles on the hilltop, each Airbnb listings is unique. Search results feature entire homes, private rooms, and shared rooms at every price point. Hosts describe their space in detail, including available amenities and arrival and departure times, and guests leave reviews about their experience.</p></li>
        <li><p><strong>24/7 Customer Support</strong>  Whether you’re traveling or hosting, AIRBNB is there for you before, during, and after your experience. Help Center…contact us by visiting airbnb.com/contact or for urgent matters, call 415-800-5959 or 855-424-7262 </p></li>
      </ul>
    </li>
    <li><strong>HOTELS.FLIGHTS.SAVINGS</strong>   
      <ul>
        <li><p>For additional hotel discounts and reservations, please <a href="<?php echo $hotel;?>" target="_blank">click here</a>.</p></li>
      </ul>
    </li> 
    <!-- Hotels/Flights/Savaings -->
  </ol>
</div>