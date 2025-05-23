<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?= ($site) ?> | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <script src="<?= ($BASE) ?>/ui/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!--    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->

    <!-- dataTables scripts -->
    <script src="<?= ($BASE) ?>/ui/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?= ($BASE) ?>/ui/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= ($BASE) ?>/ui/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>

    <!-- Bootstrap 3.3.4 -->
    <link href="<?= ($BASE) ?>/ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?= ($BASE) ?>/ui/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?= ($BASE) ?>/ui/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- dataTables styles -->
    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/plugins/datatables/jquery.dataTables_themeroller.css">
    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css">
    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= ($BASE) ?>/"><b>App</b>NAME</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Please Login</p>
            <?php if ($errors!=null): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Error(s)!</h4>
                    <?php foreach (($errors?:[]) as $error): ?>
                        <li><?= ($error[0]) ?></li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form action="<?= ($BASE) ?>/account/signin" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= ($email) ?>" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <a href="#myModal" data-toggle="modal">Forget your password?</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- Modal HTML -->

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Password Recovery</h3>
                </div>
                <div class="modal-body">
                    <p>We will send your password by email</p>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" id="userEmail" placeholder="Your email address" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btnOk" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery 2.1.4 -->
    <script src="<?= ($BASE) ?>/ui/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?= ($BASE) ?>/ui/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?= ($BASE) ?>/ui/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

</body>

</html>
