<?php
include "session.php";

$num = $_GET["num"];
$page = $_GET["page"];

$subject = $_POST["subject"];
$content = $_POST["content"];
$regist_day = date("Y-m-d (H:i)");

$con = mysqli_connect("localhost","testman","123456","pallo");

$sql = "update memberboard set subject='$subject',content='$content',regist_day='$regist_day' where num=$num";

mysqli_query($con,$sql);
mysqli_close($con);

echo "<script>location.href='list.php?page=$page'</script>";
?>