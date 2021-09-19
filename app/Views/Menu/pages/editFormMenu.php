<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

    <!-- Akhir modal tambah data -->
    <!-- Page Heading -->
    <div class="container-fluid">
    <h1 class="h3 mb-2">Edit Menu Website</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->
    <div class="row">
    <div class="col-md-6">
    <!-- <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalLoginForm">Atur Menu Level</button>
    <a href="/MenuDashboard/tabelMenu" class="btn btn-primary mb-2">Table Menu</a> -->
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
                    <div class="col-12 col-lg-10 form-data border border-2">
                        <h3 class="mb-3">Website Menu</h3>
                        <form action="/MenuDashboard/editMenu" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                                <div class="md-form mb-3">
                                <label for="InputForNama" class="form-label">Nama Menu</label>
                                <input type="text" name="id" class="form-control p-2" hidden readonly id="InputForNama" value="<?= $tampil['menu_kode']?> ">
                                <input type="text" name="nama" class="form-control p-2" id="InputForNama" value="<?= $tampil['menu_nama']?> ">
                            </div>
                            <div class="md-form mb-3">
                                <label for="InputForDeskripsi" class="form-label">Icon Menu</label>
                                <input type="text" value="<?= $tampil['menu_deskripsi']?>" name="deskripsi" class="form-control p-2" id="InputForDeskripsi" placeholder="examples : fa-home">
                            </div>
                            <div class="md-form mb-3">
                                <label for="InputForJabatan" class="form-label">Link Menu atau URL</label>
                                <input type="text" value="<?= $tampil['menu_url']?>" name="menu-url" class="form-control p-2" id="InputForJabatan" >
                            </div>
                            <div class="md-form mb-3">
                            <label for="InputForSite" class="form-label">Menu Site</label>
                            <select class="form-select" name="menu-site" aria-label="Default select example">
                            <?php if ($tampil['menu_site'] === 'A'): ?>
                            <option selected value="A">Halaman Admin</option>
                            <option value="H">Halaman User</option>
                            <?php else: ?>
                            <option selected value="H">Halaman User</option>
                            <option value="A">Halaman Admin</option>
                            <?php endif ?>                            
                            </select>
                            </div>
                            <div class="md-form mb-3">
                            <label for="InputForlevel" class="form-label">Menu Access</label>
                            <select class="form-select" name="menu-access" aria-label="Default select example">
                            <option value="1">Superadmin</option>
                            <option value="2">Administrator</option>
                            <option value="3">Operator</option>
                            </select>
                            </div>
                            <div class="md-form mb-3">
                                <label for="InputForUrutan" class="form-label">Menu Urutan</label>
                                <input type="text" value="<?= $tampil['menu_urutan']?>" name="urutan" class="form-control p-2" id="InputForUrutan" >
                            </div>                                            
                            <div class="button d-flex justify-content-center">
                            <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                            <a href="/MenuDashboard/tabelMenu" class="btn rounded-pill button-login-profile button-login">Kembali</a>
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