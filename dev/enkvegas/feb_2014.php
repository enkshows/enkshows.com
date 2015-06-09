<?php 
require('../bin/ClassMathGuard.php');
?>


<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>ENK INTERNATIONAL | ENKVEGAS</title>
	<meta name="description" content="An all-women’s exhibition that runs concurrent with Magic Market Week, ENKVEGAS takes place twice 
                	a year (February and August) in Las Vegas.">
	<meta name="keywords" content="ENKvegas, enk vegas, las vegas, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events" />
	<meta name="author" content="ENK International">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <!-- Shadowbox -->  
    <script type="text/javascript" src="../js/shadowbox.js"></script>

</head>
<body class="vegasFeb14Page showPage">
<div id="wrapper">

      <!-- Navigation-->	
    <div id="nav-col">
    	<div id="nav">
        	<a class="nav_enk" title="ENK International" href="../">ENK International</a>
            
            <ul class="nav_first">
                <div id="navFirstShow"> </div>
                        <ul class="nav_second" id="navSecondShow"> </ul>
			</ul>
            
            <div id="social" class="socialVegas"> </div>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content-->	
	<div id="main-col" >
    
     <!-- The Show Module -->
    	 <!-- Info box content -->
         <div id="info-container" class="info-bg-vegas">
       
         	<div class="info-top-box">
                <div class="info-name">ENKVegas</div>
                <div class="info-dates" >February 18.19.20 2014</div>
            </div>
            
         	<div class="info-bottom-box"> 
                <div class="info-venue">Mandalay Bay . <span class="light">Las Vegas</span></div>
                <div class="info-times">Tuesday/Wednesday, 9am - 6pm  • Thursday, 9am - 5pm</div>
            </div>
       
       </div>  <!-- End Info Box Content -->   
         	<!-- Info Show Descriptions -->
            <!-- Show 01 -->
            <div class="desc-lg">
            </div> 
         	<div class="info-description-box">
                <div class="info-description-l">
                	<img src="../img/shows/vegas/logos.png" />
                </div>
                <div class="info-description-r">
                	The exclusive women’s only fashion event, exhibiting women’s Advanced Contemporary Collections, Denim, & Accessories. ENKVegas is the destination 
                	for discovering both established brands as well as new brands in the marketplace all in one location. ENKVegas introduces a new elevated & intimate 
                	environment of influential brands, OASIS.
                </div>
            </div>
            
            <!-- End Info Show Descriptions -->  
        <!-- Info Links/forms -->  
         <div class="module-content-info">
         <div class="info-links">
         	<a href="#" data-hide="form4" data-hidetype="toggle" class="info-btn linkhide">Show Dates/Hours</a>
         	<a href="#" data-hide="form2" data-hidetype="toggle" class="info-btn linkhide">Exhibit</a>
            <!--<a href="#" class="info-btn" target="_blank">Attend</a> -->
            <a href="#" data-hide="form5" data-hidetype="toggle" class="info-btn linkhide">Visit Show</a>
         	<a href="#" data-hide="form3" data-hidetype="toggle" class="info-btn linkhide">Contact</a>
         	
         </div>  
          </div>
          <div class="module-content-info">
         <div id="form2" class="form2 formhide">
          		<h2>Exhibitor Application</h2>
                <div class="desc-lg">
                    To exhibit at one of ENK’s shows, please begin the application process by choosing a show and completing the short form below. 
                    If you have questions during this process, please contact <a href="mailto:enkvegas@enkshows.com">enkvegas@enkshows.com</a> or call 212.759.8055.
                </div>
                <div class="module-content">

                            <div id="showApply_form">
                                <form id="showApplyForm" method="post" action="../bin/applyForm.php" class="form">
                                    <fieldset>
                                        <div class="formcol-l" >
                                        <select name="showName" class="showName text-input required" tabindex="401">
                                            <option value="NONE" >SELECT SHOW</option>
											<option value="CHILDRENSCLUB">CHILDRENS CLUB</option>
											<option value="CIRCUIT" >CIRCUIT</option>
											<option value="COTERIE">COTERIE</option>
											<option value="ENKVEGAS" selected="selected">ENKVEGAS</option>
											<option value="INTERMEZZO">INTERMEZZO</option>
											<option value="ENKSHANGHAI">MODE SHANGHAI ENK</option>
											<option value="SOLE">SOLE COMMERCE</option>
											<option value="TMRW">TMRW</option>
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
                    If you have questions during this process, please contact <a href="mailto:enkvegas@enkshows.com">enkvegas@enkshows.com</a> or call 212.759.8055.
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
											<option value="CIRCUIT" >CIRCUIT</option>
											<option value="COTERIE">COTERIE</option>
											<option value="ENKVEGAS" selected="selected">ENKVEGAS</option>
											<option value="INTERMEZZO">INTERMEZZO</option>
											<option value="ENKSHANGHAI">MODE SHANGHAI ENK</option>
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
	                                                <option value="vegasExhibitor">
	                                                    POTENTIAL EXHIBITOR
	                                                </option>
	                                                <option value="Press">
	                                                    PRESS
	                                                </option>
	                                                <option value="vegasOther">
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
                              
                            </div>
                            <br>
                            
                         </div> <!-- END module-content -->  
                
          </div>  <!-- End Contact Form Module-->  
          <div id="form4" class="form4 formhide">
          	 <h2>ENKVEGAS - 2013/14 Shows</h2>
                <div class="desc-lg">
                   <span class="info-2013-shows">
	                   <a href="http://enkshows.com/enkvegas/2014/feb"><strong>February 18.19.20, 2014 @ Mandalay Bay.Las Vegas, NV</strong></a><br>
	                   Tuesday/Wednesday, 9am - 6pm  • Thursday, 9am - 5pm<br><br>
	                   
	                    <strong>August 18.19.20, 2014 @ Mandalay Bay Convention Center.Las Vegas, NV</strong></a><br>
	                   Monday/Tuesday, 9am - 6pm  • Wednesday, 9am - 5pm<br><br>
                   </span>
				</div>
                <!-- END module-content -->  
                
          </div>  <!-- End Show dates Form Module--> 
            </div><!-- End Info Links/forms -->  
         
    <!-- End Show Module -->
    
			   <!-- News item 1-->
                        	 <div class="element" >   
                            	<a href="http://www.latimes.com/features/image/alltherage/la-ar-calleen-cordero-opens-new-stores-summer-sale-20130709,0,2402013.story" target="_blank" class="captionShow" style="height:77px;">
				                    <span class="publication" target="_blank">LA Times</span>
				                    <br />
				                    <span class="article" target="_blank">Queen of studs Calleen Cordero opens new stores, launches summer sale</span>
				                </a>
	                            <a href="http://www.latimes.com/features/image/alltherage/la-ar-calleen-cordero-opens-new-stores-summer-sale-20130709,0,2402013.story" target="_blank">
	                 				<img src="../../../img/shows/vegas/press/thumb/lat_general.jpg" />
	                 			</a>
	                 		</div>	
         
        <!-- hotel-travel Module    -->
            <div id="hotel-travel" class="module">
                    <h1>Hotel + Travel</h1>
                    <div class="desc-lg">
                    </div>
                        
                        <div class="module-content">
                            <div class="showcol-l">
                                <div id="btn1" class="showcol-btn3 active">Show Hours/Location</div>
                                <div id="btn2" class="showcol-btn3">Hotels</div>
                                <div id="btn3" class="showcol-btn3">Taxis, Car & Shuttle Service</div>
                                <div id="btn4" class="showcol-btn3">From M<span style="text-transform:lowercase;">c</span>CARRAN AIRPORT</div>
                                <div id="btn5" class="showcol-btn3">Parking - Mandalay Bay</div>
                            </div>
                            <div id="concierge-content">
                                <div id="concierge-content1" class="showcol-content">
                                	
                                	<div class="manual-l">
	                                	<strong>Mandalay Bay</strong><br />
										3950 Las Vegas Boulevard South<br />
										Las Vegas, Nevada 89119
	                                    <br><br>
                                    </div>  
                                    
                                    <div class="manual-l">
                                        <strong>Hours</strong><br>
                                        Tuesday, February 18 / 9am - 6pm<br>
                                        Wednesday, February 19 / 9am - 6pm<br>
                                        Thursday, February 20 / 9am - 5pm<br><br>
                                    </div>    
								<iframe width="520" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="../maps/mandalay.html"></iframe>	<br />
                                        </div>
                                <div id="concierge-content2" class="showcol-content"> 
                                	Coming Soon
                                	<!--
                                	ENK, together with our travel partner Travel Planners, has negotiated discounted rates at many Las Vegas hotels.  
                                	Please visit Travel Planners for <a href="https://www.tphousing.com/r2/startres.aspx?EICode=2612&Attcode=1622"><strong>Attendees</strong></a> 
                                	or for <a href="https://www.tphousing.com/r2/startres.aspx?EICode=2612&Attcode=1622"><strong>Exhibitors</strong></a> 
                                	to make reservations or call 800.221.3531 (from the US, Canada & Caribbean) or +1.212.532.1660.
                                	-->
								</div>
                                <div id="concierge-content3" class="showcol-content">
                                	<strong>TAXIS</strong><br /> 
                                	The base rate in Las Vegas is $2.60 per mile. There is an initial charge of $3.30 when the meter starts to run.  
                                	If you are starting a trip from the airport, there is an additional charge of $1.80 McCarran Airport fee. 
                                	There is a 5 person maximum and the fare is the same no matter how many passengers are traveling.   
                                	Be sure you have enough cash because most Taxis do not accept credit cards. 
                                	There is a $3 fee for use of a credit/debit card.
                                	<br /><br /> 
                                	To help calculate your taxi fare, Use <a href="http://www.taxifarefinder.com/main.php?city=LV" target="_blank">Taxifarefinder.com</a>
                                	<br /> <br /> 
                                	<strong>Ace Cab</strong>   702.888.4888<br /> 
                                	<strong>Yellow Cab</strong>   702.873.2000<br /> 
                                	<strong>Deluxe Taxi</strong>   702.567.0557<br /> 
                                	<strong>Desert Cab</strong>   702.386.9102<br /> 
									<strong>Henderson Taxi</strong>   702.384.2322<br /> 
									<strong>Lucky Cab</strong>   702.477.7555<br /> 
									<strong>Nellis Cab</strong>   702.248.1111<br /> 
									<strong>Western Cab</strong>   702.736.8000<br /> 
									<strong>Whittlesea/Henderson</strong>   702.384.6111
									<br /> <br /> 
									<strong>CAR/LIMO SERVICE</strong><br>
									Bell-Trans, 702.385.5466.  Limos, town cars, sedans and buses are available. Contact them for prevailing rates.
									<br /> <br /> 
									<strong>THE LAS VEGAS MONORAIL</strong><br /> 
									The Las Vegas Monorail runs from the MGM Grand to the Sahara hotel. 
									The route has <strong>seven stations: MGM Grand, Bally's / Paris, Flamingo, Harrah's / Imperial Palace, 
									Las Vegas Convention Center, Hilton and the Sahara.</strong> 
									<br /> <br /> 
									The monorail is open Monday - Thursday, 7:00 a.m. to 2:00 a.m. and Friday - Sunday, 7 a.m. - 3 a.m. 
									Rates for the monorail are <strong>$5 for one ride, $12 for an unlimited one-day pass and $28 for an unlimited three-day pass.</strong>
								
								</div>

                                <div id="concierge-content4" class="showcol-content">
									<strong>TAXI</strong><br /> 
									Outside of each airline terminal you will find a taxi line.  
									The ride to the Mandalay Bay Convention Center is approximately 4.6 miles and will take 13-20 minutes. 
									The estimated fare is $23-28 plus $1.80 Airport fee and discretionary tip.
									<br /> <br /> 
									<strong>SHUTTLE SERVICE</strong><br /> 
									<strong>Bell-Trans</strong> <br /> 
									open 24 hours.  $7 one way, $13 round trip <br /> 
									
									<strong>Executive Las Vegas</strong> <br /> 
									open 24 hours.  $6 one way, $12 round trip. 702.646.4661<br /> 
									
									<strong>Airline Limousine Corp</strong>  <br /> 
									Open 24 hours.  $7 one way, $13 round trip. 702.487.3187<br /> <br /> 

								</div>
                                
                                 <div id="concierge-content5" class="showcol-content">
                                <strong>Both self-parking and valet are available at the Mandalay Bay complimentary.</strong>
                               </div>
                                	
                            </div>
                        </div> <!-- END module-content --> 
                    
             </div> <!-- hotel-travel Module -->    
         
             
    	<!-- Video Module -->     
            <div id="video"  class="module">
                    <h1>Video</h1>
                    <h2></h2>

                        <div class="module-content" style="margin:10px 0 0px 0;">
                         <iframe src="//player.vimeo.com/video/74778876" width="760" height="429" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div> <!-- END module-content --> 
                    
             </div> <!-- Video Module -->    
	
		<!-- Gallery Module -->     
            <div id="gallery"  class="module">
                    <h1>Gallery</h1>
                    <h2></h2>

                        <div class="module-content" style="margin:10px 0 0px 0;">

                          <div class="slider-wrapper theme-default controlnav-thumbs">
                        		<div class="ribbon"></div>
                                <div id="slider" class="nivoSlider">
                                    <img src="../../../img/shows/vegas/2014/feb/gallery/01.jpg" rel="../../../img/shows/vegas/2014/feb/gallery/thumb_01.jpg" alt="" />
                                    <img src="../../../img/shows/vegas/2014/feb/gallery/02.jpg" rel="../../../img/shows/vegas/2014/feb/gallery/thumb_02.jpg" alt="" />
                                    <img src="../../../img/shows/vegas/2014/feb/gallery/03.jpg" rel="../../../img/shows/vegas/2014/feb/gallery/thumb_03.jpg" alt="" />
                                    <img src="../../../img/shows/vegas/2014/feb/gallery/04.jpg" rel="../../../img/shows/vegas/2014/feb/gallery/thumb_04.jpg" alt="" />
                                    <img src="../../../img/shows/vegas/2014/feb/gallery/05.jpg" rel="../../../img/shows/vegas/2014/feb/gallery/thumb_05.jpg" alt="" />
                                    <img src="../../../img/shows/vegas/2014/feb/gallery/06.jpg" rel="../../../img/shows/vegas/2014/feb/gallery/thumb_06.jpg" alt="" />
                                </div>
                            </div>
                            
                        </div> <!-- END module-content --> 
                    
             </div> 
        <!-- Gallery Module -->          
	
	
	
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

	<script src="../js/libs/modernizr-2.5.2.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
   
	   <!-- plugins/scripts -->
	<script src="../js/plugins.js"></script>
	<script src="../js/script.js"></script> 
    
   	<!-- Shadowbox -->  
    <script type="text/javascript" src="../js/shadowbox.js"></script>
	<!--form links -->
    <!--<script src="../js/jquery-1.2.3.pack.js"></script>-->
    <script src="../js/runonload.js"></script>
    <script src="../js/form.js"></script>
    
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
