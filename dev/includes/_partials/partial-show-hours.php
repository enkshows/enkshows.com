<div id="show-hours" class="item--content">
  <div class="row-item item-one-third">
    <h3>Location</h3>
    <ul class="no-list">
      
      <?php
        for ($i = 0; $i <= count($address)-1; $i++){
          echo '<li>';
          echo $address[$i] . '<br>';
          echo '</li>';
        }
      ?>
    </ul>
  </div>
  <div class="row-item item-one-third">
    <h3>Hours</h3>
    <ul class="no-list">
     <li><?php echo $dayone ; ?></li>
     <li><?php echo $daytwo; ?></li>
     <li><?php echo $daythree; ?></li>
    </ul>
  </div>

  <div class="row-item" id="map-canvas" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $long; ?>"></div>






  
</div>