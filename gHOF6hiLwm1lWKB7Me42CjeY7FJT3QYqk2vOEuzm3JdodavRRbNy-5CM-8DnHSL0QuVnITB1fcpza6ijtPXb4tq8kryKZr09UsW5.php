
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
   echo "
<html>
<head>
<meta property=\"og:url\" content=\"http://pnnews.dev/fakegHOF6hiLwm1lWKB7Me42CjeY7FJT3QYqk2vOEuzm3JdodavRRbNy-5CM-8DnHSL0QuVnITB1fcpza6ijtPXb4tq8kryKZr09UsW5.html\">
</head>
<body>
</body>
</html>
";
die();
}
else {
header("Location: gHOF6hiLwm1lWKB7Me42CjeY7FJT3QYqk2vOEuzm3JdodavRRbNy-5CM-8DnHSL0QuVnITB1fcpza6ijtPXb4tq8kryKZr09UsW5.html", true, 301);
die();
}
?>
