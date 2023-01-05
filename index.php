<!DOCTYPE html>
<html lang="kr">

<head>
  <title>열품타</title>
  <!-- icon link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
  <!-- css link -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- 반응형 웹 관련 link -->
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/style.css" />
  <!-- font link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!-- java script -->
  <script src="./js/main.js" defer></script>
  <script src="https://kit.fontawesome.com/f94f8964ea.js" crossorigin="anonymous"></script>
  <!-- 부트스트랩 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



</head>

<body style="background-color: black;">

  <!-- 헤더 -->
  <nav class="navbar fixed-top">
    <div class="navbar_logo">
      <a href="" class="text-decoration-none text-white">열품타</a>
    </div>

    <ul class="navbar_menu">
      <li><a href="#section1" class="text-decoration-none text-white">Main</a></li>
      <li><a href="#section2" class="text-decoration-none text-white">Timer</a></li>
      <li><a href="#section3" class="text-decoration-none text-white">Planner</a></li>
      <li><a href="#section4" class="text-decoration-none text-white">Group</a></li>
      <li><a href="#section5" class="text-decoration-none text-white">Etc</a></li>
    </ul>

    <ul class="navbar_icons">
      <li>
        <a href="./login.php" style="color: white; text-decoration: none;"><button type="button"
            class="btn btn-danger btn-lg" id="joinBtn" href="">열품타 커뮤니티</button></a>
      </li>
      <li>
        <button type="button" class="btn btn-danger btn-lg" id="liveToastBtn">이벤트</button>
      </li>
      <li>
        <a href="https://play.google.com/store/apps/details?id=com.pallo.passiontimerscoped&hl=ko&gl=US">
          <svg class="kOqhQd" aria-hidden="true" width="40" height="40" viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg">
            <path fill="none" d="M0,0h40v40H0V0z"></path>
            <g>
              <path d="M19.7,19.2L4.3,35.3c0,0,0,0,0,0c0.5,1.7,2.1,3,4,3c0.8,0,1.5-0.2,2.1-0.6l0,0l17.4-9.9L19.7,19.2z"
                fill="#EA4335"></path>
              <path
                d="M35.3,16.4L35.3,16.4l-7.5-4.3l-8.4,7.4l8.5,8.3l7.5-4.2c1.3-0.7,2.2-2.1,2.2-3.6C37.5,18.5,36.6,17.1,35.3,16.4z"
                fill="#FBBC04"></path>
              <path d="M4.3,4.7C4.2,5,4.2,5.4,4.2,5.8v28.5c0,0.4,0,0.7,0.1,1.1l16-15.7L4.3,4.7z" fill="#4285F4"></path>
              <path d="M19.8,20l8-7.9L10.5,2.3C9.9,1.9,9.1,1.7,8.3,1.7c-1.9,0-3.6,1.3-4,3c0,0,0,0,0,0L19.8,20z"
                fill="#34A853"></path>
            </g>
          </svg>
        </a>
      </li>
      <li>
        <a href="https://apps.apple.com/kr/app/%EC%97%B4%ED%92%88%ED%83%80/id1441909643">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
            <path fill="#0091ea" d="M14.1,42h19.8c4.474,0,8.1-3.627,8.1-8.1V27H6v6.9C6,38.373,9.626,42,14.1,42z" />
            <rect width="36" height="11" x="6" y="16" fill="#00b0ff" />
            <path fill="#40c4ff" d="M33.9,6H14.1C9.626,6,6,9.626,6,14.1V16h36v-1.9C42,9.626,38.374,6,33.9,6z" />
            <path fill="#fff"
              d="M22.854,18.943l1.738-2.967l-1.598-2.727c-0.418-0.715-1.337-0.954-2.052-0.536	c-0.715,0.418-0.955,1.337-0.536,2.052L22.854,18.943z" />
            <path fill="#fff"
              d="M26.786,12.714c-0.716-0.419-1.635-0.179-2.052,0.536L16.09,28h3.477l7.754-13.233	C27.74,14.052,27.5,13.133,26.786,12.714z" />
            <path fill="#fff"
              d="M34.521,32.92l-7.611-12.987l-0.763,1.303c-0.444,0.95-0.504,2.024-0.185,3.011l5.972,10.191	c0.279,0.476,0.78,0.741,1.295,0.741c0.257,0,0.519-0.066,0.757-0.206C34.701,34.554,34.94,33.635,34.521,32.92z" />
            <path fill="#fff"
              d="M25.473,27.919l-0.171-0.289c-0.148-0.224-0.312-0.434-0.498-0.621H12.3	c-0.829,0-1.5,0.665-1.5,1.484s0.671,1.484,1.5,1.484h13.394C25.888,29.324,25.835,28.595,25.473,27.919z" />
            <path fill="#fff"
              d="M16.66,32.961c-0.487-0.556-1.19-0.934-2.03-0.959l-0.004,0c-0.317-0.009-0.628,0.026-0.932,0.087	l-0.487,0.831c-0.419,0.715-0.179,1.634,0.536,2.053c0.238,0.14,0.5,0.206,0.757,0.206c0.515,0,1.017-0.266,1.295-0.741	L16.66,32.961z" />
            <path fill="#fff"
              d="M30.196,27.009H35.7c0.829,0,1.5,0.665,1.5,1.484s-0.671,1.484-1.5,1.484h-5.394	C30.112,29.324,30.01,27.196,30.196,27.009z" />
          </svg>
        </a>
      </li>
    </ul>
    <a href="#" class="navbar_toogleBtn">
      <i class="fas fa-bars"></i></a>
  </nav>

  <!-- 토스트 -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <!-- <img src="..." class="rounded me-2" alt="..."> -->
        <strong class="me-auto">마감 임박!</strong>
        <!-- <small></small> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> -->
      </div>
      <div class="toast-body">
        지금 회원가입하시면 프리미엄 서비스를 3개월 무료로 제공해드립니다.
      </div>
    </div>
  </div>

  <!-- 이미지 슬라이드 -->
  <section id="section1">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/banner/stop.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/banner/planner.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/banner/group.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- 타이머 영역 -->
  <section id="section2">
    <div class="timer" style="background-image: url(./img/section/stopwatch_sec.png);">
      <div class="add1">
        <img src="./img/section/add/1.png" alt="">
      </div>
    </div>
  </section>

  <!-- 플래너 영역 -->
  <section id="section3">
    <div class="planner" style="background-image: url(./img/section/planner_sec.png);">
      <div class="add2">
        <img src="./img/section/add/2.png" alt="">
      </div>
    </div>
  </section>

  <!-- 스터디그룹 영역 -->
  <section id="section4">
    <div class="group" style="background-image: url(./img/section/group_sec.png);">
      <div class="add3">
        <img src="./img/section/add/3.png" alt="">
      </div>
    </div>
  </section>


  <!-- 길고 긴 마라톤 영역 -->
  <section id="section5">
    <div class="wrapper">
      <div class="box">
        <div class="info">
          <p>길고 긴 마라톤<br>
            <span>열품타에서 함께 공부하세요</span>
            <!--이부분에 마우스 올리면 밑줄쳐짐-->
          </p>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn mx-auto d-block" data-bs-toggle="modal"
          data-bs-target="#exampleModal" class="modal_btn">
          어플 사용방법
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">어플 사용방법</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <iframe width="450" height="300" src="https://www.youtube.com/embed/WG8dbmGWRt8"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Button trigger modal end-->

        <div class="img_correct" style="margin: auto;">
          <img src="./img/wrapper/1.png" alt="" class="imgs">
          <img src="./img/wrapper/2.png" alt="" class="imgs">
          <img src="./img/wrapper/3.png" alt="" class="imgs">
        </div>
      </div>

    </div>
  </section>

  <!-- 푸터 -->
  <footer>
    <div class="container">
      <span style="font-size: 0.8em;">
        서비스 이용약관 & 개인정보처리방침 <br>
        주식회사 팔로(Pallo) | 대표: 백운천 | 주소: 서울특별시 강남구 테헤란로 53길 16 예안빌딩, 4층 <br>
        사업자등록번호 202-86-01986 | 통신판매업신고 2022-서울강남-00652 | 연락처: 070-4571-4656
      </span>
    </div>
  </footer>


  <!-- firebase 웹호스팅 -->
  <script type="module">
  // Import the functions you need from the SDKs you need
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import {
    getAnalytics
  } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCL3MIZMG8HyzHJtl4l98vwhDJ2KJcw4CM",
    authDomain: "landingpage-5cb02.firebaseapp.com",
    projectId: "landingpage-5cb02",
    storageBucket: "landingpage-5cb02.appspot.com",
    messagingSenderId: "340946884060",
    appId: "1:340946884060:web:ebc663a1a51137c6f1ab19",
    measurementId: "G-662HL2T3VQ"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  </script>


  <!-- 부트스트랩 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>