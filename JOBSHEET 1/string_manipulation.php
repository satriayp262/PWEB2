<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $x="Selamat belajar PHP!";
    echo $x . "<br>";
    echo strtoupper($x). "<br>";
    echo strtolower($x). "<br>";
    echo substr($x, 0, 7);
    ?> 
</body>
</html>