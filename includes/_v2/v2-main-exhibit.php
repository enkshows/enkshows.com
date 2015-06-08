<div id="exhibit" class="module">
	<h1>Exhibit</h1>
	<h2>Exhibitor Application</h2>
	<p>To exhibit at one of ENK’s shows, please begin the application process by choosing a show and completing the short form below. 
		If you have questions during this process, please contact  <a href="mailto:enkshows@enkshows.com" target="_blank">enkshows@enkshows.com</a> or call 212.951.6600.</p>		
	<div class="row">
		<div id="apply_form">

			<form id="showApplyForm" method="post" action="bin/applyForm.php" class="form">
				<select name="showName" class="showName text-input form-control required" tabindex="401">
						<option value="NONE" selected="selected">SELECT SHOW</option>
						<option value="CHILDRENSCLUB">CHILDRENS CLUB</option>
						<option value="CIRCUIT">CIRCUIT</option>
						<option value="COTERIE">COTERIE</option>
						<option value="ENKVEGAS">PROJECT WOMENS</option>
						<option value="INTERMEZZO">INTERMEZZO</option>
						<option value="SOLE">SOLE COMMERCE</option>
						<option value="TMRW">TMRW</option>
					</select>
				<fieldset>
					
					<div class="formcol-l" >
						

						<input type="text" name="firstName" size="30" value="First Name" class="form-control firstName text-input required" tabindex="402">

						<input type="text" name="fullAddress" size="30" value="Full Address" class="form-control fullAddress text-input required" tabindex="404">

						<input type="text" name="contactEmail" size="30" value="Contact Email" class="form-control contactEmail text-input email" tabindex="408">

						<input type="text" name="showRoom" size="30" value="showroom" class="form-control showRoom text-input" tabindex="411">
					</div>

					<div class="formcol-r">
						
						
						
						<input type="text" name="lastName" size="30" value="Last Name" class="form-control lastName text-input required" tabindex="403">

						<div class="cityStateZipHolder">

							<input type="text" name="city" size="30" value="City" class="form-control city text-input input-thirds required" tabindex="405">
							<select name="state" class="form-control state text-input input-thirds required" tabindex="406">
								<option value="NONE" selected="selected">
									STATE
								</option>
								<option value="INTERNATIONAL">International App</option>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri </option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee </option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="DC">Washington D.C.</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>

							<input type="text" name="postal" size="30" value="Zip Code" class="form-control postal text-input input-thirds required" tabindex="407">

						</div>

						<div class="contactCompanyHolder">
							<input type="text" name="contactPhone" size="30" value="Contact Phone" class="form-control contactPhone text-input input-half m-r-11 required" tabindex="409">
							<input type="text" name="companyName" size="30" value="Company Name" class="form-control companyName text-input input-half required" tabindex="410">          
						</div>

						<input type="text" name="website" size="30" value="Website" class="form-control website text-input" tabindex="412">

					</div>
					<div class="form-bottom">
						
						<input type="text" name="referralSource" size="30" value="How Did You Hear About the Show?" class="form-control referralSource text-input" tabindex="413">
						<div class="formcol-l">  
							<fieldset name="product[]" class="required product boxHolder">
								<legend><strong>Product</strong> <span class="multipleChoice">(select all that apply)</span></legend>

								<div class="checkboxHolder">
									<input class="checkbox" type="checkbox" name="product[]" id="box-accessory2" value="accessory" tabindex="414"><label class="checkboxText" for="box-accessory2">Accessories</label>
								</div>

								<div class="checkboxHolder">
									<input class="checkbox" type="checkbox" name="product[]" id="box-apparel2" value="apparel" tabindex="415"><label class="checkboxText" for="box-apparel2">Apparel</label>
								</div>

								<div class="checkboxHolder">
									<input class="checkbox" type="checkbox" name="product[]" id="box-footwear2" value="footwear" tabindex="416"><label class="checkboxText" for="box-footwear2">Footwear</label>
								</div>

								<div class="checkboxHolder">
									<input class="checkbox" type="checkbox" name="product[]" id="box-other2" value="other" tabindex="417"><label class="checkboxText" for="box-other2">Other</label>
								</div>

							</fieldset>
						</div>

						<div class="formcol-r">
							<fieldset name="gender[]" class="required gender boxHolder">
								<legend><strong>Gender</strong> <span class="multipleChoice">(select all that apply)</span></legend>

								<div class="checkboxHolder">
									<input class="checkbox" type="checkbox" name="gender[]" id="box-mens2" value="mens" tabindex="418"><label class="checkboxText" for="box-mens2">Mens</label>
								</div>

								<div class="checkboxHolder">
									<input class="checkbox" type="checkbox" name="gender[]" id="box-womens2" value="womens" tabindex="419"><label class="checkboxText" for="box-womens2">Womens</label>
								</div>

								<div class="checkboxHolder"> 
									<input class="checkbox" type="checkbox" name="gender[]" id="box-unisex2" value="unisex" tabindex="420"><label class="checkboxText" for="box-unisex2">Dual Gender</label>
								</div>

								<div class="checkboxHolder"> 
									<input class="checkbox" type="checkbox" name="gender[]" id="box-children2" value="children" tabindex="421"><label class="checkboxText" for="box-children2">Children</label>
								</div> 

							</fieldset>
						</div>

					</div>


					<input type="submit" name="submit" class="button" id="showApplyForm_button" value="Submit" tabindex="422">
					<div class="captcha">
						<?php MathGuard::insertQuestion(); ?>
					</div>
				</fieldset>
				<div class="form_message"></div>
			</form>
		</div>
	</div>
</div> 