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
                            <h5>{{ $news->title }}</h5>
                            <p class="text-gray" style="font-size:14px">發布日期：{{ \Carbon\Carbon::parse($news->created_at)->format('Y-m-d') }}</p>
                        </div>

                        <div class="news-content text-center mt-3 py-3">
                            {!! $news->content !!}
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
