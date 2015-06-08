<?php 
  // this includes the config file with all show information
  // it exists on the server
  include($root . "/includes/_content/_content-main-press.php");
?>
<div class="module" id="press">
	<h1>Press</h1>
	<div class="row no-border">
		<h2>Recent Articles</h2>
		<ul class="press-items">
			<?php foreach ($press as $key) : ?>
				<li>
					<a class="press-image" href="<?php echo $key['link'];?>" target="_blank">
						<img src="<?php echo $key['image'];?>" alt="">
						<div class="press-title">
							<?php if ($key['title']):?>
								<p><?php echo $key['show'];?></p>
							<?php endif; ?>
							<?php if ($key['title']):?>
								<h3><?php echo $key['publication'];?></h3>
							<?php endif; ?>
						</div>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="row">
		<h2>Press Contact</h2>
		<p>For press inquiries please complete the form below. A representative will contact you within 24 business hours. For immediate assistance, please call 212.951.6600.</p>
		<div id="press_form">
			<form id="pressForm" method="post" action="bin/pressForm.php" class="form">
				<fieldset>
					<div class="formcol-l" >
						<input type="text" name="firstName" size="30" value="First Name" class="form-control firstName text-input required" tabindex="201"><br>
						<input type="text" name="companyName"  size="30" value="Company Name" class="form-control input-half m-r-11 pressCompanyName text-input required" tabindex="203"> 
						<input type="text" name="contactPhone"  size="30" value="Contact Phone" class="form-control input-half  pressContactPhone text-input required" tabindex="204"><br>
					</div>
					<div class="formcol-r" >
						<input type="text" name="lastName" size="30" value="Last Name" class="form-control lastName text-input required" tabindex="202"><br>
						<input type="text" name="contactEmail"  size="30" value="Contact Email" class="form-control pressContactEmail text-input email" tabindex="205">
					</div>
					<div class="form-bottom">
						<textarea name="comments" cols="27" rows="5" value="Comments" class="form-control pressComments text-input required" tabindex="206" placeholder="Comments">
							Comments
						</textarea>

						<input type="submit" style="margin-top:20px;" name="submit" class="button" id="pressForm_button" value="Send" tabindex="207">
						<div class="captcha" style="margin-top:0px;">
							<div class="enkCaptcha" id="v2MainPressFormCaptcha"></div>
						</div>
					</div>
				</fieldset>
				<div class="form_message"></div>
			</form>
		</div>
	</div>
</div>