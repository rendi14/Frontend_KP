<!-- ======= About Us Section ======= -->
<section id="about" class="about ptb-70">
    <div class="container">
        <?php foreach ($TOPKR4 as $p) : ?>
            <div class="section-title">
                <h2>Tentang</h2>
                <p><?= $p['prodi_nama'] ?></p>
            </div>

            <div class="row">

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                     <p class="fst-italic">
                        
                     </p> -->

                    <p>
                        <?= $p['prodi_kurikulum']; ?>
                    </p>
                </div>
            </div>

    </div>

<?php endforeach; ?>
</section><!-- End About Us Section -->