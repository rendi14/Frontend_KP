<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>

<div class="modal fade" id="modalAlbumForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Berita</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/tambahAlbum" method="post" enctype="multipart/form-data" class="row g-3">
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Judul Album</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="judul">
          </div>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Deskripsi Berita</label>
            <textarea type="text" id="editor" class="form-control validate" name="deskripsi"></textarea>
          </div>          
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Kategori Album</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="kategori">
          </div>
          <div class="md-form">
            <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar Berita</label>
            <input type="file" class="form-control" id="poto" name="poto">
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Akhir Modal Tambah Album -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
            <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Admin</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user_count?> Admin</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Data Dosen</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dosen_count ?> Dosen</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Program Studi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $prodi_count ?> Data Prodi</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-12">

  <div class="card shadow mb-4 mt-2 pb-5">
    <div class="card-header py-3">
        <div class="row">
        <div class="col-12 col-xl-8">
        <a href="" data-toggle="modal" data-target="#modalAlbumData" class="m-0 font-weight-bold text-primary font-size-link">Album Gallery</a>
        </div>
        <div class="col-xl-4">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalAlbumForm">Tambah Album
            <i class="fas fa-fw fa-plus"></i>
        </button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalFotoForm">Tambah Foto
            <i class="fas fa-fw fa-plus"></i>
        </button>
        </div>    
        </div>
    </div>
    
    <div class="row mt-3">
    <?php foreach ($album as $p) : ?>
    <div class="col-12 col-lg-4">
    <div class="container">
    <div class="polaroid">
    <a href="/dashboard/albumGaleri/<?= $p['album_id']?>"><img src="/gambar/prodi/1610957984-tata-operasi-perakitan-kendaraan-roda-4-topkr4.png" alt="5 Terre" style="width:100%"></a>
    <div class="container-text">
    <p><?= $p['album_judul'] ?></p>
    <p><?= $p['album_deskripsi'] ?></p>
    </div>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
    </div>    
    <?php if ($album_count <= 3) :?>
    <a href="" hidden data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
    <?php else : ?>
    <a href="" data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
    <?php endif ?>
  </div>        
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

<!-- Modal tambah album -->
<!-- Modal -->
<div class="modal fade" id="modalAlbumData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Album Gallery</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="row mt-3">
    <?php foreach ($album_galeri as $p) : ?>
    <div class="col-12 col-lg-6 mb-3">
    <div class="container">
    <div class="polaroid">
    <a href="/dashboard/albumGaleri/<?= $p['album_id']?>"><img src="/gambar/prodi/1610957984-tata-operasi-perakitan-kendaraan-roda-4-topkr4.png" alt="5 Terre" style="width:100%"></a>
    <div class="container-text">
    <p><?= $p['album_judul'] ?></p>
    <p><?= $p['album_deskripsi'] ?></p>
    <a href="/dashboard/albumGaleri/<?= $p['album_id']?>" class="btn btn-primary">Lihat</a>
    <a href="" class="btn btn-danger">Buang</a>
    </div>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
    </div>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?=$this->include('partial/profile')?>
<?=$this->endSection()?>