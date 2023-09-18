<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/header.php';
    include_once 'template/sidebar.php';
    include_once 'template/topbar.php';
   include_once '../controllers/C_barang.php';

$market = new C_barang();

?>
<div class="container-fluid">

                        <div class="input-field">
                                    <a href="V_tambah-barang.php" class="btn btn-primary">+Tambah Barang</a>
                                </div>

                    
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h8>Tabel</h8>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama barang</th>
                                            <th>Stock</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($market->tampil() as $b){
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $b->nama_barang?></td>
                                        <td><?php echo $b->stock?></td>
                                        <td><?php echo $b->harga?></td>
                                        <td><?php echo $b->photo?></td>


                                        <td>
                                        <center>
                                        <a href="V_edit_barang.php?id=<?= $b->id ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>
                                        </center>
                                        </td>
                                    </tr>
                                    
                                        <?php } ?>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>nama_barang</th>
                                            <th>stock</th>
                                            <th>harga</th>
                                            <th>photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </tbody>
                                    
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <?php
    //modular untuk memanggil file dari folder template
    include_once 'template/footer.php';
    
 ?>