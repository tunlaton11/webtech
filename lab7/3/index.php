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
    <title>lab 7.3</title>
</head>
<body>
<div class="container w-50 p-3 ">
        <h2>กรอกแบบฟอร์ม</h2>
        <form role="form" name='myForm' action="" method="post">
            <div class='form-group'>
                <label for="n-id">หมายเลขบัตรประชาชน: </label>
                <input type="text" class="form-control" name="n-id" value='123456789xxxx'>
            </div>
            <div class='form-row'>
                <div class='col'>
                    <label for="fname">ชื่อ: </label>
                    <input type="text" class="form-control" name="fname" value='Peter'>
                </div>
                <div class='col'>
                    <label for="lname">นามสกุล: </label>
                    <input type="text" class="form-control" name="lname" value='Parker'>
                </div>
            </div>
            <div class='form-group'>
                <label for="address">ที่อยู่: </label>
                <textarea class="form-control" name="address" rows="2">114 soi.13 999 st.Ladkrabang</textarea>
            </div>
            <div class='form-row'>
                <div class='col'>
                    <label for="amp">อำเภอ/เขต: </label>
                    <input type="text" class="form-control" name="amp" value='Ladkrabang'>
                </div>
                <div class='col'>
                    <label for="pro">จังหวัด: </label>
                    <input type="text" class="form-control" name="pro" value='Bangkok'>
                </div>
            </div>
            <div class='form-row'>
                <div class='col'>
                    <label for="post">รหัสไปรษณีย์: </label>
                    <input type="text" class="form-control" name="post" value='10520'>
                </div>
                <div class='col'>
                    <label for="tel">เบอร์โทรศัพท์: </label>
                    <input type="text" class="form-control" name="tel" value='06406566xx'>
                </div>
            </div>
            <div class='form-group'>
                <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
            </div>
        </form>
        

    <?php
    if (isset($_POST['submit'])) { 
        $id = $_POST['n-id'];
        $fname= $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $amp = $_POST['amp'];
        $pro = $_POST['pro'];
        $post = $_POST['post'];
        $tel = $_POST['tel'];
        $data = array($id, $fname, $lname, $address, $amp, $pro, $post, $tel);

        for ($i=0; $i < count($data); $i++) {
            if (strlen($data[$i]) < 5) {
                echo '<p style="color:red;margin:0px">' . $data[$i] . '</p>';
            } else {
                echo $data[$i] . "<br>";
            }
            
        }
    } 
    ?>
</div> 
</body>
</html>