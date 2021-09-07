<div class="halaman7home">

    <section class="portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="section-title-bgorange">
                <h2>Berita Terkini Bersama Akti...</h2>
            </div>
        </div>

        <div class="container-fluid">

            <div class="portfolio-slides owl-carousel owl-theme">
                <?php foreach ($berita as $p) : ?>
                    <div class="single-portfolio-item">
                        <a href="#" class="image d-block">
                            <img src="/gambar/berita/<?= $p['berita_gambar']; ?> " alt="<?= $p['berita_judul']; ?> " width=" 500" height="300" class="image-prodi">
                        </a>
                        <div class="content">
                            <h3><a><?= $p['berita_judul']; ?></a></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>