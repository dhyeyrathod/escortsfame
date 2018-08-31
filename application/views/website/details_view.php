<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Escorts Classified Ads India | Adult Ads Posting Classifieds India | Submit Ads in India</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <?php $this->load->view('website/common/css') ?>
    </head>
    <body>
        <?php $this->load->view('website/common/header') ?>
        <main id="main">
            <section id="portfolio"  class="section-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 mb-4 mt-4">
                            <div class="bannersLink"> <a href="#"> Live Sex </a> <a href="#"> London Escorts </a> <a href="#"> Cam Girls </a> </div>
                        </div>
                        <div class="col-lg-7 col-md-7 mb-4 mt-4">
                            <?php $this->load->view('website/common/filter_city_country') ?>
                        </div>
                    </div>
                    <header class="section-header">
                        <h3 class="section-title">Profile</h3>
                    </header>
                    <div class="row portfolio-container">
                        <div class="col-lg-2 col-md-6">
                            <div class=" left-bg">
                                <div class="vertical-menu">
                                    <h1>Select Country</h1>
                                    <ul>
                                        <?php foreach ($all_contry_key as $all_contry_data) : ?>
                                            <?php $url = base_url('escorts')."/".$all_contry_data->country_name ."/0" ; ?>
                                            <li><a href="<?= $url ?>"><span><i class="fa fa-chevron-right"></i></span> <span class="flag flag-<?= $all_contry_data->sortname ?>"></span> <?= $all_contry_data->country_name ?></a></li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 mb-4 pl-2 pr-2">
                            <div class="author">
                                <div class="row">
                                    <div class="author-account-group">
                                        <div class="author-account">Name</div>
                                        <div class="author-account"><?= $escorts_details_key->name ?></div>
                                    </div>
                                    <div class="author-account-group">
                                        <div class="author-account">Title</div>
                                        <div class="author-account"><?= $escorts_details_key->title ?></div>
                                    </div>
                                    <div class="author-account-group">
                                        <div class="author-account">CIty</div>
                                        <div class="author-account"><?= $escorts_details_key->city_name ?></div>
                                    </div>
                                    <div class="author-account-group">
                                        <div class="author-account">Country</div>
                                        <div class="author-account"><?= $escorts_details_key->country_name ?></div>
                                    </div>
                                    <div class="author-account-group">
                                        <div class="author-account">Type</div>
                                        <div class="author-account"><?= $escorts_details_key->payment_category_name ?></div>
                                    </div>
                                    <?php if ($this->session->userdata('user_id')) : ?>
                                        <div class="author-account-group">
                                            <div class="author-account">Days Remaining</div>
                                            <div class="author-account"><?= "" ?></div>
                                        </div>
                                    <?php endif ; ?>
                                </div>
                                <div class="author-menu">
                                    <h4>Contact Details</h4>
                                    <ul>
                                        <li><span> <i class="fa fa-globe"></i> Website:</span> <a target="_blank" href="<?= $escorts_details_key->website_url ?>" class="col"><?= $escorts_details_key->website_url ?></a>
                                        </li>
                                        <li><span> <i class="fa fa-envelope"></i> Email:</span> <a href="mailto:<?= $escorts_details_key->email ?>" class="col"><?= $escorts_details_key->email ?></a>
                                        </li>
                                        <li><span> <i class="fa fa-phone"></i> Contact:</span> <a href="tel:<?= $escorts_details_key->contact_number ?>" class="col"><?= $escorts_details_key->contact_number ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4 pl-4 pr-4"><img style="width: 100%;" src="<?= base_url('post_image') ?>/<?= $escorts_details_key->image ?>" /></div>
                                    <div class="col-lg-8 col-md-6 mb-4 pl-4 pr-4">
                                        <p style="text-align: justify;"><?= $escorts_details_key->description ?></p>
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