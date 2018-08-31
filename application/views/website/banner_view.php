<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Escortframe Classifieds Banner Ads</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="escorts banner frame,escorts banner ads" name="keywords">
        <meta content="Find the top escorts classifieds ads banner ads code for your website." name="description">
        <?php $this->load->view('website/common/css') ?>
    </head>
    <body>
        <?php $this->load->view('website/common/header') ?>
        <main id="main">
            <section id="portfolio"  class="section-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mt-4">
                            <div class="bannersLink"> <a href="#"> Live Sex </a> <a href="#"> London Escorts </a> <a href="#"> Cam Girls </a> </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4 mt-4">
                            <?php $this->load->view('website/common/filter_city_country') ?>
                        </div>
                    </div>
                    <header class="section-header">
                        <h3 class="section-title">Escorts Fame Banners </h3>
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
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 mb-4 pl-2 pr-2">
                                    <div class="our-banner">
                                        <img src="<?= base_url('assets/website') ?>/images/banner.gif" />
                                        <div class="clearfix"></div>
                                        <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                                        <img src="<?= base_url('assets/website') ?>/images/banner.gif" style=" width:400px;" />
                                        <div class="clearfix"></div>
                                        <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                                        <img src="<?= base_url('assets/website') ?>/images/banner.gif"  style=" width:300px;"/>
                                        <div class="clearfix"></div>
                                        <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                                        <img src="<?= base_url('assets/website') ?>/images/banner.gif" style=" width:250px;" />
                                        <div class="clearfix"></div>
                                        <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                                        <img src="<?= base_url('assets/website') ?>/images/banner.gif" style=" width:200px;" />
                                        <div class="clearfix"></div>
                                        <textarea class="form-control" cols="60" rows="5">&lt;a href="http://escortsfame.com/" target="_blank" title="escortsfame.com"&gt;&lt;img src="http://escortsfame.com/images/banner.gif" alt="escortsfame.com"&gt;&lt;/a&gt;</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <?php foreach ($banner_key as $banner_data) : ?>
                                <div class="add-img"><a href="<?= $banner_data->webiste_url ?>" target="blank"><img src="<?= base_url('banner_image') ?>/<?= $banner_data->banner_image ?>"></a></div>
                            <?php endforeach ; ?>
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
