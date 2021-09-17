<section id="heroTOPKR4" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange pt-200">
            <h1>Kenali ,TOPKR4</h1>
            <h1>Tata Operasi Perakitan Kendaraan Roda 4</h1>
        </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="30" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="30" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="30" y="9" fill="#fff">
            </g>
        </svg>

    </div>


</section>



<!-- 
<div class="containerTOPKR2">
    <div class="judul2TOPKR">
        <h2>Kenali Lebih Jauh</h2>
    </div> -->
<div class="containerTPMO2">
    <div class="section-title pt-70">
        <h2>Kenali Lebih Jauh</h2>
    </div>

    <section id="icon-boxes22" class="icon-boxes22">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
                    <div class="section-title">
                        <h4>Tentang</h4>
                        <p>Tata Operasi Perakitan Kendaraan Roda 4 (empat)</p>
                        <div class="btn22">
                            <a href="/Halaman/tentangTOPKR4" class="default-btn">Gabung</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">

                    <div class="section-title">
                        <h4>Visi Misi</h4>
                        <p data-aos="fade-in">Tata Operasi Perakitan Kendaraan Roda 4 (empat)</p>
                        <div class="btn22">
                            <a href="/Halaman/visimisiTOPKR4" class="default-btn">Gabung</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                    <div class="section-title">
                        <h4>Kurikulum</h4>
                        <p>Tata Operasi Perakitan Kendaraan Roda 4 (empat)</p>
                        <div class="btn22">
                            <a href="/Halaman/kurikulumTOPKR4" class="default-btn">Gabung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="TPMO2">


    <div class="section-title-bgorange pt-70">
        <h2>Staff Pengejar</h2>
    </div>

    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach ($TOPKR4 as $p) : ?>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="/gambar/dosen/<?= $p['dosen_foto'] ?>" class="testimonial-img" alt="">
                                <h3><?= $p['dosen_nama'] ?></h3>
                                <h4><?= $p['dosen_nip'] ?></h4>
                                <p>
                                    <!-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> -->
                                    <?= $p['dosen_jabatan'] ?>
                                    <!-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> -->
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</div>