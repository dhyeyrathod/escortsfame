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
                        <?php if ($this->session->userdata('error')) : ?>
                            <div class="alert alert-danger text-center">
                                <strong><?= $this->session->userdata('error') ?></strong>
                            </div>
                        <?php endif ; ?>
                        <?php if ($this->session->userdata('success')) : ?>
                            <div class="alert alert-success text-center">
                                <strong><?= $this->session->userdata('success') ?></strong>
                            </div>
                        <?php endif ; ?>
                            <div class="contactbox-bg">
                                <div class="form">
                                <?php $post_url = "profile/edit/".$this->friend->base64url_encode($post_id) ?>
                                    <?= form_open_multipart($post_url) ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" value="<?= isset($post_data->name) ? $post_data->name : set_value('name') ?>" class="form-control" placeholder="Your Name" >
                                                <?php if (form_error('name')) : ?>
                                                    <div class="validation"><?= form_error('name') ?></div>
                                                <?php endif ; ?>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" value="<?= isset($post_data->email) ? $post_data->email : set_value('email') ?>" name="email" placeholder="Your Email">
                                                <?php if (form_error('email')) : ?>
                                                    <div class="validation"><?= form_error('email') ?></div>
                                                <?php endif ; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?= isset($post_data->website_url) ? $post_data->website_url : set_value('website_url') ?>" class="form-control" name="website_url" placeholder="Website Url">
                                            <?php if (form_error('website_url')) : ?>
                                                <div class="validation"><?= form_error('website_url') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="title" value="<?= isset($post_data->title) ? $post_data->title : set_value('title') ?>" placeholder="Enter Tittle">
                                            <?php if (form_error('title')) : ?>
                                                <div class="validation"><?= form_error('title') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" rows="5" placeholder="Description"><?= isset($post_data->description) ? $post_data->description : set_value('description') ?></textarea>
                                            <?php if (form_error('description')) : ?>
                                                <div class="validation"><?= form_error('description') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group">
                                            <select name="country" value="<?= set_value('country') ?>" class="form-control" id="select_country_edit">
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
                                            <select name="city" id="select_city_edit" value="<?= set_value('city') ?>" class="form-control">
                                               <option value="">---Select City---</option>
                                            </select>
                                            <?php if (form_error('city')) : ?>
                                                <div class="validation"><?= form_error('city') ?></div>
                                            <?php endif ; ?>
                                        </div>
                                        <img src="<?= base_url('post_image') ?>/<?= $post_data->image ?>" style="width: 200px;height: 250px;">
                                        <input type="hidden" value="<?= $post_data->image ?>" name="old_image">
                                        <div class="form-group">
                                            <input type="file" name="image_upload" class="form-control">
                                            <div class="validation"></div>
                                        </div>
                                        <div class="form-group">
                                            <select name="type" value="<?= set_value('type') ?>" class="form-control">
                                                <option value="">---Select type---</option>
                                                <?php foreach ($type_key as $key => $type_data) : ?>
                                                    <option <?= ($type_data->id == $post_data->type_id) ? "Selected" : "" ?> value="<?= $type_data->id ?>"><?= $type_data->type ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                            <?php if (form_error('type')) : ?>
                                                <div class="validation"><?= form_error('type') ?></div>
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
            $( document ).ready(function() {
                var country_id = '<?= isset($post_data->country_id) ? $post_data->country_id : 0 ?>';
                $('#select_country_edit').val(country_id);
                $('#select_country_edit').change();
                var city_id = '<?= isset($post_data->city_id) ? $post_data->city_id : 0 ?>';
                $('#select_city_edit').val(city_id);
            });

            $( "#select_country_edit" ).change(function() {
                var country_id = $("#select_country_edit").val();
                var ajex_url = base_url + "home/getcities";
                $.ajax({
                    type: "POST",
                    url: ajex_url,
                    async: false,
                    data: {country_id:country_id},
                    success: function(response){
                        if (response.status == "success") {
                            $("#select_city_edit").html('');
                            var html_str = '<option value="">---Select city---</option>';
                            for(var i=0 ; i < response.cities_data.length ; i++)
                            {
                                html_str += '<option value="'+response.cities_data[i].city_id+'">'+response.cities_data[i].city_name+'</option>';
                            }
                            $("#select_city_edit").html(html_str);
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
