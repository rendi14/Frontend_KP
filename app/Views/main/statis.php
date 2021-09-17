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
                        <i class=""> <img src="/gambar/statis/<?= $p['statis_gambar']; ?>" alt="<?= $p['statis_judul']; ?>" width="50" height="50" class="image-prodi"></i>

                        <h3><a href="/Halaman/detailstatis/<?= $p['statis_judul']; ?>"><?= $p['statis_judul']; ?></a></h3>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('user', 'dosen_data') ?>
    </div>

    </div>
</section>