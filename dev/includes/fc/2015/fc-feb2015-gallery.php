<!-- Gallery -->
<div id="gallery" class="module">
  <h1>Gallery</h1>
  <div class="module-content">    
    <div class="slider-wrapper theme-default controlnav-thumbs">
      <div class="ribbon"></div>
      <div id="slider" class="nivoSlider">
        <?php 
          $path = IMG_FC . '2015/feb/fc-feb2015-gallery';
          for ($i = 1; $i <= 6; $i++){
            echo '<img src="' . $path . $i .'.jpg" data-thumb="' . $path . $i . '-thumb.jpg" alt="" />';
          }
        ?>
      </div>
    </div>
  </div>
</div>