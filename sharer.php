<?php
	include_once("assets/function/func.php");
	$id= $_GET['id'];
	echo $id;
	$sql = $conn-> query("SELECT * FROM status WHERE sl='$id'");

	$data = $sql->fetch_assoc();
    date_default_timezone_set("Asia/Dhaka");
    $date = date('D M Y');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fb Share</title>
	<meta property="og:url"           content="http://www.ffpbd.ml/share.php?id=<?php echo $data['sl']; ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo $data['sthead']; ?>" />
	<meta property="og:description"   content="<?php echo $data['status']; ?>" />
	<meta property="og:image"         content="http://www.ffpbd.ml/assets/images/status/<?php echo $data['stfile']; ?>" />

</head>
<body>
    <div class="heaad">
        <p>Today: <span> <?php echo $date;?></span></p>
        <hr>
        <br>

    </div>
    <div class="bbody">
        <h1>"<?php echo $data['sthead']; ?>"</h1>
        <hr>
        <hr>
        <img src="http://www.ffpbd.ml/assets/images/status/<?php echo $data['stfile']; ?>" alt="" style="width: 70%; height: 400px; text-align: center">
        <hr>
        <hr>
        <p><?php echo $data['sthead']; ?></p>
    </div>
    <div class="ffoter"></div>
</body>
<div id="fb-root"></div>

<script>
(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=580378915933022";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

function fb_share(dynamic_link,dynamic_title) {
    var app_id = '580378915933022';
    var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
    var w = 600;
    var h = 400;
    var left = (screen.width / 2) - (w / 2);
    var top = (screen.height / 2) - (h / 2);
    window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
    return false;
}
</script>

</html>