<?php
    $email=$_POST['email'];
    $password=$_POST['password'];

    $con=mysqli_connect("localhost","testman","123456","pallo");

    $sql="select * from member where email='$email'";
    $result = mysqli_query($con,$sql);

    $num_match = mysqli_num_rows($result);

    if(!$num_match){
        echo "<script>
            alert('등록되지 않은 이메일입니다.')
            history.go(-1)
        </script>";
    }
    else{
        $row = mysqli_fetch_assoc($result);
        $db_pass = $row["pass"];
        mysqli_close($con);

        if($password != $db_pass){
            echo "<script>
                alert('비밀번호가 다릅니다.')
                history.go(-1)
            </script>";
            exit;
        }
        else{
            session_start();
            $_SESSION["email"] = $row["email"];
            $_SESSION["nickname"] = $row["nickName"];
            echo "<script>
                location.href='list.php';
            </script>";
        }
    }
?>