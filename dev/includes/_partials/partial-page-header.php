<?php if ( $postano) : ?>
  <?php include($root . '/includes/fc/2015/fc-feb2015-postano.php'); ?>
<?php elseif ( $hero) : ?>
    <?php include($root . '/includes/main-hero-container.php'); ?>
<?php else : ?>
    <?php include($root . '/includes/new-template-show-header.php'); ?>
<?php endif; ?>