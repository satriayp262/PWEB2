<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <form method="post" action="">
        Masukan Panjang persegi : <input type="number" name="panjang"><br>
        Masukan Lebar persegi : <input type="number" name="lebar"><br>
        Masukan Jari-Jari lingkaran : <input type="number" name="jari"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $l = (int)$_POST["lebar"];
    $p = (int)$_POST["panjang"];
    $r = (int)$_POST["jari"];
    }
    function luasPersegi($p, $l){
        return $p * $l;
    }
    function luasLingkaran($r){
        return  3.14 * $r * $r;
    }
    echo "Luas Persegi = ",luasPersegi($p, $l);
    echo "</br>";
    echo "Luas Lingkaran = ",luasLingkaran($r);
    ?>
</body>
</html>