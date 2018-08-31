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
                                <?= form_open_multipart('admin/banner/add_new_banner') ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Url</label>
                                        <input class="form-control" value="<?= set_value('url'); ?>" name="url" id="name" type="text" placeholder="Enter Website Url">
                                        <?php if (form_error('url')) : ?>
                                            <small class="form-text text-danger"><?= form_error('url') ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Bannre Image</label>
                                        <input class="form-control-file" id="exampleInputFile" name="banner_image" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">Select Banner for website</small>
                                        <?php if (isset($banner_upload_error['error'])) : ?>
                                            <small class="form-text text-danger"><?= $banner_upload_error['error'] ?></small>
                                        <?php endif ; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect1">Select Banner Offer</label>
                                        <select value="<?= set_value('banner_offer'); ?>" class="form-control" name="banner_offer" id="banner_offer">
                                            <option value="">---Select Banner Offer---</option>
                                            <?php foreach ($banner_offer_key as $banner_offer_data) : ?>
                                                <option value="<?= $banner_offer_data->month ?>"><?= $banner_offer_data->offer_descriptiion ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                        <?php if (form_error('banner_offer')) : ?>
                                            <small class="form-text text-danger"><?= form_error('banner_offer') ?></small>
                                        <?php endif ; ?>

                                    </div>
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
                var banner_success = '<?= $this->session->flashdata('banner_success') ?>';
                var banner_error = '<?= $this->session->flashdata('banner_error') ?>';
                if (banner_success) {
                    alert_success(banner_success);
                }
                if (banner_error) {
                    alert_error(banner_error);   
                }
            });
        </script>
    </body>
</html>