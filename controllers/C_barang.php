<?php

include_once 'C_koneksi.php';

class C_barang{

    public function tampil() {
        
        $conn = new C_koneksi();

        $sql = "SELECT * FROM barang ORDER BY id DESC";
        
        $query = mysqli_query($conn->conn(), $sql);

        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
    }
    return $hasil;
    }
    
    public function tambah($id, $nama_barang, $stock, $harga, $photo) {
        $conn = new C_koneksi ();
        
        $sql = "INSERT INTO barang VALUES('$id','$nama_barang','$stock','$harga','$photo')";
        $query = mysqli_query($conn->conn(), $sql);
    if ($query){
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='../views/V_barang.php'</script>";
        //"data berhasil ditambahkan ke tabel barang";
    }else {
        echo "data tidak berhasil ditambahkan ke tabel barang";
    }
    }

    public function edit($id) {

        $conn = new C_koneksi();
        
        $sql = "SELECT * FROM barang WHERE id = '$id'";
        
        $query = mysqli_query($conn->conn(), $sql);

        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
        }

        return $hasil;
    }

    public function update($id, $nama_barang, $stock, $harga, $photo) {
        
        $conn = new C_koneksi ();
        
        $sql = "UPDATE barang SET nama_barang = '$nama_barang', stock = '$stock' , harga = '$harga' , photo = '$photo' WHERE id = '$id'";

        $query = mysqli_query($conn->conn(), $sql);

        if ($query){
        echo "<script>alert('Data Berhasil Di Ubah');window.location='../views/V_barang.php'</script>";
        //echo "data berhasil diupdate ke tabel barang";
        }else {
        echo "data tidak berhasil diupdate ke tabel barang";
        }
    }

     function delete($id){

        $conn = new C_koneksi();

        $sql = "DELETE FROM barang WHERE id = '$id'";

        mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_barang.php");

    }
    
}

?>
    
    



    
