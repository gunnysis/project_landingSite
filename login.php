<!doctype html>
<html lang="en">
	<head>
		<title>Login 08</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="css/style_login.css">
		<script>
			function input(){
				document.login.submit();
			}
		</script>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">열품타 커뮤니티 로그인</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
						<div class="login-wrap p-4 p-md-5">
					<div class="d-flex align-items-center justify-content-center">
						<img src="https://img1.daumcdn.net/thumb/R1280x0.fjpg/?fname=http://t1.daumcdn.net/brunch/service/user/8fWs/image/w4rtXixPtYOml6zF6V6ZgSE1taw" alt="" class="h-25 w-25">
					</div>
					<h5 class="text-center mb-4">공부, 혼자 하지 말고 <br>열품타에서 함께 하세요!</h5>
					<form action="login_check.php" class="login-form" name="login" method="post">
						<div class="form-group">
							<input type="text" class="form-control rounded-left" name="email" placeholder="Email" required>
						</div>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
						</div>
						<div class="form-group d-md-flex">
							<div class="w-50 text-md-left">
								<a href="./signUp.php">회원가입</a>
							</div>
							<div class="w-50 text-md-right">
								<a href="#">비밀번호 찾기</a>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-warning rounded submit p-3 px-5" onclick="input()">로그인</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main2.js"></script>

	</body>
</html>

