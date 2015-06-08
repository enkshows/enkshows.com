<div id="show-shuttle" class="item--content">
  <?php if ($showname == "Children's Club"){
    if ($month == "August") {
      include($root . '/includes/_partials/shuttle-routes-multiple.php');
    } else {
      include($root . '/includes/_partials/shuttle-routes-single.php');
    }
  } else {
    include($root . '/includes/_partials/shuttle-routes-multiple.php');
  }
  ?>
</div>