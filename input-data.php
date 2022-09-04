<?php
//Di file ini digunakan untuk melakukan Query Insert Data Ke Database
require 'koneksi-database.php';

//validasi Input : 
// Fungsinya agar memastikan data yang diinputkan sesuai dengan yang diharapkan.


if(isset($_POST['Submit'])) {

    $nama_barang =  $_POST['nama_barang'];
    $jenis_barang =  $_POST['jenis_barang'];
    $expired =  $_POST['expired'];
    $harga_barang =  $_POST['harga_barang'];
    $jumlah_barang =  $_POST['jumlah_barang'];
            
    // Insert user data into table

    $result = mysqli_query($mysqli, "INSERT INTO barang (nama_barang,jenis_barang,expired,harga_barang,jumlah_barang) VALUES('$nama_barang','$jenis_barang','$expired','$harga_barang','$jumlah_barang')");

   
    // Show message when user added
    echo "User added successfully. <a href='index.php'>View Data Barang</a>";

}


// Query input data ke database 



?>