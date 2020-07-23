<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Staff Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../../vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../../vendor/almasaeed2010/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../vendor/almasaeed2010/adminlte/plugins/iCheck/square/blue.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

@php
    $staffId = $staff['id'];
    $staffName = $staff['name'];
    $staffEmail = $staff['email'];
    $staffPhone = $staff['phone'];
    $staffAddedBy = $staff['added_by'];
    $staffJoinDate = $staff['created_at'];

    $staffUpdateLink = "http://ammar-api.test/api/staff/".$staffId."/edit";
    $isReadOnly   = true;
@endphp

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="http://ammar-api.test/api/"><b>Admin</b>LTE</a>
        </div>
            <div class="register-box-body">
                <p class="login-box-msg">Edit Staff</p>

                <form action="{{ $staffUpdateLink }}" method="post">
                    <div class="form-group has-feedback"><label >Name</label>
                        <input type="text" name="name" class="form-control" placeholder="{{ $staffName }}">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback"><label >Email</label>
                        <input type="email" name="email"  class="form-control" placeholder="{{ $staffEmail }}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback"><label >Phone</label>
                        <input type="text" name="phone"  class="form-control" placeholder="{{ $staffPhone }}">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="hidden" name="admin_name"  value="Admin">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Save Update</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="../../../vendor/almasaeed2010/adminltebower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../../vendor/almasaeed2010/adminltebower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../../vendor/almasaeed2010/adminlteplugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>
