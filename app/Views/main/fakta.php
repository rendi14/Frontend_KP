<!-- <section id="fakta" class="fakta">
    <div class="container">
        <div class="section-title">
            <h2>Fakta akti</h2>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-3">
                <div class="icon-box">

                </div>
            </div>

        </div>
    </div>
</section> -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title pt-100" data-aos="fade-up">
            <h2>Fakta akti</h2>

        </div>

        <div class="row">
            <?php foreach ($user as $u) : ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class=""> <img src="/gambar/fakta/<?= $u['gambar']; ?> "></i></div>
                        <!-- <img src="/gambar/fakta/<?= $u['gambar']; ?> "> -->
                        <h4 class=" title"><a href=""><?= $u['keterangan']; ?></a></h4>
                        <p><?= $u['title']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
            </div> -->
        </div>

    </div>
</section>