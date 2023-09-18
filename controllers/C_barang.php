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
        
        $sql = "INSERT INTO barang VALUES('$id','$nama_barang','$stock','$harga',' $photo')";
        $query = mysqli_query($conn->conn(), $sql);
    if ($query){
        echo "data berhasil ditambahkan ke tabel barang";
    }else {
        echo "data tidak berhasil ditambahkan ke tabel barang";
    }
  }
    public function edit($id) {

        $conn = new C_koneksi();
        
        $sql = "SELECT * FROM barang WHERE id= '$id'";
        
        $query = mysqli_query($conn->conn(), $sql);

        while ($q= mysqli_fetch_object($query)) {

        $hasil[]= $q;
        }

    return $hasil;
}
    
    }
     function delete(){
        $sql= "DELETE FROM barang WHERE id = 'id'";

     }
    
?>
    
    



    
