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
                        <div class="col-lg-6 col-md-6 mb-4 mt-4">
                            <div class="bannersLink"> <a href="#"> Live Sex </a> <a href="#"> London Escorts </a> <a href="#"> Cam Girls </a> </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4 mt-4">
                            <?php $this->load->view('website/common/filter_city_country') ?>
                        </div>
                    </div>
                    <header class="section-header">
                        <h3 class="section-title">Your Posted Ads</h3>
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
                            <div class="bg-box">
                                <?php foreach ($list_all_post_key as $key => $list_all_post_data) : ?>
                                    <div class="row">
                                        <div class="col-lg-3 mb-4 pl-2 pr-2">
                                            <strong>Form:</strong> <br> <?= $list_all_post_data->activation_date ?> <br> To <br> <?= $list_all_post_data->expiry_date ?>
                                        </div>
                                        <div class="col-lg-1 mb-4 pl-2 pr-2">
                                            <div class="ads-img"><img src="<?= base_url('post_image') ?>/<?= $list_all_post_data->image ?>" /></div>
                                        </div>
                                        <div class="col-lg-5 mb-4 pl-2 pr-2">
                                            <p><?= $list_all_post_data->title ?></p>
                                        </div>
                                        <div class="col-lg-3 mb-4 pl-2 pr-2 text-lg-center">
                                            <a href="<?= base_url().str_replace(' ','-',$list_all_post_data->title) ?>/details/<?= $this->friend->base64url_encode($list_all_post_data->id) ?>"><i class="fa fa-external-link"></i> Preview</a> <br>
                                                <a href="<?= base_url('profile/edit') ?>/<?= $this->friend->base64url_encode($list_all_post_data->id) ?>"><i class="fa fa-pencil"></i> Edit</a> <br>
                                            <?php if ($list_all_post_data->status == 1) : ?>
                                                <a href="<?= base_url('profile/deactivate_post') ?>/<?= $this->friend->base64url_encode($list_all_post_data->id) ?>"><i class="fa fa-times"></i> Deactivate Ad</a> 
                                            <?php else : ?>
                                                <a href="#"><i class="fa fa-pencil-square-o"></i> Request For Activation </a> <br>
                                            <?php endif ; ?>
                                        </div>
                                    </div>
                                    <hr />
                                <?php endforeach ; ?>
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