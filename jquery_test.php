<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function test1(){
        $('#mytable').append('<tr><td>1</td><td>2</td><td>3</td><td>4</td></tr>');
    }
    function test2(){
        if(('#mytable > tbody tr').length > 10){
            $('#mytable > tbody tr:last').remove();
        }else{
            $('#mytable').prepend('<tr><td>5</td><td>6</td><td>7</td><td>8</td></tr>');
        }
    }
    function test3(){
        $('#mytable > tbody').empty();
    }
    function test4(){
        console.log($('#mytable > tbody tr').length);
    }
    function test5(){
        $('#mytable > tbody tr:last').remove();
    }
</script>

<button onclick="test1()">테스트1</button>
<button onclick="test2()">테스트2</button>
<button onclick="test3()">삭제</button>
<button onclick="test4()">현재갯수</button>
<button onclick="test5()">제일마지막1개삭제</button>

<table id="mytable" border=1 width=500>
    <thead>
        <tr>
            <th>번호</th>
            <th>가스</th>
            <th>조도</th>
            <th>시간</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
    </tbody>
</table>