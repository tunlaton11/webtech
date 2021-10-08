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
    <title>lab 8.4</title>
</head>
<body>
    <div class="container w-100 p-3">
        <?php
            $url = "https://www.themealdb.com/api/json/v1/1/random.php";    
            $response = file_get_contents($url);
            $result = json_decode($response);

            $img = $result->meals[0]->strMealThumb;
            $name = $result->meals[0]->strMeal;
            $ins = $result->meals[0]->strInstructions;
            $link = $result->meals[0]->strSource;
            echo "<div class='card rounded shadow' style='width: 40rem;'>";  
            echo "<img class='card-img-top' src=".$img.">";
            echo "<div class='card-body'>";
            echo "<h4 class='card-title'>".$name."</h4>";
            echo "<hr>";
            echo "<p class='card-text text'>".$ins."</p>";
            echo "<a href='.' class='btn btn-secondary' style='margin-right: 10px'><i class='bi bi-arrow-repeat'></i></a>";
            echo "<a href='".$link."' class='btn btn-success' target='_blank'>Learn more</a>";
            echo "</div>";
            echo "</div>";

            
        ?>
    </div>
</body>
</html>