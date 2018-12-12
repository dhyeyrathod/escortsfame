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
                        <h3 class="section-title">Pofile Form</h3>
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
                                    <?= form_open_multipart('profile/addnew') ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control" placeholder="Your Name" >
                                                <?php if (form_error('name')) : ?>
                                                    <div class="validation"><?= form_error('name') ?></div>
                                                <?php endif ; ?>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" value="<?= set_value('email') ?>" name="email" placeholder="Your Email">
                                                <?php if (form_error('email')) : ?>
                                                    <div class="validation"><?= form_error('email') ?></div>
                                                <?php endif ; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?= set_value('website_url') ?>" class="form-control" name="website_url" placeholder="Website Url">
                                            <?php if (form_error('website_url')) : ?>
                                                <div class="validation"><?= form_error('website_url') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?= set_value('contact_number') ?>" class="form-control" name="contact_number" placeholder="Contact Number">
                                            <?php if (form_error('contact_number')) : ?>
                                                <div class="validation"><?= form_error('contact_number') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="title" value="<?= set_value('title') ?>" placeholder="Enter Tittle">
                                            <?php if (form_error('title')) : ?>
                                                <div class="validation"><?= form_error('title') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" rows="5" placeholder="Description"><?= set_value('description') ?></textarea>
                                            <?php if (form_error('description')) : ?>
                                                <div class="validation"><?= form_error('description') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <select name="country" value="<?= set_value('country') ?>" class="form-control" id="select_country">
                                                <option value="">---Select Country---</option>
                                                <?php foreach ($all_contry_key as $key => $all_contry) : ?>
                                                    <option value="<?= $all_contry->country_id ?>"><?= $all_contry->country_name ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                            <?php if (form_error('country')) : ?>
                                                <div class="validation"><?= form_error('country') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <select name="city" id="select_city" value="<?= set_value('city') ?>" class="form-control">
                                               <option value="">---Select City---</option>
                                            </select>
                                            <?php if (form_error('city')) : ?>
                                                <div class="validation"><?= form_error('city') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image_upload" class="form-control">
                                            <div class="validation"></div>
                                        </div>
                                        <div class="form-group">
                                            <select name="type" value="<?= set_value('type') ?>" class="form-control">
                                                <option value="">---Select type---</option>
                                                <?php foreach ($type_key as $key => $type_data) : ?>
                                                    <option value="<?= $type_data->id ?>"><?= $type_data->type ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                            <?php if (form_error('type')) : ?>
                                                <div class="validation"><?= form_error('type') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <select name="payment_category" id="select-payment-category" value="<?= set_value('payment_category') ?>" class="form-control">
                                                <option value="">---Select Payment Category---</option>
                                                <?php foreach ($payment_category_key as $payment_category) : ?>
                                                    <option value="<?= $payment_category->id ?>"><?= $payment_category->payment_category_name ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                            <?php if (form_error('payment_category')) : ?>
                                                <div class="validation"><?= form_error('payment_category') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <select name="payment_period" id="select-payment-period" value="<?= set_value('payment_period') ?>" class="form-control">
                                                <option value="">---Select Payment Period---</option>
                                            </select>
                                            <?php if (form_error('payment_period')) : ?>
                                                <div class="validation"><?= form_error('payment_period') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="submit">Submit</button>
                                        </div>
                                    <?= form_close() ?>
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
        <script type="text/javascript">
            $( "#select_country" ).change(function() {
                var country_id = $("#select_country").val();
                var ajex_url = base_url + "home/getcities";
                $.ajax({
                    type: "POST",
                    url: ajex_url,
                    data: {country_id:country_id},
                    success: function(response){
                        if (response.status == "success") {
                            $("#select-city").html('');
                            var html_str = '<option value="">---Select City---</option>';
                            for(var i=0 ; i < response.cities_data.length ; i++)
                            {
                                html_str += '<option value="'+response.cities_data[i].city_id+'">'+response.cities_data[i].city_name+'</option>'
                            }
                            $("#select_city").html(html_str);
                        }
                    },
                    error : function(response){
                        alert(response.responseText);
                    }
                });
            });
            $("#select-payment-category").change(function() {
                var payment_caegory_id = $("#select-payment-category").val();
                var ajex_url = base_url + "home/getpaymentperiod";
                debugger ;
                $.ajax({
                    type: "POST",
                    url: ajex_url,
                    data: {payment_caegory_id:payment_caegory_id},
                    success: function(response){
                    debugger ;
                        if (response.payment_period.length) {
                            $("#select-payment-period").html('');
                            var html_str = '<option value="">---Select Payment period---</option>';
                            for(var i=0 ; i < response.payment_period.length ; i++)
                            {
                                html_str += '<option value="'+response.payment_period[i].days+'">'+response.payment_period[i].payment_period_description+'</option>'
                            }
                            $("#select-payment-period").html(html_str);
                        } else {
                            alert("data is is not present");
                        }
                    },
                    error : function(response){
                        alert(response.responseText);
                    }
                });
            });
        </script>
    </body>
</html>