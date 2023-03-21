<?php
include "dbconn.php";

$date = $_GET['date'];

$sql = "DELETE FROM client WHERE cl_date='{$date}'";
$query = mysqli_query($conn, $sql);

if($query){
    echo"<script>alert('삭제되었습니다.'); location.href='data_table.php';</script>";
}else{
    echo"<script>alert('삭제되지 않았습니다.'); location.href='data_table.php';</script>";
    exit;
}
?>