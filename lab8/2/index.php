<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>lab 8.2</title>
</head>
<body>
    <div class="container w-75 p-5">
    <?php
    
        $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces";    
        $response = file_get_contents($url);
        $result = json_decode($response);
        echo "<h2>"."ข้อมูลวันที่: " . $result[0]->txn_date. "</h2>";
        echo "<table class='table mt-5'>";
        echo "<tr><th>ลำดับ</th><th>จังหวัด</th><th>ผู้ติดเชื้อ</th><th>เสียชีวิต</th><th>ยอดผู้ป่วยสะสม</th></tr>";
        $index = 1;
        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>".$index."</td>";
            echo "<td>".$data->province."</td>";
            echo "<td>".$data->new_case."</td>";
            echo "<td>".$data->new_death."</td>";
            echo "<td>".$data->total_case."</td>";
            echo "</tr>";
            $index ++;
        }
        echo "</table>";
    ?>
    </div>
</body>
</html>