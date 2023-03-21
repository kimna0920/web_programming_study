<?php
    include "dbconn.php";
    session_start();

    $sql = "SELECT * FROM client";
    $query = mysqli_query($conn, $sql);
    $trData = "";
    while($data = mysqli_fetch_array($query)){
        $getName = $data['cl_name'];
        $getAge = $data['cl_age'];
        $getGender = $data['cl_gender'];
        $getHeight = $data['cl_height'];
        $getDate = $data['cl_date'];
        $trData = $trData."
                <tr>
                    <td>$getName</td>
                    <td>$getAge</td>
                    <td>$getGender</td>
                    <td>$getHeight</td>
                    <td>$getDate</td>
                    <td>
                        <a href=\"process_delete.php?id={$getName}\">삭제</a>    
                    </td>
                </tr>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>데이터정보</title>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <h1>데이터 관리</h1>
        </div>
        <div class="list">
            <table>
                <tr>
                    <td>이름</td>
                    <td>나이</td>
                    <td>성별</td>
                    <td>키</td>
                    <td>입력날짜</td>
                </tr>
                <?php echo $trData; ?>
            </table>
            <div class="btn_box">
               <a href="index.php">홈으로</a>
           </div>
        </div>
    </div>
</body>
</html>