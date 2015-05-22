<div class="module" id="hotel-travel">
  <h1>Hotel + Amenities</h1>
  <div class="row">
    <nav class="row-item item-one-third page-inner-nav">
      <ul>
        <li><a href="#show-hotel-travel" class="active">Accomodations</a></li>
        <li><a href="#show-car-service">Taxis & Car Service</a></li>
        <li><a href="#show-airport">Airport Transportation</a></li>
        <li><a href="#show-parking">Parking</a></li>
        <li><a href="#show-hours" id="hours">Show Hours/Location</a></li>
      </ul>
    </nav>
    <div class="row-item item-two-third">
      <!-- Accomodation  -->
      <?php include($root . '/includes/_partials/partial-accomodations.php');?>

      <!-- Car Service -->
      <?php include($root . '/includes/_partials/partial-car-service.php');?>

      <!-- Taxi Service -->
      <?php include($root . '/includes/_partials/partial-taxi-service.php');?>

      <!-- Airport Transportation -->
      <?php include($root . '/includes/_partials/partial-airport-transportation.php');?>

      <!-- Parking Transportation -->
      <?php include($root . '/includes/_partials/partial-parking.php');?>
      
      <!-- Show Hours Transportation -->
      <?php include($root . '/includes/_partials/partial-show-hours.php');?>
      
    </div>
  </div>
</div>