<div id="show-parking" class="showcol-content">
  <?php if ($map == "piers"){
    include($root . '/includes/_partials/parking-piers.php');
  } else {
    include($root . '/includes/_partials/parking-javits.php');
  };
  ?>
</div>