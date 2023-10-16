<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <h1>Pengecekan Bilangan</h1>
    <form method="post">
        Masukan Bilangan : <input type="text" name="bilangan">
        <input type="submit" value="cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $x = $_POST["bilangan"];
    
        if ($x > 0) {
            echo "$x adalah Bilangan positif";}
        elseif($x < 0){
            echo "$x adalah Bilangan Negatif";}
        else {
            echo "$x adalah Bilangan Nol";
    }
    }
    ?>
</body>
</html>