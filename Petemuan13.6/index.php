<?php 
// untuk memanggil file dari tempat lain bisa pakai code require atau include
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand">DAFTAR MAHASISWA</a>
</nav>

<div class="container" style="margin-top:35px">
  <div class="jumbotron" style="background-color: rgb(165, 170, 165);">
    <div class="col-sm-13">
      <h2 style="font-family: 'Times New Roman'"><center>MAHASISWA</center></h2>
      <hr style="width: 90%; background-color: rgb(9, 9, 10); height: 4px;"> 
    </br>
    <a href="tambah.php" style="margin-left:60px" class="btn btn-secondary">Tambah data mahasiswa</a>
    <br><br>
    
    <form action="" method="post">
        <input type="search" style="margin-left:60px" class="form-control-col-6" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="keyword" size="40" autofocus autocomplete="off">
        <button type="submit" class="btn btn-secondary btn-sm bt n-block"name="cari">Cari!</button>
    </form>

      <p><table style="margin-left:60px; font-family: 'Times New Roman'" border="2" cellpadding="18" cellspacing="0">
         
            <tr>
                <th>NO.</th>
                <th>AKSI</th>
                <th>GAMBAR</th>
                <th>NRP</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>JURUSAN</th>
            </tr>
        

    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a type="button" class="btn btn-secondary btn-sm btn-block" href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                <a type="button" class="btn btn-secondary btn-sm btn-block" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data tersebut?');">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table></p>
        <hr style="width: 90%; background-color: rgb(9, 9, 10); height: 4px;">
      
    </div>
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>By Ratih Tarina Utami Putri 2230803104</p>
</div>

</body>
</html>
