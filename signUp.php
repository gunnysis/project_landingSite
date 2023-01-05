<!DOCTYPE html>
<html>

<head>
  <title>Creative Colorlib SignUp Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript">
  addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
  </script>
  <!-- Custom Theme files -->
  <link href="css/style_signUp.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- //web font -->
  <script>
  function checkInput() {
    if (!document.member.email.value) {
      alert("이메일을 입력히세요!");
      document.member.email.focus();
      return;
    } else if (!document.member.password.value) {
      alert("비밀번호를 입력하세요.!");
      document.member.password.focus();
      return;
    } else if (document.member.password.value.length < 8) {
      alert("비밀번호를 8글자 이상 입력하세요.");
      document.member.password.focus();
      document.member.password.select();
      return;
    } else if (!document.member.nickname.value) {
      alert("닉네임를 입력하세요.!");
      document.member.nickname.focus();
      return;
    } else if (!document.member.job.value) {
      alert("직업를 입력하세요.!");
      document.member.job.focus();
      return;
    }
    if (document.member.password.value != document.member.password_confirm.value) {
      alert("비밀번호가 일치하지 않습니다.!");
      document.member.password.focus();
      document.member.password.select();
      return;
    }
    document.member.submit();
  }
  </script>
</head>

<body>
  <div class="main-w3layouts wrapper">
    <h1>회원가입</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="insert_signUp.php" method="post" name="member">
          <input class="text email" type="email" name="email" placeholder="이메일" required="">
          <input class="text" type="password" name="password" id="pw" placeholder="비밀번호" required="">
          <input class="text" type="password" name="password_confirm" placeholder="비밀번호 확인" required="">
          <input class="text" type="text" name="nickname" placeholder="닉네임" required="">
          <input class="text" type="text" name="job" placeholder="직업" required="">
          <button type="button" onclick="checkInput()">회원가입</button>
        </form>
      </div>
    </div>

  </div>
</body>

</html>