<div class="detailberita">

    <section id="berita-details" class="berita-details">

        <div class="section-title">
            <h2>Detail <?= $statis['statis_judul']; ?></h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="gambarjudul">
                        <a href="<?= $statis['statis_gambar']; ?>">
                            <img src="/gambar/berita/<?= $statis['statis_gambar']; ?>" alt="<?= $statis['statis_judul']; ?>" class="image-prodi">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3 class="text-center"><?= $statis['statis_judul']; ?></h3>
                        <ul>
                            <li><strong>Waktu Statis</strong>: <?= $statis['statis_waktu']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
                <p>
                    <?= $statis['statis_deskripsi']; ?>
                </p>
            </div>

        </div>

    </section>
</div>