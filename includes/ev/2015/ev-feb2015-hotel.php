<div class="module" id="hotel-travel">
  <h1>Hotel + Amenities</h1>
  <div class="row">
    <nav class="row-item item-one-third page-inner-nav">
      <ul>
        <li><a href="#show-hotel-travel" class="active">Accomodations</a></li>
        <li><a href="#show-car-service">Taxis & Car Service</a></li>
        <li><a href="#show-airport">Airport Transportation</a></li>
        <li><a href="#show-shuttle">Shuttle Service</a></li>
        <li><a href="#show-parking">Parking</a></li>
        <li><a href="#show-hours" id="hours">Show Hours/Location</a></li>
      </ul>
    </nav>
    <div class="row-item item-two-third">
      <!-- Accomodations -->
      <?php include($root . '/includes/_partials/partial-ev-accomodations.php');?>

      <!-- Car Service -->
      <?php include($root . '/includes/_partials/partial-ev-car-service.php');?>

      <!-- Airport Transportation -->
      <?php include($root . '/includes/_partials/partial-ev-airport-transportation.php');?>

      <!-- Shuttle -->
      <?php include($root . '/includes/_partials/partial-ev-shuttle-service.php');?>

      <!-- Parking Transportation -->
      <?php include($root . '/includes/_partials/partial-ev-parking.php');?>
      
      <!-- Show Hours Transportation -->
      <?php include($root . '/includes/_partials/partial-show-hours.php');?>
      
    </div>
  </div>
</div>