<div id="gallery" class="module">
	<h1>Gallery</h1>
		<div class="slider-wrapper theme-default controlnav-thumbs">
			<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
			<?php 
				for ($i = 1; $i <= 6; $i++){
					echo '<img src="' . $gallery . $i .'.jpg" data-thumb="' . $gallery . '-thumb' . $i .'.jpg" alt="" />';
				}
			?>
			</div>
		</div>
</div> 