<?php
  include "session.php";

  $num=$_GET["num"];
  $page=$_GET["page"];

  $con = mysqli_connect("localhost","testman","123456","pallo");
  $sql = "delete from memberboard where num='$num'";

  $result = mysqli_query($con,$sql);

  mysqli_close($con);

  echo "<script>location.href='list.php?page=$page'</script>";

?>