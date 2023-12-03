<?php 
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];


//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

    //cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Input Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand">DAFTAR MAHASISWA</a>
</nav>

<div class="container" style="margin-top:35px">
  <div class="jumbotron" style="background-color: rgb(165, 170, 165);">
    <div class="col-sm-13">
      <h2 style="font-family: 'Times New Roman'"><center>PROFILE</center></h2>
      <hr style="width: 90%; background-color: rgb(9, 9, 10); height: 4px;"> 
      </br>

      <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
      <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
      <p><table style="margin-left:60px; font-family: 'Times New Roman'">
            <tr>
                <td>NRP</td>
                <td>:</td>
                <td><input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>" style="background-color: rgb(181, 186, 181); border-color: black; width:400px;" class="form-control"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>" style="background-color: rgb(181, 186, 181); border-color: black; width:400px;" class="form-control"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td>:</td>
                <td><input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>" style="background-color: rgb(181, 186, 181); border-color: black; width:400px;" class="form-control"></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>" style="background-color: rgb(181, 186, 181); border-color: black; width:400px;" class="form-control"></td>
            </tr>
            <tr>
                <td>GAMBAR</td>
                <td>:</td>
                <td><img src="img/<?= $mhs['gambar']; ?>" width="40"><br><input type="file" name="gambar" id="gambar" ></td>
            </tr>
            
        </table></p>
        <button type="submit" name="submit" style="margin-left:60px" class="btn btn-secondary">UBAH</button>
        </form>
              
        
        <hr style="width: 90%; background-color: rgb(9, 9, 10); height: 4px;">
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>By Ratih Tarina Utami Putri 2230803104</p>
</div>

</body>
</html>