<!DOCTYPE html>
<html>
<head>
    <title>เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .item-portfolio {
            padding: 15px;
        }

        .item-portfolio-inner {
            border: 1px solid #ccc;
            border-bottom: 2px solid #ccc;
            background: #fefefe;
        }

        .item-portfolio-inner .picture, .item-portfolio .picture {
            height: 260px;
            width: 100%;
            background-position: center 0;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (max-width:767px;
        ) {
            item-portfolio-inner .picture {
                height: 320px;
            }
        }

        .item-portfolio-content {
            padding: 15px;
        }

        .item-portfolio-content h4 {
            margin-bottom: 10px;
        }

        .item-portfolio-content p {
            color: #aaa;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 align="center"><a href="/admin">เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด</a></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li><a href="/admin"><i class="glyphicon glyphicon-home"></i> หน้าแรก</a></li>
                        <li><a href="/admin/portfolio"><i class="glyphicon glyphicon-picture"></i> จัดการรูปผลงาน</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-off"></i> ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/libs/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
</body>

</html>