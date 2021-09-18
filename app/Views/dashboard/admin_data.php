<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

          <!-- Modal tambah data -->
          <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Data Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <form action="/dashboard/tambahAdmin" method="post">
                <?= csrf_field(); ?>
                <div class="md-form mb-3">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="defaultForm-username" class="mb-2">Username</label>
                  <input type="text" required id="defaultForm-username" class="form-control validate" name="name">
                </div>

                <div class="md-form mb-3">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="defaultForm-pass" class="mb-2">Password</label>
                  <input type="password" required id="defaultForm-pass" class="form-control validate" name="password">
                </div>
                <div class="md-form mb-3">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="defaultForm-pass" class="mb-2">Admin Level</label>
                <select class="form-select form-select" required aria-label=".form-select-sm example" name="level">
                  <option selected>Pilih..</option>
                  <?php foreach ($admin_level as $a): ?>
                  <option value="<?= $a['admin_level_kode'] ?>"><?= $a['admin_level_nama'] ?></option>
                  <?php endforeach;?>
                </select>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
              </form>
            </div>
          </div>
        </div>


    <!-- Akhir modal tambah data -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Table Admin</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
                    <div class="row">
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalLoginForm">Tambah Data Admin</button>
                    </div>
                    <div class="col-md-6">
                      <form class="mr-auto ml-md-3 my-2 my-md-0 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-2 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
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
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    <?php endif;?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Admin Level</th>
                                            <th>Foto Admin</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php foreach ($user as $u): ?>
                                        <tr>
                                        <?php if ($u['admin_level_kode'] != '1'): ?>
                                          <td><?=$u['user_name'];?></td>
                                          <td><?=$u['user_email'];?></td>
                                          <td><?=$u['admin_level_nama'];?></td>
                                          <td class="text-center"><img src="/gambar/admin/<?=$u['user_profile'];?>" alt="<?=$u['user_name'];?>" width="60px;" height="60px;"></td>
                                          <td class="text-center">
                                            <a href="/dashboard/hapusAdmin/<?=$u['user_id']?>" class="btn btn-danger">Hapus</a>
                                          </td>
                                          <?php else: ?>
                                          <?php endif?>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
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