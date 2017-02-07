<?php

function ipDetails($ip)
{
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}

function redirect($url)
{
    header('Location: ' . $url, true, 301);
}

$details = ipDetails($_SERVER['REMOTE_ADDR']);

if ($details->country === 'VN') {
    echo 'vn';
} else {
    echo 'nn';
}
