<div class="detailberita">

    <section id="berita-details" class="berita-details">

        <div class="section-title">
            <h2>Detail Berita</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <a href="<?= $berita['berita_gambar']; ?>">
                        <img src="/gambar/berita/<?= $berita['berita_gambar']; ?>" alt="<?= $berita['berita_judul']; ?>" width="500" height="300" class="image-prodi">
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3 class="text-center"><?= $berita['berita_judul']; ?></h3>
                        <ul>
                            <li><strong>Waktu Berita</strong>: <?= $berita['berita_waktu']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
                <p>
                    <?= $berita['berita_deskripsi']; ?>
                </p>
            </div>

        </div>

    </section>
</div>