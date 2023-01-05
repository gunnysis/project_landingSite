<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_board.css">
  <title>목록보기</title>
</head>

<body>
  <h2>회원 게시판 > 목록보기</h2>
  <ul class="board_list">
    <li>
      <span class="col1">번호</span>
      <span class="col2">제목</span>
      <span class="col3">글쓴이</span>
      <span class="col4">첨부</span>
      <span class="col5">등록일</span>
    </li>
    <?php
    include 'session.php'; // 세션 처리

    if(isset($_GET["page"])) 
      $page = $_GET["page"];
    else  
      $page = 1;

    $con = mysqli_connect("localhost","testman","123456","pallo");
    $sql = "select * from memberboard order by num desc";
    $result = mysqli_query($con,$sql); 

    $total_record = mysqli_num_rows($result); // 전체 글 수 

    $scale = 4; // 한 페이지당 글 수

    if($total_record % $scale == 0) // 전체 글 수에서 한 페이지당 글 수를 나눈 나머지가 0 일때 
      $total_page=floor($total_record/$scale); //  전체 페이지는 둘이 나눈 결과를 정수로 내림함
    else
      $total_page=floor($total_record/$scale)+1; // 그렇지 않다면 페이지를 한 개 추가함

    $start = (intval($page)-1) * $scale; // start는 시작 레코드
    $number = $total_record - $start; // number는 글번호 매김

    for($i=$start; $i < $start+$scale && $i < $total_record; $i++){
      mysqli_data_seek($result,$i);
      $row = mysqli_fetch_assoc($result);
      
      $num = $row["num"];
      $email = $row["email"];
      $nickname = $row["nickName"];
      $subject = $row["subject"];
      $regist_day = $row["regist_day"];
      if($row["file_name"])
        $file_image = "<img src='./file.png'>";
      else
        $file_image = " ";
?>
    <li><span class="col1">
        <?=$number?>
      </span>
      <span class="col2">
        <a href="view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
      <span class="col3"><?=$nickname?></span>
      <span class="col4"><?=$file_image?></span>
      <span class="col5"><?=$regist_day?></span>
    </li>
    <?php 
    $number--;
    }
    mysqli_close($con);
    ?>
  </ul>

  <ul class="page_num">
    <?php
    if($total_page>=2 && $page>=2) {
      $new_page = $page-1;
      echo "<li><a href='list.php?page=$new_page'>◀︎ 이전</a></li>";
    }
    else 
      echo "<li>&nbsp;</li>";
    
    for ($i=1; $i<=$total_page;$i++){
      if($page == $i)
        echo "<li><b> $i </b></li>";
      else
        echo "<li><a href='list.php?page=$i'> $i </a></li>";
    }
    if($total_page>=2 && $page != $total_page) {
      $new_page = $page +1;
      echo "<li><a href='list.php?page=$new_page'>다음 ▶︎</a></li>";
    }
    else 
      echo "<li>&nbsp;</li>";
    ?>
  </ul>
  <ul class="buttons">
    <li><button onclick="location.href='list.php?page=<?=$page?>'">목록</button></li>
    <li><button onclick="location.href='write.php'">글쓰기</button></li>
  </ul>
</body>

</html>