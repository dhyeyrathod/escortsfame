<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Us Now Fpr Escorts Agency Details</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="contact escorts agency,contact independent escorts call girls services" name="keywords">
        <meta content="Find now the best independent escorts service, classifieds post, listing full ejnoyment service available for your satisfaction" name="description">
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
                        <h3 class="section-title">Contact Us</h3>
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
                                <div class="row contact-info">
                                    <div class="col-md-4">
                                        <div class="contact-address">
                                            <i class="ion-ios-location-outline"></i>
                                            <h3>Address</h3>
                                            <address>
                                                Mumbai
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="contact-phone">
                                            <i class="ion-ios-telephone-outline"></i>
                                            <h3>Phone Number</h3>
                                            <p><a href="tel:+91 0000 000 000">+91 0000 000 000</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="contact-email">
                                            <i class="ion-ios-email-outline"></i>
                                            <h3>Email</h3>
                                            <p><a href="abc@gmail.com">abc@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form">
                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                    <div id="errormessage"></div>
                                    <form action="" method="" role="form" class="contactForm">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="submit">Send Message</button>
                                        </div>
                                    </form>
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
