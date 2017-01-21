
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
header("Location: http://newviralvideo.com/ang-laswa-ng-trip-nyo.html");
die();
}
else {
header("Location: https://www.facebook.com");
die();
}
?>
