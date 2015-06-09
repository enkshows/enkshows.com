<?php 
  // this includes the config file with all show information
  // it exists on the server
  include($root . "/includes/_content/_content-shows-tiles.php");

  
?>

<?php foreach ($shows as $key => $value) : ?>
  <a href="<?php echo $value['link'];?>" class="page-tiles show-tile show-tile-<?php echo $value['abbreviation'];?>">
    <div class="show-tile--details">
      <h1><?php echo $value['dates'];?></h1>
      <h2><?php echo $value['location'];?></h2>
    </div>   
  </a>
<?php endforeach; ?>



<!--   <a href="/circuit/" class="page-tiles show-tile show-tile-ac">
    <div class="show-tile--details">
      <h1>April 27.28.29</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 

  
  <a href="/intermezzo/" class="page-tiles show-tile show-tile-ic">
    <div class="show-tile--details">
      <h1>April 27.28.29</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 
  
  <a href="/childrensclub/" class="page-tiles show-tile show-tile-cc">
    <div class="show-tile--details">
      <h1>August 2.3.4</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 

  <a href="/circuit/2015/aug" class="page-tiles show-tile show-tile-ac">
    <div class="show-tile--details">
      <h1>August 2.3.4</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 

  <a href="/intermezzo/2015/aug" class="page-tiles show-tile show-tile-ic">
    <div class="show-tile--details">
      <h1>August 2.3.4</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 
  
  <a href="/enkvegas" class="page-tiles show-tile show-tile-ev">
    <div class="show-tile--details">
      <h1>August 17.18.19</h1>
      <h2>Mandalay Bay. LV</h2>
    </div>   
  </a> 
  

  <a href="/coterie" class="page-tiles show-tile show-tile-fc">
    <div class="show-tile--details">
      <h1>September 19.20.21</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 

  <a href="/tmrw" class="page-tiles show-tile show-tile-tmrw">
    <div class="show-tile--details">
      <h1>September 19.20.21</h1>
      <h2>Mandalay Bay. LV</h2>
    </div>   
  </a> 
  
  <a href="/sole" class="page-tiles show-tile show-tile-sc">
    <div class="show-tile--details">
      <h1>September 19.20.21</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a> 

  <a href="/childrensclub/2015/oct" class="page-tiles show-tile show-tile-cc">
    <div class="show-tile--details">
      <h1>October 18.19.20</h1>
      <h2>Javits.NYC</h2>
    </div>   
  </a>

  <a href="http://www.shopthefloor.com" class="page-tiles show-tile show-tile-stf" target="_blank">
    <div class="show-tile--details">
      <h1>24/7 . 365 days</h1>
      <h2>www.shopthefloor.com</h2>
    </div>  
  </a>
  
   
  
    
 -->