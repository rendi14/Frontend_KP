<section id="portfoliovideo" class="portfoliovideo">
    <div class="container" data-aos="fade-up">
        <header class="section-title pt-70">
            <h2>Video Galeri</h2>
        </header>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($video as $p) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">

                        <div class="article-video">

                            <iframe src="<?= $p['video_link'] ?>"></iframe>
                        </div>
                        <div class="portfolio-info">
                            <h4><?= $p['video_judul'] ?></h4>
                            <p><?= $p['video_deskripsi'] ?></p>
                            <div class="portfolio-links">
                                <a href="<?= $p['video_link'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $p['video_judul'] ?>"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>