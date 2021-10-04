<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php 
    //komen satu baris
    # komen satu baris
    /* komen
    banyak 
    baris */
    $name = 'Ahmad';
    echo "<h2>Hello $name </h2>"; //output

    $umur = 20;
    $nokp = '011016090025';

    $x = 20;
    $x *= 10;

    echo $x;

    $y = 10;
    echo ++$y;

    $ibubapa = 'ibu'; //Ibu / bapa / kedua-duanya
    $yatim = 500;
    $piatu = 1000;
    
    if ($status == 'ibu' xor $ibubapa = 'bapa') {
        echo 'Anak yatim , dapat $yatim';
    }
 ?>

 <p>
     <?php
     $bandar = 'Arau';
     $baru = 'Bandar: ';
     for ($x = 0; $x < strlen($bandar); $x++){
         $baru .= $bandar[$x] . '-';
     }
     echo $baru;
?>
</body>
</html>