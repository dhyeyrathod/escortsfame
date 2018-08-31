<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Vali Admin</title>
        <?php $this->load->view('admin/common/css') ?>
    </head>
    <body>
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="logo">
                <h1>Vali</h1>
            </div>
            <div class="login-box">
                    <?= form_open('Admin/Account/login',array('class'=>'login-form')); ?>
                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" name="email" value="<?= set_value('email') ?>" type="text" placeholder="Email" autofocus>
                        <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">PASSWORD</label>
                        <input class="form-control" name="password" type="password" placeholder="Password">
                        <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="utility">
                            <div class="animated-checkbox">
                                <label>
                                <input type="checkbox"><span class="label-text">Stay Signed in</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                    </div>
                <?= form_close(); ?>
            </div>
        </section>
        <?php $this->load->view('admin/common/js') ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                var login_error = '<?= $authentication_error ?>';
                alert_error(login_error);
            });
        </script>
    </body>
</html>