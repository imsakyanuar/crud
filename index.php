<?php
// menyambungkan ke database
require 'koneksi-database.php';
 
// Mengambil Data dari database
$ambilDataBarang = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY harga_barang DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Menambah Data Barang</a><br/><br/>
 
    <table width='80%' border=1>

    <tr>
        <th>Nama Barang</th>
        <th>Jenis Barang</th> 
        <th>Expired</th> 
        <th>Harga Barang</th> 
        <th>Jumlah Barang</th> 
        <th>Aksi</th> 
    
    </tr>
    <?php  
    
    while($barang = mysqli_fetch_array($ambilDataBarang)) {         
        echo "<tr>";
        echo "<td>".$barang['nama_barang']."</td>";
        echo "<td>".$barang['jenis_barang']."</td>";
        echo "<td>".$barang['expired']."</td>";    
        echo "<td>".$barang['harga_barang']."</td>";    
        echo "<td>".$barang['jumlah_barang']."</td>";    
        echo "<td><a href='edit.php?id=$barang[id]'>Edit</a> | <a href='delete.php?id=$barang[id]'>Delete</a></td></tr>";        
    }
    
    ?>
    </table>
</body>
</html>