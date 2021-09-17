<section id="heroTPMO" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Kenali ,TPMO</h1>
            <h1>lebih dekat Dengan TPMO</h1>
        </div>
    </div>
</section>



<div class="visimisiTPMO">
    <section id="features" class="features section-bg">
        <?php foreach ($tpmo as $p) : ?>
            <div class="container">
                <div class="section-title">
                    <h2 data-aos="fade-in">VISI DAN MISI</h2>
                    <p data-aos="fade-in">visi dan misi <?= $p['prodi_nama'] ?></p>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right">
                        <div class="animasitentang1">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_omszt4va.json" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>

                    <div class="col-md-7 pt-4" data-aos="fade-left">
                        <h3>VISI</h3>
                        <ul>
                            <li><i class="bx bx-check"></i><?= $p['prodi_visi']; ?></li>
                        </ul>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <div class="animasitentang2">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_vkvdhuhj.json" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-right">
                        <h3>MISI</h3>
                        <ul>
                            <?php if ($p['prodi_misi'] != '') : ?>

                                <dd class="col-sm-10 text-align-justify"><?= $p['prodi_misi']; ?></dd>
                            <?php else : ?>

                                <dd class="col-sm-10 text-align-justify fw-bold">-</dd>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </section>

</div>