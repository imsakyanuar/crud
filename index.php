<?php
// menyambungkan ke database
require 'koneksi-database.php';
 
// Mengambil Data dari database
$ambilDataBarang = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY harga_barang DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
    .custom th, .custom td {
        text-align: center;
    }
</style>
</head>
 
<body>
    
 <div class="container">
    <a class="btn btn-primary mt-5 mb-5" href="tampilan-tambah-data.php">Menambah Data Barang</a>
        <table class="table custom">
            <thead>
                <tr>
                    <th>Nama Barang Test</th>
                    <th>Jenis Barang</th> 
                    <th>Expired</th> 
                    <th>Harga Barang</th> 
                    <th>Jumlah Barang</th> 
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach($ambilDataBarang as $detailBarang ){ ?>
                <tr>
                    <td><?php echo $detailBarang['nama_barang'] ?></td>
                    <td><?php echo $detailBarang['jenis_barang'] ?></td>
                    <td><?php echo $detailBarang['expired'] ?></td>
                    <td><?php echo $detailBarang['harga_barang'] ?></td>
                    <td><?php echo $detailBarang['jumlah_barang'] ?></td>
                    <td>
                        <a class="btn btn-success" href='tampilan-update-data.php?id=<?php echo $detailBarang['id'] ?>'>Update</a>
                        <a class="btn btn-danger" href='delete.php?id=<?php echo $detailBarang['id'] ?>'>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
 </div>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>