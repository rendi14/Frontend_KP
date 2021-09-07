<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<?=$this->include('partial/sidebar')?>
<?=$this->include('partial/navbar')?>


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

  <div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <div class="row">
        <div class="col-12 col-xl-10">
        <a href="" class="m-0 font-weight-bold text-primary font-size-link">Album Gallery</a>
        </div>
        <div class="col-xl-2">
        <a href="" class="m-0 btn btn-primary">Tambah Album
            <i class="fas fa-fw fa-plus"></i>
        </a>
        </div>    
        </div>
    </div>
    
    <div class="row mt-3">
    <?php foreach ($album as $p) : ?>
    <div class="col-12 col-lg-4">
    <div class="container">
    <div class="polaroid">
    <a href=""><img src="/gambar/prodi/1610957984-tata-operasi-perakitan-kendaraan-roda-4-topkr4.png" alt="5 Terre" style="width:100%"></a>
    <div class="container-text">
    <p><?= $p['album_judul'] ?></p>
    <p><?= $p['album_deskripsi'] ?></p>
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

<?=$this->include('partial/profile')?>
<?=$this->endSection()?>