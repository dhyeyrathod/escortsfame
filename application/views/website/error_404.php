<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login To Access For Ads Post</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="escorts ads listing, login for ads posting" name="keywords">
        <meta content="Escortsframe this page provide you a gateway to access here to list your classifieds about top independent escorts details" name="description">
        <?php $this->load->view('website/common/css') ?>
    </head>
    <body>
        <?php $this->load->view('website/common/header') ?>
        <main id="main">
            <section id="portfolio"  class="section-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mt-4">
                            <div class="bannersLink"> 
                                <a href="http://www.komalshrma.com/"> Bangalore Escorts </a> 
                                <a href="https://www.delhiescortsx.com/"> Delhi Escorts </a> 
                                <a href="http://www.ankitavermas.com/"> Mumbai Escorts </a> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4 mt-4">
                            <?php $this->load->view('website/common/filter_city_country') ?>
                        </div>
                    </div>
                    <header class="section-header">
                        <h3 class="section-title">Login</h3>
                    </header>
                    <div class="row portfolio-container">
                        <div class="col-lg-2 col-md-6">
                            <div class=" left-bg">
                                <div class="vertical-menu">
                                    <h1>Select Country</h1>
                                    <ul>
                                        <?php foreach ($all_contry_key as $all_contry_data) : ?>
                                            <?php $url = base_url('escorts')."/".$all_contry_data->country_name ."/0"; ?>
                                            <li><a href="<?= $url ?>"><span><i class="fa fa-chevron-right"></i></span> <span class="flag flag-<?= $all_contry_data->sortname ?>"></span> <?= $all_contry_data->country_name ?></a></li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 mb-4 pl-2 pr-2">
                            <div class="contactbox-bg">
                                <h4 class="text-center" style="color: #fdd678">Page Not Found</h4>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                            <div class="add-img"><a href="#" target="blank"><img src="<?= base_url('assets/website') ?>/images/d-1.gif"></a></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php $this->load->view('website/common/footer') ?>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <?php $this->load->view('website/common/js') ?>
    </body>
</html>
