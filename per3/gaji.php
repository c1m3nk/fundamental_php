<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .pt h2 {
            text-align: center;
            font-size: 50px;
            margin-top: 30px;
            color: #003161;
        }

        .pt h2 span {
            color: #006A67;
        }

        td {
            padding: 1em;
        }

        table {
            box-shadow: 10px 10px 10px rgba(7, 94, 72, 0.5);
            border-collapse: collapse;
            width: 50%;
        }

        .tombol {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>

<body>
    <div class="pt">
        <h2>Cv.Tecno<span>Nusa</span></h2>
    </div>

    <form action="hal2gaji.php" method="post">
        <table border="1">
            <tr>
                <td>NAMA KARYAWAN</td>
                <td>:</td>
                <td>
                    <input type="text" class="form-control" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>DIVISI</td>
                <td>:</td>
                <td>
                    <input type="text" class="form-control" name="divisi" id="divisi">
                </td>
            </tr>
            <tr>
                <td>GAJI</td>
                <td>:</td>
                <td>
                    <input type="number" class="form-control" name="gaji" id="gaji">
                </td>
            </tr>
            <tr>
                <td>APAKAH ANDA PUNYA NPWP</td>
                <td>:</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="npwp" id="npwp-ya" value="Ya">
                        <label class="form-check-label" for="npwp-ya"> YA </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="npwp" id="npwp-tidak" value="Tidak">
                        <label class="form-check-label" for="npwp-tidak"> TIDAK </label>
                    </div>
                </td>
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
