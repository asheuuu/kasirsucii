<?php
include_once '../controllers/C_barang.php';

$barang = new C_barang();

if ($_GET[ 'aksi' ] == 'tambah') {

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    // unggah gambar/photo
    //ektensi yang diperbolehkan saat upload photo
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');

    //mengambil nama photo
    $nama_photo = $_FILES['photo']['name'];

    // Fungsi explode() digunakan untuk memisahkan string menjadi array berdasarkan karakter yang ditentukan. disini,string yang dipisahkan adalah $nama_photo,yang kemungkinan berisi nama file gambar dengan ekstensi.
    $x = explode('.', $nama_photo);

    // Setelah sting dipisahkan dengan explode(),kita menggunakan fungsi end() untuk mendapatkan elemen terakhir dari array yg dihasilkan(yaitu,ekstensi file).kemudian, fungsi strtolower()digunakan untuk mengonversi ekstensi kehuruf kecil,untuk menghindari masalah sensitifitas huruf besar/kecil dlm pemrosesan lebih lanjut.
    $ekstensi = strtolower(end($x));

    //mendapatkan ukuran photo yg di update
    $ukuran = $_FILES['photo']['size'];

    //untuk mendapatkan temporary file yang di upload
    $file_tmp = $_FILES['photo']['tmp_name'];

    // Ini adalah awal dari kondisi.Kode ini memeriksa apakah ekstensi file yang diunggah ada dlam array $ekstensi_diperbolehkan. in_array()adalah fungsi PHP yg digunakan untuk memeriksa apakah elemen tertentu ada dalm array atau tidak. Jika ekstensi file yg diunggah ditemukn dlm array $ekstensi_diperbolehkan,maka kondisi ini akan bernilai true.
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        
        if ($ukuran < 1044070) {
            
            move_uploaded_file($file_tmp, '../assets/img/' . $nama_photo);


            $query = $barang->tambah($id=0,$nama_barang,$stock,$harga,$nama_photo);

        }else{
            echo "UKURAN GAMBAR TERLALU BESAR";
        }
    }else{
        echo "EKSTENSI TIDAK DIPERBOLEHKAN";
    }

    

}elseif ($_GET['aksi']  == 'update'){
    
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    $ekstensi_diperbolehkan = array('png','jpg','jpeg');

    //mengambil nama photo
    $nama_photo = $_FILES['photo']['name'];

    // Fungsi explode() digunakan untuk memisahkan string menjadi array berdasarkan karakter yang ditentukan. disini,string yang dipisahkan adalah $nama_photo,yang kemungkinan berisi nama file gambar dengan ekstensi.
    $x = explode('.', $nama_photo);

    // Setelah sting dipisahkan dengan explode(),kita menggunakan fungsi end() untuk mendapatkan elemen terakhir dari array yg dihasilkan(yaitu,ekstensi file).kemudian, fungsi strtolower()digunakan untuk mengonversi ekstensi kehuruf kecil,untuk menghindari masalah sensitifitas huruf besar/kecil dlm pemrosesan lebih lanjut.
    $ekstensi = strtolower(end($x));

    //mendapatkan ukuran photo yg di update
    $ukuran = $_FILES['photo']['size'];

    //untuk mendapatkan temporary file yang di upload
    $file_tmp = $_FILES['photo']['tmp_name'];

    // Ini adalah awal dari kondisi.Kode ini memeriksa apakah ekstensi file yang diunggah ada dlam array $ekstensi_diperbolehkan. in_array()adalah fungsi PHP yg digunakan untuk memeriksa apakah elemen tertentu ada dalm array atau tidak. Jika ekstensi file yg diunggah ditemukn dlm array $ekstensi_diperbolehkan,maka kondisi ini akan bernilai true.
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        
        if ($ukuran < 1044070) {
            
            move_uploaded_file($file_tmp, '../assets/img/' . $nama_photo);


            $query = $barang->update($id,$nama_barang,$stock,$harga,$nama_photo);

        }else{
            echo "UKURAN GAMBAR TERLALU BESAR";
        }
    }else{
        echo "EKSTENSI TIDAK DIPERBOLEHKAN";
    }

}elseif ($_GET['aksi']  == 'hapus'){
    
    $id = $_GET['id'];

    $barang->delete($id);
}
?>