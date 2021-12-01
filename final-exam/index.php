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
    <script src='script.js'></script>
    <title>63070224</title>
</head>
<body>
    <div class="container my-5 shadow p-3">
        <?php
        
            $url = "http://161.246.38.86/final-restapi/places";    
            $response = file_get_contents($url);
            $result = json_decode($response);
        ?>
        <div class='content' align='center'>
                <label for="lat">Choose a tourist attraction: </label>
                <select name="lo" id="lo">
                <option value="" selected disabled hidden>Choose here</option>
                <?php
                    foreach ($result->places as $data) {
                        $coor = $data->location[0]->latitude.",".$data->location[0]->longitude;
                        echo "<option value='$coor'>".$data->name."</option>";
                    }
                ?>
                </select>

                <button onclick="locationCo()">แสดงแผนที่</button>
        </div>
        <div class='content'>
            <iframe id="map" width='100%' height='500px' '
                src=" https://maps.google.com/maps?q=&t=&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen>
            </iframe>
        </div>
        
    </div>
</body>
</html>