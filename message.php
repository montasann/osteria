<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>messeage</title>
	<link href="message.css" rel="stylesheet" type="text/css">
		<link href="nav.css" rel="stylesheet" type="text/css">
	<link href="sub_layout.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
	<?php include "nav.html"; ?>
	<div id="contents">
	<h1>Messeage</h1>
	<h2>ご意見ご感想をお書きください。</h2>
	<form action="mailto:makapo-oekaki@gmail.com"
	method='post' enctype="text/plain">
		■名前<br>
		<input type="text" name='name1' size="30">
		<br>
		■メールアドレス<br>
		<input type="text" name='email' size="30">
		<br>
		■メッセージをお願いします<br>
		<textarea name="message" rows="6" cols="50"></textarea>
		<br>
		<input type="submit" value="送信">
		<input type="reset" value="リセット">
	</form>	
</div><!-- end-contents -->
</div><!-- end-container -->
</body>
</html>