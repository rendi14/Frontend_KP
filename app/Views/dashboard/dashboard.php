<?= $this->extend('layout/mainlayout') ?>

<?= $this->section('cont') ?>
<?= $this->include('partial/sidebar') ?>
<?= $this->include('partial/navbar') ?>

<div class="modal fade" id="modalAlbumForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Album</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-2">
        <form action="/dashboard/tambahAlbum" method="post" enctype="multipart/form-data" class="row g-3">
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Judul Album</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="judul">
          </div>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Deskripsi Album</label>
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
<!-- Upload Video -->
<div class="modal fade" id="modalUploadVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Video</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-2">
        <form action="/dashboard/uploadVideo" method="post" enctype="multipart/form-data" class="row g-3">
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Judul Video</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="judul">
            <input type="text" hidden id="defaultForm-type" class="form-control validate" name="type" value="Upload">
          </div>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Deskripsi Video</label>
            <textarea type="text" id="editor" class="form-control validate" name="deskripsi"></textarea>
          </div>
          <div class="md-form">
            <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Upload Video</label>
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
<!-- Akhir Upload Video -->
<!-- End of Topbar -->
<!-- Modal Tambah video link -->
<div class="modal fade" id="modalVideoForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Video</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-2">
        <form action="/dashboard/tambahVideoLink" method="post" enctype="multipart/form-data" class="row g-3">
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Judul Video</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="judul">
          </div>
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Deskripsi Video</label>
            <textarea type="text" id="editor" class="form-control validate" name="deskripsi"></textarea>
          </div>
            <input hidden type="text" id="defaultForm-Name" class="form-control validate" name="type" value="Link">
          <div class="md-form">
            <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Video Link</label>
            <input type="text" class="form-control" name="link">
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Tambah Mitra Kerja -->
<div class="modal fade" id="modalMitraForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Mitra</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-2">
        <form action="/dashboard/tambahMitra" method="post" enctype="multipart/form-data" class="row g-3">
          <div class="md-form mb-2">
            <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Link Mitra</label>
            <input type="text" id="defaultForm-Name" class="form-control validate" name="link">
          </div>
          <div class="md-form">
            <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar Mitra</label>
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
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user_count ?> Admin</div>
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
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Album Galeri
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $album_count ?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?= $album_count ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20"><?= $album_count ?></div>
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
    
    <!-- Album -->
    <div class="col-12">
      <div class="card shadow mb-4 mt-2 pb-5">
        <div class="card-header py-3">
          <div class="row">
            <div class="col-12 col-xl-8">
              <?php if ($album_count === 0) : ?>
                <a class="m-0 font-weight-bold text-primary font-size-link">Album Gallery</a>
              <?php else : ?>
                <a href="" data-toggle="modal" data-target="#modalAlbumData" class="m-0 font-weight-bold text-primary font-size-link">Album Gallery</a>
              <?php endif ?>
            </div>
            <div class="col-xl-4">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalAlbumForm">Tambah Album
                <i class="fas fa-fw fa-plus"></i>
              </button>
              <?php if ($album_count === 0) : ?>
                <button type="submit" disabled class="btn btn-primary" data-toggle="modal" data-target="#modalFotoForm">Tambah Foto
                  <i class="fas fa-fw fa-plus"></i>
                </button>
              <?php else : ?>
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalFotoForm">Tambah Foto
                  <i class="fas fa-fw fa-plus"></i>
                </button>
              <?php endif ?>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <?php if ($album_count === 0) : ?>
            <div class="container text-center mt-2">
              <h1>Album Kosong...</h1>
            </div>
          <?php else : ?>
            <?php foreach ($album as $p) : ?>
              <div class="col-12 col-lg-4">
                <div class="container">
                  <div class="polaroid">
                    <a href="/dashboard/albumGaleri/<?= $p['album_id'] ?>"><img src="/gambar/album/<?= $p['album_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
                    <div class="container-text">
                      <p><?= $p['album_judul'] ?></p>
                      <p><?= $p['album_deskripsi'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
        </div>
      <?php endif ?>
      <?php if ($album_count <= 3) : ?>
        <a href="" hidden data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
      <?php else : ?>
        <a class="mt-5" href="" data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
      <?php endif ?>
      </div>
    </div>
  </div>

<!-- Video gallery -->
<div class="col-12">
  <div class="card shadow mb-4 mt-2 pb-5">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-12 col-xl-7">
          <?php if ($video_count === 0) : ?>
            <a class="m-0 font-weight-bold text-primary font-size-link">Video Gallery</a>
          <?php else : ?>
            <a href="" data-toggle="modal" data-target="#modalVideoData" class="m-0 font-weight-bold text-primary font-size-link">Video Gallery</a>
          <?php endif ?>
        </div>
        <div class="col-xl-5">
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalVideoForm">Tambah Video Melalui Link
            <i class="fas fa-fw fa-plus"></i>
          </button>
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalUploadVideo">Upload Video 
            <i class="fas fa-fw fa-upload"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="row mt-3">
    <?php if ($video_count === 0) : ?>
      <div class="container text-center mt-2">
        <h1>Video Kosong...</h1>
      </div>
    <?php else : ?>
    <?php foreach ($video as $p) : ?>
      <div class="col-12 col-lg-4">
        <div class="container">
          <div class="polaroid">
          <?php if ($p['video_type'] === 'Link') : ?>
          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <iframe class="embed-responsive-item" src="<?= $p['video_link'] ?>"
            allowfullscreen></iframe>
          </div>  
            <div class="container-text mt-2">
              <p><?= $p['video_judul'] ?></p>
              <p><?= $p['video_deskripsi'] ?></p>
              <div class="d-flex justify-content-end">
              <div class="dropdown">
              <span title="Setting" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-fw fa-pen"></i></span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a href="<?= $p['video_link']?>" class="dropdown-item" type="button"><i class="fas fa-fw fa-eye"></i> View</a></li>
                  <li>
                    <form action="/dashboard/deleteVideo/<?= $p['video_id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="border-0 dropdown-item"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                  </li>
                </ul>
              </div>
              </div>
            </div>
            <?php else : ?>
            <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="/assets/img/video/<?= $p['video_link'] ?>" allowfullscreen></iframe>
          </div>  
            <div class="container-text mt-2">
              <p><?= $p['video_judul'] ?></p>
              <p><?= $p['video_deskripsi'] ?></p>
              <div class="d-flex justify-content-end">
              <div class="dropdown">
              <span title="Setting" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-fw fa-pen"></i></span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a href="<?= $p['video_link']?>" class="dropdown-item" type="button"><i class="fas fa-fw fa-eye"></i> View</a></li>
                  <li>
                    <form action="/dashboard/deleteVideoUpload/<?= $p['video_id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="border-0 dropdown-item"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                  </li>
                </ul>
              </div>
              </div>
            </div>  
              <?php endif ?>          
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif ?>
  <?php if ($album_count <= 3) : ?>
    <a href="" hidden data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
  <?php else : ?>
    <a class="mt-5" href="" data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
  <?php endif ?>
  </div>
</div>
</div>
    <!-- Akhir video galeri -->
    <!-- End of Content Wrapper -->
    <!-- Mitra Kerja -->
<div class="col-12">
<div class="card shadow mb-4 mt-2 pb-5">
  <div class="card-header py-3">
    <div class="row">
      <div class="col-12 col-xl-9">
        <?php if ($mitra_count === 0) : ?>
          <a class="m-0 font-weight-bold text-primary font-size-link">Mitra Kerja</a>
        <?php else : ?>
          <a href="" data-toggle="modal" data-target="#modalMitraData" class="m-0 font-weight-bold text-primary font-size-link">Mitra Kerja</a>
        <?php endif ?>
      </div>
      <div class="col-xl-3">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalMitraForm">Tambah Mitra Kerja
          <i class="fas fa-fw fa-plus"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <?php if ($mitra_count === 0) : ?>
      <div class="container text-center mt-2">
        <h1>Tidak Terdapat Mitra...</h1>
      </div>
    <?php else : ?>
      <?php foreach ($mitra as $p) : ?>
        <div class="col-12 col-lg-4">
          <div class="container">
            <div class="polaroid">
              <a href="/dashboard/editMitra/<?= $p['mitra_id'] ?>"><img src="/assets/img/clients/<?= $p['mitra_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
              <div class="container-text">
                <p><?= $p['mitra_link'] ?></p>
                <p><?= $p['mitra_waktu'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
  </div>
<?php endif ?>
<?php if ($mitra_count <= 3) : ?>
  <a href="" hidden data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
<?php else : ?>
  <a class="mt-5" href="" data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
<?php endif ?>
</div>
</div>
</div>
</div>
  <!-- Akhir Mitra Kerja -->
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
                    <a href="/dashboard/albumGaleri/<?= $p['album_id'] ?>"><img src="/gambar/album/<?= $p['album_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
                    <div class="container-text">
                      <p><?= $p['album_judul'] ?></p>
                      <p><?= $p['album_deskripsi'] ?></p>
                      <a href="/dashboard/albumGaleri/<?= $p['album_id'] ?>" class="btn btn-primary">Lihat</a>
                        <form action="/dashboard/deleteAlbum/<?= $p['album_id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Buang</button>
                        </form>
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

<!-- Modal Mitra  -->
  <!-- Modal tambah album -->
  <!-- Modal -->
  <div class="modal fade" id="modalMitraData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Mitra</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row mt-3">
            <?php foreach ($mitra_full as $p) : ?>
              <div class="col-12 col-lg-6 mb-3">
                <div class="container">
                  <div class="polaroid">
                    <a href="/dashboard/albumGaleri/<?= $p['mitra_id'] ?>"><img src="/assets/img/clients/<?= $p['mitra_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
                    <div class="container-text">
                      <p><?= $p['mitra_link'] ?></p>
                      <p><?= $p['mitra_waktu'] ?></p>
                      <a href="/dashboard/albumGaleri/<?= $p['mitra_id'] ?>" class="btn btn-primary">Lihat</a>
                      <a href="/dashboard/hapusMitra/<?= $p['mitra_id'] ?>" class="btn btn-danger">Buang</a>
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


<!-- Akhir -->


  <div class="modal fade" id="modalFotoForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Tambah Foto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/tambahGaleri" method="post" enctype="multipart/form-data" class="row g-3">
            <div class="md-form mb-2">
              <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Nama Foto</label>
              <input type="text" id="defaultForm-Name" class="form-control validate" name="judul">
            </div>
            <div class="md-form mb-2">
              <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Deskripsi Foto</label>
              <textarea type="text" id="editor" class="form-control validate" name="deskripsi"></textarea>
            </div>
            <div class="md-form mb-2">
              <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Pilih Foto</label>
              <input type="file" class="form-control" id="poto" name="poto">
            </div>
            <div class="md-form mb-2">
              <label for="InputForlevel" class="form-label">Pilih Album</label>
              <select class="form-select" name="album" required aria-label="Default select example">
                <option selected>Pilih</option>
                <?php foreach ($album_galeri as $p) : ?>
                  <option value="<?= $p['album_id'] ?>"><?= $p['album_judul'] ?></option>
                <?php endforeach; ?>
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
  <?= $this->include('partial/profile') ?>
  <?= $this->endSection() ?>