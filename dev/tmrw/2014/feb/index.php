<?php 
require('../../../bin/ClassMathGuard.php');
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>ENK INTERNATIONAL | TMRW</title>
	<meta name="description" content="A select portfolio of emerging contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC.">
	<meta name="keywords" content="tmrw, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events" />
	<meta name="author" content="ENK International">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/form.css">
		
</head>

<body class="tmrwFeb14Page showPage">
<div id="wrapper">

      <!-- Navigation-->	
    <div id="nav-col">
    	<div id="nav">
        	<a class="nav_enk" title="ENK International" href="../../../">ENK International</a>
            
            <ul class="nav_first">
                <div id="navFirstArchive"> </div>
                        <ul class="nav_second" id="navSecondShow"> </ul>
			</ul>
            
            <div id="social" class="socialFC"> </div>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content-->	
	<div id="main-col">
    
     <!-- The Show Module -->
    	 <!-- Info box content -->
         <div id="info-container" class="info-bg-tmrw_feb14">
         	<div class="info-top-box">
                <div class="info-name">TMRW</div>
                <!--<div class="info-subshows">TMRW Men.TMRW Women</div>-->
                <div class="info-dates">February TBD 2014</div>
            </div>
            
         	<div class="info-bottom-box"> 
                <div class="info-venue">Javits Center . <span class="light">NYC . 34-39 St @ 11 Ave</span></div>
                <div class="info-times">Sunday/Monday, 9am - 6pm  • Tuesday, 9am - 5pm </div>
               
            </div>
          </div> <!-- End Info Box Content -->  
          <!-- Show 01 -->
            <div class="info-description-box" style="height:75px;">
                <div class="info-description-l">
                	<img src="../../../img/shows/coterie/logo-tmrw.png" />
                </div>
                 <div class="info-description-r">
                	A select portfolio of emerging contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC.  
                	The “who’s next” for the marketplace, highlighting fresh talent, exceptional quality and showcasing tomorrow’s premiere brands.
                </div> 
            </div>
            <div class="info-description-box" style="height:70px;">
                <div class="info-description-l">
                	<a href="../../../coterie"><img src="../../../img/shows/coterie/logo-coterie.png" /></a>
                </div>
                 <div class="info-description-r">
                	An International fashion exhibition in the U.S. featuring contemporary to traditional women’s ready-to-wear.  
                		Twice a year in NYC, concurrent with <a href="../../../sole"><strong>Sole Commerce</strong></a> and 
                		<a href="../../../tmrw"><strong>TMRW</strong></a>.
	             </div> 
            </div>
             
            <div class="info-description-box" style="height:70px;">
                <div class="info-description-l">
                	<a href="../../../sole"><img src="../../../img/shows/coterie/logo-sole.png"></a>
                </div>
                 <div class="info-description-r">
                	A trade show dedicated exclusively to upscale footwear and handbags with the best domestic and international retailers.
                	</div> 
            </div>

            <!-- End Info Show Descriptions -->  
            
        <!-- Info Links/forms -->  
        <div class="module-content-info">
         <div class="info-links">
         	<a href="#" data-hide="form4" data-hidetype="toggle" class="info-btn linkhide">Show Dates/Hours</a>
         	<a href="#" data-hide="form2" data-hidetype="toggle" class="info-btn linkhide">Exhibit</a>
            <!--<a href="#" class="info-btn" target="_blank">Attend</a>-->
            <a href="#" data-hide="form5" data-hidetype="toggle" class="info-btn linkhide">Visit Show</a>
         	<a href="#" data-hide="form3" data-hidetype="toggle" class="info-btn linkhide">Contact</a>
         	
         </div>  
         <div id="form2" class="form2 formhide">
          		<h2>Exhibitor Application</h2>
                <div class="desc-lg">
                    To exhibit at one of ENK’s shows, please begin the application process by choosing a show and completing the short form below. 
                    If you have questions during this process, please contact <a href="mailto:tmrw@enkshows.com">tmrw@enkshows.com</a> or call 212.759.8055.
                </div>
                <div class="module-content">

                            <div id="showApply_form">
                                <form id="showApplyForm" method="post" action="../../../bin/applyForm.php" class="form">
                                    <fieldset>
                                        <div class="formcol-l" >
                                        <select name="showName" class="showName text-input required" tabindex="401">
                                            <option value="NONE" >SELECT SHOW</option>
											<option value="CHILDRENSCLUB">CHILDRENS CLUB</option>
											<option value="CIRCUIT" >CIRCUIT</option>
											<option value="COTERIE_FEB">COTERIE</option>
											<option value="ENKVEGAS">ENKVEGAS</option>
											<option value="INTERMEZZO">INTERMEZZO</option>
											<option value="SOLE_FEB">SOLE COMMERCE</option>
											<option value="TMRW_FEB" selected="selected">TMRW</option>
											<option value="WSA">WSA</option>
                                        </select><br>
                                        
                                            <input type="text" name="firstName" size="30" value="First Name" class="firstName text-input required" tabindex="402"><br>
                                            
                                            <input type="text" name="fullAddress" size="30" value="Full Address" class="fullAddress text-input required" tabindex="404"><br>
                                             
                                            <input type="text" name="contactEmail" size="30" value="Contact Email" class="contactEmail text-input email" tabindex="408"><br>
                                            
                                            <input type="text" name="showRoom" size="30" value="showroom" class="showRoom text-input" tabindex="411">
                                        </div>
                                        
                                        <div class="formcol-r">
                                            <br>
                                            <br>
                                            <br>
                                            <input type="text" name="lastName" size="30" value="Last Name" class="lastName text-input required" tabindex="403"><br>
                                            
                                            <div class="cityStateZipHolder">
                                            
                                            <input type="text" name="city" size="30" value="City" class="city text-input required" tabindex="405">
                                            <select name="state" class="state text-input required" tabindex="406">
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
                                            
                                             <input type="text" name="postal" size="30" value="Zip Code" class="postal text-input required" tabindex="407"><br>
                                            
                                            </div>
                                            
                                            <br/>
                                            
                                            <div class="contactCompanyHolder">
                                                <input type="text" name="contactPhone" size="30" value="Contact Phone" class="contactPhone text-input required" tabindex="409">
                                            	<input type="text" name="companyName" size="30" value="Company Name" class="companyName text-input required" tabindex="410"><br><br>          
                                            </div><br>
                                            
                                             <input type="text" name="website" size="30" value="Website" class="website text-input" tabindex="412">
                                             
                                        </div>
                                        <div class="form-bottom">
                                            <br>
                                            <input type="text" name="referralSource" size="30" value="How Did You Hear About the Show?" class="referralSource text-input" tabindex="413"><br>
                                            
                                         
                                          <div class="formcol-l">  
                                            <fieldset name="product[]" class="required product boxHolder">
                                              <legend><strong>Product</strong><span class="multipleChoice"> (select all that apply)</span></legend>
                                              
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
                                                <legend><strong>Gender</strong><span class="multipleChoice"> (select all that apply)</span></legend>
                                                
                                                <div class="checkboxHolder">
                                                	<input class="checkbox" type="checkbox" name="gender[]" id="box-mens2" value="mens" tabindex="418"><label class="checkboxText" for="box-mens2">Mens</label><br>
                                                </div>
                                                
                                                <div class="checkboxHolder">
                                                	<input class="checkbox" type="checkbox" name="gender[]" id="box-womens2" value="womens" tabindex="419"><label class="checkboxText" for="box-womens2">Womens</label><br>
                                               </div>
                                               
                                               <div class="checkboxHolder"> 
                                                	<input class="checkbox" type="checkbox" name="gender[]" id="box-unisex2" value="unisex" tabindex="420"><label class="checkboxText" for="box-unisex2">Unisex</label><br>
                                               </div>
                                               
                                               <div class="checkboxHolder"> 
                                                	<input class="checkbox" type="checkbox" name="gender[]" id="box-children2" value="children" tabindex="421"><label class="checkboxText" for="box-children2">Children</label><br>
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
                            </div><br>

                    
                </div> <!-- END module-content -->  
			</div>  <!-- End Form 2 -Exhibit Application -->   	
		<div id="form5" class="form5 formhide">
          	 <h2>Visit our show</h2>
                <div class="desc-lg">
                    To visit one of ENK’s shows, please begin the application process by choosing a show and completing the short form below. 
                    If you have questions during this process, please contact <a href="mailto:tmrw@enkshows.com">tmrw@enkshows.com</a> or call 212.759.8055.
                </div>
                <div class="module-content">
					<div id="visitor_form">
                    

                            <div id="visitor_form">
                                <form id="visitorForm" method="post" action="../../../bin/visitorForm.php" class="form">
                                    <fieldset>
                                        <div class="formcol-l" >
                                        <select name="showName" class="showName text-input required" tabindex="501">
                                            <option value="NONE" >SELECT SHOW</option>
											<option value="CHILDRENSCLUB">CHILDRENS CLUB</option>
											<option value="CIRCUIT" >CIRCUIT</option>
											<option value="COTERIE_FEB">COTERIE</option>
											<option value="ENKVEGAS">ENKVEGAS</option>
											<option value="INTERMEZZO">INTERMEZZO</option>
											<option value="SOLE_FEB">SOLE COMMERCE</option>
											<option value="TMRW_FEB" selected="selected">TMRW</option>
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
                                              <legend><strong>Product</strong><span class="multipleChoice"> (select all that apply)</span></legend>
                                              
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
                                                <legend><strong>Gender</strong><span class="multipleChoice"> (select all that apply)</span></legend>
                                                
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
          <div id="form3" class="form3 formhide">
          	 <h2>Contact</h2>
                <div class="desc-lg">
                    Please feel free to communicate with one of our TMRW show team members by completing the brief form below.
                    You will receive a response within 24 business hours, Monday through Friday.
                </div>
                <div class="module-content">


                            <div id="contact_form">
                            
                              <form id="contactForm" method="post" action="../../../bin/contactForm.php" class="form">
                                    <fieldset>
                                        <div class="formcol-l" >
                                            <input type="hidden" class="showName" name="showName" value="SOLE"> 
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
                                                <option value="TMRW">TMRW SHOW TEAM</option>
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
                              
                            </div>
                            <br>
                            
                         </div> <!-- END module-content -->  
                
          </div>  <!-- End Contact Form Module-->  
          <div id="form4" class="form4 formhide">
          	 <h2>TMRW - 2013/14 Shows</h2>
                <div class="desc-lg">
                  <a href="http://www.enkshows.com/tmrw/2013/sep">
                    <strong>September 17.18.19, 2013, @ Javits Center.NYC</strong></a><br>
                     Tuesday/Wednesday, 9am - 6pm  • Thursday, 9am - 5pm 
                   <br /><br />
                   <a href="http://www.enkshows.com/tmrw/2014/feb">
                   	<strong>February TBD 2014 @ Javits Center.NYC</strong></a><br>
                   Sunday/Monday, 9am - 6pm  • Tuesday, 9am - 5pm <br><br>
                   
				</div>
                <!-- END module-content -->  
                
          </div>  <!-- End Show dates Form Module--> 
          </div><!-- End Info Links/forms -->   
         
    <!-- End Show Module -->
    
            <!-- Concierge Module -->     
            <div id="hotel-travel" class="module">
                    <h1>Hotel + Travel</h1>
                    <div class="desc-lg">
                    </div>
                        <div class="module-content">
                            <div class="showcol-l">
                                <div id="btn1" class="showcol-btn3 active">Show Hours/Location</div>
                                <div id="btn3" class="showcol-btn3">Hotels</div>
                                <div id="btn4" class="showcol-btn3">Taxis & Car Service</div>
                                <div id="btn5" class="showcol-btn3">Shuttle for the Show</div>
                                <div id="btn6" class="showcol-btn3">Airport Transportation</div>
                                <div id="btn7" class="showcol-btn3">Parking</div>
                            </div>

                            <div id="concierge-content">
                                <div id="concierge-content1" class="showcol-content">
                                	
                         	<div class="manual-l">
                            <strong>JAVITS CENTER</strong><br>
                                    <span class="book">
                                        655 West 34th Street<br>
										(34-39 Street @ 11 Avenue)<br>
										NYC 10001<br><br>
                                      
                            </div>
                            
                            <div class="manual-r">
                            	<strong>HOURS</strong><br />
                                    <span class="book">
                                        Sunday, February 23 / 9am - 6pm<br>
                                        Monday, February 24 / 9am - 6pm<br>
                                        Tuesday, February 25 / 9am - 5pm<br><br>
                                        </span>
                                       
                                    </span>    
                            </div> <!-- End of Manual R-->
                           <iframe width="520" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="../../../maps/javits.html"></iframe>	
							
								</div>
								 <!-- <div id="concierge-content2" class="showcol-content">
                                	BLANK.NO CONTENT
                                    </div> -->
                                <div id="concierge-content3" class="showcol-content"> 
                                	<strong>HOTELS</strong><br>
                                	
                                	Coming Soon
                                	<!--
                                	ENK, together with our travel partner Travel Planners, has negotiated discounted rates at many NYC hotels.  
                                	Please visit Travel Planners for <a href="https://www.tphousing.com/r/startres.asp?EIcode=2549&attcode=72"><strong>Attendees</strong></a> 
                                	or for <a href="https://www.tphousing.com/r/startres.asp?eiCode=2326&attCode=19"><strong>Exhibitors</strong></a> 
                                	to make reservations or call 800.221.3531 (from the US, Canada & Caribbean) or +1.212.532.1660.
									-->
								</div>
                                <div id="concierge-content4" class="showcol-content">
                                	<strong>TAXIS</strong><br />
                                	The meter is required to be engaged or "hired" when a taxicab is occupied by anyone in addition to the driver.  The Standard City Rate is $2.50 upon entry and $0.50 for each additional unit.  The unit fare is:<br><br>
									1/5 of a mile, when the taxicab is traveling at 6 miles an hour or more; or 60 seconds when not in motion or traveling at less than 6 miles per hour. <br>
									Night surcharge of $.50 after 8:00 PM & before 6:00 AM <br>
									Peak hour Weekday Surcharge of $1.00 Monday - Friday after 4:00 PM & before 8:00 PM <br>
									New York State Tax Surcharge of $.50 per ride.
									<br /><br />
									<strong>SKYLINE LIMOUSINE</strong><br />
                                	ENK will have a dispatcher from <a href="http://www.skylineride.com/" target="_blank">Skyline</a> limousine at the Show venue so that guests may arrange private transportation during the Exhibition. Skyline has a very large fleet of Town Cars: non-smoking cars are available upon request. <br> 
                              	<br />To pre-arrange an account Skyline, please print and complete the <a href="../../../pdf/skyline_credit_app.pdf">credit application</a>, and mail or fax it to them directly. Or call 718.482.8585 for more information.  At show site Skyline accepts credit cards when a reservation is made through the dispatcher.
                                             
								</div>
								<div id="concierge-content5" class="showcol-content">
                                	<strong>SHUTTLES FOR THE SHOW</strong><br>
                                    ENK provides complimentary Shuttle Service on Show days. The buses are scheduled as follows: every 30 minutes from 8am-3pm, and every 15-20 minutes after 3pm, from the beginning of each route (see list below). It will take approximately 10-15 minutes between each stop. (Pick-up times will vary slightly due to traffic conditions).
									Day 1 & 2 - 8am to 7pm. Day 3 - 8am to 6pm.  It will take approximately 10-15 minutes between each stop. (Pick-up times will vary slightly due to traffic conditions.)
									<br /><br />
									
									<strong>SHUTTLE PICKUP & DROP OFF LOCATIONS</strong><br />
									Shuttles will be labeled with Route Numbers 1-3, please see descriptions below for their destinations and plan accordingly.<br />
									<br />
									<strong>Route 1</strong> 
									<ul>
										<li><strong>Penn Station</strong> On 8th Avenue at 31st Street, Southeast corner
										<li><strong>Port Authority</strong> On 8th Avenue between 41st and 42nd Streets, east side of the street
									</ul>
										<br />
									<strong>Route 2</strong> <br>
									<ul>
										<li><strong>Hudson</strong> On 58th Street, between 8th and 9th Avenues, directly in front of main entrance
										<li><strong>Hampton Inn</strong> On 8th Avenue between 51st and 52nd Streets       
									</ul>
										<br />
									
								</div>
								<div id="concierge-content6" class="showcol-content">
									<strong>AIRPORT TRANSPORTATION</strong><br>
									When traveling from the Airport and paying via credit card, you will need to pay in advance via the credit card machine 
									at the Airport Taxi stand.  Traveling from other destinations, before entering the taxi, check to ensure they accept credit cards.
									<br><br>
									<strong>JFK INTERNATIONAL AIRPORT</strong><br>
										<strong>Fares:</strong> $45.00 flat rate plus any tolls plus NY State Tax Surcharge of $.50 per trip to/from Manhattan. Destinations outside of Manhattan are charged via the meter rate.
										For multiple stops or pickups, the flat rate of $45.00 will be collected at the first stop. Then the taxi meter will be turned on and the last passenger will then pay the final meter rate.<br><br>
									
									<strong>NEWARK INTERNATIONAL AIRPORT</strong><br>
										<strong>Fares:</strong> $50-$75 (aprox.) to any Manhattan location.  Additional charges include all tolls, luggage over 24 inches.  
									<br><br>
									
									<strong>LAGUARDIA AIRPORT</strong><br>
										<strong>Fares:</strong> $26-30.00 plus any tolls PLUS NY State Tax Surcharge of $.50 per trip to/from Manhattan.
										<br /> <br />
                               		<strong>AIRPORT SHUTTLE</strong><br />
                               		<br/>
                               		<strong>SuperShuttle</strong><br/>
									718.482.8585, ext. 3263 -or-<br/>
									1.800.Blue Van (258.3826)<br/><br/>
                                 	<strong>Fares:</strong>  $15-$19 per person, depending on pickup point and destination<br/>
									<strong>Details:</strong>  Available 24 hours a day; door to door service. No reservations are required from the airport.   Reservations required going to the airport. 
									<br/><br/>
									
									
                               	
                               	</div>
                               	
                               	<div id="concierge-content7" class="showcol-content">
                               		<strong style="font-size:14px;">JAVITS PARKING</strong><br><br>
                                <strong>EDISON</strong><br>
                                451 9th Avenue, between 35th & 36th Street<br>
								412-422 West 33rd @ 9th Avenue<br>
								<strong>KINNEY</strong><br>
								150 West 38th Street, 6am - 12am<br>
								252 West 40th Street, 6:30am - 11pm<br>
								<strong>MEYERS</strong><br>
								230 West 31st Street, 24 hours<br>
								551 West 38th Street, 7am - 6pm<br>
								<strong>PUBLIC PARKING</strong><br>
								493 10th Avenue @ 38th Street, 24 hours<br>
								484 10th Avenue, between 37th & 38th Streets, 24 hours<br>
								330 10th Avenue @ 30th Street, 24 hours<br>
								518 30th Street, between 10th & 11th Avenue, 24 hours<br>
								519 9th Avenue @ 37th Street, 24 hours<br>
								475 9th Avenue @ 37th Street, 24 hours<br>
								451 10th Avenue @ 37th Street, 24 hours<br>
								550 W 37th Street, between 10th & 11th Avenue, 24 hours<br>
								<br>
                                


                                </div>
                            </div>
                        </div> <!-- END module-content --> 
                    
             </div> <!-- Concierge Module --> 
                 
    	
    	<!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" >
            </div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<!-- Sticky Footer-->
<div id="footerlinks"></div>

<!-- fixed footer-->
<div id="footer">
	<div id="lFoot"></div>
    <div id="rFoot"></div>
</div>

	<!-- scripts -->
	<script src="../../../js/libs/modernizr-2.5.2.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
   
	   <!-- plugins/scripts -->
	<script src="../../../js/plugins.js"></script>
	<script src="../../../js/script.js"></script> 
    
   	<!-- Shadowbox -->  
    <script type="text/javascript" src="../../../js/shadowbox.js"></script>
	<!--form links -->
    <!--<script src="../../../js/jquery-1.2.3.pack.js"></script>-->
    <script src="../../../js/runonload.js"></script>
    <script src="../../../js/form.js"></script>
    
	<!-- end scripts-->

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-21042607-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

</body>
</html>
