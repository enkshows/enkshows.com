<div id="gallery" class="module">
	<h1 style="margin-bottom:20px;">Gallery</h1>
	<div class="module-content" style="margin:10px 0 0px 0;">
		<div class="slider-wrapper theme-default controlnav-thumbs">
			<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
				<?php 
					$path = IMG_ACIC . '2015/jan/ac-jan2015-gallery';
					for ($i = 1; $i <= 6; $i++){
						echo '<img src="' . $path . $i .'.jpg" data-thumb="' . $path . '-thumb' . $i .'.jpg" alt="" />';
					}
				?>
			</div>
		</div>
	</div> 
</div>