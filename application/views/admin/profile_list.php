<?php 
// echo "<pre>";
// print_r($all_profile_key);
// exit();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Table - Vali Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <h1><i class="fa fa-th-list"></i> Data Table</h1>
                    <p>Table to display analytical data effectively</p>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>SR. No</th>
                                        <th>name</th>
                                        <th>image</th>
                                        <th>title</th>
                                        <th>URL</th>
                                        <th>Username</th>
                                        <th>category</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>     
                                    <?php foreach ($all_profile_key as $key => $all_profile_data) : ?>
                                        <tr class="<?php if ($all_profile_data->status == "Deactivate") : echo "bg-danger text-white" ; endif ; ?>">
                                            <td><?= $key+1 ?></td>
                                            <td><?= $all_profile_data->name ?></td>
                                            <td><img style="width: 100%" src="<?= base_url('post_image') ?>/<?= $all_profile_data->image ?>"></td>
                                            <td><?= $all_profile_data->title ?></td>
                                            <td><?= $all_profile_data->website_url ?></td>
                                            <td><?= $all_profile_data->username ?></td>
                                            <td><?= $all_profile_data->payment_category_name ?></td>
                                            <td><a href="<?= base_url('Admin/Profile/edit') ?>/<?= $this->friend->base64url_encode($all_profile_data->id) ?>"><button class="btn btn-primary"> Edit </button></a></td>
                                            <td><a href="<?= base_url('Admin/Profile/delete_post') ?>/<?= $this->friend->base64url_encode($all_profile_data->id) ?>"><button class="btn btn-danger"> Delete </button></a></td>
                                        </tr>
                                    <?php endforeach ; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('admin/common/js') ?>
    </body>
</html>