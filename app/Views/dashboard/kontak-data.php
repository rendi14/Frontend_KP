<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

                <!-- End of Topbar -->
                <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table Data Kontak</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->
    <div class="row">
    <div class="col-md-6">
    
    </div>
    <div class="col-md-6">
      <form class="mr-auto ml-md-3 my-2 my-md-0 navbar-search" method="post">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-2 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    </div>
    </div>
    <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?=session()->getFlashdata('pesan')?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables..</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center align-middle">Nama pengirim</th>
                            <th class="text-center align-middle">Email pengirim</th>
                            <th class="text-center align-middle">No HP</th>
                            <th class="text-center align-middle">Isi Pesan</th>
                            <th class="text-center align-middle">Waktu Pengirim</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($user as $u): ?>
                        <tr>
                          <td class="text-center align-middle"><?=$u['contact_pengirim'];?></td>
                          <td class="text-center align-middle"><?=$u['contact_email'];?></td>
                          <td class="text-center align-middle"><?=$u['contact_telp'];?></td>
                          <td class="text-center align-middle"><?=$u['contact_deskripsi'];?></td>
                          <td class="text-center align-middle">
                        <?=$u['contact_waktu'];?></td>
                        <td>
                            <a href="/dashboard/HapusDataKontak/<?= $u['contact_id']?>" class="btn btn-danger"><span><i class="fas fa-trash"></i></span> Hapus</a>		
                        </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <?=$pager->links('user', 'dosen_data')?>
        </div>
    </div>

</div>
                <!-- /.container-fluid -->


                <!-- End page content -->

            <!-- Footer -->
<?=$this->include('partial/footer')?>
            <!-- End of Footer -->

</div>
        <!-- End of Content Wrapper -->

</div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?=$this->endSection()?>