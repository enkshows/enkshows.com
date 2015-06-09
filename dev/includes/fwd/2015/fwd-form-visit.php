<div id="form5" class="form5 formhide">
 <h2>Visit our show</h2>
 <div class="desc-lg">
  To visit one of ENK’s shows, please begin the application process by choosing a show and completing the short form below
  If you have questions during this process, please contact please contact <a href="mailto:fwd@enkshows.com">fwd@enkshows.com</a> or call 310.857.7500.
</div>
<div class="module-content">
  <div id="visitor_form">
    

    <div id="visitor_form">
      <form id="visitorForm" method="post" action="../bin/visitorForm.php" class="form">
        <fieldset>
          <div class="formcol-l" >
            <select name="showName" class="showName text-input required" tabindex="501">
              <option value="NONE" >SELECT SHOW</option>
              <option value="CHILDRENSCLUB">CHILDRENS CLUB</option>
              <option value="CIRCUIT_JAN" >CIRCUIT</option>
              <option value="COTERIE">COTERIE</option>
              <option value="PROJECTWOMENS">PROJECT WOMENS</option>
              <option value="FWD">FWD</option>
              <option value="INTERMEZZO">INTERMEZZO</option>
              <option value="SOLE">SOLE COMMERCE</option>
              <option value="TMRW">TMRW</option>
              <option value="WSA">WSA</option>
            </select><br>
            
            <input type="text" name="firstName" size="30" value="First Name" class="firstName text-input required" tabindex="504"><br>
            
            <input type="text" name="fullAddress" size="30" value="Full Address" class="fullAddress text-input required" tabindex="506"><br>
            
            <input type="text" name="contactEmail" size="30" value="Contact Email" class="contactEmail text-input email" tabindex="510"><br>
            
            <input type="text" name="showRoom" size="30" value="showroom" class="showRoom text-input" tabindex="513">
          </div>
          
          <div class="formcol-r">
            
            <div class="visitorGuestsHolder">
              <select name="visitorType" class="visitorType text-input required" tabindex="502">
                <option value="NONE" selected="selected">
                  COMPANY CATEGORY
                </option>
                <option value="Exhibitor">
                  POTENTIAL EXHIBITOR
                </option>
                <option value="Press">
                  PRESS
                </option>
                <option value="Other">
                  OTHER
                </option>
              </select>
              
              <input type="text" name="numberGuests" size="30" value="Guests #" class="numberGuests text-input required" tabindex="503">
            </div>
            
            <input type="text" name="lastName" size="30" value="Last Name" class="lastName text-input required" tabindex="505"><br>
            
            <div class="cityStateZipHolder">
              
              <input type="text" name="city" size="30" value="City" class="city text-input required" tabindex="507">
              <select name="state" class="state text-input required" tabindex="508">
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
              </select><br>
              
              <input type="text" name="postal" size="30" value="Postal" class="postal text-input required" tabindex="509"><br>
              
            </div>
            
            <br/>
            
            <div class="contactCompanyHolder">
              <input type="text" name="contactPhone" size="30" value="Contact Phone" class="contactPhone text-input required" tabindex="511">
              <input type="text" name="companyName" size="30" value="Company Name" class="companyName text-input required" tabindex="512"><br><br>          
            </div><br>
            
            <input type="text" name="website" size="30" value="Website" class="website text-input" tabindex="514">
            
          </div>
          <div class="form-bottom">
            <br>
            <input type="text" name="referralSource" size="30" value="How Did You Hear About the Show?" class="referralSource text-input" tabindex="515"><br>
            
            
            <div class="formcol-l">  
              <fieldset name="product[]" class="required product boxHolder">
                <legend><strong>Product</strong><span class="multipleChoice">(multiple choice)</span></legend>
                
                <div class="checkboxHolder">
                  <input class="checkbox" type="checkbox" name="product[]" id="box-accessory2" value="accessory" tabindex="516"><label class="checkboxText" for="box-accessory2">Accessories</label>
                </div>
                
                <div class="checkboxHolder">
                  <input class="checkbox" type="checkbox" name="product[]" id="box-apparel2" value="apparel" tabindex="517"><label class="checkboxText" for="box-apparel2">Apparel</label>
                </div>
                
                <div class="checkboxHolder">
                  <input class="checkbox" type="checkbox" name="product[]" id="box-footwear2" value="footwear" tabindex="518"><label class="checkboxText" for="box-footwear2">Footwear</label>
                </div>
                
                <div class="checkboxHolder">
                  <input class="checkbox" type="checkbox" name="product[]" id="box-other2" value="other" tabindex="519"><label class="checkboxText" for="box-other2">Other</label>
                </div>
                
              </fieldset>
            </div>
            
            <div class="formcol-r">
              <fieldset name="gender[]" class="required gender boxHolder">
                <legend><strong>Gender</strong><span class="multipleChoice">(multiple choice)</span></legend>
                
                <div class="checkboxHolder">
                  <input class="checkbox" type="checkbox" name="gender[]" id="box-mens2" value="mens" tabindex="520"><label class="checkboxText" for="box-mens2">Mens</label><br>
                </div>
                
                <div class="checkboxHolder">
                  <input class="checkbox" type="checkbox" name="gender[]" id="box-womens2" value="womens" tabindex="521"><label class="checkboxText" for="box-womens2">Womens</label><br>
                </div>
                
                <div class="checkboxHolder"> 
                  <input class="checkbox" type="checkbox" name="gender[]" id="box-unisex2" value="unisex" tabindex="522"><label class="checkboxText" for="box-unisex2">Unisex</label><br>
                </div>
                
                <div class="checkboxHolder"> 
                  <input class="checkbox" type="checkbox" name="gender[]" id="box-children2" value="children" tabindex="523"><label class="checkboxText" for="box-children2">Children</label><br>
                </div> 
                
              </fieldset>
            </div>
            
          </div>
          <input type="submit" name="submit" class="button" id="visitorForm_button" value="Submit" tabindex="524">
          <div class="captcha">
            <?php MathGuard::insertQuestion(); ?>
          </div>
        </fieldset>
        <div class="form_message"></div>
      </form>
    </div><br>

    
  </div><!-- END visitor_form --> 

</div> <!-- END module-content -->  

</div>  <!-- End Visitor Form Module--> 