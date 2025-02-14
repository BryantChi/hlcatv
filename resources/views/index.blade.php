@extends('layouts_main.master')

@section('content')
    <div id="main_section">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center" id="quick-items">

                    <div class="col-lg-auto col-5 text-center quick-item quick-items-line mx-1">
                        <a href="{{ route('repair') }}">
                            <img src="{{asset('assets/img/00-hp/item_icon1.png')}}" class="img-fluid mb-3" alt="">
                            <p>線上報修</p>
                        </a>
                    </div>

                    <div class="col-lg-auto col-5 text-center quick-item quick-items-line mx-1">
                        <a href="{{ route('payment-methods') }}">
                            <img src="{{asset('assets/img/00-hp/item_icon2.png')}}" class="img-fluid mb-3" alt="">
                            <p>繳費方式</p>
                        </a>

                    </div>

                    <div class="col-lg-auto col-5 text-center quick-item quick-items-line mx-1">
                        <a href="{{ route('downloads') }}">
                            <img src="{{asset('assets/img/00-hp/item_icon3.png')}}" class="img-fluid mb-3" alt="">
                            <p>下載專區</p>
                        </a>
                    </div>

                    <div class="col-lg-auto col-5 text-center quick-item quick-items-line mx-1">
                        <a href="{{ route('faq') }}">
                            <img src="{{asset('assets/img/00-hp/item_icon4.png')}}" class="img-fluid mb-3" alt="">
                            <p>常見問題</p>
                        </a>
                    </div>

                    <div class="col-lg-auto px-lg-5 px-3 py-4">
                        <div class="mx-auto" style="width: max-content;">
                            <h6 class="mb-0 d-flex justify-content-start align-items-center"><img
                                    src="{{asset('assets/img/00-hp/item_phone.png')}}" class="img-fluid" width="36" alt=""> 免付費客服專線
                            </h6>
                            <p class="mb-0 ps-2" style="color: #e18b0a;font-size: 1.35rem;">0800-529999</p>
                            <h6 class="mb-0 d-flex justify-content-start align-items-center"><img
                                    src="{{asset('assets/img/00-hp/item_time.png')}}" class="img-fluid" width="36" alt=""> 電話客服時間
                            </h6>
                            <p class="mb-0 ps-2">08:00-21:00</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="position-relative">
            <div class="about-bg"></div>
            <div class="container-xxl py-5">

                <div class="container">

                    <div class="row  justify-content-center align-content-stretch" id="intro-link">
                        <div class="col-lg-4 px-4 mb-3">
                            <div class="intro-link-box text-center">
                                <img src="{{asset('assets/img/00-hp/item_pic1.jpg')}}" class="img-fluid mb-3" alt="">
                                <h5>數位有線電視</h5>
                                <p class="mb-5">洄瀾有線電視為您帶來清晰、流暢的畫質，以及豐富多元的節目選擇。</p>
                                <a href="{{ route('cable-tv-promotions') }}" class="btn-intro-more mb-5">了解更多</a>
                            </div>
                        </div>
                        <div class="col-lg-4 px-4 mb-3">
                            <div class="intro-link-box text-center">
                                <img src="{{asset('assets/img/00-hp/item_pic2.jpg')}}" class="img-fluid mb-3" alt="">
                                <h5>寬頻上網</h5>
                                <p class="mb-5">穩定快速的光纖網路服務，讓您隨時隨地享受流暢的網路體驗。</p>
                                <a href="{{ route('internet-promotions') }}" class="btn-intro-more mb-5">了解更多</a>
                            </div>

                        </div>
                        <div class="col-lg-4 px-4 mb-3">
                            <div class="intro-link-box text-center">
                                <img src="{{asset('assets/img/00-hp/item_pic3.jpg')}}" class="img-fluid mb-3" alt="">
                                <h5>客服中心</h5>
                                <p class="mb-5">無論您是有技術疑問、帳單查詢，還是希望了解最新優惠，我們都將竭誠為您解答。</p>
                                <a href="{{ route('faq') }}" class="btn-intro-more mb-5">了解更多</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid p-0">

                <div class="row align-items-center w-100 p-0 m-0" id="about">
                    <div class="col-lg-5 ps-0 mb-lg-auto mb-3">
                        <img src="{{asset('assets/img/00-hp/ab_pic.jpg')}}" class="img-fluid"
                            style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;" alt="">
                    </div>
                    <div class="col-lg-6 ps-lg-5 px-4">
                        <h5>洄瀾有線電視</h5>

                        <p>
                            於87年6月10日成立，旨在服務後山地區的民眾，縮短東西部在資訊傳播上的差距。<br>
                            在資訊爆炸的時代，我們致力為花蓮縣居民提供即時、同步的資訊，以回饋地方的精神，服務廣大開聽眾群。<br><br>


                            我們的經營團隊由全國有線電視產業的菁英組成，憑藉多年實務經驗和貢獻服務的熱誠，期望為花蓮建立高品質的閱讀環境，推動後山資訊化的普及。<br>
                            洄瀾有線電視早期與力霸、緯來等大型集團合作，並於93年起開始提供有線電視上網服務，結合工程、客服、收費等多項服務，為客戶提供一站式的完整服務體驗。<br><br>


                            我們秉持「視客如親」的經營理念，深知客戶的支持是洄瀾賴以生存的基石。<br>
                            因此，洄瀾嚴格要求所有人員必須對每一位客戶的服務都予以同樣的重視，提供快速、親切且令人滿意的服務。<br>
                            客戶的口碑和滿意度是洄瀾全體上下全力以赴的核心目標。<br>
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row mb-3" id="news">
                    <div class="col-lg-12 d-flex justify-content-between align-items-end mb-2">
                        <div class="d-flex align-items-center" style="width: max-content;">
                            <p class="mb-0 section-icon me-1"></p>
                            <h5 class="mb-0">最新公告</h5>
                        </div>
                        <div class="d-flex" style="width: max-content;">
                            <a href="{{ route('latest-announcements') }}" class="mb-0 d-flex align-items-center text-dark">看更多 <img
                                    src="{{asset('assets/img/00-hp/o_arrow.png')}}" class="img-fluid" width="18" alt=""></a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box">
                            <img src="{{asset('assets/img/00-hp/board_pic1.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box">
                            <img src="{{asset('assets/img/00-hp/board_pic2.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>台電花蓮區營業處停電作業告</h5>
                            <p>2021-08-19</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box">
                            <img src="{{asset('assets/img/00-hp/board_pic3.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box">
                            <img src="{{asset('assets/img/00-hp/board_pic4.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>台電花蓮區營業處停電作業</h5>
                            <p>2021-08-1</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row mb-3" id="local-news">
                    <div class="col-lg-12 d-flex justify-content-between align-items-end mb-2">
                        <div class="d-flex align-items-center" style="width: max-content;">
                            <p class="mb-0 section-icon me-1"></p>
                            <h5 class="mb-0">地方新聞</h5>
                        </div>
                        <div class="d-flex" style="width: max-content;">
                            <a href="{{ route('news') }}" class="mb-0 d-flex align-items-center text-dark">看更多 <img
                                    src="{{asset('assets/img/00-hp/o_arrow.png')}}" class="img-fluid" width="18" alt=""></a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-6 position-relative mb-3">
                        <a href="https://www.youtube.com/user/HLCATV/videos" target="_blank">
                            <img src="{{asset('assets/img/00-hp/local_new624.jpg')}}" class="img-fluid local-news-img d-block d-md-none"
                                alt="">
                            <img src="{{asset('assets/img/00-hp/local_new784.jpg')}}" class="img-fluid local-news-img d-none d-md-block"
                                alt="">
                            <p class="local-news-item-title1">在地節目</p>
                        </a>
                    </div>
                    <div class="col-lg-6 position-relative mb-3">
                        <a href="{{ route('news') }}">
                            <img src="{{asset('assets/img/00-hp/news624.jpg')}}" class="img-fluid local-news-img d-block d-md-none"
                                alt="">
                            <img src="{{asset('assets/img/00-hp/news784.jpg')}}" class="img-fluid local-news-img d-none d-md-block"
                                alt="">
                            <p class="local-news-item-title2">最新消息</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 py-5 position-relative">
            <div class="sale-bg"></div>
            <div class="container">
                <div class="row align-content-center mb-3 mt-5 pt-5 text-center" id="sales">
                    <div class="col-lg-12 mb-3">
                        <h4 class="text-white">洄瀾有線電視 —<br class="d-block d-lg-none">讓您與花蓮緊密相連！</h4>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5 class="text-white">深耕花蓮多年，提供您優質的家庭娛樂與高速網路服務，是您居家生活不可或缺的好夥伴。</h5>
                    </div>
                    <div class="col-lg-12 d-block d-lg-flex justify-content-center">
                        <a href="{{ route('cable-tv-promotions') }}" class="btn btn-outline-light my-2 me-lg-1">數位有線電視 優惠方案 》</a>
                        <a href="{{ route('internet-promotions') }}" class="btn btn-outline-light my-2 ms-lg-1">寬頻上網 優惠方案 》</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
