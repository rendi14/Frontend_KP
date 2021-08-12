<?=$this->extend('layout/mainlayout')?>

<?=$this->section('cont')?>
<!-- Header  -->
    <div class="background">
        <!-- <img src="gambar/background.jpg" alt="PT.CROP"> -->
    </div>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col-10 col-lg-5 p-5 form-data border border-2">
                <h3 class="mb-5">Login</h3>
                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger">
                        <?=session()->getFlashdata('msg')?>
                        </div>
                <?php endif;?>
                <form action="/login/auth" method="post" class="form-data-login">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control p-2" id="InputForName">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control p-2" id="InputForPassword">
                    </div>
<!--                     <p>Membutuhkan akun ? <span class="span-register"><a href="/registrasi" class=" text-decoration-none">Registrasi</a></span> sekarang</p> -->
                    <div class="button d-flex justify-content-center">
                    <button type="submit" class="btn mb-2 rounded-pill button-login-admin">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?=$this->endSection()?>