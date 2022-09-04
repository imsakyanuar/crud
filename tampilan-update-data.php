
<?php
 /* di fungsi ini, untuk menampilkan /
 mengambil ( GET) data dari tabel barang seusai dengan id yang di tunjuk
*/

// 1.  menyambungkan ke database
require 'koneksi-database.php';

// 2. mengambil id dari url 
$id = $_GET['id'];

// 3. Query ke database dengan id yang diambil tadi 
$dataBarang = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");

while($barang = mysqli_fetch_array($dataBarang))
{
    $id_barang = $barang['id'];
    $nama_barang =  $barang['nama_barang'];
    $jenis_barang =  $barang['jenis_barang'];
    $expired =  $barang['expired'];
    $harga_barang =  $barang['harga_barang'];
    $jumlah_barang =  $barang['jumlah_barang'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Barang</li>
        </ol>
    </nav>

   <form action="proses-update-data.php" method="post">
    <input name="id" value="<?php echo $id_barang ?>" hidden>
    <div class="form-group">
        <label>Nama Barang</label>
        <input class="form-control" type="text" name="nama_barang" value="<?php echo $nama_barang ?>">
    </div>
    <div class="form-group">
        <label>Jenis Barang</label>
        <input class="form-control" type="text" name="jenis_barang" value="<?php echo $jenis_barang ?>">
    </div>
    <div class="form-group">
        <label>Expired</label>
        <input class="form-control" type="date" name="expired" value="<?php echo $expired ?>">
    </div>
    <div class="form-group">
        <label>Harga Barang</label>
        <input class="form-control" type="number" name="harga_barang" value="<?php echo $harga_barang ?>">
    </div>
    <div class="form-group">
        <label>Jumlah Barang</label>
        <input class="form-control" type="number" name="jumlah_barang" value="<?php echo $jumlah_barang ?>">
    </div>
    <button type="submit" name="updates" class="btn btn-primary">Simpan</button>
   </form>
</div>
    



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>