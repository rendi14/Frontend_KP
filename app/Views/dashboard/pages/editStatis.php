<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

<!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Data Statis</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-12 col-lg-10 form-data border border-2">
            <h3 class="mb-3">Edit Data Statis</h3>
            <form action="/dashboard/editStatis" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div>
                    <input type="text" readonly hidden name="id" class="form-control p-2" id="InputForId" value="<?=$user['statis_id']?>">
                </div>
                    <div class="md-form mb-3">
                    <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Judul Statis</label>
                    <input type="text" id="defaultForm-Name" required class="form-control validate" name="judul" value="<?=$user['statis_judul']?>">
                </div>
                <div class="md-form mb-3">
                    <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Tentang</label>
                    <textarea type="text" required id="editor" class="form-control validate" value="<?=$user['statis_deskripsi']?>"  style="height: 200px" name="deskripsi"><?=$user['statis_deskripsi']?></textarea>
                </div>
                <div class="md-form mb-2">
                    <label for="InputForlevel" class="form-label">Statis Statis</label>
                    <select class="form-select" name="status" required aria-label="Default select example">
                    <option value="<?=$user['statis_status']?>"><?=$user['statis_status']?></option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                    </select>
                </div>
                    <div class="md-form mb-1">
                    <img src="/gambar/statis/<?=$user['statis_gambar']?>" alt="<?=$user['statis_judul']?>" width="400" height="200" class="image-prodi-response">
                    </div>
                    <div class="md-form mb-3">
                        <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Foto</label>
                        <input type="file" required class="form-control" id="poto" name="poto">
                    </div>
                <div class="button d-flex justify-content-center">
                <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                <a href="/dashboard/dataStatis" class="btn rounded-pill button-login-profile button-login">Kembali</a>
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