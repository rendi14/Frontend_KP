<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

                <!-- Begin Page Content -->
                 <div class="container-fluid">
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
                                <form action="/MenuDashboard/tambahMenu" method="post">
                                <div class="md-form mb-3">
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass" class="mb-2">Kode Access Menu</label>
                                    <select class="form-select form-select" required aria-label=".form-select-sm example" name="access">
                                    <option selected>Pilih..</option>
                                    <?php foreach ($admin_model as $a) : ?>
                                    <option value="<?= $a['admin_level_kode'] ?>"><?= $a['admin_level_nama'] ?></option>
                                    <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="md-form mb-3">
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass" class="mb-2">Nama Menu</label>
                                    <select class="form-select form-select" required aria-label=".form-select-sm example" name="kode">
                                    <option selected>Pilih..</option>
                                    <?php foreach ($user_model as $um) : ?>
                                    <option value="<?= $um['menu_kode'] ?>"><?= $um['menu_nama'] ?></option>
                                    <?php endforeach ?>
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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2">Tambah Menu Website</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
                    <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?=session()->getFlashdata('msg')?>
                        <!-- <a href="" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a> -->
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                    <?php endif;?>                     
                    <div class="row">
                    <div class="col-md-6">
                    <a href="/MenuDashboard" class="btn btn-primary mb-2">Halaman Tambah Dashboard</a>
                    <!-- <a href="/MenuDashboard/" class="btn btn-primary mb-2">Table Menu</a> -->
                    </div>                  
                    </div>
                    <?php if (session()->getFlashdata('pesan')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <?=session()->getFlashdata('pesan')?>
                          <a href="" class="" data-toggle="modal" data-target="#modalLoginForm">, Atur Menu Level Sekarang</a>
                          <!-- <a href="" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a> -->
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
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
                                            <th class="align-middle">Menu Nama</th>
                                            <th class="align-middle">Menu Deskripsi</th>
                                            <th class="align-middle">URL</th>
                                            <th class="align-middle">Menu Site</th>
                                            <!-- <th class="text-center align-middle">Dosen Kategori</th> -->
                                            <th>Action</th>
                                        </tr>
                                        <?php foreach ($sidebar as $u): ?>
                                        <tr>
                                          <td class="align-middle"><?=$u['menu_nama'];?></td>
                                          <td class="align-middle"><?=$u['menu_deskripsi'];?></td>
                                          <td class="align-middle"><?=$u['menu_url'];?></td>
                                          <td class="align-middle"><?=$u['menu_site'];?></td>
                                         
                                        <td class="align-middle">
                                            <form action="/dashboard/updateMenu/<?= $u['menu_admin_kode']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="POST">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Ubah</button>
                                            </form>   
                                            <form action="/dashboard/deleteMenu/<?= $u['menu_admin_kode']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                            </form>
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