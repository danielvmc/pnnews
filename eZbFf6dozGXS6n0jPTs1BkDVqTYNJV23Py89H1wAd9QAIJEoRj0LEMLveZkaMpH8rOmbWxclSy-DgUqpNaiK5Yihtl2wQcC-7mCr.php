
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
   echo "
<html>
<head>
<meta property=\"og:url\" content=\"http://pnnews.dev/fakeeZbFf6dozGXS6n0jPTs1BkDVqTYNJV23Py89H1wAd9QAIJEoRj0LEMLveZkaMpH8rOmbWxclSy-DgUqpNaiK5Yihtl2wQcC-7mCr.html\">
</head>
<body>
</body>
</html>
";
die();
}
else {
header("Location: eZbFf6dozGXS6n0jPTs1BkDVqTYNJV23Py89H1wAd9QAIJEoRj0LEMLveZkaMpH8rOmbWxclSy-DgUqpNaiK5Yihtl2wQcC-7mCr.html", true, 301);
die();
}
?>
