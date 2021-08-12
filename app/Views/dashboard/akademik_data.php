<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>
                <!-- End of Topbar -->
	      <!-- Modal tambah data -->
	      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-scrollable" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center">
		        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Akademik</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body mx-3">
		      	<form action="/dashboard/tambahAktiAkademik" method="post" enctype="multipart/form-data">
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-judul" class="mb-2">Judul</label>
		          <input type="text" required id="defaultForm-judul" class="form-control validate" name="judul">
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-deskripsi" class="mb-2">Deskripsi</label>
		          <textarea type="text" required id="defaultForm-nama" class="form-control validate text-area" name="deskripsi"></textarea>
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-Foto" class="mb-2">Gambar Akti Akademik</label>
                  <input type="file" required class="form-control" id="gambar" name="gambar">
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-kategori" class="mb-2">Kategori</label>
		          <input type="text" required id="defaultForm-kategori" class="form-control validate" name="kategori">
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-katerangan" class="mb-2">Katerangan</label>
		          <input type="text" required id="defaultForm-katerangan" class="form-control validate" name="keterangan">
		        </div>
		        <div class="md-form mb-3">
		          <label data-error="wrong" data-success="right" for="defaultForm-Admin" class="mb-2">Admin</label>
                  <input type="text" class="form-control" readonly id="admin_nama" name="admin_nama" value="<?=session()->get('user_level')?>">
				</div>
		      </div>
		      <div class="modal-footer d-flex justify-content-center">
		        <button class="btn btn-primary" type="submit">Simpan</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
                <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Table Data Akademik</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
                    <div class="row">
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalLoginForm">Tambah Data Akademik</button>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar Akademik</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Admin Level</th>
					                        <th>Action</th>
                                        </tr>
                                        <?php foreach ($user as $u): ?>
                                        <tr>
                                          <td><?=$u['akademik_title'];?></td>
                                          <td><?=$u['akademik_deskripsi'];?></td>
                                          <td class="text-center"><img src="/gambar/akademik/<?=$u['akademik_gambar'];?>" alt="<?=$u['akademik_title'];?>" width="60px;" height="60px;"></td>
                                          <td><?=$u['akademik_kategori'];?></td>
                                          <td><?=$u['akademik_keterangan'];?></td>
                                          <td class="text-center"><?=$u['admin_nama'];?></td>
                                          <td><a href="/dashboard/TampilEditAkademik/<?=$u['akademik_id']?>" class="btn btn-primary">Edit</a>
                                            <a href="/dashboard/HapusAkademik/<?=$u['akademik_id']?>" class="btn btn-danger">Hapus</a></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
			                 <?=$pager->links('user', 'dosen_data')?>
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