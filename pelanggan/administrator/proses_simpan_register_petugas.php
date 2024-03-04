<?php
// Lakukan koneksi ke database
include '../koneksi.php';

// Ambil data yang dikirim dari form dan lakukan validasi
$id_petugas = mysqli_real_escape_string($koneksi, $_POST['id_petugas']);
$nama_petugas = mysqli_real_escape_string($koneksi, $_POST['nama_petugas']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$level = mysqli_real_escape_string($koneksi, $_POST['level']);

// Enkripsi kata sandi
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk menyimpan data ke dalam tabel database
$query = "INSERT INTO petugas (id_petugas, nama_petugas, username, password, level) 
          VALUES ('$id_petugas', '$nama_petugas', '$username', '$hashed_password', '$level')";

// Jalankan query
if(mysqli_query($koneksi, $query)) {
    // Jika berhasil disimpan, arahkan ke halaman sukses atau halaman lain
    header("Location: index.php");
} else {
    // Jika gagal, tampilkan pesan error atau arahkan ke halaman lain
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
