<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1 style="border-collapse : collapse; width : 50%;">

<form action="" method="post" class="form">
        <table>
            <tr>
                <td>Baris </td>
                <td>: </td>
                <td><input type="number" name="baris" id="" /></td>
            </tr>
            <tr>
                <td>Kolom </td>
                <td>: </td>
                <td><input type="number" name="kolom" id="" /></td>
            </tr>
            <tr>
            <td>
                <button type="submit" name="jalan">GASS!!</button>
            </td>
            </tr>
        </table>
    </form>


    <?php
        if(isset($_POST["jalan"])){
        $baris = $_POST["baris"] ;
        $kolom = $_POST["kolom"] ;  
    ?>

    <table border=1 style="width:50%;">
        <?php
            for($i=1; $i <= $baris; $i++) {
        ?>
        <tr>
            <?php
                for($y = 1; $y <= $kolom; $y++) {
            ?>
            <td>
             baris = <?= $i ?> ; kolom = <?= $y ?> 
            </td>
            <?php } ?>
        </tr>

            <?php } ?>

        </table>

    <?php }?>


        
                    
</table>
</body>
</html>