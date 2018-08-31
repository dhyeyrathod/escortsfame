<?php 
    // echo "<pre>";
    // print_r($this->session->all_userdata());
    // exit();
?>
<header id="header">
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <div class="nav-box-left"> <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/website') ?>/images/logo.png" /></a></div>
                <div class="nav-box-right"><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button></div>
                <div class="clesr"></div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('banner') ?>"> Our Banners </a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('create_site') ?>">Create Site</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url('contact_us') ?>">Contact Us</a> </li>
                        <?php if ($this->session->userdata('user_id')) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username') ?></a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= base_url('profile/myads') ?>">MY ads</a>
                                    <a class="dropdown-item" href="<?= base_url('profile/addnew') ?>">add new profile</a>
                                    <a class="dropdown-item" href="<?= base_url('account/logout') ?>">Logout</a>
                                </div>
                            </li>
                        <?php else : ?>
                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('account/login') ?>">Login</a> </li>
                        <?php endif ; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>