<?php 
  // this includes the config file with all show information
  // it exists on the server
  include("includes/_content/_content-shows-tiles.php");
?>

<?php foreach ($shows as $key => $value) : ?>
  <a href="<?php echo $value['link'];?>" class="page-tiles show-tile show-tile-<?php echo $value['abbreviation'];?>">
    <div class="show-tile--details">
      <h1><?php echo $value['dates'];?></h1>
      <h2><?php echo $value['location'];?></h2>
    </div>   
  </a>
<?php endforeach; ?>