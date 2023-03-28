<?php
    $conn = mysqli_connect('localhost', 'root', '', 'example1');
    $query = "insert into test(data) values(".$_GET['num'].");";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "성공";
    }else{
        echo "실패";
    }
?>