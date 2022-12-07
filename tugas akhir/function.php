<?php 
require_once 'koneksi.php'; 
 
function register($data) 
{ 
    global $koneksi_db; 
 
    $username = $data['username'];
    $email = $data['email']; 
    $katasandi = $data['katasandi'];
 
    $passwordHash = password_hash($katasandi, PASSWORD_DEFAULT); 
 
    $query = "INSERT INTO tbl_user ( username, email, katasandi, level) VALUES ( 
        '$username','$email', '$passwordHash', 'user')"; 
 
    return mysqli_query($koneksi_db, $query); 
} 
 
function login($data) 
{ 
    global $koneksi_db; 
 
    $username = $data['username']; 
    $password = $data['password']; 
 
    $querySelect = "SELECT * FROM tbl_user WHERE username = '$username'"; 
 
    $rawSelectResult = mysqli_query($koneksi_db, $querySelect); 
    $selectResult = mysqli_fetch_assoc($rawSelectResult); 
    if (is_null($selectResult)) { 
        return null; 
    } 
 
    $passwordHash = $selectResult['katasandi']; 
 
    if (password_verify($password, $passwordHash)) { 
        return true; 
    } else { 
        return false; 
    } 
}

function getUserData($username = null, $id = null) 
{ 
    global $koneksi_db; 
 
    $query = is_null($username) ? "SELECT * FROM tbl_user WHERE id_user = $id" : "SELECT * FROM tbl_user WHERE username = '$username'"; 
    $rawResult = mysqli_query($koneksi_db, $query); 
    $result = mysqli_fetch_assoc($rawResult); 
    return $result; 
 
    // $userLevel = ['level']; 
}

function getBarang()
{
    global $koneksi_db; 

    $query = "SELECT * FROM tbl_barang"; 
    $rawResult = mysqli_query($koneksi_db, $query); 
    $result = mysqli_fetch_all($rawResult); 
    return $result;
}