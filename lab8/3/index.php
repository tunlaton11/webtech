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
    <title>lab 8.3</title>
</head>
<body>
    <div class="container-fluid p-5">
        <div class="card-columns">
            <?php
                $url = "http://10.0.15.20/lab8/restapis/movies90";    
                $response = file_get_contents($url);
                $result = json_decode($response);
                $index = 1;
                foreach ($result as $data) {
                    echo "<div class='card p-4 m-2 rounded shadow'>";
                    // echo "<div class='card h-200'><div class='card-body'>";
                    echo "<b>".$index.". ".$data->title." (".$data->year.")"."</b>";
                    echo "<br>Cast: "."<ul>";
                    foreach ($data->cast as $cast) {
                        echo "<li><button type='button' class='btn btn-outline-success btn-sm'>".$cast."</button></li>";
                    }
                    echo "</ul>";
                    echo "Genres: "."<ul>";
                    foreach ($data->genres as $gen) {
                        echo "<li><button type='button' class='btn btn-outline-primary btn-sm'>".$gen."</button></li>";
                    }
                    echo "</ul>";
                    // echo "</div></div>";
                    echo "</div>";
                    $index++;
                }
            ?>
        </div>
    </div>
</body>
</html>