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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>lab 8.5</title>
</head>
<body>
<div class="container-fluid p-5">
        <div class="card-columns">
            <?php
                $url = "http://10.0.15.20/lab8/restapis/10countries";    
                $response = file_get_contents($url);
                $result = json_decode($response);

                foreach ($result as $data) {
                    echo "<div class='card p-3 shadow-sm rounded'>";
                    echo "<div class='row'>";
                    echo "<div class='col-8'>";
                    echo "<p class='card-text'>";
                    echo "Name: <b>".$data->name."</b>"."<br>";
                    echo "Capital: ".$data->capital."<br>";
                    echo "Population: ".$data->population."<br>";
                    echo "Region: ".$data->region."<br>";
                    echo "Location: ".$data->latlng[0]." ".$data->latlng[1]."<br>";
                    echo "Borders: ";
                    foreach ($data->borders as $bor) {
                        echo $bor." ";
                    }
                    echo "</p>";
                    echo "</div>";
                    echo "<div class='col-4'>";
                    echo "<img class='img-fluid shadow-sm' src='".$data->flag."'>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>