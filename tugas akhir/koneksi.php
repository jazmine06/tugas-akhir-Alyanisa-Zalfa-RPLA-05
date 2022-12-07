<?php 
//membuat file koneksi.php 
$host="localhost"; 
$user="root";
$katasandi=""; 
$db="db_lapakwanita"; 
$koneksi_db=mysqli_connect($host,$user,$katasandi,$db); 
$db_koneksi=mysqli_select_db($koneksi_db,$db) 
?>