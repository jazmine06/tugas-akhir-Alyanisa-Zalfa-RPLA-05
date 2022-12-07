<?php
require_once 'koneksi.php'; 
session_start();

$id = $_GET['id_barang'];

storeCart($id);

header('Location: cart.php'); 

function storeCart($id_barang)
{
    global $koneksi_db; 
 
    $barang = getSingleBarang($id_barang);
    $username = $_SESSION['name'];
    $nama_barang = $barang["nama_barang"];
    $foto_barang = $barang["foto_barang"];
    $harga_barang = $barang["harga_barang"];
 
    $query = "INSERT INTO tbl_keranjang (username, nama_barang, foto_barang, jumlah, harga, total) VALUES ('$username','$nama_barang','$foto_barang', 1, '$harga_barang', '$harga_barang')";
 
    return mysqli_query($koneksi_db, $query); 
}

function getSingleBarang($id_barang)
{
    global $koneksi_db; 

    $query = "SELECT * FROM tbl_barang WHERE `id_barang` = '$id_barang'"; 
    $rawResult = mysqli_query($koneksi_db, $query); 
    $result = mysqli_fetch_assoc($rawResult); 

    return $result;
}

