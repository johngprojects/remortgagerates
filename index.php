<?php
include_once 'config/LanderConfig.php';
$LC = new LanderConfig();

include "form-functions.php";
include "form-header.php";
?>

   <form action="process.php" method="post" id="frmLead" onsubmit="return submitForm();">

      <div id="q0" class="questionset clear">
         <div class="qhead">What are your mortgage needs?</div>
         <div class="qsecure"></div><div class="clear"></div>
         <div class="formq">
            <label for="PRODUCT">Mortgage Type</label>
            <select id="PRODUCT" name="PRODUCT" class="required">
               <?php
                  $prods = array( "PP_REMORTGAGE" => "Remortgage",
                                  "PP_FIRST_TIME_BUYER" => "First Time Buyer",
                                  "PP_NEXT_TIME_BUYER" => "Next Time Buyer",
                                  "PP_BUY_TO_LET" => "Buy To Let",
                           );
                  foreach ($prods as $key => $value) {
                     $sel = ($key == $LC->productcode) ? ' selected="selected" ' : '';
                     echo '<option value="'.$key.'"'.$sel.'>'.$value.'</option>';
                  }
               ?>
            </select>
            <div class="errlbl"><label class="error hidden" for="PRODUCT">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="EST_VAL">Property Value (Â£)</label>
            <select id="EST_VAL" name="EST_VAL" class="required">
               <option value="80000" >Less than 80,000</option>
               <option value="85000" >80,000 - 89,999</option>
               <option value="950000" >90,000 - 99,999</option>
               <option value="105000" >100,000 - 109,999</option>
               <option value="115000" >110,000 - 119,999</option>
               <option value="125000" >120,000 - 129,999</option>
               <option value="135000" >130,000 - 139,999</option>
               <option value="145000" >140,000 - 149,999</option>
               <option value="155000" >150,000 - 159,999</option>
               <option value="165000" >160,000 - 169,999</option>
               <option value="175000" >170,000 - 179,999</option>
               <option value="185000" >180,000 - 189,999</option>
               <option value="195000" >190,000 - 199,999</option>
               <option value="210000" >200,000 - 219,999</option>
               <option value="230000" >220,000 - 239,999</option>
               <option value="250000" >240,000 - 259,999</option>
               <option value="270000" selected="selected">260,000 - 279,999</option>
               <option value="290000" >280,000 - 299,999</option>
               <option value="310000" >300,000 - 319,999</option>
               <option value="330000" >320,000 - 339,999</option>
               <option value="350000" >340,000 - 359,999</option>
               <option value="370000" >360,000 - 379,999</option>
               <option value="390000" >380,000 - 399,999</option>
               <option value="415000" >400,000 - 429,999</option>
               <option value="455000" >440,000 - 469,999</option>
               <option value="495000" >480,000 - 509,999</option>
               <option value="535000" >520,000 - 549,999</option>
               <option value="575000" >560,000 - 589,999</option>
               <option value="615000" >600,000 - 629,999</option>
               <option value="655000" >640,000 - 669,999</option>
               <option value="695000" >680,000 - 709,999</option>
               <option value="735000" >720,000 - 749,999</option>
               <option value="775000" >760,000 - 789,999</option>
               <option value="815000" >800,000 - 829,999</option>
               <option value="855000" >840,000 - 869,999</option>
               <option value="895000" >880,000 - 909,999</option>
               <option value="935000" >920,000 - 949,999</option>
               <option value="975000" >960,000 - 989,999</option>
               <option value="1000000" >Over 1,000,000</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="EST_VAL">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="LOAN_VAL">Amount to Borrow (Â£)</label>
            <select id="LOAN_VAL" name="LOAN_VAL" class="required">
              <option value="" selected="selected">[ select one ]</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="LOAN_VAL">This field is required.</label></div>
         </div>
      </div>

      <div id="q1" class="questionset clear hidden">
         <div class="qhead">What are your mortgage needs?</div>
         <div class="qsecure"></div><div class="clear"></div>
         <div class="formq">
            <label for="OCC_STAT">Employment Status?</label>
            <select id="OCC_STAT" name="OCC_STAT" class="required">
               <option value="EMPLOYED" selected="selected">Employed</option>
               <option value="SELF_EMPLOYED">Self-Employed</option>
               <option value="RETIRED">Retired</option>
               <option value="UNEMPLOYED">Unemployed</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="OCC_STAT">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="CCJ">Do You Have a CCJ?</label>
            <select id="CCJ" name="CCJ" class="required">
               <option value="NO" selected="selected">No</option>
               <option value="YES">Yes</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="CCJ">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="IVA">Do You Have an IVA?</label>
            <select id="IVA" name="IVA" class="required">
               <option value="NO" selected="selected">No</option>
               <option value="YES">Yes</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="IVA">This field is required.</label></div>
         </div>
      </div>

      <div id="q2" class="questionset clear hidden">
         <div class="qhead">What are your mortgage needs?</div>
         <div class="qsecure"></div><div class="clear"></div>
         <div class="formq">
            <label for="MISS_PYMT" class="lglbl">Have You Missed A Mortgage/Loan Payment In The Past 12 Months?</label>
            <select name="MISS_PYMT" id="MISS_PYMT" class="required">
                 <option value="NO" selected="selected">No</option>
                 <option value="YES">Yes</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="MISS_PYMT">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="BKCY">Have You Ever Declared Bankruptcy?</label>
            <select name="BKCY" id="BKCY" class="required">
               <option value="NO" selected="selected">No</option>
               <option value="not_in_7">Not in Past 7 Years</option>
               <option value="less_1yr">Less than a year</option>
               <option value="years1_2">1 - 2 Years ago</option>
               <option value="years2_5">2 - 5 Years ago</option>
               <option value="years5_7">5 - 7 Years ago</option>
            </select>
            <div class="errlbl"><label class="error hidden" for="BKCY">This field is required.</label></div>
         </div>
      </div>

      <div id="q3" class="questionset clear hidden">
         <div class="qhead">What are your mortgage needs?</div>
         <div class="qsecure"></div><div class="clear"></div>
         <div class="formq" id="otherdebt">
            <label for="OTHER_DEBT" class="lglbl">Do You Have Any Other Debt (e.g., Credit Card Debt, Loans)?</label>
            <select name="OTHER_DEBT" id="OTHER_DEBT" class="required">
                 <option value="NO" selected="selected">No</option>
                 <option value="YES">Yes</option>
            </select>
            <span class="fieldnote">Did you know that you can consolidate your credit cards and store cards into your remortgage?</span>
            <div class="errlbl"><label class="error hidden" for="OTHER_DEBT">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="POSTCODE">Your Postcode</label>
            <input type="text" name="POSTCODE" id="POSTCODE" class="required" value="" />
            <div class="errlbl"><label class="error hidden" for="POSTCODE">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="EMAIL">Your Email</label>
            <input type="text" name="EMAIL" id="EMAIL" class="required email" value="" />
            <div class="errlbl"><label class="error hidden" for="EMAIL">This field is required. We do not spam.</label></div>
         </div>
      </div>

      <div id="q4" class="questionset clear hidden">
         <div class="qhead">One More Step! You Are Almost Done.</div>
         <div class="qsecure"></div><div class="clear"></div>
         <div class="formq">
            <label for="FNAME">First Name</label>
            <input type="text" name="FNAME" id="FNAME" class="required" value="" />
            <div class="errlbl"><label class="error hidden" for="FNAME">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="LNAME">Surname</label>
            <input type="text" name="LNAME" id="LNAME" class="required" value="" />
            <div class="errlbl"><label class="error hidden" for="LNAME">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="DOB">Date of Birth</label>
            <div class="birthdatepicker">
                <select id="DOBDD" name="DOBDD" class="birthdatesel required" >
                    <option value="">day</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select id="DOBMM" name="DOBMM" class="birthdatesel required" >
                    <option value="">month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select id="DOBYYYY" name="DOBYYYY" class="birthdatesel required" >
                    <option value="">year</option>
                    <?php
                        $iYr = intval(date("Y"));
                        $iYr = $iYr - 22;
                        for ($i=0; $i <= 85; $i++) { echo '<option value="'.($iYr-$i).'">'.($iYr-$i).'</option>'; }
                    ?>
                </select>
                <div class="clear"></div>
            </div>
            <div class="errlbl">
                  <label class="error hidden" for="DOB">Valid date required.</label>
                  <label class="error hidden" for="DOBMM">&nbsp;</label>
                  <label class="error hidden" for="DOBDD">&nbsp;</label>
                  <label class="error hidden" for="DOBYYYY">&nbsp;</label>
            </div>
            <input type="hidden" name="DOB" id="DOB" value="" />
         </div>
      </div>

      <div id="q5" class="questionset clear hidden">
         <div class="qhead">Final Step!</div>
         <div class="qsecure"></div><div class="clear"></div>
         <div class="formq">
            <label for="PRI_PHON">Your Telephone</label>
            <input type="text" name="PRI_PHON" id="PRI_PHON" class="required" value="" />
            <div class="errlbl"><label class="error hidden" for="PRI_PHON">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="ADDRESS1">Your Home Address</label>
            <input type="text" name="ADDRESS1" id="ADDRESS1" class="required" value="" />
            <div class="errlbl"><label class="error hidden" for="ADDRESS1">This field is required.</label></div>
         </div>
         <div class="formq">
            <label for="CITY">Your Town/City</label>
            <input type="text" name="CITY" id="CITY" class="required" value="" />
            <div class="errlbl"><label class="error hidden" for="CITY">This field is required.</label></div>
         </div>
      </div>

      <a href="#" id="mainbtn" class="btnC" onclick="next(true); return false;"></a>

      <div class="backctr">
         <a id="backbtn" class="hidden" href="#" onclick="previous(); return false;">&lt;&lt; Back to previous question</a>
         &nbsp;
      </div>

      <div id="finaldisc">
         <div id="fcadisc">
            By submitting this form you agree to be contacted by telephone by an FCA
            Authorised Mortgage Advisor and confirm that you have read and agree to
            the <a href="http://www.securerights.org.uk/termsandconditions.html" onclick="window.open(this.href,'','width=600,height=500,scrollbars=yes');return false;">Terms & Conditions</a>
            and <a href="http://www.securerights.org.uk/privacy.html" onclick="window.open(this.href,'','width=600,height=500,scrollbars=yes');return false;">Privacy Policy</a>.
         </div>
         <div id="fca"></div>
         <div class="clear"></div>
      </div>

      <?php /* hard-coded and other non-user form fields */ ?>
      <input type="hidden" name="SPEC_HOME" id="SPEC_HOME" value="" />
      <input type="hidden" name="TIME_TO_APPLY" id="TIME_TO_APPLY" value="1_2WEEKS" />
      <input type="hidden" name="SELF_CERT" id="SELF_CERT" value="NO" />

      <?php
      writeTrackingFormValues();
      writeTestingFormValues();
      writeProfileFormValues();
      ?>
   </form>

<?php include "form-footer.php"; ?>
