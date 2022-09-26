<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];    
    $jurusan = $_POST['jurusan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
 // buat query
    $sql = "UPDATE mahasiswa SET nama_lengkap='$nama_lengkap, jurusan='$jurusan', tanggal_lahir='$tanggal_lahir' WHERE nim=$nim";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location: index.php');
    } else {
        die("gagal edit");
    }
 
} else {
 die("Akses dilarang...");
}
?>