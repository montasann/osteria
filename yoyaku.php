<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>予約フォーム</title>
	<link href="message.css" rel="stylesheet" type="text/css">
	<link href="nav.css" rel="stylesheet" type="text/css">
	<link href="sub_layout.css" rel="stylesheet" type="text/css">
	<link href="jquery.datetimepicker.css" rel="stylesheet" type="text/css">
	<script src="jquery.js"></script>
	<script src="ajaxzip3.js"></script>
  <script src="jquery.datetimepicker.js"></script>

</head>
<body>
<div id="container">
	<?php include "nav.html"; ?>
	<div id="contents">
	<h1>予約フォーム</h1>
	<h2>予約フォーム</h2>
	
	<form action="mailto:makapo-oekaki@gmail.com"
	method='post' enctype="text/plain" name="frm">
	 ■予約日時<br>
		<input type="text" name="yyk_dhms" id="yyk_dhms" placeholder="予約日時" size="10" autocomplete="off" onchange="checkForm();"><br>
		<input type="radio" name="tako" id="runch" onclick="dp_runch()">
<label for="runch">ランチ</label>
<input type="radio" name="tako" id="diner" onclick="dp_dinner()">
<label for="dinner">ディナー</label>
<div class="none" id="time_run">
<select>
 <option>希望の時間</option>
 <option>11:00</option>
 <option>12:00</option>
 <option>13:00</option>
 </select>
 <select name="cose_runch">
 <option>ご希望のコース</option>
 <option value="0">美食の歓びコース&yen;8,800</option>
 <option value="1">至福の牛餐会&yen;10,500</option> 
</select>
</div>
 

<div class="none" id="time_din">
<select>
 <option>希望の時間</option>
 <option>16:00</option>
 <option>17:00</option>
 <option>18:00</option>
 <option>19:00</option>
 </select>
  <select name="cose_diner">
 <option>ご希望のコース</option>
 <option value="2">シェフ大槻スペシャリテ&yen;12,000</option>
<option value="3">至福の牛餐会はこちら&yen;9,800</option> 
</select>
</div>
<p><input type="number" min="1" max="12" name="num" id="num" onchange="numChk()">名様</p>
<input type="button" id="total_chk" value="合計する">
<input type="num" name="total_plice" id="total_plice" readonly="readonly">

		<p>■電話番号<em>(ハイフン「-」も入力してください。）</em><br>
		<input required="required" type="text" name="tell" size="20" onchange="tellChk()">
<br>
		

		<p>■メールアドレス<br>
		<input type="text" name='email' size="30" onchange="mailChk()">
		</p>
		
		<p><label>郵便番号</label> 〒
<input type="text" name="yuubin3" maxlength="3" required="required"> -
<input type="text" name="yuubin4" maxlength="4" onchange="AjaxZip3.zip2addr('yuubin3','yuubin4','ken','si','ikou');" required="required">
<p>都道府県 
<input type="text" name="ken" maxlength="4" required="required">
<p>市町村区 
<input type="text" name="si" maxlength="5" required="required">
<p>以降の住所
<input type="text" name="ikou" maxlength="100" required="required">
<p>番地など
<input type="text" name="add" maxlength="100" required="required">
<br><br>
		
		■お名前<br>
		<input type="text" name='name1' size="30" required="required">
		<br>
		■お名前（カタカナ）<br>
		<input type="text" name='namekana' size="30" onchange="kanaChk()" required="required">
		<br>
		
		■備考欄（他になにかあればどうぞ。）<br>
		<textarea name="message" rows="6" cols="50"></textarea>
		<br>
		<input type="submit"  onclick="return addChk();" value="送信" />
		<input type="reset" value="リセット">
	</form>	
</div><!-- end-contents -->
</div><!-- end-container -->


<script>
$('#yyk_dhms').datetimepicker({
		format:'Y/m/d',
		lang:'ja',
		minDate : '-1970/01/01',
		maxDate : '+1970/01/31',
		timepicker:false,
		allowTimes : ['12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00']
		//step : 30
	}); 
	
</script>
<script src="form.js"></script>
</body>
</html>