<?php
class C_barang{

    public function tampil() {
        $sql = "SELECT * FROM 'barang' ORDER BY
        id DESC";    
    }
    
    public function tambah($id,$nama_barang,$qty,$harga, $photo) {
        $sql = "INSERT INTO barang VALUES 
        ('$id','$nama','$qty','$harga',' $photo')";
    }
    public function edit($id) {
        $sql = "SELECT * FROM barang WHERE id= '$id'";
        
    }
    public function update($id,$data) {
        // fungsi untuk mengupdate data 
        //tulis logika SQL anda di sini

    }

    }
?>
    
    



    
}