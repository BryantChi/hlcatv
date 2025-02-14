@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">寬頻上網 • 優惠方案</h1>
                        <p>
                            想要更快、更穩定的網路體驗？洄瀾有線電視寬頻上網推出多項優惠，讓您以最實惠的價格，暢享高速無憂的上網服務。
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-12 promotions-header text-center py-3 px-3 mb-4">
                        <h5 class="text-blue mb-0">有線電視客戶獨享網路超值優惠一雙重服務，雙倍享受</h5>
                    </div>

                    <div class="col-12 mb-4">
                        <img src="{{asset('assets/img/02/02pic2.jpg')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 promotions-content">
                        <p>
                            為感謝有線電視客戶的支持，洄瀾有線電視推出專屬「網路超值優惠」，讓您以更優惠的價格，享受穩定高速的寬頻上網服務。整合電視與網路需求，讓您的生活娛樂與工作學習更便利，一次滿足，全家安心使用！
                        </p>

                        <p>
                            <span class="text-blue-light">✓優惠方案詳情：</span><br>
                            <span class="font-bold">專屬折扣價</span><br>
                            凡洄瀾有線電視現有客戶，加購寬頻上網服務，即享每月8折優惠，輕鬆擁有高效上網體驗！<br>
                            <span class="font-bold">多裝置使用無壓力</span><br>
                            提供100Mbps、300Mbps至1Gbps多種網速方案，滿足一家多裝置同時上網的需求，讓追劇、打遊戲、視訊開會都不卡頓。<br>
                            <span class="font-bold">免費升級限時專案</span><br>
                            即日起申辦指定網速方案，即可免費升級至更高頻寬，讓您體驗真正的速度快感！<br>
                            <span class="font-bold">專屬安裝服務</span><br>
                            加購網路服務可享免安裝費，並由專業技術團隊到府安裝，讓您輕鬆上網無煩惱。<br>
                            <span class="font-bold">長期合約加碼優惠</span><br>
                            選擇一年期或以上合約，再享每月額外NT$100折扣，讓超值方案更划算！
                        </p>

                    </div>

                </div>

                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('internet-promotions') }}" class="btn-promotions-back-list">〈 返回列表</a>
                </div>

            </div>

        </div>



    </div>
@endsection
