<section id="heroagenda" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Agenda</h1>
            <h1>Akademi Komunitas Toyota Indonesia</h1>
        </div>
    </div>
</section>

<section class="agenda ptb-100 bg-f9f9f9">
    <div class="container">
        <div class="section-title">
            <h2>Agenda</h2>
        </div>
        <ol class="timeline history-timeline">
            <?php foreach ($agenda_user as $a) : ?>
                <li class="timeline-block">
                    <div class="timeline-date">
                        <!-- <span>2010</span>
                        February 20
                        <sup>th</sup> -->

                        <span> <?= $a['agenda_mulai'] ?></span>
                        <span><?= $a['agenda_jam'] ?></span>
                        <span><?= $a['agenda_tempat'] ?></span>
                    </div>
                    <div class="timeline-icon">
                        <span class="dot-badge"></span>
                    </div>
                    <div class="timeline-content">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12">
                                <div class="content">
                                    <h5><?= $a['agenda_tema'] ?></h5>
                                    <p><?= $a['agenda_deskripsi'] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="image">
                                    <img src="/gambar/agenda/<?= $a['agenda_gambar'] ?>" class="img-fluid rounded-start" alt="<?= $a['agenda_tema'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            <?php endforeach; ?>
            <?= $pager->links('agenda', 'dosen_data') ?>

        </ol>

    </div>
</section>