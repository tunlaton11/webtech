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
    <title>lab 7.1</title>
</head>
<body>
    <form id="showmsg" action="" method="post">
        <label> กรอกสูตรคูณ: </label>
        <input type="text" id="invalue" name="invalue" value="" >
        <input type="submit" id="submit" value="Submit" name='submit'>
    </form>
    <?php
    if (isset($_POST['submit'])) { 
        $number = $_POST['invalue'];
        $v = intval($number);
        echo "<h3>ตารางสูตรคูณแแม่ " . $number. "</h3>".  '<br>';
        for ($i = 1; $i <= 12; $i++) {
            echo $v . " x " . $i . " = " . ($v*$i) . "<hr>";
        } 
    } 
    ?>
</body>
</html>