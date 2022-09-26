<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
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
 $sql = "INSERT INTO mahasiswa (nim, nama_lengkap,tempat_lahir, tanggal_lahir, jurusan, no_hp, email, alamat) VALUE ('$nim', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jurusan', '$no_hp', '$email', '$alamat')";
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