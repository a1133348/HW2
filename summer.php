<html>
<head>
<title>夏令營報名表單</title>
</head>
<body bgcolor=papayawhip>

<form action="resultsum.php" method="POST">

<center><B><I><font size=80 color=black>夏令營報名表單</font></I></B></center>
<hr>
<br>

<center>
姓名:
<input type="text" name="nName" placeholder="Your name">
<br><br>

電話:
<input type="text" name="nNumber" placeholder="Your number">
<br><br>

性別:
男<input type="radio" name="mGender" value="男">
女<input type="radio" name="mGender" value="女">
<br><br>

生日:
<input type="date" name="mDate">
<br><br>

年紀:
<input type="number" name="mNumber" min="1" max="100">
<br><br>

Email:
<input type="email" name="mEmail">
<br><br>

你來自哪個地區?
<select name="ndistrict">
<option value="北部">北部</option>
<option value="中部">中部</option>
<option value="南部">南部</option>
<option value="東部">東部</option>
<option value="離島">離島</option>
</select>
<br><br>

有興趣的項目:<br>
第一階段:籃球<input type="checkbox" name="mInterest[]" value="籃球"><br>
第二階段:棒球<input type="checkbox" name="mInterest[]" value="棒球"><br>
第三階段:羽球<input type="checkbox" name="mInterest[]" value="羽球"><br>
<br>

病史:<br>
有<input type="radio" name="msick" value="有">
無<input type="radio" name="msick" value="無">
<br><br>

備註:<br>
<textarea name="comment" rows="5" cols="40"></textarea>
<br><br>

<input type="submit" value="送出">
<input type="reset" value="重填">
</center>

</form>

</body>
</html>
