<!-- Footer Start -->
<div class="container-fluid footer mt-52 py-52 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pt-5 pb-2">
        <div class="row g-4 justify-content-between">
            <div class="col-lg-auto col-md-6">
                <a href="{{ route('index') }}">
                    <img src="{{asset('assets/img/00-hp/footer_logo.svg')}}" class="img-fluid w-75" alt="">
                </a>
            </div>
            <div class="col-lg-auto col-md-6">
                <h6 class="mb-4" style="color: #a8a8a8;">數位有線電視</h6>
                <a class="btn btn-link" href="{{ route('epg') }}">數位節目表</a>
                <a class="btn btn-link" href="{{ route('cable-tv-promotions') }}">優惠方案</a>
                <!-- <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p> -->
                <!-- <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div> -->
            </div>
            <div class="col-lg-auto col-md-6">
                <h6 class="mb-4" style="color: #a8a8a8;">寬頻上網</h6>
                <a class="btn btn-link" href="http://211.76.87.39/" target="_blank">連線速度測試</a>
                <a class="btn btn-link" href="{{ route('internet-promotions') }}">優惠方案</a>
            </div>
            <div class="col-lg-auto col-md-6">
                <h6 class="mb-4" style="color: #a8a8a8;">客服中心</h6>
                <a class="btn btn-link" href="{{ route('downloads') }}">下載專區</a>
                <a class="btn btn-link" href="{{ route('payment-methods') }}">繳費方式</a>
                <a class="btn btn-link" href="{{ route('faq') }}">常見問題</a>
                <a class="btn btn-link" href="{{ route('legal-rules') }}">相關法規</a>
            </div>
            <div class="col-lg-auto col-md-6">
                <h6 class="mb-4" style="color: #a8a8a8;">地方新聞</h6>
                <a class="btn btn-link" href="https://www.youtube.com/user/HLCATV/videos">在地節目</a>
                <a class="btn btn-link" href="{{ route('news') }}">最新消息</a>
            </div>
            <div class="col-lg-auto col-md-6">
                <a class="btn btn-link text-white" href="{{ route('latest-announcements') }}">最新公告</a>
                <a class="btn btn-link text-white" href="{{ route('repair') }}">線上報修</a>
            </div>
            <div class="col-lg-auto col-md-6">
                <h6 class="mb-4" style="color: #a8a8a8;">LINE QRcode</h6>
                <a href="http://nav.cx/dZXcK8X" target="_blank"><img src="{{asset('assets/img/00-hp/footer_qrcode.png')}}" class="img-fluid"
                        alt=""></a>
            </div>
            <div class="col-lg-auto col-md-6">
                <h6 class="mb-4" style="color: #a8a8a8;">社群</h6>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.facebook.com/hlcatv/"
                        target="_blank">
                        <img src="{{asset('assets/img/00-hp/footer_fb.png')}}" width="42" alt="">
                    </a>
                    <a class="btn btn-square btn-primary rounded-circle me-2"
                        href="https://www.youtube.com/user/HLCATV/videos" target="_blank">
                        <img src="{{asset('assets/img/00-hp/footer_yt.png')}}" width="42" alt="">
                    </a>
                </div>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2"
                        href="https://www.instagram.com/hlcatv/?hl=zh-tw" target="_blank">
                        <img src="{{asset('assets/img/00-hp/footer_ig.png')}}" width="42" alt="">
                    </a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="http://nav.cx/dZXcK8X"
                        target="_blank">
                        <img src="{{asset('assets/img/00-hp/footer_line.png')}}" width="42" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-auto col-md-6 footer-tv-content ps-lg-4 pt-lg-auto pt-4 ms-lg-2">
                <h6 class="mb-4" style="color: #a8a8a8;">花東有線電視</h6>
                <a href="https://hlcatv.com.tw/" target="_blank" class="btn btn-link">洄瀾有線電視</a>
                <a href="https://tycatv.com.tw/" target="_blank" class="btn btn-link">東亞有線電視</a>
                <a href="https://ttcatv.com.tw/" target="_blank" class="btn btn-link">東台有線電視</a>
                <a href="https://ttb.com.tw/" target="_blank" class="btn btn-link">東台有線播送</a>
            </div>

            <div class="footer-line"></div>

            <div class="col-12 row justify-content-center mt-3">
                <div class="col-lg-auto">
                    <p class="text-white mb-0"><img src="img/00-hp/footer_rhombus.png" class="img-fluid me-2"
                            alt="">櫃台服務時間：<br class="d-block d-lg-none">8:00~19:00</p>
                </div>
                <!-- <div class="col-auto p-0 m-0 d-none d-lg-block">|</div> -->
                <div class="col-lg-auto">
                    <p class="text-white mb-0"><img src="img/00-hp/footer_rhombus.png" class="img-fluid me-2"
                            alt="">電話客服時間：<br class="d-block d-lg-none">8:00~21:00</p>
                </div>
                <!-- <div class="col-auto p-0 m-0 d-none d-lg-block">|</div> -->
                <div class="col-lg-auto">
                    <p class="text-white mb-0"><img src="img/00-hp/footer_rhombus.png" class="img-fluid me-2"
                            alt=""> LINE、FB線上服務時間：<br class="d-block d-lg-none">8:30～17:30
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="text-white">
                        免付費客服專線：0800-529999 • 電話：03-8573777 • LINE ID：@381gjzdw<br>
                        傳真：03-8461842 • 地址：973花蓮縣吉安鄉吉安路一段135號 • 信箱：catv888@gmail.com
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-2">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-auto text-center text-md-end mb-3 mb-md-0">
                <p class="mb-0">
                    <img src="{{asset('assets/img/00-hp/lock.png')}}" class="img-fluid" alt="">
                    <span>本網站採用全球最先進的TLS加密處理技術以確保所有傳輸資訊安全無憂</span>
                </p>
            </div>
            <div class="col-md-auto text-center text-md-start">
                <p class="mb-0 text-uppercase">© Copyright 2024 All Rights Reserved 洄瀾有線電視 Web Design Power By <a
                        href="https://cheni.com.tw/" target="_blank">誠翊資訊</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
