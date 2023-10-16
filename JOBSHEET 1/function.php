<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <form method="post" action="">
        Masukan Panjang persegi : <input type="text" name="panjang"><br><br>
        Masukan Lebar persegi : <input type="text" name="lebar"><br><br>
        Masukan Jari-Jari lingkaran : <input type="text" name="jari"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $p=0;
    $l=0;
    $r=0;
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