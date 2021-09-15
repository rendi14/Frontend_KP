<div class="detailberita">

    <section id="berita-details" class="berita-details">
        <?php foreach ($TOPKR4 as $p) : ?>
            <div class="section-title">
                <h2>Kurikulum <?= $p['prodi_nama'] ?></h2>
            </div>
            <div class="container">
                <div class="portfolio-description">
                    <p>
                        <?= $p['prodi_kurikulum']; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>