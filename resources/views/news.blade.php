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
                    <div class="col-12 d-flex justify-content-end">
                        <p class="text-gray" style="font-size: 14px;">共有 {{ $newsInfos->total() ?? 0 }} 篇則最新消息</p>
                    </div>

                    @foreach ($newsInfos as $news)
                        <div class="col-lg-3 mb-4">
                            <div class="news-slide-box border-bottom pb-3">
                                <a href="{{ route('news-details', [$news->id]) }}">
                                    <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . $news->cover_front_image }}" class="img-fluid mb-4" alt="">
                                    <h5>{{ $news->title }}</h5>
                                    <p>{{ \Carbon\Carbon::parse($news->created_at)->format('Y-m-d') }}</p>
                                </a>

                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('news-details', [$news->id]) }}" class="btn-news-slide-details">觀看詳情 ＋</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

                <div class="overflow-auto mb-3">
                    {{ $newsInfos->onEachSide(3)->links('layouts_main.custom-pagination') }}
                </div>

            </div>

        </div>



    </div>
@endsection
