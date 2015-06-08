<div id="form3" class="form3 formhide">
  <h2>Contact</h2>
  <div class="desc-lg">
    Please feel free to communicate with one of our ENKVEGAS show team members by completing the brief form below.
    You will receive a response within 24 business hours, Monday through Friday.
  </div>
  <div class="module-content">
    <div id="contact_form">
      <form id="contactForm" method="post" action="../bin/contactForm.php" class="form">
        <fieldset>
          <div class="formcol-l" >
            <input type="hidden" class="showName" name="showName" value="ENKVEGAS"> 
            <input type="text" name="fullName" size="30" value="Full Name" class="fullName text-input required" tabindex="601"><br>
            <br>
            <div class="contactCompanyPhone">
              <input type="text" name="companyName"  size="30" value="Company Name" class="contactCompanyName text-input required" tabindex="603"><br>
              <br>
              <input type="text" name="contactPhone" size="30" value="Contact Phone" class="contactPhone2 text-input required" tabindex="604">
            </div> 
          </div>

          <div class="formcol-r" >
            <select name="InquiryType" class="inquiry text-input required" tabindex="602">
              <option value="NONE" selected="selected">INQUIRY TYPE</option>
              <option value="PRESS">PRESS</option>
              <option value="BUYER">BUYER</option>
              <option value="ACCOUNTING">ACCOUNTING</option>
              <option value="OPERATIONS">OPERATIONS</option>
              <option value="ENKVEGAS">ENK VEGAS SHOW TEAM</option>
            </select><br>
            <input type="text" name="contactEmail" size="30" value="Contact Email" class="contactEmail2 text-input email" tabindex="605">
          </div>

          <div class="form-bottom">
            <textarea name="comments" cols="27" rows="5" value="" class="comments text-input required" tabindex="606">Comments
            </textarea><br>
            <br>
          </div>
          <input type="submit" name="submit" class="button" id="contactForm_button" value="Submit" tabindex="607">
          <div class="captcha">
            <?php MathGuard::insertQuestion(); ?>
          </div>
        </fieldset>
        <div class="form_message"></div>
      </form>
    </div><br>
  </div> <!-- END module-content -->  
</div>  <!-- End Contact Form Module-->  