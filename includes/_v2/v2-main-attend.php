<?php 
  // this includes the config file with all show information
  // it exists on the server
  include($root . "/includes/_content/_content-shows-tiles.php");
?>
<div class="module" id="attend">
	<h1>Attend</h1>
	<h2>Buyer + Press Registration</h2>
	<p>To attend an ENK event, please begin the registration process by choosing a show below. If you have questions during this process, 
	please contact <a href="mailto:buyer@enkshows.com">buyer@enkshows.com</a> or call 310.857.7316 (8am-5:30pm PST) ask for Retail Relations.</p>
	<p>ENK shows are trade only events and are not open to the public.  Only qualified, registered trade visitors may attend</p>
	<div class="module-content-attend">
		<?php foreach ($shows as $key => $value) : ?>
			<?php if ($value['attend']) : ?>
		  <a href="http://www.enkregistrations.com/shows.aspx" class="page-tiles attend-tile" target="_blank">
		      <h1><?php echo $value['name'];?></h1>
		      <p><?php echo $value['dates'];?> @ <?php echo $value['location'];?></p>
		  </a>
		 	<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>