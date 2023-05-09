<?php
$nim = $this->session->userdata('username');
$angkatan = $this->model_user->getKTM($nim);
$img = 'https://api.um.ac.id/akademik/operasional/GetFoto.ptikUM?nim=' . $nim . '&angkatan=' . $angkatan['tahun_masuk'] . '';
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url('assets/') ?>img/logo hmj.png" alt="Logo HMJ" class="brand-image img-circle ">
        <span class="brand-text font-weight-light"><b>HMJ Teknik Elektro</b></span>
    </a>
    <!-- Brand -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-1 d-flex" -->
            <div class="image">
                <!--src= $img onerror="this.-->
                <img src="<?= $img ?>" onerror="this.src='<?= base_url('assets/') ?>dist/img/user2-160x160.jpg'" class="img-circle elevation-2" width="80" alt="User Image">
            </div>
            <div class="info text-center">
                <a href="<?= site_url('Profile'); ?>" class="d-block"><?= $this->session->userdata('nama') ?></a>
            </div>
        </div>

        <!--jabatan    -->
        <div class="pt-0 pb-1 brand-link text-center">
            <small class="brand-text">
                <?= $this->session->userdata('jabatan') ?>
            </small>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library /has-treeview menu-open/active-->
                <li class="nav-item ">
                    <a href="<?= site_url('kabid') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Program Kerja<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('kabid/timeline') ?>" class="nav-link">
                                <i class="far fa-calendar-alt nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('kabid/pengajuan') ?>" class="nav-link">
                                <i class="fas fa-paper-plane nav-icon"></i>
                                <p>Pengajuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('kabid/progress') ?>" class="nav-link">
                                <i class="far fa-calendar-check nav-icon"></i>
                                <p>Progress</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('kabid/laporan') ?>" class="nav-link">
                                <i class="fas fa-book nav-icon"></i>
                                <p>Laporan Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('kabid/rekrut') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Recruitment</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo site_url('kabid/lpj') ?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>LPJ</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>