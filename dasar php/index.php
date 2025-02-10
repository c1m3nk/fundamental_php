<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // awal php

    $cuan = 100000;
    echo "duwek ku kari sakmene " .number_format($cuan,0,',','.')."<br/>";

    // materi konstanta

    define ("PHI", 3.14);
    echo "luas lingkaran dengan jari jari 7 adalah <br/>" .PHI*7*7;

    // percabangan satu kondisi

    $bil = 25 ;
    if ($bil % 5 == 0) {
        echo "bilangan $bil adalah kelipatan 5 ";
    }
     
?>

</body>
</html>