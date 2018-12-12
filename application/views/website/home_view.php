<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Worldwide Escorts Classifieds|High Profle Call Girls Directory|Escortsfame</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="high profile call girls directory, escorts classifieds listing, female call girls classifieds, male escorts ads,worldwide high profile escorts agency classifieds" >
        <meta name="description" content="Worlwide Directory website escortsfame for high profile escorts, massage girl, sensual & sizzling sexy full satisfaction call girls ads listing search here by your country location or nearest area in your city.">
        <?php $this->load->view('website/common/css') ?>
    </head>
    <body>
        <?php $this->load->view('website/common/header') ?>
        <main id="main">
            <section id="portfolio"  class="section-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 mb-4 mt-4">
                            <div class="bannersLink"> 
                                <a href="http://www.komalshrma.com/"> Bangalore Escorts </a> 
                                <a href="https://www.delhiescortsx.com/"> Delhi Escorts </a> 
                                <a href="http://www.ankitavermas.com/"> Mumbai Escorts </a> 
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 mb-4 mt-4">
                            <?php $this->load->view('website/common/filter_city_country') ?>
                        </div>
                    </div>
                    

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
                            <div class="row mb-4">
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="bannerAgency"> <a href="http://karishmasharma.com" target="_blank"> <img alt="banner" src="<?= base_url() ?>/banner_image/banner2.jpg" class="img-fluid" > </a> </div>
                                </div>
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="bannerAgency"> <a href="http://www.mumbaiescortsx.com/" target="_blank"> <img alt="banner" src="<?= base_url() ?>/banner_image/banner1.gif" class="img-fluid"> </a> </div>
                                </div>
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="bannerAgency"> <a href="http://www.nehatandan.com/" target="_blank"> <img alt="banner" src="<?= base_url() ?>/banner_image/nehatandan.jpg" class="img-fluid"> </a> </div>
                                </div>
                            </div>  
                            <header class="section-header">
                                <h3 class="section-title">Escorts Directory</h3>
                            </header> 
                            <div class="container-fluid" style="padding: 20px">
                                <a href="http://www.twistsam.com/" target="_blank"><img src="http://localhost/jayrathod/cityxguid/assets/banner/twistsam-real.jpg" style="width: 100%"></a>
                            </div>
                            <div class="row">
                                <?php foreach ($premium_and_vip_post_key as $premium_and_vip_post_data) : ?>
                                    <div class="col-lg-2 col-md-6 mb-4 pl-2 pr-2">
                                        <a target="_blank" href="<?= $premium_and_vip_post_data->website_url ?>">
                                            <div class="img-box">
                                                <img class="img-fluid" style="height: 171px;" src="<?= base_url('post_image') ?>/<?= $premium_and_vip_post_data->image ?>" />
                                                <h2><?= $premium_and_vip_post_data->name ?></h2>
                                                <p><?= $premium_and_vip_post_data->city_name ?></p>
                                            </div>
                                        </a>
                                        <div class="box-shadow"></div>
                                    </div>
                                <?php endforeach ; ?>
                            </div>
                            <header class="section-header">
                                <h3 class="section-title">Recently Added</h3>
                            </header>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="recently-menu">
                                        <?php foreach ($free_and_top_post_key as $free_and_top_post_data) : ?>
                                            <ul>
                                                <?php $url = base_url().str_replace(' ','-',$free_and_top_post_data->title)."/details/".$this->friend->base64url_encode($free_and_top_post_data->id) ?>
                                                <li><a href="<?= $url ?>"><span><i class="fa fa-chevron-right"></i></span> <?= $free_and_top_post_data->name ?></a><span> - <?= mb_substr($free_and_top_post_data->description,0,100) ?></span></li>
                                            </ul>
                                        <?php endforeach ; ?>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <center>
                                        <center><?= $this->pagination->create_links(); ?></center>
                                    </center>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="recently-bg">
                                        <p>World Escort Index is one of the biggest international escort directories. World Escort Index's directory lists thousands of escort websites and escort Ads. You will find there deluxe escorts providing high class escort services in every major city in the world. All these listings are regularly checked to ensure that the escort services offered there are up to date. For this reason we have become the most widely used escort directory bringing huge levels of traffic to our advertisers. Initially we focused on European escorts but over time we expanded to provide our services on a global basis so we become worldwide escort directory.</p>
                                        <p>At World Escort Index's Directory you will find several categories of advertisements for escorts. The most popular escort listings with clients are those which carry pictures of the escorts in their homes tagged "VIP Escort Girls". These escort Ads are placed by the most sought after escorts including adult film stars, porn stars, top class companions, elite escort models and VIP companions providing VIP escort services. All of these have the highest satisfaction customer escort reviews. </p>
                                        <p>Other categories of advertisements with high levels of traffic are "Premium Links" and "Top Listed Escorts". The lowest levels of traffic go to the "Free Listings" advertisements. In this category you will find escort listings of, for example, models described as, erotic models, girls for sex, call girls, strippers, dancers, Asian porn star escorts, female escorts, male escorts, shemale escorts, GFE and massage service providers. </p>
                                        <p>In all categories of escort advertisements at World Escort Index Directory you will find the following: escort agencies list, independent escorts list, strip clubs, cabarets, brothels, lap dance bars, dancing clubs list. All the escorts provide either out call services or in call services. Clients can choose escorts from different categories such as black or ebony escorts, Asian escorts, BBW escorts, busty escorts, busty blonde escorts and many others. </p>
                                        <p>"I am an escort, where can I advertise?"</p>
                                        <p>"I own an elite escort agency or strip club, where can I list my ladies?"</p>
                                        <p>The answer is simple. Advertise in the World Escort Index Directory. Become part of our adult web search engine. All types of adult escort services websites are welcome. At World Escort Index Directory your clients can easily organise adult meetings and access escort hire services. </p>
                                        <p>Check out escorts2.com - free adult classifieds. Free to browse and free to post. Listings in all large cities around the world. Ads for female, male, and ts escorts. </p>
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
        <script src="<?= base_url('assets/website') ?>/js/content_copy_restriction.js" type="text/javascript"></script>
    </body>
</html>
