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



<!-- <div id="attend" class="module">
	<h1>Attend</h1>
		<h2>Buyer + Press Registration</h2>
		<p>To attend an ENK event, please begin the registration process by choosing a show below. If you have questions during this process, 
			please contact <a href="mailto:buyer@enkshows.com">buyer@enkshows.com</a> or call 310.857.7316 (8am-5:30pm PST) ask for Retail Relations.</p>
			<p>ENK shows are trade only events and are not open to the public.  Only qualified, registered trade visitors may attend</p>
	<div class="module-content-attend">
		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>ACCESSORIE CIRCUIT</h1>
			<p>APRIL 27.28.29 @ Javits.NYC</p>
		</a> 

		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>INTERMEZZO COLLECTIONS</h1>
			<p>APRIL 27.28.29 @ Javits.NYC</p>
		</a>

		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>Children's Club</h1>
			<p>AUGUST 2.3.4 @ Javits.NYC</p>
		</a> 
		
		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>Accessorie Circuit</h1>
			<p>AUGUST 2.3.4 @ Javits.NYC</p>
		</a> 

		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>Intermezzo Collections</h1>
			<p>AUGUST 2.3.4 @ Javits.NYC</p>
		</a>

		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>Project Womens</h1>
			<p>AUGUST 17.18.19 @ MANDALAY BAY.LV</p>
		</a>

		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>Coterie.Sole.TMRW</h1>
			<p>SEPTEMBER 19.20.21 @ Javits.NYC</p>
		</a>

		<a class="page-tiles attend-tile" href="http://www.enkregistrations.com/shows.aspx" target="_blank">
			<h1>Children's Club</h1>
			<p>OCTOBER 18.19.20 @ Javits.NYC</p>
		</a>
  </div>
</div> -->