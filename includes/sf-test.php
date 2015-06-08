
<div class="module" id="salesforce">
  <form class="salesforce" action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

  <input type=hidden name="oid" value="00DL0000005sU3s">
  <input type=hidden name="retURL" value="http://">

  <!--  ----------------------------------------------------------------------  -->
  <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
  <!--  these lines if you wish to test in debug mode.                          -->
  <input type="hidden" name="debug" value=1>                              
  <input type="hidden" name="debugEmail"                                  
  <!--  value="pjohnson@enkshows.com">                                      -->
  <!--  ----------------------------------------------------------------------  -->

  <label for="">
    Do You Have a Show in Mind?:
    <select  id="00NL0000003SBNm" name="00NL0000003SBNm" title="Do You Have a Show in Mind?">
      <option value="">SELECT SHOW</option>
      <option value="childrensclub">CHILDRENS CLUB</option>
      <option value="circuit">CIRCUIT</option>
      <option value="coterie">COTERIE</option>
      <option value="enkevegas">ENKVEGAS</option>
      <option value="intermezzo">INTERMEZZO</option>
      <option value="sole">SOLE COMMERCE</option>
      <option value="tmrw">TMRW</option>
    </select>
  </label><br>

  <label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

  <label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

  <label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

  Showroom Name:<input  id="00NL0000003PRw6" maxlength="255" name="00NL0000003PRw6" size="20" type="text" /><br>

  <label for="street">Address</label><textarea name="street"></textarea><br>

  <label for="city">City</label><input  id="city" maxlength="40" name="city" size="20" type="text" /><br>

  <label for="state">State/Province</label><input  id="state" maxlength="20" name="state" size="20" type="text" /><br>

  <label for="zip">Zip</label><input  id="zip" maxlength="20" name="zip" size="20" type="text" /><br>

  <label for="country">Country</label><input  id="country" maxlength="40" name="country" size="20" type="text" /><br>

  <label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

  <label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" /><br>

  <label for="URL">Website</label><input  id="URL" maxlength="80" name="URL" size="20" type="text" /><br>

  ADV Lead Source:<input  id="00NC0000004j7UV" maxlength="100" name="00NC0000004j7UV" size="20" type="text" /><br>

  Coming to the Event Primarily to sell?:<select  id="00NC0000005QNJ9" multiple="multiple" name="00NC0000005QNJ9" title="Coming to the Event Primarily to sell?">
  <option value="Accessories">Accessories</option>
  <option value="Apparel">Apparel</option>
  <option value="Footwear">Footwear</option>
  </select><br>

  Exhibitor Fashion Category:<select  id="00NL0000003S9Xg" name="00NL0000003S9Xg" title="Exhibitor Fashion Category">
  <option value="">--None--</option><option value="Mens">Mens</option>
  <option value="Womens">Womens</option>
  <option value="Children">Children</option>
  <option value="Footwear">Footwear</option>
  <option value="Sourcing">Sourcing</option>
  <option value="Accessories">Accessories</option>
  </select><br>

  Inbound Source Code:<input  id="00NL0000003QjNJ" maxlength="255" name="00NL0000003QjNJ" size="20" type="text" /><br>

  <input type="submit" name="submit">

  </form>

</div>