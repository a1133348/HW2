<?php
$fID="a1133348";
$fPWD="a1133348";

if(isset($_POST["uID"]) && isset($_POST["uPWD"])){
    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];
    if($fID==$uID && $fPWD==$uPWD){
        header("Location: summer.php");
    }else{
        echo "失敗";
        header("Refresh:2;url=loginsum.php");
    }
}
?>
