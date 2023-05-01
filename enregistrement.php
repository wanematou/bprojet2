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
    $conn = new mysqli("localhost","root","","simplon2023" );
    mysqli_query(   $conn, "insert into simplonnien(nom,prénom,date_naissance) values('vebama','wanematou','15/08/1999')");

    ?>
</body>
</html>