<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pra daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

body{
    display: flex;
    justify-content: center;
    align-items:center;
    margin-top:30px;
    margin-bottom:30px;
    
   }

td{
    padding: 1em;
}
    
    </style>

</head>
<body>

    <?php
    if(isset($_POST["submit"]))
    ?>

    <table border=1 style="border-colaapse : collapse; width : 50% "> 

    <tr>
        <td>NISN</td>
        <td>:</td>
        <td>
            <?= $_POST["nisn"] ?>
        </td>
    </tr>

    <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td>
            <?= $_POST["nama"] ?>
        </td>
    </tr>

    <tr>
        <td>TEMPAT LAHIR</td>
        <td>:</td>
        <td>
            <?= $_POST["tempatlahir"] ?>
        </td>
    </tr>
    
    <tr>
        <td>TANGGAL LAHIR</td>
        <td>:</td>
        <td>
            <?= $_POST["tanggal"] ?>
        </td>
    </tr>

    <tr>
        <td>GENDER</td>
        <td>:</td>
        <td>
            <?= $_POST["gender"] ?>
        </td>
    </tr>

    <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td>
            <?= $_POST["agama"] ?>
        </td>
    </tr>

    <tr>
        <td>ALAMAT RUMAH</td>
        <td>:</td>
        <td>
            <?= $_POST["alamatrumah"] ?>
        </td>
    </tr>

    <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td>
            <?= $_POST["asalsekolah"] ?>
        </td>
    </tr>

    <tr>
        <td>JURUSAN 1</td>
        <td>:</td>
        <td>
            <?= $_POST["pilihjurusan1"] ?>
        </td>
    </tr>
    
    <tr>
        <td>JURUSAN 2</td>
        <td>:</td>
        <td>
            <?= $_POST["pilihjurusan2"] ?>
        </td>
    </tr>

    <tr>
        <td>EKSKUL</td>

        <td>:</td>
            <td><?=implode(",",$_POST["extra"]); ?>
        </td>
    </tr>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>