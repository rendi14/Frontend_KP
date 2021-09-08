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


                        <!-- <img src="/assets/img/galeri/galeri2.jpg" class="img-fluid" alt=""> -->
                        <a href=""><img src="/gambar/album/<?= $p['galeri_gambar'] ?>" alt="5 Terre" style="width:100%"></a>
                        <div class="portfolio-info">
                            <!-- <h4>Web 3</h4>
                        <p>Web</p> -->
                            <!-- <div class="portfolio-links">
                            <a href="/assets/img/galeri/galeri2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        </div> -->
                            <div class="container-text">
                                <p><?= $p['galeri_judul'] ?></p>
                                <p><?= $p['galeri_deskripsi'] ?></p>

                            </div>

                            <div class="portfolio-links">

                                <a href="/gambar/album/<?= $p['galeri_gambar'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title=<?= $p['galeri_judul'] ?>><i class="bx bx-plus"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>

            <!-- <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="/assets/img/galeri/galeri3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="/assets/img/galeri/galeri3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="/assets/img/galeri/galeri2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="/assets/img/galeri/galeri2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="/assets/img/galeri/galeri1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="/assets/img/galeri/galeri1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2s"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="/assets/img/galeri/galeriweb2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="/assets/img/galeri/galeriweb2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="/assets/img/galeri/galericode1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="/assets/img/galeri/galericode1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item ">
                <div class="portfolio-wrap">
                    <img src="/assets/img/galeri/galeriweb3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="/assets/img/galeri/galeriweb3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>

                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section><!-- End Portfolio Section -->