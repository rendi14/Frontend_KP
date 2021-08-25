<section id="heroTPMO" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Kenali ,TOPKR4</h1>
            <h1>lebih dekat Tentang TOPKR4</h1>
        </div>
    </div>
</section>

<!-- ======= About Us Section ======= -->
<section id="about" class="about ptb-70">
    <div class="container">
        <?php foreach ($TOPKR4 as $p) : ?>
            <div class="section-title">
                <h2>Tentang</h2>
                <p><?= $p['prodi_nama'] ?></p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="/gambar/prodi/<?= $p['prodi_foto']; ?>" alt="<?= $p['prodi_nama']; ?>" width="500" height="300" class="image-prodi"></dd>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                     <p class="fst-italic">
                        
                     </p> -->

                    <p>
                        <?= $p['prodi_tentang']; ?>
                    </p>
                </div>
            </div>

    </div>

<?php endforeach; ?>
</section><!-- End About Us Section -->