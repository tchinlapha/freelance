<header class="animated slideInDown fix-when-mobile" style="position: fixed;z-index: 999;">
    <div class="menu-mobile" style="padding:10px;">
        <div class="pull-left">
            <img src="{{ asset('assets/images/SEREECHAILOGOV2-01.png') }}" alt="Renovation" style="height:50px;" />
            <span style="color:#fff;font-size: 16px;">เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด</span>
        </div>
        <div class="pull-right">
            <a href="javascript:void(0)" onclick="toggleSidebar()"><i class="fa fa-bars fa-3x" aria-hidden="true" style="line-height:50px;color:#fff;margin-right:5px;"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="menu-side-menu animated">
        <ul>
            <li>
                <a data-ripple href="/" class="{{ $page == "home" ? "active " : "" }}"> <i class="fa fa-home"></i> หน้าแรก</a>
            </li>
            <li>
                <a data-ripple href="/about" class="{{ $page == "service" ? "active " : "" }}"><i class="fa fa-info-circle"></i> เกี่ยวกับบริษัท</a>
            </li>
            <li>
                <a data-ripple href="/portfolio" class="{{ $page == "portfolio" ? "active " : "" }}"><i class="fa fa-picture-o"></i> ผลงานของเรา</a>
            </li>
            <li>
                <a data-ripple href="/contact" class="{{ $page == "contact" ? "active " : "" }}"><i class="fa fa-handshake-o"></i> ติดต่อเรา</a>
            </li>
        </ul>
    </div>
    <nav>
        <div class="width-container">
            <div style="background: #fff;width: 125px;position: absolute;left: 0;right: 0;padding: 5px;border-radius: 0 0 10px 10px;box-shadow:0px 0px 10px 1px #252536;">
                <div class="pull-left">
                    <a href="/" title="Renovation" rel="home">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Renovation" class="img-responsive" />
                    </a>
                </div>
            </div>
            <div class="pull-right">
                <ul class="sf-menu">
                    <li class="menu-item {{ $page == "home" ? "current-menu-item " : "" }}">
                        <a data-ripple href="/"> <i class="fa fa-home"></i> หน้าแรก</a>
                    </li>
                    <li class="menu-item {{ $page == "service" ? "current-menu-item " : "" }}">
                        <a data-ripple href="/about"><i class="fa fa-info-circle"></i> เกี่ยวกับบริษัท</a>
                    </li>
                    <li class="menu-item {{ $page == "portfolio" ? "current-menu-item " : "" }}">
                        <a data-ripple href="/portfolio"><i class="fa fa-picture-o"></i> ผลงานของเรา</a>
                    </li>
                    <li class="menu-item {{ $page == "contact" ? "current-menu-item " : "" }}">
                        <a data-ripple href="/contact"><i class="fa fa-handshake-o"></i> ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>