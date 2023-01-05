<?php
    $email=$_POST["email"];
    $password=$_POST["password"];
    $nickname=$_POST["nickname"];
    $job=$_POST["job"];

    $con=mysqli_connect("localhost","testman","123456","pallo");

    $sql = "insert into member(email,pass,nickName,job)";
    $sql .= "values('$email','$password','$nickname','$job')";

    mysqli_query($con,$sql);
    mysqli_close($con);

    echo "<script>
        location.href='login.php';
    </script>";


?>