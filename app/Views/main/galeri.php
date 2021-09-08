<!-- ======= Portfolio Section ======= -->
<section id="portfolioalbum" class="portfolioalbum">
    <div class="container" data-aos="fade-up">
        <header class="section-title pt-70">
            <h2>Album Galeri</h2>
        </header>

        <div class="row gy-4 " data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($galeri as $p) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <a href=""><img src="/gambar/album/<?= $p['galeri_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
                        <div class="portfolio-info">
                            <p><?= $p['galeri_judul'] ?></p>
                            <p><?= $p['galeri_deskripsi'] ?></p>

                            <div class="portfolio-links">
                                <a href="/gambar/album/<?= $p['galeri_gambar'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $p['galeri_judul'] ?>"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>