
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-orange sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    <img src="/gambar/crop.ico" alt="" width="70" height="40">
                </div>
                <div class="sidebar-brand-text mx-3">PT.CROP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if (session()->get('user_level') === '1'): ?>
            <li class="nav-item">
                <a class="nav-link" href="/MenuDashboard">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Halaman Dinamis Admin</span></a>
            </li>
            <?php else: ?>

            <?php endif?>            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data 
            </div>
            <!-- <li class="nav-item">
                <a class="nav-link" href="/dashboard/dataDosen">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Dosen</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/dataAkademik">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Data Akademik</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/dataProdi">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Data Prodi</span></a>
            </li> -->
            <?php foreach ($sidebar as $s): ?>
                <?php if (session()->get('user_level') === $s['admin_level_kode']): ?>
                <li class="nav-item">
                <a class="nav-link" href="/<?= $s['menu_url'] ?>">
                    <i class="fas fa-fw <?= $s['menu_deskripsi']?>"></i>
                    <span><?= $s['menu_nama'] ?></span></a>
                </li>
                <?php else: ?>

                <?php endif?>
             <?php endforeach ?>   

            <!-- Nav Item - Pages Collapse Menu -->
<!--             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
 <!--            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <?php if (session()->get('user_level') === '1'): ?>
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Admin
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/dataAdmin">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Admin</span></a>
            </li>
            <?php else: ?>

            <?php endif?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
<!--             <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

