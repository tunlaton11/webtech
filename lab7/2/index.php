<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>lab 7.2</title>
</head>
<body>
    <h2>April 2021</h2>
    <?php
    echo '<table>';
    echo '<tr>' . '<th>Su</th>'.'<th>Mo</th>'.'<th>Tu</th>'.'<th>We</th>'.'<th>Th</th>'.'<th>Fr</th>'.'<th>Sa</th>'.'</tr>';
    $count = 1;
    for ($i = 0; $i < 5; $i++) {
        echo '<tr>';
        for ($j = 0; $j <7; $j++) {
            if (4 < $count && $count < 35) {
                echo '<td>'.($count -4).'</td>';
            }
            else {
                echo '<td>'." ".'</td>';
            }
            $count += 1;
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>