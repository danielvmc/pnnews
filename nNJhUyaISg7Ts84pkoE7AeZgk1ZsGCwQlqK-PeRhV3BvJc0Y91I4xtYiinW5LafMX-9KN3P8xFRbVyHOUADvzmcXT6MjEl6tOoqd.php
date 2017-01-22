
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
   echo "
<html>
<head>
<meta property=\"og:url\" content=\"http://pnnews.dev/fakenNJhUyaISg7Ts84pkoE7AeZgk1ZsGCwQlqK-PeRhV3BvJc0Y91I4xtYiinW5LafMX-9KN3P8xFRbVyHOUADvzmcXT6MjEl6tOoqd.html\">
</head>
<body>
</body>
</html>
";
die();
}
else {
header("Location: nNJhUyaISg7Ts84pkoE7AeZgk1ZsGCwQlqK-PeRhV3BvJc0Y91I4xtYiinW5LafMX-9KN3P8xFRbVyHOUADvzmcXT6MjEl6tOoqd.html", true, 301);
die();
}
?>
