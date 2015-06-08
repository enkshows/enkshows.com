    <div class="module" id="hotel-travel">
      <h1>Hotel + Amenities</h1>
      <div class="desc-lg"></div>
      <div class="module-content">
        <nav class="showcol-l show-nav">
          <ul>
            <li><a href="#show-hotel" class="showcol-btn3 active">Accomodations</a></li>
            <li><a href="#show-taxi" class="showcol-btn3">Taxis Services</a></li>
            <li><a href="#show-car-service" class="showcol-btn3">Car Services</a></li>
            <li><a href="#show-airport" class="showcol-btn3">Airport Transportation</a></li>
            <li><a href="#show-parking" class="showcol-btn3">Parking</a></li>
            <li><a href="#show-hours" class="showcol-btn3">Show Hours/Location</a></li>
          </ul>
        </nav>

        <!-- Hotel + Travel Module -->    
        <div id="concierge-content">
            <?php include($root . '/includes/_partials/partial-accomodations.php');?>

            <?php include($root . '/includes/_partials/partial-car-service.php');?>

            <?php include($root . '/includes/_partials/partial-taxi-service.php');?>

            <?php include($root . '/includes/_partials/partial-airport-transportation.php');?>

            <?php include($root . '/includes/_partials/partial-parking.php');?>

            <?php include($root . '/includes/_partials/partial-show-hours.php');?>

          <!-- Show Hours -->
        </div>
      </div>
    </div>