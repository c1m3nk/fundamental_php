<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugasfrom</title>
</head>
<body>

    <form action="hal2form.php" method="post">

    <fieldset>

    <legend><h2>FORMULIR PENDAFTARAN</h2></legend>

    <p>
        <label>NISN    :
        <input type="text" name="nisn" placeholder="nisn anda"></label>
    </p>  
    <p>
        <label>NAMA LENGKAP    : 
        <input type="text" name="nama" placeholder="nama lengkap"></label>
    </p>
    <p>
        <label>TEMPAT LAHIR    :
        <input type="text" name="tempatlahir" placeholder="tempat lahir"></label>
    </p> 
    <p>
        <label>TANGGAL LAHIR  :
        <input type="date" name="tanggal"></label>
    </p>
    <p>
        <label>GENDER    :
        <input type="radio" name="gender" value="laki laki">laki laki
        <input type="radio" name="gender" value="perempuan">perempuan
    </label>
    </p>
    <p>
        <label>AGAMA :</label>
            <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Khonghucu">Khonghucu</option>
            </select>
    </p>
    <p>
        <p>ALAMAT RUMAH :</p>
        <textarea name="alamatrumah" placeholder="alamat rumah"></textarea>
    </p>
    <p>
        <label>ASAL SEKOLAH : </label>
        <input type="text" name="asalsekolah" placeholder="asal sekolah">
    </p>
    <p>
        <label >PILIH JURUSAN 1 : </label>
        <select name="pilihjurusan1">
        <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
        <option value="DKV">DESAIN KOMUNIKASI VISUAL</option>
        <option value="TJKT">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
        <option value="SP">SENI PERTUNJUKAN</option>
        <option value="PH">PERHOTELAN</option>
        <option value="MPLB">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
        <option value="BDP">BROADCASTING & PERFILMAN</option>
        <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
        <option value="PM">PEMASARAN</option>
        <option value="KL">KULINER</option>
    </select>
    </p>
    <p>
        <label >PILIH JURUSAN 2 : </label>
        <select name="pilihjurusan2">
        <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
        <option value="DKV">DESAIN KOMUNIKASI VISUAL</option>
        <option value="TJKT">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
        <option value="SP">SENI PERTUNJUKAN</option>
        <option value="PH">PERHOTELAN</option>
        <option value="MPLB">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
        <option value="BDP">BROADCASTING & PERFILMAN</option>
        <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
        <option value="PM">PEMASARAN</option>
        <option value="KL">KULINER</option>
        </select>
    </p>
    <label for="">
        pilih extra yang diminati
    </label>
    <input type="checkbox" name="extra"  value="Pecinta Alam">Pecinta Alam
    <input type="checkbox" name="extra" value="Dewan Ambalan">Dewan Ambalan
    <input type="checkbox" name="extra" value="OSIS">OSIS 
    <input type="checkbox" name="extra" value="Gerakan Disiplin Sekolah">Gerakan Disiplin Sekolah
    <input type="checkbox" name="extra" value="Laskar Hijau">Laskar Hijau 
    <input type="checkbox" name="extra" value=PMR>PMR
    <input type="checkbox" name="extra" value="Remaja Masjid">Remaja Masjid
    <input type="checkbox" name="extra" value="Teater Kusuma">Teater Kusuma
    <input type="checkbox" name="extra" value="Voli">Voli
    <input type="checkbox" name="extra" value="Basket">Basket
    <input type="checkbox" name="extra" value="Futsal">Futsal
    <input type="checkbox" name="extra" value="Paskibra">Paskibra
    <input type="checkbox" name="extra" value="englishclub">englishclub
    </p>
    <p>
        <input type="submit" name="submit" value="Daftar">
    </p>

    </fieldset>
    </form>
</body>
</html>