<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l){
        return $p * $l;
    }
    function lingkaran($r){
        return 3.14 * $r * $r;
    }
    echo "luas Persegi panjang = " . persegi_panjang(5,2) . "<br/>";
    echo "luas Lingkaran = " . lingkaran(7) . "<br/>";
    ?>
</body>
</html>