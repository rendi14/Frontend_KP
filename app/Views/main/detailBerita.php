<div class="container mt-3">
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="row" style="padding-bottom: 50px;">
        <div class="col-12 mt-5">
        <h3 class="text-center"><?= $berita['berita_judul'];?></h3>
        </div>    
            <div class="col-6">
                <div class="text-center mt-5">
                    <a href="<?= $berita['berita_gambar']; ?>">
                        <img src="/gambar/berita/<?= $berita['berita_gambar']; ?>" alt="<?= $berita['berita_judul']; ?>" width="500" height="300" class="image-prodi">
                    </a>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>