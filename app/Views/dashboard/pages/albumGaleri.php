<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
            <div class="container-fluid">

<div class="col-12">

  <div class="card shadow mb-4 mt-2 pb-5">
    <div class="card-header py-3">
        <div class="row">
        <div class="col-12 col-xl-10">
        <a href="" class="m-0 font-weight-bold text-primary font-size-link">Album Gallery</a>
        </div>
        <div class="col-xl-2">
        <!-- <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalAlbumForm">Tambah Album
            <i class="fas fa-fw fa-plus"></i>
        </button> -->
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalFotoForm">Tambah Foto
            <i class="fas fa-fw fa-plus"></i>
        </button>
        </div>    
        </div>
    </div>
    
    <div class="row mt-3">
    <div class="col-12 col-lg-8 mb-5">
    <div class="container">
    <a href=""><img src="/gambar/album/<?= $album['album_gambar']?>" alt="5 Terre" style="width:100%"></a>
    <div class="container-text">
    <p><?= $album['album_judul'] ?></p>
    <p><?= $album['album_deskripsi'] ?></p>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalAlbumForm">
      <i class="fas fa-fw fa-pen"></i> Edit Album
    </button>    
    </div>
    </div>
    </div>
    </div>   
    <div class="row mt-3">
    <?php foreach ($galeri as $p) : ?>
    <div class="col-12 col-lg-4 mb-5">
    <div class="container">
    <div class="polaroid">
    <a href=""><img src="/gambar/album/<?= $p['galeri_gambar']?>" alt="5 Terre" style="width:100%"></a>
    <div class="container-text">
    <p><?= $p['galeri_judul'] ?></p>
    <p><?= $p['galeri_deskripsi'] ?></p>
    <a href="/dashboard/deleteFoto/<?= $p['galeri_id']?>" class="btn btn-danger">Buang</a>
    </div>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
    </div>  

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
	      <!-- Modal tambah data -->
	      <div class="modal fade" id="modalAlbumForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-scrollable" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center">
		        <h4 class="modal-title w-100 font-weight-bold">Edit Album</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form action="/dashboard/editAlbum" method="post" enctype="multipart/form-data">
		          <input type="text" hidden required id="defaultForm-NIP" class="form-control validate" name="id" value="<?= $album['album_id']?>">
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-NIP" class="mb-2">Judul Album</label>
		          <input type="text" required id="defaultForm-NIP" class="form-control validate" name="judul" value="<?= $album['album_judul']?>">
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-nama" class="mb-2">Deskripsi Album</label>
		          <textarea type="text" id="editor" required id="defaultForm-nama" class="form-control validate" name="deskripsi">
               <?= $album['album_deskripsi']?></textarea>
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-kategori" class="mb-2">Album Kategori</label>
		          <input type="text" id="defaultForm-Kategori" class="form-control validate" name="kategori" value="<?= $album['album_kategori']?>">
		        </div>            
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar Album</label>
                  <input type="file" required class="form-control" id="poto" name="poto">
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
<div class="modal fade" id="modalFotoForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
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
          <input type="text" hidden id="defaultForm-Name" class="form-control validate" name="album" value="<?= $album['album_id']?>">
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
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?=$this->include('partial/profile')?>
<?=$this->endSection()?>