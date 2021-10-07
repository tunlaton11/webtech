<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "http://10.0.15.20/lab8/restapis/superheroes";    
        $response = file_get_contents($url);
        $result = json_decode($response);
    
        echo "Squad Name : $result->squadName<br>";
        echo "Home Town : $result->homeTown<br>";    
        foreach ($result->members as $hero) {  
            echo "&emsp; Name : $hero->name<br>";
            echo "&emsp; Age : $hero->age<br>";


            foreach ($hero->powers as $pwr) { 
                echo "&emsp; Powers : $pwr<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>