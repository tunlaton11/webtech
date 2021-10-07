<?php
        $url = "http://10.0.15.20/lab8/restapis/currencyrate";    
        $response = file_get_contents($url);
        $result = json_decode($response);
        if(isset($_POST['submit'])){
            $input = $_POST['from'];
            $select = $_POST['fromCur'];
            $convert = $_POST['toCur'];

            $value = round(((int)$input / $result->rates->$select) * $result->rates->$convert, 2);

        } 
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 8.1</title>
</head>
<body>
    
    <h2>Currency Converter</h2>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
        <label for="from">From :</label>
        <select name='fromCur'>
            <?php if(isset($_POST['submit'])){ echo "<option selected>".$select."</option>";}; ?>
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" id="from" name="from" value="<?php if(isset($_POST['submit'])){ echo $input;}; ?>" required/>
        <br>
        <label for="to">To :</label>
        <select name='toCur'>
            <?php if(isset($_POST['submit'])){ echo "<option selected>".$convert."</option>";}; ?>
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" id="to" name="to" value="<?php if(isset($_POST['submit'])){ echo $value;}; ?>">
        <br>
        <button type="submit" name="submit" onclick="show()">Convert</button>
    </form>
   

</body>
</html>