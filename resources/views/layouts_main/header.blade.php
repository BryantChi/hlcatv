<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top site-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('assets/img/00-hp/top_logo.svg')}}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle {{ request()->is('epg*') || request()->is('cable-tv-promotions*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">數位有線電視</a>
                        <div class="dropdown-menu nav-dropdown rounded-0 m-0">
                            <a href="{{ route('epg') }}" class="dropdown-item">數位節目表</a>
                            <a href="{{ route('cable-tv-promotions') }}" class="dropdown-item">優惠方案</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle {{ request()->is('internet-promotions*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">寬頻上網</a>
                        <div class="dropdown-menu nav-dropdown rounded-0 m-0">
                            <a href="http://211.76.87.39/" target="_blank" class="dropdown-item">連線速度測試</a>
                            <a href="{{ route('internet-promotions') }}" class="dropdown-item">優惠方案</a>
                        </div>
                    </div>
                    <a href="{{ route('latest-announcements') }}" class="nav-item nav-link {{ request()->is('latest-announcements*') ? 'active' : '' }}">最新公告</a>
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle {{ request()->is('downloads*') || request()->is('payment-methods*') || request()->is('faq*') || request()->is('legal-rules*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">客服中心</a>
                        <div class="dropdown-menu nav-dropdown rounded-0 m-0">
                            <a href="{{ route('downloads') }}" class="dropdown-item">下載專區</a>
                            <a href="{{ route('payment-methods') }}" class="dropdown-item">繳費方式</a>
                            <a href="{{ route('faq') }}" class="dropdown-item">常見問題</a>
                            <a href="{{ route('legal-rules') }}" class="dropdown-item">相關法規</a>
                        </div>
                    </div>
                    <a href="{{ route('repair') }}" class="nav-item nav-link {{ request()->is('repair*') ? 'active' : '' }}">線上報修</a>
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle {{ request()->is('news*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">地方新聞</a>
                        <div class="dropdown-menu nav-dropdown rounded-0 m-0">
                            <a href="https://www.youtube.com/user/HLCATV/videos" target="_blank" class="dropdown-item">在地節目</a>
                            <a href="{{ route('news') }}" class="dropdown-item">最新消息</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                </div> -->
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
