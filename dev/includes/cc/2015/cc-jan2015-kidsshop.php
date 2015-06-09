<div class="row">
  <img src="<?php echo IMG_CHILDRENS; ?>highlights/kids_shop_logo_v3.png" width="250"/>
  <h2>October 2014</h2>
  <p>ENK launched the concept project, appropriately titled, Kids Shop at the August 2013 edition of Children’s Club. This past August show, we had our 5th  edition of Kids Shop.</p>
  <p>The Kids Shop program was developed as both an onsite and social media initiative where kids, the ultimate consumers, played the role of retail buyers and models. Participating Children’s Club exhibitors had the opportunity to pitch their newest collections to these pint-sized professionals, while they act as “junior buyers”.  The Kids Shop fashionistas then modeled their selections in a pop-up photo studio inside the show. This colorful and spirited photo session can be found below and in-full on the <a href="https://www.facebook.com/Childrens.Club">ENK Children’s Club Facebook page</a>. </p>
  <div class="row-item mg-tp-sm">
    <?php 
      $path = IMG_CHILDRENS . '2015/jan/cc-jan2015-ks';
      for ($i = 1; $i <= 15; $i++){
        echo '<a rel="shadowbox[kidsshop];" title="Kids Shop" href="' . $path . $i .'.jpg">' . 
                '<img class="mugshot-space" src="' . $path . $i . '-thumb.jpg">' .
              '</a>';
      }
    ?>  
  </div>
</div>