<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

<!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Data Mitra</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
<div class="card shadow mb-4 mt-2">
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col-12 col-lg-10 p-xl-5 form-data border border-2">
                <h3 class="mb-2">Edit Data Mitra</h3>
                <form action="/dashboard/editMitra" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                   <?= csrf_field(); ?>
                    <div class="mb-3">
                        <input type="text" readonly hidden name="id" class="form-control p-2" id="InputForPoto" value="<?=$user['mitra_id']?>">
                    </div>
                        <div class="md-form mb-3">
                        <label for="InputForNIP" class="form-label">Link Mitra</label>
                        <input type="text" name="link" class="form-control p-2" id="InputForJudul" value="<?=$user['mitra_link']?>" required>
                    </div>
                    <div class="md-form mb-3">
                    <img src="/assets/img/clients/<?= $user['mitra_gambar'] ?>" alt="<?=$user['mitra_link']?>"  width="100%">
                    </div>
                    <div class="md-form mb-3">
                        <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar</label>
                        <input type="file" required class="form-control" id="poto" name="poto">
                    </div>
                    <div class="button d-flex justify-content-center">
                    <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                    <a href="/dashboard" class="btn rounded-pill button-login-profile button-login">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- End page content -->

            <!-- Footer -->
<?=$this->include('partial/footer')?>
            <!-- End of Footer -->

        
        <!-- End of Content Wrapper -->


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
                        <span aria-hidden="true">??</span>
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