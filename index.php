<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	<!--
	body {
	background-color: #87CEFA;
	}
	-->
	</style>
<title>文字置き換えツール（置き換えくん）</title>
</hard>
<body>
<?php
?>
<!--AD-->
<!-- i-mobile for SmartPhone client script -->
	<script type="text/javascript">
		imobile_tag_ver = "0.3"; 
		imobile_pid = "44033"; 
		imobile_asid = "637810"; 
		imobile_type = "overlay";
	</script>
	<script type="text/javascript" src="https://spad.i-mobile.co.jp/script/adssp.js?20110215"></script>
<!--AD End-->
<h2>文字置き換えツール（置き換えくん）</h2>
<p><form action='index.php' method='POST'>
文字の置き換えを行います。<br />
before<br />
<input type="text" name="before" size="30" maxlength="20"><br />
after<br />
<input type="text" name="after" size="30" maxlength="20"><br />
置き換える文字<br />
<textarea name='text' rows='13' cols='45' ><?=$text?></textarea><br />
  <input type='submit' value='送信' />
</form>
<b>変換結果が下に表示されます。</b><br />
<!--AD-->
<!--AD End-->
<?php
$text = htmlentities($_POST["text"]);
$before = htmlentities($_POST["before"]);
$after = htmlentities($_POST["after"]);
$text = str_replace($before, $after, $text);

echo "<div><textarea name=\"a\" rows=\"26= \" cols=\"45\" value=\"/\" />",$text,"</textarea></div>";
?><br />
<br />
ユーザーから送信された情報は、サーバー側で2進数に変換されます。<br />
変換された情報は、ユーザーに送信され、ユーザー側の端末で復元されます。<br />
<br />
Last Update 2016/07/07<br />
Var. 2.1.2・Bug fix and changing the system<br />
<br />
©日本ティーケーアイ/つきこう<br />

</body>
</html>












<!---->
