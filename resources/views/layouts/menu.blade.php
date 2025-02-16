<!-- need to remove -->

<li class="nav-item mb-4">
    <a href="{{ route('index') }}" target="_blank" class="nav-link">
        <span class="h5 mr-2 brand-image"><i class="fas fa-external-link-alt"></i></span>
        <p class="h5"> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.seoSettings.index') }}"
       class="nav-link {{ Request::is('admin/seoSettings*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-search"></i></span>
        <p>Seo設定</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ route('admin.marqueeInfos.index') }}"
       class="nav-link {{ Request::is('admin/marqueeInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-bullhorn"></i></span>
        <p>跑馬燈資訊</p>
    </a>
</li> --}}


<li class="nav-item">
    <a href="{{ route('admin.newsInfos.index') }}"
       class="nav-link {{ Request::is('admin/newsInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-newspaper"></i></span>
        <p>最新消息</p>
    </a>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle dropdown-tv" data-toggle="dropdown" href="javascript:void(0)"
        role="button" aria-expanded="false">
        <span class="mr-2 brand-image"><i class="fas fa-tv"></i></span>
        <p>數位有線電視</p>
    </a>
    <ul class="dropdown-menus nav nav-pills ml-3">
        <li class="nav-item">
            <a href="{{ route('admin.ePGInfos.index') }}"
                class="nav-link {{ Request::routeIs('admin.ePGInfos*') ? 'active' : '' }}">
                <p>數位節目表管理</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.cableTvPromotionsInfos.index') }}"
                class="nav-link {{ Request::routeIs('admin.cableTvPromotionsInfos*') ? 'active' : '' }}">
                <p>優惠方案</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle dropdown-internet" data-toggle="dropdown" href="javascript:void(0)"
        role="button" aria-expanded="false">
        <span class="mr-2 brand-image"><i class="fas fa-wifi"></i></span>
        <p>寬頻上網</p>
    </a>
    <ul class="dropdown-menus nav nav-pills ml-3">
        <li class="nav-item">
            <a href="{{ route('admin.internetPromotionsInfos.index') }}"
                class="nav-link {{ Request::routeIs('admin.internetPromotionsInfos*') ? 'active' : '' }}">
                <p>優惠方案</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{ route('admin.latestAnnouncementsInfos.index') }}" class="nav-link {{ Request::routeIs('admin.latestAnnouncementsInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-bullhorn"></i></span>
        <p>最新公告</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.pdfFileDownloadInfos.index') }}" class="nav-link {{ Request::routeIs('admin.pdfFileDownloadInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-download"></i></span>
        <p>下載專區管理</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.repairInfos.index') }}" class="nav-link {{ Request::routeIs('admin.repairInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-wrench"></i></span>
        <p>線上報修</p>
    </a>
</li>


@push('page_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.dropdown-menus').hide();

            $('.dropdown-toggle').on('click', function() {
                $(this).siblings('.dropdown-menus').first().toggle(1500);
            });

            $('.dropdown-menus .nav-link').each(function() {
                if ($(this).hasClass('active')) {
                    $(this).closest('.dropdown-menus').show();
                    $(this).closest('.dropdown-menus').siblings('.dropdown-toggle').closest('.nav-item').show();
                }
            });
        });
    </script>

@endpush
