<?php

function ipDetails($ip)
{
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}

$details = ipDetails($_SERVER['REMOTE_ADDR']);

var_dump($details->country);
