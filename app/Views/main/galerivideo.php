<!-- ======= Portfolio Section ======= -->
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

            <!-- <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <div class="article-video">
                        <iframe src="https://www.youtube.com/embed/u6WRy6d_WSQ"></iframe>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="https://www.youtube.com/watch?v=u6WRy6d_WSQ" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <div class="article-video">
                        <iframe src="https://www.youtube.com/embed/74B90k9u4wQ"></iframe>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="https://www.youtube.com/watch?v=74B90k9u4wQ" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <div class="article-video">
                        <iframe src="https://www.youtube.com/embed/3LkA9dBLAlo"></iframe>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="https://www.youtube.com/watch?v=3LkA9dBLAlo" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <div class="article-video">
                        <iframe src="https://www.youtube.com/embed/IJBkCV2tDz4"></iframe>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="https://www.youtube.com/watch?v=IJBkCV2tDz4" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <div class="article-video">
                        <iframe src="https://www.youtube.com/embed/Nvedr1AeQt8"></iframe>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="https://www.youtube.com/watch?v=Nvedr1AeQt8" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section><!-- End Portfolio Section -->