<?php 
  // this includes the config file with all show information
  // it exists on the server
  include($root . "/includes/_content/_content-shows-tiles.php");
?>

<div id="travel" class="module">
	<h1>Travel</h1>
	<h2>Hotels.Flights.Savings</h2>
  <p>Enjoy exclusive hotel discounts with ENK Shows. To begin, select your affiliation and show below.
    For questions or assistance please email <a href="mailto:enktravel@enkshows.com" target="_blank"> enktravel@enkshows.com</a>  or call 866-390-4836. </p>		
	<div class="module-content">
		<div class="travel-menu1 travel-dropdown">
			<ul>
				<li><a href="#enktravel">Attendees</a> 
					<ul>
            <?php foreach ($shows as $key => $value) : ?>
              <?php if ($value['attend']) : ?>
                <li>
                  <a href="<?php echo $value['link'];?>/#hotel-travel">
                    <span class="show"><?php echo $value['name'];?> @ <?php echo $value['location'];?> | </span><span class="date"><?php echo $value['dates'];?> <?php echo $value['year'];?></span></a> 
                  </a>
                </li>
                
              <?php endif; ?>
            <?php endforeach; ?>
          </ul> 
				</li> 
			</ul> 
		</div>

    <div class="travel-menu2 travel-dropdown">
    	<ul>
    		<li><a href="#enktravel">Exhibitors</a> 
    			<ul>
            <?php foreach ($shows as $key => $value) : ?>
              <?php if ($value['attend']) : ?>
                <li>
                  <a href="<?php echo $value['link'];?>/#hotel-travel">
                    <span class="show"><?php echo $value['name'];?> @ <?php echo $value['location'];?> | </span><span class="date"><?php echo $value['dates'];?> <?php echo $value['year'];?></span></a> 
                  </a>
                </li>
                
              <?php endif; ?>
            <?php endforeach; ?>
          </ul> 
        </li> 
      </ul>  
    </div>                        
	</div>                     
</div>