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
                        <h3 class="section-title">Sign Up</h3>
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
                        <div id="id="contact" class="col-lg-8 col-md-6 mb-4 pl-2 pr-2">
                            <div class="contactbox-bg">
                                <div class="form">
                                    <div id="sendmessage"><?= $this->session->flashdata('error') ? $this->session->flashdata('error') : "" ?></div>
                                    <div id="errormessage"></div>
                                    <?= form_open('account/signup',array('class' => 'contactForm')) ; ?>
                                        <div class="form-group">
                                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" id="username" placeholder="Your Username">
                                            <div class="validation"><?= form_error('username') ? form_error('username') : "" ?></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>" id="email" placeholder="Your Email">
                                            <div class="validation"><?= form_error('email') ? form_error('email') : "" ?></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" id="password" placeholder="Your password">
                                            <div class="validation"><?= form_error('password') ? form_error('password') : "" ?></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="re_password" value="<?= set_value('re_password') ?>" class="form-control" id="re_password" placeholder="Re-enter Your password">
                                            <div class="validation"><?= form_error('re_password') ? form_error('re_password') : "" ?></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?= set_value('contact_number') ?>" name="contact_number" class="form-control" id="contact_number" placeholder="Your contact number">
                                            <div class="validation"><?= form_error('contact_number') ? form_error('contact_number') : "" ?></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="submit">Sign Up</button>
                                        </div>
                                    <?= form_close() ; ?>
                                </div>
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