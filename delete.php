<?php
// Conect ke db
require 'koneksi-database.php';

// mengambil id untuk dihapus
$id = $_GET['id'];
 
// menghapus data sesuai dengan id. di tabel barang
$result = mysqli_query($mysqli, "DELETE FROM barang WHERE id=$id");

 
// mengarahkan ke main
header("Location:index.php");

?>