@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">數位有線電視 • 優惠方案</h1>
                        <p>
                            新戶優惠、續約折扣，還是多項服務合約方案，我們都有最划算的選擇，滿足您不同的需求。
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-start mx-lg-auto mx-2 mt-4">
                    <div class="col-12 promotions-header text-center py-3 px-3 mb-4">
                        <h5 class="text-blue mb-0">有線電視客戶獨享網路超值優惠一雙重服務，雙倍享受</h5>
                    </div>

                    <div class="col-12 mb-4">
                        <img src="{{asset('assets/img/02/02pic2.jpg')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 promotions-content">
                        <p>
                            洄瀾有線電視特別推出全新數位頻道『家庭套餐』，帶來多樣化、專為家庭打造的節目內容，讓全家人都能找到喜愛的節目！從熱門電影、親子動畫、體育賽事到時尚娛樂，無論是大人或小孩，家庭成員都能在家輕鬆享受高品質的娛樂時光。立即申辦，還有專屬優惠等您來享！
                        </p>
                    </div>

                    <div class="col-lg-6 promotions-content">
                        <p>
                            <span class="text-blue-light">✓家庭套餐專屬優惠：</span><br>
                            <span class="font-bold">新用戶首月免費試用</span><br>
                            新申辦用戶可享 首月免費試用，先體驗後訂購，盡情感受家庭套餐的豐富內容！<br>
                            <span class="font-bold">限時申辦優惠</span><br>
                            即日起至年底前申辦，即享每月88折 優惠價，讓您用更低價格擁有更多頻道！<br>
                            <span class="font-bold">多重服務合約優惠</span><br>
                            同時搭配洄瀾有線電視寬頻上網服務，享專屬折扣，讓您一站滿足家庭娛樂與網路需求。<br>
                            <span class="font-bold">續約再享折扣</span><br>
                            現有用戶續約『家庭套餐』即享每月額外 NT$100折扣，讓長期支持的您持續享有實惠價！
                        </p>
                    </div>

                    <div class="col-lg-6 promotions-content">
                        <p>
                            <span class="text-blue-light">✓家庭套餐內容亮點：</span><br>
                            <span class="font-bold">兒童專區</span><br>
                            提供多款動畫及教育節目，安心的內容讓孩子學習與娛樂兼具。<br>
                            <span class="font-bold">體育頻道</span><br>
                            包括籃球、足球、棒球等熱門體育賽事，讓家中的運動迷不錯過任何精彩對決！<br>
                            <span class="font-bold">電影及娛樂頻道</span><br>
                            從好萊塢大片到流行綜藝，應有盡有，讓您在家享受影院級娛樂體驗。<br>
                            <span class="font-bold">本地及國際新聞</span><br>
                            全天候新聞播報，隨時掌握國內外重要資訊。
                        </p>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('cable-tv-promotions') }}" class="btn-promotions-back-list">〈 返回列表</a>
                    </div>


                </div>

            </div>

        </div>



    </div>
@endsection
