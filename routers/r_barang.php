<?php
include_once '../controllers/C_barang.php';

$barang = new C_barang();

if ($_GET[ 'aksi' ] == 'tambah') {

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    $barang->tambah($id=0,$nama_barang,$stock,$harga,'');


}elseif ($_GET['aksi']  == 'update'){
    
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    $barang->update($id,$nama_barang,$stock,$harga,'');
    

}elseif ($_GET['aksi']  == 'hapus'){
    
    $id = $_GET['id'];

    $barang->delete($id);
}
?>