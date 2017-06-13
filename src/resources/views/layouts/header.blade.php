<header class="animated slideInDown fix-when-mobile">
    <div class="menu-mobile" style="padding:10px;">
        <div class="pull-left">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Renovation" style="height:50px;" />
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
                <a data-ripple href="/service" class="{{ $page == "service" ? "active " : "" }}"><i class="fa fa-wrench"></i> บริการของเรา</a>
            </li>
            <li>
                <a data-ripple href="/portfolio" class="{{ $page == "portfolio" ? "active " : "" }}"><i class="fa fa-picture-o"></i> ผลงานของเรา</a>
            </li>
            <li>
                <a data-ripple href="/contact" class="{{ $page == "contact" ? "active " : "" }}"><i class="fa fa-handshake-o"></i> ติดต่อเรา</a>
            </li>
        </ul>
    </div>
    <div class="width-container">
        <div id="logo-pro">
            <h1 id="logo">
                <a href="/" title="Renovation" rel="home">
					<img src="{{ asset('assets/images/logo.png') }}" alt="Renovation" width="180" />
				</a>
            </h1>
        </div>
    </div>
    <nav>
        <div class="width-container">
            <div class="primary-left-nav">
                <div class="logo_container"></div>
                <div class="menu-main-navigation-left-container">
                    <ul class="sf-menu">
                        <li class="menu-item {{ $page == "home" ? "current-menu-item " : "" }}">
                            <a data-ripple href="/"> <i class="fa fa-home"></i> หน้าแรก</a>
                        </li>
                        <li class="menu-item {{ $page == "service" ? "current-menu-item " : "" }}">
                            <a data-ripple href="/service"><i class="fa fa-wrench"></i> บริการของเรา</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="primary-right-nav">
                <div class="logo_container"></div>
                <div class="menu-main-navigation-right-container">
                    <ul class="sf-menu">
                        <li class="menu-item {{ $page == "portfolio" ? "current-menu-item " : "" }}">
                            <a data-ripple href="/portfolio"><i class="fa fa-picture-o"></i> ผลงานของเรา</a>
                        </li>
                        <li class="menu-item {{ $page == "contact" ? "current-menu-item " : "" }}">
                            <a data-ripple href="/contact"><i class="fa fa-handshake-o"></i> ติดต่อเรา</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </nav>
</header>