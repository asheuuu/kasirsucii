<?php
include_once '../controllers/C_barang.php';

$barang = new C_barang();

if ($_GET[ 'aksi' ] == 'tambah') {

    $id = $_POST['id'];
    $nama = $_POST['nama_barang'];
    $qty = $_POST['stock'];
    $harga = $_POST['harga'];

    $barang->tambah($id=0,$nama,$qty,$harga,'');


}elseif ($_GET['aksi']  == 'update'){
    #code...
}elseif ($_GET['aksi']  == 'hapus'){
    #code...
}
?>