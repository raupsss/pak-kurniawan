<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 // ambil data dari formulir
 $nim = $_POST['nim'];
 $nama_lengkap = $_POST['nama_lengkap'];
 $jurusan = $_POST['jurusan'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 // buat query
 $sql = "INSERT INTO mahasiswa (nim, nama_lengkap, jurusan,tanggal_lahir) VALUE ('$nim', '$nama_lengkap', '$jurusan', '$tanggal_lahir')";
 $query = mysqli_query($koneksi, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
    header('Location: index.php?status=sukses');
 } else {
    header('Location: index.php?status=gagal');
 }
} else {
 die("Akses dilarang...");
}
?>