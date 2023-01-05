<?php
// 회원 게시판 단독 실습을 위한 임시 설정
    $userid = "hong";
    $nickname = "홍길동";    

// 11장 로그인 기능과 연동해서 사용할 경우는 주석처리 해제

    session_start();

    if (isset($_SESSION["email"])) 
        $email = $_SESSION["email"];
    else {
        $email = "";
    }
        
    if (isset($_SESSION["nickname"])) 
        $nickname = $_SESSION["nickname"];
    else 
        $nickname = "";          
        
?>