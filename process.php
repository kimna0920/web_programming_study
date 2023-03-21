<?php
    header('Content-type: text/html; charset=utf-8');

    include "dbconn.php";
    include "createSalt.php";

    date_default_timezone_set('Asia/Seoul');

    $getName = $_POST['name'];
    $getAge = $_POST['age'];
    $getGender = $_POST['gender'];
    $getHeight = $_POST['height'];

    $date = date('Y-m-d H:i:s', time());

    $sql = "SELECT * FROM client WHERE cl_date='$date'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) > 0){
        echo "<script>alert('잠시후 다시 시도해주세요.'); history.back();</script>";
    }
    else{
        $sql = "INSERT INTO client(cl_name, cl_age, cl_gender, cl_height, cl_date) VALUES('$getName','$getAge','$getGender','$getHeight', '$date')";
        $query = mysqli_query($conn, $sql);
        "<script> loction.href='input_form.php';</script>";
    }  
?>