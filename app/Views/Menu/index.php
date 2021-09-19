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
                                <h4 class="modal-title w-100 font-weight-bold">Tambah Data Menu</h4>
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
                    <div class="row">
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalLoginForm">Atur Menu Level</button>
                    <a href="/MenuDashboard/tabelMenu" class="btn btn-primary mb-2">Table Menu</a>
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
                    <?php if (session()->getFlashdata('msg')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <?=session()->getFlashdata('msg')?>
                          <!-- <a href="" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a> -->
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    <?php endif;?>                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-2">
                        <div class="card-body">
                                <div class="row justify-content-md-center">
                                    <div class="col-12 col-lg-10 p-xl-5 form-data border border-2">
                                        <h3 class="mb-3">Website Menu</h3>
                                        <form action="/MenuDashboard/tambahWeb" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                                              <div class="md-form col-xl-6 col-12 mb-3">
                                                <label for="InputForNama" class="form-label">Nama Menu</label>
                                                <input type="text" name="nama" class="form-control p-2" id="InputForNama"  required>
                                            </div>
                                            <div class="md-form col-xl-6 col-12 mb-3">
                                                <label for="InputForDeskripsi" class="form-label">Icon Menu</label>
                                                <input type="text" name="deskripsi" class="form-control p-2" id="InputForDeskripsi" placeholder="examples : fa-home">
                                            </div>
                                            <div class="md-form col-xl-6 col-12 mb-3">
                                                <label for="InputForJabatan" class="form-label">Link Menu atau URL</label>
                                                <input type="text" required name="menu-url" class="form-control p-2" id="InputForJabatan" >
                                            </div>
                                            <div class="md-form col-xl-6 col-12 mb-3">
                                            <label for="InputForSite" class="form-label">Menu Site</label>
                                            <select class="form-select" name="menu-site" required aria-label="Default select example">
                                            <option selected>Pilih</option>
                                            <option value="A">Halaman Admin</option>
                                            <option value="H">Halaman User</option>
                                            </select>
                                            </div>
                                            <div class="md-form col-xl-6 col-12 mb-3">
                                            <label for="InputForlevel" class="form-label">Menu Access</label>
                                            <select class="form-select" name="menu-access" required aria-label="Default select example">
                                            <option selected>Pilih</option>
                                            <option value="1">Superadmin</option>
                                            <option value="2">Administrator</option>
                                            <option value="3">Operator</option>
                                            </select>
                                            </div>
                                            <div class="md-form col-xl-6 col-12 mb-3">
                                                <label for="InputForUrutan" class="form-label">Menu Urutan</label>
                                                <input type="text" required name="urutan" class="form-control p-2" id="InputForUrutan" >
                                            </div>                                            
                                            <div class="button d-flex justify-content-center">
                                            <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                                            <a href="/dashboard/" class="btn rounded-pill button-login-profile button-login">Kembali</a>
                                            </div>
                                        </form>
                                    </div>
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