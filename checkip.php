<?php

function ipDetails($ip)
{
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}

$details = ipDetails($_SERVER['REMOTE_ADDR']);

if ($details->country == 'VN') {
    echo 'Đây là VN';
} else {
    echo 'Đây là nước ngoài';
}
