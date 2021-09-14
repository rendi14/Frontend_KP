<section id="herostatis" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Statis</h1>
            <h1>Akademi Komunitas Toyota Indonesia</h1>
        </div>
    </div>
</section>


<section id="features" class="features">
    <div class="container">

        <div class="section-title pt-70" data-aos="fade-up">
            <h2>Statis</h2>
            <p>Akademi Komunitas Toyota Indonesia Memiliki statis</p>
        </div>


        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <?php foreach ($user as $p) : ?>
                <div class="col-lg-3 col-md-4 mb-3">
                    <div class="icon-box">
                        <i class="bx bx-store" style="color: #ffbb2c;"></i>
                        <h3><a href="/Halaman/detailstatis/<?= $p['statis_judul']; ?>"><?= $p['statis_judul']; ?></a></h3>
                        <a href="/Halaman/detailstatis/<?= $p['statis_judul']; ?>" class="link-btn"><i class="flaticon-next-button"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('user', 'dosen_data') ?>

        <!-- <div class="pagination-area text-center">
            <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
            <span class="page-numbers current" aria-current="page">1</span>
            <a href="#" class="page-numbers">2</a>
            <a href="#" class="page-numbers">3</a>
            <a href="#" class="page-numbers">4</a>
            <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
        </div> -->


        <!-- <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bx bx-chart" style="color: #5578ff;"></i>
                    <h3><a href="">Profil AKTI</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bx bx-calendar" style="color: #e80368;"></i>
                    <h3><a href="">Visi Misi</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="bx bx-paint" style="color: #e361ff;"></i>
                    <h3><a href="">Strategi Jangka Panjang 2009-2020</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-data" style="color: #47aeff;"></i>
                    <h3><a href="">Program Strategis</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-key" style="color: #ffa76e;"></i>
                    <h3><a href="">Paradigma Pendidikan</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-file" style="color: #11dbcf;"></i>
                    <h3><a href="">TOPKR4</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-mouse" style="color: #4233ff;"></i>
                    <h3><a href="">TPMO</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-anchor" style="color: #b2904f;"></i>
                    <h3><a href="">Lembaga Penelitian dan Pengabdian Masyarakat</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-alarm" style="color: #ff5828;"></i>
                    <h3><a href="">Teknologi Informasi dan Komunikasi</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-fingerprint" style="color: #29cc61;"></i>
                    <h3><a href="">Kurikulum TPMO</a></h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="bx bx-fingerprint" style="color: #29cc61;"></i>
                    <h3><a href="">Kurikulum TOPKR4</a></h3>
                </div>
            </div> -->
    </div>

    </div>
</section>