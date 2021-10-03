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
    <title>lab 7.6</title>
</head>
<body>
    <div class="container w-100 p-3">
        <h3 align="center">Tunwongchai's Gallery</h3>
        <div class='row'>
        <?php
            $img = array(
                'https://images.unsplash.com/photo-1629536356035-03599b0fe3ca?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDF8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1629960148071-5611a66d4c1e?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDJ8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1630496674856-f0b63669c590?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1632070557521-1e563920a36b?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60',
                'https://images.unsplash.com/photo-1633093091228-890aebaf1225?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDZ8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60',
                'https://images.unsplash.com/photo-1633093233455-c784d1312ee9?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDd8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60',
                'https://images.unsplash.com/photo-1633097143442-d983e9a7f96c?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDh8aG1lbnZRaFVteE18fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60',
                'https://images.unsplash.com/photo-1626915310573-4823d12cbc96?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE1fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1607868271376-85a983c2ac46?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE5fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1613056370848-9edd9d6e15b5?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDIzfGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1633096613998-42001089ba89?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ5fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1622651605872-e489171bcffa?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI3fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1615377786346-945fbbcd753e?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI2fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1604739870033-65bbf927d75d?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI4fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1613056371283-12f190effb59?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI5fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1620657437503-535410f873b2?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM3fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1620657437503-535410f873b2?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM3fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1620657610439-02fc488a0e27?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQxfGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1620657610052-ccf077b217d0?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQzfGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1620657610325-f4d3ee0965e2?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ0fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
                'https://images.unsplash.com/photo-1620657669541-2637019633c1?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ2fGhtZW52UWhVbXhNfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
            );
            $count = 1;
            for ($i = 0; $i < 4; $i++) {
                echo '<div class="col-3">';
                for ($j = $count; $j < count($img) ; $j++) {
                    if ($count % 5 == 0 && $count != 0) {
                        echo "<img class='img-fluid rounded shadow my-2' src=".$img[$count].">";
                        $count += 1;
                        break;
                    } else {
                        echo "<img class='img-fluid rounded shadow my-2' src=".$img[$count].">";
                        $count += 1;
                    }
                }
                echo '</div>';

            };
        ?>
        </div>
    </div>
    

</body>
</html>