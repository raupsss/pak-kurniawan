
<!DOCTYPE html>
<html>
 <head>
 <title>Formulir Edit Siswa | SMK Coding</title>
 </head>
 <body>
     <header>
         <h3>Formulir Edit Siswa</h3>
     </header>
     <form action="proses_edit.php" method="POST">
         <fieldset>
             <input type="hidden" name="nim" value="<?php echo $siswa['nim'] ?>" />
             <p>
             <label for="nama_lengkap">Nama: </label>
             <input type="text" name="nama_lengkap" placeholder="nama lengkap" />
             </p>
             <p>
             <label for="jurusan">Jurusan: </label>
             <input type="text" name="jurusan" placeholder="jurusan" />
             </p>
             <p>
             <label for="tanggal_lahir">Tanggal lahir: </label>
             <input type="date" name="tanggal_lahir" placeholder="jurusan"/>
             </p>
             <button type="submit" name="simpan" value="simpan">Simpan Edit</button>
         </fieldset>
     </form>
 </body>
</html>
