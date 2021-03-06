<section id="heroakademik" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Akademik</h1>
            <h1>Akademi Komunitas Toyota Indonesia</h1>
        </div>
    </div>
</section>


<section id="akademik" class="akademik">
    <div class="container">

        <div class="section-title">
            <h2>akademik</h2>
        </div>

        <div class="row">
            <?php foreach ($user as $u) : ?>
                <div class="col-md-6">
                    <div class="icon-box mb-3">
                        <img src="" alt="">
                        <td class="text-center"><img src="/gambar/akademik/<?= $u['akademik_gambar']; ?>" alt="<?= $u['akademik_title']; ?>" width="60px;" height="60px;"></td>
                        <h4>
                            <a><?= $u['akademik_title']; ?></a>
                        </h4>
                        <p>
                            <td><?= $u['akademik_deskripsi']; ?></td>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>