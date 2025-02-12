<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hal2gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    form{
    display: flex;
    justify-content: center;
    align-items:center;
    margin-top:50px;
   }

   table {
        
        box-shadow: 0px 0px 10px 10px rgba(7, 81, 94, 0.5);
    }
        
    td{
         padding: 1em;
    }

</style>
<body>
     <form action="hal2gaji.php" method="post">
            <table border="1" style="border-collapse : collapse; width : 50%;" >
        <?php if (isset($_POST['cek'])) {

            $gajiBulanan = floatval($_POST['gaji']);
            $npwp = $_POST['npwp'];
            $gajitahunan = $gajiBulanan * 12;
            $potonganpajak = 0;

            if ($gajitahunan > 54000000) {
                if ($npwp == "Ya") {
                    $potonganpajak = $gajitahunan * 0.15;
                }else {
                    $potonganpajak = $gajitahunan * 0.20;
                }
            }

            $gajiBersihBulanan = ($gajitahunan - $potonganpajak) /12;
            $potonganpajakbulanan = $potonganpajak /12;
            $gajikotorbulanan = $gajitahunan /12;
            
        } ?>
                <tr>
                    <td>NAMA KARYAWAN</td>
                    <td>:</td>
                    <td><?= $_POST["nama"]?></td>
                </tr>
                <tr>
                    <td>DIVISI</td>
                    <td>:</td>
                    <td><?= $_POST["divisi"]?></td>
                </tr> 
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td>
                    <?= $_POST["npwp"]?>
                    </td>
                </tr>
                <tr>
                    <td>GAJI KOTOR PERTAHUN</td>
                    <td>:</td>
                    <td>Rp.
                    <?= number_format($gajitahunan,0,',','.')?>
                    </td>
                </tr>
                
                <tr>
                    <td>POTONGAN PAJAK </td>
                    <td>:</td>
                    <td>Rp.<?= number_format($potonganpajak,0,',','.')?></td>
                </tr>
                <tr>
                    <td>GAJI BERSIH PERBULAN</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($gajiBersihBulanan,0,',','.')?></td>
                </tr>
            </table>
        </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>