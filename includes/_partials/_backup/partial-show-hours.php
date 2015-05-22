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
  <div id="map-canvas" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $long; ?>"></div>
</div>