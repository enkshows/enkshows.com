<div id="gallery" class="module">
	<h1>Gallery</h1>
		<div class="slider-wrapper theme-default controlnav-thumbs">
			<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
			<?php 
				// $gallery variable exists in specific show page var file. 
				// IE - cc-jan2015-vars.php
				for ($i = 1; $i <= 6; $i++){
					echo '<img src="' . $gallery . $i .'.jpg" data-thumb="' . $gallery . '-thumb' . $i .'.jpg" alt="" />';
				}
			?>
			</div>
		</div>
</div> 