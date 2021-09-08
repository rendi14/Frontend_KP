<?= $this->extend('layout/mainlayout') ?>

<?= $this->section('cont') ?>
<?= $this->include('partial/sidebar') ?>
<?= $this->include('partial/navbar') ?>
<!-- Modal tambah data -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Berita</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="/berita/tambahBerita" method="post" enctype="multipart/form-data" class="row g-3">
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Judul Berita</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="judul">
          </div>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Deskripsi Berita</label>
            <textarea type="text" id="editor" class="form-control validate" name="deskripsi"></textarea>
          </div>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar Berita</label>
            <input type="file" class="form-control" id="poto" name="poto">
          </div>
          <div class="md-form mb-2">
            <label for="InputForlevel" class="form-label">Kategori Berita</label>
            <select class="form-select" name="kategori" required aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="1">Pengumuman</option>
            <option value="2">Berita</option>
            <option value="3">Karir</option>
            </select>
          </div>
          <div class="md-form mb-2">
          <label for="InputForlevel" class="form-label">Waktu Berita</label>
          <input type="datetime-local" class="form-control" name="waktu">
          </div>
          <input type="text" hidden readonly class="form-control" name="admin" value="<?=session()->get('user_name');?>">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table Berita</h1>
  <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
  <div class="row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalLoginForm">Tambah Data Berita</button>
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
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('pesan') ?>
      <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    </div>
  <?php endif; ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <?php foreach ($berita as $p) : ?>
      <div class="card-body">
        <div class="col-lg-12 font-size-prodi">
          <dl class="row border border-3 border-bottom-1">
            <dt class="col-sm-2 mt-2">Judul Berita</dt>
            <dd class="col-sm-10 fw-bold mt-2"><?= $p['berita_judul']; ?>
            </dd>

            <dt class="col-sm-2">Deskripsi Berita</dt>
            <dd class="col-sm-10">
              <p class="text-align-justify"><?= $p['berita_deskripsi']; ?></p>
              <!-- <a href="">Lihat selengkapnya</a> -->
            </dd>

            <dt class="col-sm-2">Berita Waktu</dt>
            <dd class="col-sm-10 text-align-justify"><?= $p['berita_waktu']; ?></dd>
            <dt class="col-sm-2">Foto</dt>
            <dd class="col-sm-10"><img src="/gambar/berita/<?= $p['berita_gambar']; ?>" alt="<?= $p['berita_judul']; ?>" width="500" height="300" class="image-prodi"></dd>
            <dt class="col-sm-2">Action</dt>
            <dd class="col-sm-10">
              <a href="/berita/tampilEditBerita/<?= $p['berita_id']; ?>" class="btn btn-primary"><i class="fas fa-upload"></i></span> Update</a>
              <a href="/berita/hapusBerita/<?= $p['berita_id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></span> Hapus</a>
            </dd>
          </dl>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
  <?= $pager->links('berita', 'dosen_data') ?>
</div>
<!-- /.container-fluid -->


<!-- End page content -->

<!-- Footer -->
<?= $this->include('partial/footer') ?>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<?= $this->endSection() ?>