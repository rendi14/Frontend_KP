<section id="herotenagakerja" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Akti Kuat Bersama</h1>
            <h1>Tenaga Kerja</h1>
        </div>

    </div>
</section>


<div class="tenagakerjaakti">
    <section id="portfolio" class="portfoio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tenaga kerja</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-app">Direktur</li>
                        <li data-filter=".filter-card">Yayasan dan Senat</li>
                        <li data-filter=".filter-web">Unit</li>
                    </ul>
                </div>
            </div>

            <br>
            <br>

            <div class="row portfolio-container">
                <div class="galeriitem filter-app">
                    <section id="tenagakerja" class="tenagakerja">
                        <div class="container">
                            <div class="row">
                                <?php foreach ($direktur as $p) : ?>
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

                                        <div class="member">
                                            <img src="/gambar/dosen/<?= $p['dosen_foto'] ?>" class="testimonial-img" alt="">
                                            <h4><?= $p['dosen_nama'] ?></h4>
                                            <span><?= $p['dosen_nip'] ?></span>
                                            <p>
                                                <?= $p['dosen_jabatan'] ?>
                                            </p>
                                            <!-- <div class="social">
                                                <a href=""><i class="bx bxl-twitter"></i></a>
                                                <a href=""><i class="bx bxl-facebook"></i></a>
                                                <a href=""><i class="bx bxl-instagram"></i></a>
                                                <a href=""><i class="bx bxl-linkedin"></i></a>
                                            </div> -->
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="galeriitem filter-web">
                    <section id="tenagakerja" class="tenagakerja">
                        <div class="container">
                            <div class="row">
                                <?php foreach ($Tenagaunit as $p) : ?>
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

                                        <div class="member">
                                            <img src="/gambar/dosen/<?= $p['dosen_foto'] ?>" class="" alt="">
                                            <h4><?= $p['dosen_nama'] ?></h4>
                                            <span><?= $p['dosen_nip'] ?></span>
                                            <p>
                                                <?= $p['dosen_jabatan'] ?>
                                            </p>
                                            <!-- <div class="social">
                                                <a href=""><i class="bx bxl-twitter"></i></a>
                                                <a href=""><i class="bx bxl-facebook"></i></a>
                                                <a href=""><i class="bx bxl-instagram"></i></a>
                                                <a href=""><i class="bx bxl-linkedin"></i></a>
                                            </div> -->
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="galeriitem filter-card">
                    <section id="tenagakerja" class="tenagakerja">
                        <div class="container">
                            <div class="row">
                                <?php foreach ($yayasan as $p) : ?>
                                    <div class="col-lg-4 col-md-10 d-flex align-items-stretch">

                                        <div class="member">
                                            <img src="/gambar/dosen/<?= $p['dosen_foto'] ?>" class="" alt="">
                                            <h4><?= $p['dosen_nama'] ?></h4>
                                            <span><?= $p['dosen_nip'] ?></span>
                                            <p>
                                                <?= $p['dosen_jabatan'] ?>
                                            </p>
                                            <!-- <div class="social">
                                                <a href=""><i class="bx bxl-twitter"></i></a>
                                                <a href=""><i class="bx bxl-facebook"></i></a>
                                                <a href=""><i class="bx bxl-instagram"></i></a>
                                                <a href=""><i class="bx bxl-linkedin"></i></a>
                                            </div> -->
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>