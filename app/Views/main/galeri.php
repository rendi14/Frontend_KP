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
                        <img src="/gambar/album/<?= $p['galeri_gambar'] ?>" alt="5 Terre" style="width:100%">
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




<!-- 
<section class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-gallery-item">
                    <a data-fancybox="gallery" href="assets/img/blog/blog-img1.jpg">
                        <img src="assets/img/blog/blog-img1.jpg" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->