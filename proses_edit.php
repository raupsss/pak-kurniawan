<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $no_hp  = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    // buat query
    $sql = "UPDATE mahasiswa SET nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jurusan='$jurusan', no_hp='$no_hp', email='$email', alamat='$alamat' WHERE nim=$nim";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
    }
}
else if (isset($_POST['batal_perubahan'])) {
    header('Location: index.php');
} else {
    die("Akses dilarang...");
}
