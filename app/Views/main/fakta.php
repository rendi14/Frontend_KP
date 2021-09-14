<section id="fakta" class="fakta">
    <div class="container">
        <div class="section-title">
            <h2>Fakta</h2>
        </div>
        <div class="row">
            <?php foreach ($user as $u) : ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-3">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-heart"></i></div>
                        <h4><a href=""><?= $u['keterangan']; ?></a></h4>
                        <p><?= $u['title']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>