<?php 
// echo "<pre>";
// print_r($post_data);
// exit();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <?php $this->load->view('admin/common/css') ?>
    </head>
    <body class="app sidebar-mini rtl">
        <!-- Navbar-->
        <?php $this->load->view('admin/common/header') ?>
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <?php $this->load->view('admin/common/sidebar') ?>
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-edit"></i> Form Components</h1>
                    <p>Bootstrap default form components</p>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item"><a href="#">Form Components</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="row">
                            <div class="col-lg-10">
                                <?php if (isset($post_data->id)) : $url = "Admin/Profile/edit"."/".$this->friend->base64url_encode($post_data->id);echo form_open_multipart($url);
                                else : echo form_open_multipart('Admin/Profile/add_new'); endif ; ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input class="form-control" value="<?= isset($post_data->name) ? $post_data->name : set_value('name') ?>" name="name" id="name" type="text"
                                        placeholder="Enter name">
                                        <?php if (form_error('name')) : ?>
                                            <small class="form-text text-danger"><?= form_error('name') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input class="form-control" value="<?= isset($post_data->email) ? $post_data->email : set_value('email'); ?>" id="email" name="email" type="email" placeholder="Enter email">
                                        <?php if (form_error('email')) : ?>
                                            <small class="form-text text-danger"><?= form_error('email') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website URL</label>
                                        <input class="form-control" value="<?= isset($post_data->website_url) ? $post_data->website_url : set_value('website_url'); ?>" id="website_url" name="website_url" type="text" placeholder="Enter Website Url">
                                        <?php if (form_error('website_url')) : ?>
                                            <small class="form-text text-danger"><?= form_error('website_url') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input class="form-control" value="<?= isset($post_data->title) ? $post_data->title : set_value('title'); ?>" id="title" name="title" type="text" placeholder="Enter Title">
                                        <?php if (form_error('title')) : ?>
                                            <small class="form-text text-danger"><?= form_error('title') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number</label>
                                        <input class="form-control" value="<?= isset($post_data->contact_number) ? $post_data->contact_number : set_value('contact_number'); ?>" id="contact_number" name="contact_number" type="text" placeholder="Enter Contact Number">
                                        <?php if (form_error('contact_number')) : ?>
                                            <small class="form-text text-danger"><?= form_error('contact_number') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea">Description</label>
                                        <textarea class="form-control" name="description" id="Description" rows="10"><?= isset($post_data->description) ? $post_data->description : set_value('description'); ?></textarea>
                                        <?php if (form_error('description')) : ?>
                                            <small class="form-text text-danger"><?= form_error('description') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect1">Country</label>
                                        <select class="form-control" name="country" id="select-country">
                                            <option value="">---Select Country---</option>
                                            <?php if (isset($post_data->country_id)) : ?>
                                                <?php foreach ($country_key as $key => $country_data) : ?>
                                                    <option value="<?= $country_data->country_id ?>"
                                                        <?php if($country_data->country_id == $post_data->country_id) : echo "Selected" ; endif ; ?>
                                                        ><?= $country_data->country_name ?></option>
                                                <?php endforeach ; ?>
                                            <?php else : ?>
                                                <?php foreach ($country_key as $key => $country_data) : ?>
                                                    <option value="<?= $country_data->country_id ?>"><?= $country_data->country_name ?></option>
                                                <?php endforeach ; ?>
                                            <?php endif ; ?>                       
                                        </select>
                                        <?php if (form_error('country')) : ?>
                                            <small class="form-text text-danger"><?= form_error('country') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group" id="city_tab">
                                        <label for="exampleSelect1">Cities</label>
                                        <select class="form-control" name="city" id="select-city">
                                            <option value="">---Select city---</option>                  
                                        </select>
                                        <?php if (form_error('city')) : ?>
                                            <small class="form-text text-danger"><?= form_error('city') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <?php if (isset($post_data->image)) : ?>
                                            <br>    
                                            <img src="<?= base_url('post_image') ?>/<?= $post_data->image ?>" style="width: 200px;height: 250px">
                                            <input type="hidden" value="<?= $post_data->image ?>" name="old_image">
                                        <?php endif ; ?>
                                        <input class="form-control-file" name="image" id="image" type="file">
                                        <?php if (isset($image_upload_error['error'])) : ?>
                                            <small class="form-text text-danger"><?= $image_upload_error['error'] ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect1">You Are</label>
                                        <select class="form-control" value="<?= set_value('type'); ?>" name="type" id="select-type">
                                            <option value="">---Select type---</option>
                                            <?php if (isset($post_data->type_id)) : ?>
                                                <?php foreach ($type_key as $type_data) : ?>
                                                    <option <?php if ($type_data->id == $post_data->type_id) : echo "Selected" ; endif ; ?> value="<?= $type_data->id ?>"><?= $type_data->type ?></option>
                                                <?php endforeach ; ?>                     
                                            <?php else : ?>
                                                <?php foreach ($type_key as $type_data) : ?>
                                                    <option value="<?= $type_data->id ?>"><?= $type_data->type ?></option>
                                                <?php endforeach ; ?>
                                            <?php endif ; ?>  
                                        </select>
                                        <?php if (form_error('type')) : ?>
                                            <small class="form-text text-danger"><?= form_error('type') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group" id="payment_period_tab">
                                        <label for="exampleSelect1">Status</label>
                                        <select class="form-control" name="status">
                                            <?php if (isset($post_data->status)) : ?>
                                                <option <?php if ($post_data->status == 1) : echo "selected"; endif ; ?> value="1">Activate</option>
                                                <option <?php if ($post_data->status == 0) : echo "selected"; endif ; ?> value="0">Deactivate</option>
                                            <?php else : ?>
                                                <option value="1">Activate</option>
                                                <option value="0">Deactivate</option>
                                            <?php endif ; ?>
                                        </select>
                                    </div>
                                    <?php if (!isset($post_data->id)) : ?>
                                        <div class="form-group">
                                            <label for="exampleSelect1">Payment category</label>
                                            <select class="form-control" value="<?= set_value('payment_category'); ?>" name="payment_category" id="select-payment-category">
                                                <option value="">---Select type---</option>
                                                <?php foreach ($payment_category_key as $payment_category_data) : ?>
                                                    <option value="<?= $payment_category_data->id ?>"><?= $payment_category_data->payment_category_name ?></option>
                                                <?php endforeach ; ?>                       
                                            </select>
                                            <?php if (form_error('payment_category')) : ?>
                                                <small class="form-text text-danger"><?= form_error('payment_category') ?></small>
                                            <?php endif ; ?>
                                        </div>
                                        <div class="form-group" id="payment_period_tab">
                                            <label for="exampleSelect1">Payment period</label>
                                            <select class="form-control" name="payment_period" id="select-payment-period">
                                                <option value="">---Select Payment period---</option>
                                            </select>
                                            <?php if (form_error('payment_period')) : ?>
                                                <small class="form-text text-danger"><?= form_error('payment_period') ?></small>
                                            <?php endif ; ?>
                                        </div>
                                    <?php endif ; ?>

                                    <div class="tile-footer">
                                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                    </div>
                                <?= form_close() ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('admin/common/js') ?>
        <script type="text/javascript">
            $( document ).ready(function() {
                var post_success = '<?= $this->session->flashdata('post_success') ?>';
                if (post_success) {
                    alert_success(post_success);
                }
                if (isnewpost()) {
                    var country_id = '<?= isset($post_data->country_id) ? $post_data->country_id : 0 ?>';
                    var ajex_url = base_url + "Admin/Common_admin/getcity";
                    var city_id = '<?= isset($post_data->city_id) ? $post_data->city_id : 0 ?>'
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
                                    html_str += '<option '+ editSlectedCity(city_id , response.cities_data[i].city_id) +' value="'+response.cities_data[i].city_id+'">'+response.cities_data[i].city_name+'</option>'
                                }
                                $("#select-city").html(html_str);
                            }
                        },
                        error : function(response){
                            alert(response.responseText);
                        }
                    });
                } 
            });
            function isnewpost() {
                var flag = '<?= isset($post_data->id) ?>' ;
                if (flag) {
                    return true ;
                } else {
                    return false ;
                }
            }
            function editSlectedCity(city_id , resposne_city_id) {
                if(city_id == resposne_city_id ) {
                    return 'Selected';
                }
            }

        </script>
    </body>
</html>