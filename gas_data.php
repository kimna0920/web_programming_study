//2402 김나영
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        //로드가 완벽하게 됨
        setInterval(function() {
            $.ajax({
                url: "gas_date.php",
                method: "GET",
                dataType: "text",
                success: function(data) {
                var mydata = JSON.parse(data);

                chart.data.datasets[0].data = mydata.temp;
                chart.data.datasets[1].data = mydata.humi;
                chart.data.labels = mydata.label;
                chart.update();
                // $("#result").html(data);
                }
            })
        }, 1000);
    });
</script>
<?php
    include 'db_info.php';
    $conn = mysqli_connect('localhost',$db_id, $db_pw,$db_name);
    $query = "select * from gas order by num desc limit 1;";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    
    if($count == 1){
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    }
?>