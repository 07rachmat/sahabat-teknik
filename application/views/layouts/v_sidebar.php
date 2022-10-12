<?php
$id_user = $this->session->userdata('id_user');
$users = $this->db->get_where('users', ['id_user' => $id_user])->row();
?>

<!--- Sidemenu -->
<ul class="side-nav">

    <li class="side-nav-title side-nav-item">Navigation</li>

    <?php if ($this->session->userdata('level') == 'admin') { ?>
        <li class="side-nav-item <?= $this->uri->segment('1') == 'dashboard' ? 'menuitem-active' : '' ?>">
            <a href="<?= base_url('dashboard') ?>" class="side-nav-link active">
                <i class="uil-home"></i>
                <span> Dashboard </span>
            </a>
        </li>
    <?php  } ?>


    <li class="side-nav-item <?= $this->uri->segment('1') == 'pengajuan' ? 'menuitem-active' : '' ?>">
        <a href="<?= base_url('pengajuan') ?>" class="side-nav-link active">
            <i class="uil-comment-lines"></i>
            <span> Pengajuan </span>
        </a>
    </li>

    <li class="side-nav-item <?= $this->uri->segment('1') == 'derek' ? 'menuitem-active' : '' ?>">
        <a href="<?= base_url('derek') ?>" class="side-nav-link">
            <i class="uil-car-sideview"></i>
            <span> Derek </span>
        </a>
    </li>

    <li class="side-nav-item <?= $this->uri->segment('1') == 'spareparts' ? 'menuitem-active' : '' ?>">
        <a href="<?= base_url('spareparts') ?>" class="side-nav-link">
            <i class="uil-bag-alt"></i>
            <span> Spareparts </span>
        </a>
    </li>

    <?php if ($this->session->userdata('level') == 'admin') { ?>
        <li class="side-nav-item <?= $this->uri->segment('1') == 'teknisi' ? 'menuitem-active' : '' ?>">
            <a href="<?= base_url('teknisi') ?>" class="side-nav-link">
                <i class="uil-users-alt"></i>
                <span> Teknisi </span>
            </a>
        </li>

        <li class="side-nav-item <?= $this->uri->segment('1') == 'users' ? 'menuitem-active' : '' ?>">
            <a href="<?= base_url('users') ?>" class="side-nav-link">
                <i class="uil-user"></i>
                <span> Users </span>
            </a>
        </li>
    <?php  } ?>

    <li class="side-nav-item <?= $this->uri->segment('1') == 'ganti_password' ? 'menuitem-active' : '' ?>">
        <a href="<?= base_url('ganti_password') ?>" class="side-nav-link">
            <i class="uil-unlock-alt"></i>
            <span> Ganti Password </span>
        </a>
    </li>

    <li class="side-nav-item <?= $this->uri->segment('1') == 'logout' ? 'menuitem-active' : '' ?>">
        <a href="<?= base_url('logout') ?>" class="side-nav-link">
            <i class="mdi mdi-logout"></i>
            <span> Logout </span>
        </a>
    </li>
</ul>
<!-- End Sidebar -->

<div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->}

<div class="content-page">
    <div class="content">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topbar-menu float-end mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="<?= base_url() ?>assets//images/users/<?= $users->foto ?>" alt="user-image" class="rounded-circle">
                        </span>
                        <span>
                            <span class="account-user-name"><?= $users->nama_user ?></span>
                            <span class="account-position"><?= $users->level == 'admin' ? 'Administrator' : 'Teknisi' ?></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                        <!-- item-->
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Selamat Datang !</h6>
                        </div>

                        <!-- item-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>Akun Saya</span>
                        </a> -->

                        <!-- item-->
                        <a href="<?= base_url('logout') ?>" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>

            </ul>
            <button class="button-menu-mobile open-left">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>
        <!-- end Topbar -->