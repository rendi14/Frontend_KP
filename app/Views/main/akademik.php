<section id="heroTPMO" class="d-flex justify-cntent-center align-items-center">
    <div class="carousel-item active">
        <div class="section-title-bgorange ptb-70">
            <h1>Akademik</h1>
            <h1>Akademi Komunitas Toyota Indonesia</h1>
        </div>
    </div>
</section>



<!-- ======= Services Section ======= -->
<section id="akademik" class="akademik">
    <div class="container">

        <div class="section-title">
            <h2>akademik</h2>
            <!-- <p>akademik yang dimiliki AKTI</p> -->
        </div>

        <div class="row">
            <?php foreach ($user as $u) : ?>
                <div class="col-md-6">
                    <div class="icon-box">
                        <!-- <i class="bx bx-briefcase"></i> -->
                        <!-- <img src="/assets/img/akademik/1611204006-Presentation3.jpg" alt=""> -->
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
                <!-- <div class="col-md-6 mt-4 mt-lg-0">
                    <div class="icon-box">
                    
                        <img src="/assets/img/akademik/1611204306-Presentation5.jpg" alt="">
                        <h4><a href="#">Tentang Program Studi</a></h4>
                        <p> Akademi Komunitas Toyota Indonesia memiliki 2 program studi, yaitu : TPMO, TOPKR 4</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        
                        <img src="/assets/img/akademik/1611204533-Presentation6.png" alt="">
                        <h4><a href="#">Bagaimana Kuliah di Akademi Komunitas Toyota Indonesia ?</a></h4>
                        <p>Akademi Komunitas Toyota Indonesia menyediakan fasilitas yang sangat baik bagi siswa untuk mendukung proses belajar mengajar</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                      
                        <img src="/assets/img/akademik/1618540064-Reputasi.png" alt="">
                        <h4><a href="#">Reputasi</a></h4>
                        <p>Akademi Komunitas Toyota Indonesia telah memenangkan banyak penghargaan baik secara nasional maupun internasional</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                       
                        <img src="/assets/img/akademik/1618539882-Dosen.png" alt="">
                        <h4><a href="#">Dosen</a></h4>
                        <p> Akademi Komunitas Toyota Indonesia tidak hanya fokus mengmebangkan generasi bangsa dibidang akademik</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <img src="/assets/img/akademik/1618539955-Karir.png" alt="">
                       
                        <h4><a href="#">Karir</a></h4>
                        <p>AKTI juga membimbing mahasiswanya sesuai dengan visi Akademi Komunitas Toyota Indonesia di masa depan</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <img src="/assets/img/akademik/1618540039-Kolaborasi.png" alt="">
                        
                        <h4><a href="#">Kolaborasi</a></h4>
                        <p>Akademi Komunitas Toyota Indonesia memiliki banyak kerjasama yang baik dengan banyak perusahaan di Indonesia</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <img src="/assets/img/akademik/1618539927-Fasilitas.png" alt="">
                        
                        <h4><a href="#">Fasilitas</a></h4>
                        <p> Akademi Komunitas Toyota Indonesia menyediakan fasilitas yang baik bagi mahasiswa untuk mendukung proses belajar mengajar</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <img src="/assets/img/akademik/1618540012-Keunggulan.png" alt="">
                        
                        <h4><a href="#">Keunggulan</a></h4>
                        <p> Akademi Komunitas Toyota Indonesia memiliki staf pengajar yang berpengalaman di bidangnya dan sejumlah penelitian yang berkualitas</p>
                    </div>
                </div> -->
            <?php endforeach; ?>
        </div>


    </div>
</section>