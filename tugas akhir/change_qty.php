<?php
require_once 'koneksi.php';

$condition = $_GET['condition'];
$id_keranjang = $_GET['id_keranjang'];

qty($id_keranjang, $condition);

header('Location: cart.php'); 

function qty($id_keranjang, $condition)
{
    global $koneksi_db; 

    $jumlah = (int) getSingleCart($id_keranjang)['jumlah'];
    if ($condition == 'minus') {
        $newJumlah = $jumlah-1;
        $query = "UPDATE tbl_keranjang SET jumlah = '$newJumlah' WHERE id_keranjang='$id_keranjang'";
    } else {
        $newJumlah = $jumlah+1;
        $query = "UPDATE tbl_keranjang SET jumlah = '$newJumlah' WHERE id_keranjang='$id_keranjang'";
    }
    $rawResult = mysqli_query($koneksi_db, $query); 

    return true;
}

function getSingleCart($id_keranjang)
{
    global $koneksi_db; 

    $query = "SELECT * FROM tbl_keranjang WHERE `id_keranjang` = '$id_keranjang'"; 
    $rawResult = mysqli_query($koneksi_db, $query); 
    $result = mysqli_fetch_assoc($rawResult); 

    return $result;
}