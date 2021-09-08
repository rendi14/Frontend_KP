<section id="portfolioalbum" class="portfolioalbum">
    <div class="container" data-aos="fade-up">
        <header class="section-title pt-70">
            <h2>Album Galeri</h2>
        </header>

        <div class="row gy-4 " data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($album as $p) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <!-- <img src="/assets/img/galeri/galeri3.jpg" class="img-fluid" alt=""> -->
                        <a href="/dashboard/albumGaleri/<?= $p['album_id'] ?>"><img src="/gambar/album/<?= $p['album_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
                        <div class="portfolio-info">
                            <h4><?= $p['album_judul'] ?></h4>
                            <p><?= $p['album_deskripsi'] ?></p>
                            <div class="portfolio-links">
                                <a href="/dashboard/albumGaleri/<?= $p['album_id'] ?>"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>