<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$otoiawase = $_POST['otoiawase'];

	//メールの内容
	$body .= "お問い合わせいただきましてありがとうございます。下記の情報を受け取りました。\nこちらから折り返しご連絡させていただきます。\n\n";
	$body .= "お名前:".$name."\n";
	$body .= "メールアドレス:".$address."\n";
	$body .= "お問い合わせ内容:\n".$otoiawase."\n\n";
	$body .= "**********************************************************************\n";
	$body .= "【ABC暗記方】\n";
	$body .= "メール:imai778778@gmail.com\n";
	$body .= "URL:https://www.example.com/\n";
	$body .= "**********************************************************************\n";

	//メールの送り先,メールの送り元,メールタイトル
	$flg = bSENDMAIL3($address,"imai778778@gmail.com","【ABC暗記方】です。お問い合わせいただきましてありがとうございます！",$body);
	$flg = bSENDMAIL3("imai778778@gmail.com","imai778778@gmail.com","【ABC暗記方】です。お問い合わせいただきましてありがとうございます！",$body);

	if($flg == true) {
		$massage = "メールの送信が完了しました。<br />お問い合わせいただきましてありがとうございました！";
	} else {
		$massage = "メールの送信に失敗しました。<br />大変お手数ですが、もう一度やり直して下さい。";
	}
}

function bSENDMAIL3($to,$from,$sub,$body) {
	mb_language("uni");
	mb_internal_encoding("utf-8");//utf-8 or SJIS
	$Head="";
	$Head.="From: ".$from."\n";
	$Head.="Mime-Version: 1.0\n";
	$Head.="Reply-To: ".$from."\n";
	$Head.="X-Mailer: PHP/" . phpversion();
	$flg = mb_send_mail($to, $sub, $body,$Head);
	return $flg;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>送信完了画面 | お問い合わせフォーム</title>
<link rel="apple-touch-icon" type="image/png" href="../img/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="../img/icon-192x192.png">
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css" type="text/css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<header>

</header>

<body>
	<div class="contact">
		<div class="section-title">
			<h3>お問い合わせ</h3>
		</div>

		<div class="submit-comp">
			<?=$massage?>
		</div>	

		<div class="wrap">
			<input class="button" type="button" value="戻る" onclick="location.href='../lp/index.html'" >
		</div>
	</div>
</body>
	
<footer>
	<div class="container">
		<ul class="footer-info">
			<li><a href="#" target="_blank">運営者情報</a></li>
			<li><a href="#" rel="nofollow" target="_blank">個人情報保護ポリシー</a></li>
			<li><a href="#" rel="nofollow" target="_blank">個人情報のお取り扱いについて</a></li>
		</ul>
		<img src="../img/site-tile-310x310.png">
		<p>Copyright © ABCankihou All Rights Reserved.</p>
	</div>
</footer>
</html>