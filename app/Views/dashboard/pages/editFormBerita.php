<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Data Berita</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Simpan Data Gambar Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="/berita/ubahGambar" method="post" enctype="multipart/form-data" class="row g-3">
            <input hidden type="text" id="defaultForm-Name" class="form-control validate" name="id" value="<?=$user['berita_id']?>">
            <input hidden type="text" id="defaultForm-Name" class="form-control validate" name="judul" value="<?=$user['berita_judul']?>">
            <textarea hidden type="text" class="form-control validate" name="deskripsi"><?=$user['berita_deskripsi']?></textarea>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar Berita</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
          </div>
          <input hidden type="text" class="form-control" name="waktu" value="<?=$user['berita_waktu']?>">
          <input hidden type="text" class="form-control" name="kategori" value="<?=$user['kategori_id']?>">
          <input type="text" hidden readonly class="form-control" name="admin" value="<?=session()->get('user_name');?>">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-body">
                <div class="row justify-content-md-center">
                    <div class="col-10 p-5 form-data-editDosen form-data border border-2">
                        <h3 class="mb-2">Edit Data Berita</h3>
                        <form action="/berita/editDataBerita" method="post" class="form-data-login row g-3" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" readonly hidden name="id" class="form-control p-2" id="InputForPoto" value="<?=$user['berita_id']?>">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="InputForNama" class="form-label">Judul Berita</label>
                                <input type="text" required name="judul" class="form-control p-2" id="InputForNama" value="<?=$user['berita_judul']?>">
                            </div>                            
                                <div class="col-md-12 mb-3">
                                <label for="InputForNIP" class="form-label">Berita Deskripsi</label>
                                <textarea name="deskripsi" class="form-control p-2" id="editor" required><?=$user['berita_deskripsi']?></textarea>
                            </div>
                            <div class="md-form mb-1">
                            <img src="/gambar/berita/<?=$user['berita_gambar']?>" alt="<?=$user['berita_judul']?>" width="400" height="200" class="image-prodi-response mb-3">
                            <input hidden type="text" required name="gambar" class="form-control p-2" id="InputForNama" value="<?=$user['berita_gambar']?>">
                            <div class="col-md-6">
                                <a class="btn rounded-pill button-login-profile button-login" data-toggle="modal" data-target="#modalLoginForm">Ubah Gambar</a>
                                </div>
                            </div>
                            <input hidden type="text" class="form-control" name="waktu" value="<?=$user['berita_waktu']?>">
                            <div class="md-form mb-2">
                            <label for="InputForlevel" class="form-label">Kategori Berita</label>
                            <select class="form-select" name="kategori" required aria-label="Default select example">
                            <?php if ($user['kategori_id'] === '1') :?>
                            <option value="<?= $user['kategori_id']?>" selected>Pengumuman</option>
                            <option value="1">Pengumuman</option>
                            <option value="2">Berita</option>
                            <option value="3">Karir</option>
                            <?php elseif ($user['kategori_id'] === '2') : ?>
                            <option value="<?= $user['kategori_id']?>" selected>Berita</option>
                            <option value="1">Pengumuman</option>
                            <option value="2">Berita</option>
                            <option value="3">Karir</option> 
                            <?php elseif ($user['kategori_id'] === '3') : ?>
                            <option value="<?= $user['kategori_id']?>" selected>Karir</option>
                            <option value="1">Pengumuman</option>
                            <option value="2">Berita</option>
                            <option value="3">Karir</option>                           
                            <?php else : ?>
                            <option selected>Pilih</option>
                            <option value="1">Pengumuman</option>
                            <option value="2">Berita</option>
                            <option value="3">Karir</option>
                            <?php endif ?>
                            </select>
                            </div>
                            <input type="text" hidden readonly class="form-control" name="admin" value="<?=session()->get('user_name');?>">
                            <div class="button d-flex justify-content-center">
                            <button type="submit" class="btn rounded-pill button-login">Simpan</button>
                            <a href="/berita" class="btn rounded-pill button-login-profile button-login">Kembali</a>
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