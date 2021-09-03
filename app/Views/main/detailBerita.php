<div class="container mt-3">
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <form action="/Halaman/detailBerita" method="post" style="text-align: left;" name="form">
            <div class="col-6">
                <div class="text-center mt-5" style="padding-bottom: 50px;">
                    <a href="/gambar/berita/<?= $p['berita_gambar']; ?>">
                        <img src="/gambar/berita/<?= $p['berita_gambar']; ?>" alt="<?= $p['berita_judul']; ?>" width="500" height="300" class="image-prodi">
                    </a>
                </div>
                <input type="text" name="Gambar" id="Gambar" value="<?= $p['berita_gambar']; ?>" style="border: white; background-color: white; font-size: 1px;" readonly>
            </div>
        </form>

    </div>
</div>