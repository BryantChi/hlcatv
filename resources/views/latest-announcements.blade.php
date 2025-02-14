@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">最新公告</h1>
                        <p>
                            斷訊通知、停電公告、管線施工⋯等，您都可以在這裡快速掌握最新收訊情況。
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-12 d-flex justify-content-end">
                        <p class="text-gray" style="font-size: 14px;">共有12則最新消息</p>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <a href="{{ route('latest-announcements-details') }}">
                                <img src="{{asset('assets/img/03/board_pic1.jpg')}}" class="img-fluid mb-4" alt="">
                                <h5>113/08/30施工公告</h5>
                                <p>2024-08-27</p>
                            </a>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('latest-announcements-details') }}" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic2.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic3.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic4.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <a href="javascript:void(0)">
                                <img src="{{asset('assets/img/03/board_pic1.jpg')}}" class="img-fluid mb-4" alt="">
                                <h5>113/08/30施工公告</h5>
                                <p>2024-08-27</p>
                            </a>

                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic2.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic3.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic4.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <a href="javascript:void(0)">
                                <img src="{{asset('assets/img/03/board_pic1.jpg')}}" class="img-fluid mb-4" alt="">
                                <h5>113/08/30施工公告</h5>
                                <p>2024-08-27</p>
                            </a>

                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic2.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic3.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="news-slide-box border-bottom pb-3">
                            <img src="{{asset('assets/img/03/board_pic4.jpg')}}" class="img-fluid mb-4" alt="">
                            <h5>113/08/30施工公告</h5>
                            <p>2024-08-27</p>
                            <div class="d-flex justify-content-end">
                                <a href="javascript:void(0)" class="btn-news-slide-details">觀看詳情 ＋</a>
                            </div>
                        </div>
                    </div>




                </div>

            </div>

        </div>



    </div>
@endsection
