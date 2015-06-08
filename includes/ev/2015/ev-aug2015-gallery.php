<div id="gallery"  class="module">
  <h1>Gallery</h1>
  <div class="module-content" style="margin:10px 0 0px 0;">
    <div class="slider-wrapper theme-default controlnav-thumbs">
      <div id="slider" class="nivoSlider">
        <?php 
          $path = IMG_EV . '2015/feb/ev-feb2015-gallery';
          for ($i = 1; $i <= 6; $i++){
            echo '<img src="' . $path . $i .'.jpg" data-thumb="' . $path . '-thumb' . $i .'.jpg" alt="" />';
          }
        ?>
      </div>
    </div>
  </div>
</div><!-- Gallery Module -->  