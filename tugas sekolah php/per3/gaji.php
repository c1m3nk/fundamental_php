<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaji karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
   
   form{
    display: flex;
    justify-content: center;
    align-items:center;
    margin-top:30px;
   }
        
        td{
            padding: 1em;
        }

        .tombol{

            display: absolute;
            text-align: end;
        }
</style>

<body>

 <form action="hal2gaji.php" method="post">
 <table border=1 style="border-colaapse : collapse; width : 50% "> 

<tr>
    <td>NAMA KARYAWAN</td>
    <td>:</td>
    <td>
        <input type="text" class="form-control" name="nama" id="">
    </td>
</tr>
<tr>
    <td>DIVISI</td>
    <td>:</td>
    <td>
        <input type="text" class="form-control" name="divisi" id=""> 
    </td>
</tr>
<tr>
    <td>GAJI</td>
    <td>:</td>
    <td>
        <input type="number" class="form-control" name="gaji" id="">
    </td>
</tr>
<tr>
    <td>APAKAH ANDA PUNYA NPWP</td>
    <td>:</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="npwp" id="flexRadioDefault1" value="Ya">
        <label class="form-check-label" for="flexRadioDefault1"> YA
        </label>
    </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="npwp" id="flexRadioDefault1" value="Tidak">
        <label class="form-check-label" for="flexRadioDefault1">TIDAK
        </label>
    </div>
</tr>

    <tr>
        <td> </td>
        <td> </td>
        <td class="tombol">
        <button type="submit" class="btn btn-outline-dark" name="cek">KIRIM</button>
        </td>
    </tr>

    </table>
 </form>
        
    
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      
</body>
</html>

