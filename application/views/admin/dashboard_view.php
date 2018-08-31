<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Open Graph Meta-->
        <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
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
                    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                    <p>A free and open source Bootstrap 4 admin template</p>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small primary coloured-icon">
                        <i class="icon fa fa-users fa-3x"></i>
                        <div class="info">
                            <h4>Users</h4>
                            <p><b>5</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small info coloured-icon">
                        <i class="icon fa fa-thumbs-o-up fa-3x"></i>
                        <div class="info">
                            <h4>Likes</h4>
                            <p><b>25</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small warning coloured-icon">
                        <i class="icon fa fa-files-o fa-3x"></i>
                        <div class="info">
                            <h4>Uploades</h4>
                            <p><b>10</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small danger coloured-icon">
                        <i class="icon fa fa-star fa-3x"></i>
                        <div class="info">
                            <h4>Stars</h4>
                            <p><b>500</b></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
        <?php $this->load->view('admin/common/js') ?>
    </body>
</html>