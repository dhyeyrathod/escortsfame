<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create Your Own Escorts Website Here</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="escorts website, create escorts website,create indepdendent escorts website" name="keywords">
        <meta content="Escortsframe also provide the way to create website for escorts details and listing for moe details visit here" name="description">
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
                        <h3 class="section-title">Create free escort site for independent escorts</h3>
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
                            <div class="recently-bg">
                                <p><span><i class="fa fa-angle-double-right"></i></span> Are you an independent escort and don't have your own website? Then you are on the right place. To submit your listing at World Escort Index you must have your escort website </p>
                                <p><span><i class="fa fa-angle-double-right"></i></span> In few easy steps you create your own website in few minutes. </p>
                                <p><span><i class="fa fa-angle-double-right"></i></span> Manage your site's content and photos. You just need to login to your account. </p>
                                <p><span><i class="fa fa-angle-double-right"></i></span> Creating a website is for free! We don't charge any fees. </p>
                                <p><span><i class="fa fa-angle-double-right"></i></span> In case you would have any problems during the process don't hesitate to contact our support at abc@gamil.com </p>
                                <p><span><i class="fa fa-angle-double-right"></i></span> Once escort site is created we check your content. Site is going to be approved in 48h maximum and will be visible at World Escort Index directory. Is prohibited to create site for escort agencies and clubs. </p>
                                <p><span><i class="fa fa-angle-double-right"></i></span> If you already have your own website submit your listing through our advertising form.</p>
                                <div class="Get-Started"><a href="create-site-register.html">Get Started <span> <i class="fa fa-play"></i></span></a></div>
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
        <script src="<?= base_url('assets/website') ?>/js/content_copy_restriction.js" type="text/javascript"></script>
    </body>
</html>
