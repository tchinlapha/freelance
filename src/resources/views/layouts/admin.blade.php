<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>บจก. เสรีชัย อินทีเรียร์ ดีไซน์</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/ui/ripple.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/ui/nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/pages/layout_fixed_custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/plugins/editors/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin_assets/js/angular/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/angular/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/angular/service.js') }}"></script>
    <!-- /theme JS files -->
    @yield('script')
</head>

<body class="navbar-top">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top bg-indigo">
        <div class="navbar-header">
            <a class="navbar-brand" href="/admin">บจก. เสรีชัย อินทีเรียร์ ดีไซน์</a>
        </div>
    </div>


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-default sidebar-fixed">
                <div class="sidebar-content">
                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <li><a href="/admin"><i class="icon-home5"></i> <span>หน้าแรก</span></a></li>
                                <li><a href="/admin/about"><i class="icon-info22"></i> <span>เกี่ยวกับบริษัท</span></a></li>
                                <li><a href="/admin/portfolio"><i class="icon-image2"></i> <span>จัดการผลงาน</span></a></li>
                                <li><a href="/admin/contact"><i class="icon-envelop3"></i> <span>ข้อความการติดต่อ</span></a></li>
                                <li><a href="/logout"><i class="icon-switch"></i> <span>ออกจากระบบ</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->
                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /content area -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
    </div>
    <!-- /page container -->
</body>
</html>
