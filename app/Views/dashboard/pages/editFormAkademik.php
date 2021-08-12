<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

                <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Akademik</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-2">
                        <div class="card-body">
                    <div class="row justify-content-md-center">
                                <div class="col-10 p-5 form-data-editDosen form-data border border-2">
                                    <h3 class="mb-3">Edit Data Akademik</h3>
                                    <form action="/dashboard/editAktiAkademik" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                                        <div>
                                            <input type="text" readonly hidden name="id" class="form-control p-2" id="InputForId" value="<?=$user['akademik_id']?>">
                                        </div>
                                          <div class="col-md-12 mb-3">
                                            <label for="InputForJudul" class="form-label">Judul</label>
                                            <input type="text" name="judul" required class="form-control p-2" id="InputForJudul" value="<?=$user['akademik_title']?>">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="InputForDeskripsi" class="form-label">Deskripsi</label>
                                            <textarea type="text" name="deskripsi" required class="form-control p-2" id="InputForDeskripsi" value="<?=$user['akademik_deskripsi']?>"><?=$user['akademik_deskripsi']?></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="InputForDeskripsi" class="form-label">Kategori</label>
                                            <input type="text" name="kategori" required class="form-control p-2" id="InputForKategori" value="<?=$user['akademik_kategori']?>">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="InputForAdmin" class="form-label">Admin</label>
                                            <input type="text" readonly name="admin_nama" class="form-control p-2" id="InputForAdmin" value="<?=$user['admin_nama']?>">
                                        </div>
                                         <div class="md-form mb-1">
                                            <img src="/gambar/akademik/<?=$user['akademik_gambar']?>" alt="<?=$user['akademik_title']?>" width="200" height="200">
                                            </div>
                                            <div class="md-form mb-3">
                                              <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Foto</label>
                                              <input type="file" required class="form-control" id="poto" name="gambar">
                                            </div>
                                          <div class="col-md-12">
                                          <label data-error="wrong" data-success="right" for="defaultForm-misi" class="mb-2">Keterangan</label>
                                          <textarea type="text" required id="editor" class="form-control validate" name="keterangan" value="<?=$user['akademik_keterangan']?>"><?=$user['akademik_keterangan']?></textarea>
                                        </div>
                                        <div class="button d-flex justify-content-center">
                                        <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                                        <a href="/dashboard/dataAkademik" class="btn rounded-pill button-login-profile button-login">Kembali</a>
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