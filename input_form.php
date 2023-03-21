<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>입력</title>
</head>
<body>
    <div class="wrap">
       <h1>입력</h1>
        <form class="input_form" action="process.php" method="post">
            <div class="input_form">
                <label for="name">이름</label>
                    <input type="text" name="name" id="name" placeholder="이름를 입력해주세요">
            </div>
            <div class="input_form">
                <label for="age">나이</label>
                    <input type="text" name="age" id="age" placeholder="나이를 입력해주세요">
            </div>
            <div class="input_form">
                <label for="gender">성별</label>
                    <input type="text" name="gender" id="gender" placeholder="성별을 입력해주세요">
            </div>
            <div class="input_form">
                <label for="height">키</label>
                    <input type="text" name="height" id="height" placeholder="키를 입력해주세요">
            </div>
            <div class="btn_box">
                <input type="submit" value="확인">
                <input type="reset" value="취소">
            </div>
        </form>
    </div>
</body>
</html>