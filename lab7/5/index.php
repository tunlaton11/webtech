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
    <title>lab 7.5</title>
</head>
<body>
    <div class="container w-75 p-5">
    <?php
    echo "<table class='table table-bordered'>";
    

    for ($i = 0; $i < 13; $i++) {
        echo "<tr>";
        if ($i == 0) {
            for ($j = 0; $j < 13; $j++) {
                if ($j == 0) {
                    echo '<td class="bg-warning">'. 'X' . '</td>';
                }else {
                    echo '<td class="bg-warning">'. $j . '</td>';
                }
            }
        echo "</tr>";
        echo "<tr>";
        }else {
            for ($k = 0; $k < 13; $k++) {
                if ($k == 0) {
                    echo '<td class="bg-warning">'. ($k+$i) . '</td>';
                }else {
                    echo '<td>'. ($k * $i) . '</td>';
                }
            }
            echo "</tr>";
        }
        
    };

    echo "</table>";
    ?>
    </div>
</body>
</html>