@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">最新消息</h1>
                        <p>
                            無論是即將推出的新功能還是精彩的限時優惠，您都能在此快速了解，讓您的娛樂生活更加豐富多彩！
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">


                    <div class="col-12 news-section position-relative overflow-hidden pt-3 pb-5">
                        <div class="news-header-line"></div>

                        <div class="news-header mx-3 my-3 py-3 px-3 text-center">
                            <h5>新增熱門頻道，娛樂更多元！</h5>
                            <p class="text-gray" style="font-size:14px">發布日期：2024-11-27</p>
                        </div>

                        <div class="news-content text-center mt-3 py-3">
                            <img src="{{asset('assets/img/06/06pic5.jpg')}}" class="img-fluid" alt="">

                            <p class="mt-4">
                                洄瀾有線電視為了滿足用戶日益多元的娛樂需求，特別新增多個熱門頻道，讓您的觀影體驗更豐富、更精彩！<br>
                                無論您是電影愛好者、體育迷，還是親子家庭，都能在這次新增的頻道中找到屬於您的最愛！<br><br>

                                <span class="text-blue-light">新增頻道亮點</span><br>
                                <span class="font-bold">影視劇集專區：</span>引進國內外熱門影劇，經典電影與最新劇集同步播出，讓影迷不再錯過任何精彩內容。<br>
                                <span class="font-bold">體育頻道升級：</span>新增專業體育頻道，實時播報足球、籃球、網球等國際賽事，還有賽事回顧與深度分析。<br>
                                <span class="font-bold">兒童專屬頻道：</span>推出更多適合孩子的動畫、教育節目，讓學習與娛樂同步進行，家長更安心。<br>
                                <span class="font-bold">時尚生活頻道：</span>涵蓋美食、旅遊、時尚等多元內容，為您的日常生活增添更多靈感。<br><br>

                                <span class="text-blue-light">免費試看活動</span><br>
                                即日起至12月31日，所有洄瀾有線電視用戶均可享受新增頻道的免費試看服務。只需調整頻道至指定號碼，即可立即體驗豐富多樣的節目內容！<br><br>

                                <span class="text-blue-light">如何申辦？</span><br>
                                如果您還不是洄瀾用戶，現在加入即可同步享受新增頻道的試看優惠，以及更多專屬活動。
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('news') }}" class="btn-promotions-back-list">〈 返回列表</a>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
