<?php
  include "session.php";

  $num=$_GET["num"];
  $page=$_GET["page"];

  $con = mysqli_connect("localhost","testman","123456","pallo");
  $sql = "select * from memberboard where num=$num";

  $result = mysqli_query($con,$sql);

  $row = mysqli_fetch_assoc($result);

  $nickname = $row["nickName"]; 
  $subject =  $row["subject"];
  $content =  $row["content"];
  $regist_day = date("Y-m-d (H:i)");
  $file_name = $row["file_name"];

  mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="" href="./css/style_board.css">
  <title>글 수정</title>
  <script>
  function check_input() {
    if (!document.board.subject.value) {
      alert("제목을 입력하세요.!");
      document.board.title.focus();
      return;
    } else if (!document.board.content.value) {
      alert("내용을 입력하세요.!");
      document.board.content.focus();
      return;
    }
    document.board.submit();
  }
  </script>
</head>

<body>
  <h2>회원 게시판 > 글 수정하기</h2>
  <form method="post" action="./modify.php?num=<?=$num?>&page=<?=$page?>" name="board">
    <ul class="board_form">
      <li>
        <span class="col1">이름 : </span>
        <span class="col2"><?=$nickname?></span>
      </li>
      <li>
        <span class="col1">제목 : </span>
        <span class="col2"><input type="text" name="subject" value="<?=$subject?>"></span>
      </li>
      <li>
        <span class="col1">내용 : </span>
        <span class="col2"><textarea name="content"><?=$content?></textarea></span>
      </li>
      <li>
        <span class="col1">첨부파일 : </span>
        <span class="col2"><?=$file_name?></span>
      </li>
    </ul>
    <ul class="buttons">
      <li><button type="button" onclick="check_input()">저장하기</button></li>
      <li><button type="button" onclick="location.href='list.php'">목록보기</button></li>
    </ul>
  </form>
</body>

</html>