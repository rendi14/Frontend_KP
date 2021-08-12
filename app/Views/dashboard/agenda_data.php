<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>
		      <!-- Modal tambah data -->
	      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-scrollable" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center">
		        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Prodi</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body mx-3">
		      	<form action="/dashboard/tambahAktiProdi" method="post" enctype="multipart/form-data" class="row g-3">
		        <div class="md-form mb-2">
		          <label data-error="wrong" data-success="right" for="defaultForm-Name" class="mb-2">Nama Prodi</label>
		          <input type="text" id="defaultForm-Name" class="form-control validate" name="nama_prodi">
		        </div>
		        <div class="md-form mb-2">
		          <label data-error="wrong" data-success="right" for="defaultForm-Dosen" class="mb-2">Dosen Prodi</label>
		          <input type="text" id="defaultForm-Dosen" class="form-control validate" name="dosen">
		        </div>            
		        <div class="md-form mb-2">
		          <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Tentang</label>
		          <textarea type="text" id="defaultForm-tentang" class="form-control validate" name="tentang"></textarea>
		        </div>
		        <div class="md-form mb-2">
		          <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Visi</label>
		          <textarea type="text" id="defaultForm-Visi" class="form-control validate" name="visi"></textarea>
		        </div>
		        <div class="md-form mb-2">
		          <label data-error="wrong" data-success="right" for="defaultForm-tentang" class="mb-2">Misi</label>
		          <textarea type="text" id="editor" class="form-control validate" name="misi"></textarea>
		        </div>
		        <div class="md-form mb-2">
		          <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Foto</label>
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

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Agenda</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
                    <div class="row">
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalLoginForm">Tambah Data Agenda</button>
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
                    <?php if (session()->getFlashdata('pesan')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <?=session()->getFlashdata('pesan')?>
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    <?php endif;?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        
                        <div class="row mt-3">
                        <?php foreach ($agenda_user as $a): ?>
                        <div class="col-12 col-lg-6">
                        <div class="container">
                            <div class="card mb-3">
                            <h4  style="margin-left: 5px; margin-top: 8px;"><?= $a['agenda_tema'] ?></h5>
                                <div class="row g-0">
                                    <div class="col-md-12">
                                    <img src="/gambar/prodi/1610957984-tata-operasi-perakitan-kendaraan-roda-4-topkr4.png" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-title"><?= $a['agenda_deskripsi'] ?></p>
                                        <p class="card-text">Jam Agenda :  <?= $a['agenda_jam'] ?></p>
                                        <p class="card-text">Tempat :  <?= $a['agenda_tempat'] ?></p>
                                        <p class="card-text">Agenda Mulai : <?= $a['agenda_mulai'] ?></p>
                                        <p class="card-text">Agenda Mulai : <?= $a['agenda_selesai'] ?></p>
                                        <p class="card-text"><small class="text-muted">Posting terakhir : <?= $a['agenda_posting'] ?></small></p>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                    </div>
                                    </div>
                                </div>   
                            </div>
                            </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                            
                        </div>
                        <?=$pager->links('agenda', 'dosen_data')?>
                <!-- /.container-fluid -->


                <!-- End page content -->

            <!-- Footer -->
        <?=$this->include('partial/footer')?>
            <!-- End of Footer -->

        </div>
        
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