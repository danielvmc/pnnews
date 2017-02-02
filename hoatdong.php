<?php
$lines = file("work.txt");
foreach ($lines as $line) {
    echo $line . '<br>';
}

die();
