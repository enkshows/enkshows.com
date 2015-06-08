<?php 

// this includes the show descriptions file. 
// if any content editing needs to happen,
// it should happen in the '_content-show-descriptions.php' file
// nothing should be touched here
include($root . "/includes/_content/_content-show-descriptions.php");
?>

<?php 
// checks to see if the descriptions array exists
// this way we won't render any HTML to the screen if its not included
if ($descriptions) : ?>
  <div class="show-descriptions">
    <?php 
    // iterates over the descriptions array that is included on line 7
    foreach ($descriptions as $key) : ?>
      <?php 
      // checks to see if the 'name' key/value matches the showname variable on the show page config file
      // if it does match (which it should for each respective show)
      // it starts buildling out the description files
      // from there it grabs the logo value (which is a absolute url)
      // and grabs the description value (which is content/html)
      // and prints them to the screen
      if ($key['name'] === $showname) :?>
        <div class="row">
          <div class="row-item">
            <img src="<?php echo $key['logo'] ?>" />
          </div>
          <div class="row-item">
            <?php echo $key['description']; ?>
          </div>
        </div>
      <?php endif; ?>
      <?php 
      // if a show has a 'subshow' array apart of it (AC/IC)
      // then it will build a row after the show row to display the content
      if ($key['name'] === $showname && $key['subshow']) : ?>
        <div class="row">
          <div class="row-item">
            <img src="<?php echo $key['subshow']['logo'] ?>" />
          </div>
          <div class="row-item">
            <?php echo $key['subshow']['description']; ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
<?php endif; ?>