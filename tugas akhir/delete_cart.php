<?php
require 'koneksi.php';

function delete($id_keranjang){
   
    global $koneksi_db;
}
$id_keranjang=$_GET['id_keranjang'];
$query = "DELETE FROM tbl_keranjang WHERE id_keranjang = '$id_keranjang'";
$hasil = mysqli_query($koneksi_db, $query);
if ($hasil) {
    ?>
    <script language="javascript">document.location.href="cart.php";</script>
<?php
} else {
    echo 'gagal hapus';
}
?>
