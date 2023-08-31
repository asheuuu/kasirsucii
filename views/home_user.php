<?php


    //modular untuk memanggil file dari folder template
    session_start();

    include_once 'template/header.php';
    include_once 'template/sidebar.php';
    include_once 'template/topbar.php';

    //include_once '../controllers/c_login.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<h1>
    Selamat Datang <?= $_SESSION['data']['nama'] ?>, dan rolenya sebagai <?= $_SESSION['data']['role'] ?>
</h1>

</div>
<!-- /.container-fluid -->

<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/footer.php';
?>