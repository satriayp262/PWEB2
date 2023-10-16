<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan fOR bilangan genap 1 hingga 10 <br/>";
    for($x=2; $x<=10; $x+=2)
        echo "$x <br/>";
    echo "<br/> Perulangan WHILE bilangan genap 1 hingga 10 <br/>";
    $y=1;
    while($y<=10){
        echo "$y <br/>";
        $y+=2;
    }
    echo "<br/> Perulangan DO WHILE bilangan prima 1 hingga 20 <br/>";
    $angka=2;
    do {
        $prima = true;
        for($z=2; $z<= $angka / 2; $z++) {
            if($angka % $z == 0){
                $prima= false;
                break;
            }
        }
        if($prima) {
            echo $angka . "<br/>";
        }
        $angka++;
    }while($angka <= 20);
    ?>
</body>
</html>