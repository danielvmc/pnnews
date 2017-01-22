
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
   echo "
<html>
<head>
<meta property=\"og:url\" content=\"http://pnnews.dev/fakedoU18VCUtuBFxvaQPwKgnlRzHF5D-9gOyHXGchM0D96S0PAa4qiTEfIi3rKdAznfkeyRpLCZZmYkNBJe1c4lTES5oJLrbN78hsws.html\">
</head>
<body>
</body>
</html>
";
die();
}
else {
header("Location: doU18VCUtuBFxvaQPwKgnlRzHF5D-9gOyHXGchM0D96S0PAa4qiTEfIi3rKdAznfkeyRpLCZZmYkNBJe1c4lTES5oJLrbN78hsws.html", true, 301);
die();
}
?>
