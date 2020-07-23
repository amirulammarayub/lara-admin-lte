<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Staff Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../vendor/almasaeed2010/adminlte/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="http://ammar-api.test/api/"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Staff Info</p>
            @php
                $staffId = $staff['id'];
                $staffName = $staff['name'];
                $staffEmail = $staff['email'];
                $staffPhone = $staff['phone'];
                $staffAddedBy = $staff['added_by'];
                $staffJoinDate = $staff['created_at'];

                $staffDeleteLink = "http://ammar-api.test/api/staff/".$staffId."/delete";
                $staffEditLink = "http://ammar-api.test/api/staff/".$staffId."/edit";
                $isReadOnly   = true;

            @endphp

            <form action="http://ammar-api.test/api/admin" method="post">
                <div class="form-group has-feedback"><label >Name</label>
                    <input type="text" readonly="{{ $isReadOnly }}" class="form-control" value="{{ $staffName }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div  class="form-group has-feedback"><label >Email</label>
                    <input label="Email" readonly="{{ $isReadOnly }}" type="email" class="form-control" value="{{ $staffEmail }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback"><label >Phone Number</label>
                    <input type="text" readonly="{{ $isReadOnly }}" class="form-control" value="{{ $staffPhone }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback"><label >Added By</label>
                    <input type="text" readonly="true" class="form-control" value="{{ $staffAddedBy }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback"><label >Join Date</label>
                    <input type="text" readonly="{{ $isReadOnly }}" class="form-control" value="{{ $staffJoinDate }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                </div>
            </form>
            <a href={{ $staffEditLink }} class="btn btn-success btn-block btn-flat"> Edit</a>
            <form action="{{ $staffDeleteLink }}" method="post">
                <button type="submit" class="btn btn-danger btn-block btn-flat">Delete</button>
            </form>

        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="../../vendor/almasaeed2010/adminltebower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../vendor/almasaeed2010/adminltebower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendor/almasaeed2010/adminlteplugins/iCheck/icheck.min.js"></script>
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
