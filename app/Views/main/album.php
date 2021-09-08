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
        <a href="" data-toggle="modal" data-target="#modalAlbumData" class="ms-4">Selengkapnya...</a>
    <?php endif ?>
    </div>
</div>
<!-- End of Content Wrapper -->

</div>