<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="showmsg" action="" method="post">
        <input type="text" id="invalue" name="invalue" value="" >
        <input type="submit" id="submit" value="Submit" name='submit'>
    </form>
    <?php
    if (isset($_POST['submit'])) { 
        $number = $_POST['invalue'];
        $v = intval($number);
        for ($i = 2; $i <= 12; $i++) {
            echo $v . "<br>";
        } 
    } 
    ?>
</body>
</html>