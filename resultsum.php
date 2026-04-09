<html>
<head>
<title>報名結果</title>
</head>
<body bgcolor=papayawhip>
<center>
<B><I><font size=80 color=black>報名輸入結果</font></I></B>
<hr><br>

<div style="text-align: left; display: inline-block; border: 1px solid black; padding: 10px; background: white;">
<?php
echo "姓名：" . $_POST["nName"] . "<br>";
echo "電話：" . $_POST["nNumber"] . "<br>";
echo "性別：" . (isset($_POST["mGender"]) ? $_POST["mGender"] : "未填") . "<br>";
echo "生日：" . $_POST["mDate"] . "<br>";
echo "年紀：" . $_POST["mNumber"] . "<br>";
echo "Email：" . $_POST["mEmail"] . "<br>";
echo "地區：" . $_POST["ndistrict"] . "<br>";

echo "興趣：";
if(isset($_POST["mInterest"])){
    foreach($_POST["mInterest"] as $value){
        echo $value . " ";
    }
} else {
    echo "無";
}
echo "<br>";

echo "病史：" . (isset($_POST["msick"]) ? $_POST["msick"] : "未填") . "<br>";
echo "備註：" . nl2br($_POST["comment"]) . "<br>";
?>
</div>
<br><br>
<a href="loginsum.php">返回登入頁面</a>
</center>
</body>
</html>
