<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')}}
    <!-- Font Awesome -->
    {{Html::style('bower_components/font-awesome/css/font-awesome.min.css')}}
    <!-- Ionicons -->
    {{Html::style('bower_components/Ionicons/css/ionicons.min.css')}}
    <!-- Theme style -->
    {{Html::style('dist/css/AdminLTE.min.css')}}

    {{Html::style('dist/css/skins/skin-blue.min.css')}}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('inc.navbar')
    @include('inc.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('header')
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            @include('inc.messages')
            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('inc.sidebar')

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

@yield('page_JavaScrips')

<!-- jQuery 3 -->
{{Html::script('bower_components/jquery/dist/jquery.min.js')}}

<!-- Bootstrap 3.3.7 -->
{{Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')}}

<!-- DataTables -->
{{Html::script('bower_components/datatables.net/js/jquery.dataTables.min.js')}}

{{Html::script('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}

<!-- SlimScroll -->
{{Html::script('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}

<!-- FastClick -->
{{Html::script('bower_components/fastclick/lib/fastclick.js')}}

<!-- AdminLTE App -->
{{Html::script('dist/js/adminlte.min.js')}}

<!-- AdminLTE for demo purposes -->
{{Html::script('dist/js/demo.js')}}


@yield('page_JavaScrips')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>