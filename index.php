<?php
    $num1 = 10;
    $num2 = 20;
            //0,1,2,3,4,5
    $num3 = [1,2,3,4,5,6];
    $name4 = ['name'=>'춘식','age' => 20];
    echo $num2+$num1;
    echo $num2.$num1;
    myFunction();
    function myFunction(){
        echo "집에 갈래요오!";
        return 100;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <a href="input_form.php">정보입력</a>
    <a href="data_table.php">정보테이블</a>
</body>
</html>