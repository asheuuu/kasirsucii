<?php
   include_once 'template/header.php';
   include_once 'template/sidebar.php';
   include_once 'template/topbar.php';


?>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>no antrian</th>
                                            <th>Nama pasien</th>
                                            <th>dokter</th>
                                            <th>keluhan</th> 
                                            <th>Obat</th>

                                        </tr>
                                    </thead>
                                   
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>wina</td>
                                            <td>eko</td>
                                            <td>sakit perut</td>
                                            <td>oralit</td>
                                        </tr>

                                        <tr>
                                            <td>002</td>
                                            <td>ucie</td>
                                            <td>liam</td>
                                            <td>sakit kepala</td>
                                            <td>paramex</td>
                                        </tr>
</tbody>
</table>
</div>
</div>
<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/footer.php';
?>