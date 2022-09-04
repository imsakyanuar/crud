<?php
// melakukan koneksi ke database
include_once("koneksi-database.php");
 
// cek sudah submit atau belum update
if(isset($_POST['updates']))
{	
    $id = $_POST['id'];
    $nama_barang =  $_POST['nama_barang'];
    $jenis_barang =  $_POST['jenis_barang'];
    $expired =  $_POST['expired'];
    $harga_barang =  $_POST['harga_barang'];
    $jumlah_barang =  $_POST['jumlah_barang'];
        
    // update data barang
    $result = mysqli_query($mysqli, 
        "UPDATE barang SET 
        nama_barang='$nama_barang',
        jenis_barang='$jenis_barang',
        expired='$expired',
        harga_barang='$harga_barang',
        jumlah_barang='$jumlah_barang'
        WHERE id=$id"

    );
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>