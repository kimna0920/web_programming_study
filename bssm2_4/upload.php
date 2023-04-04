<?php
    $did = $_GET['did'];
    $temp = $_GET['temp'];
    $humi = $_GET['humi'];
    $date = date("Y-m-d H:i:s", time());

    $conn = mysqli_connect('localhost', 'root', '', 'bssm2_4');
    $query = "insert into sensor(did,temp,humi,date)"

    $result = mysqli_query($conn, $query);

    if($result){
        echo "성공";
    }else{
        echo "실패";
    }
?>