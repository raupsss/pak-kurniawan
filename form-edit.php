<?php
include('config.php');

if (!isset($_GET['nim'])) {
    header('Location: index.php');
}

$nim = $_GET['nim'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang di edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>

<body>
    <h1>Formulir Edit</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="nim" value="<?php echo $siswa['nim'] ?>">
            <p>
                <label for="nama_lengkap">Nama Lengkap :</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $siswa['nama_lengkap'] ?>">
            </p>
            <p>
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $siswa['tempat_lahir'] ?>">
            </p>
            <p>
                <label for="tanggal_lahir">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>">
            </p>
            <p>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $siswa['jurusan'] ?>">
            </p>
            <p>
                <label for="no_hp">Nomer Handphone :</label>
                <input type="number" name="no_hp" id="no_hp" value="<?php echo $siswa['no_hp'] ?>">
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="<?php echo $siswa['email'] ?>">
            </p>
            <button type="submit" name="simpan">Simpan Perubahan</button>
        </fieldset>
    </form>
</body>

</html>