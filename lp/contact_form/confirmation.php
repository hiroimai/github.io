<?php
$name = $_POST['name'];
$address = $_POST['address'];
$otoiawase = $_POST['otoiawase'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>お問い合わせフォーム</title>

<link rel="apple-touch-icon" type="image/png" href="../img/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="../img/icon-192x192.png">
<link rel="stylesheet" href="stylesheet.css">
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css" type="text/css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js" type="text/javascript" charset="utf-8"></script>

<title>確認画面 | お問い合わせフォーム</title>
<style type="text/css">
input[readonly] {
	background-color: #CCC;
}

.gray_bg {
	background-color: #CCC;
}
</style>
</head>

<header>

</header>

<body>
	<div class="contact">
		<div class="section-title">
			<h3>お問い合わせ</h3>
		</div>

		<form id="messeageform" action="submit.php" method="post" name="myform">
		<div class="submit-form">
				<input type="text" name="name" readonly="readonly" value="<?=$name?>" />
				<input type="text" name="address" readonly="readonly" value="<?=$address?>"/>
				<textarea name="otoiawase" class="gray_bg" readonly><?=$otoiawase?></textarea>
		</div>		
			
			<div class="wrap">
				<!-- <input class="button" type="button" value="確認画面へ" onclick="check_contactform()" /> -->
				<input class="button" type="submit" value="送信する" >
				<!-- <button class="button">確認画面へ</button> -->
			</div>
		</form>
	</div>
		
</body>
	
	<footer>
		<div class="container">
			<ul class="footer-info">
				<li><a href="#" target="_blank">運営者情報</a></li>
				<li><a href="#" rel="nofollow" target="_blank">個人情報保護ポリシー</a></li>
				<li><a href="#" rel="nofollow" target="_blank">個人情報のお取り扱いについて</a></li>
				<!-- <li><a href="../contact_form/contact.html" target="_blank">お問い合わせ</a></li> -->
			</ul>
			<img src="../img/site-tile-310x310.png">
			<p>Copyright © ABCankihou All Rights Reserved.</p>
		</div>
	</footer>
	</html>

</html>