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

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-12 d-flex justify-content-end">
                        <p class="text-gray" style="font-size: 14px;">共有 {{ count($tvPromotions ?? []) }} 筆則最新消息</p>
                    </div>

                    @foreach ($tvPromotions ?? [] as $tvPromotion)
                        <div class="col-lg-6 mb-4">
                            <div class="row promotions-box g-0">
                                <div class="col-md-5">
                                    <img src="{{ env('APP_URL') . '/uploads/' . $tvPromotion->cover_front_image }}" class="img-fluid w-100 h-100 promotions-img" alt="">
                                </div>
                                <div class="col-md-7 align-self-center">
                                    <div class="promotions-content position-relative px-lg-4 px-3 mx-lg-3 mx-0 my-lg-3 my-5">
                                        <h5 class="promotions-title mb-3">{{ $tvPromotion->title }}</h5>

                                        @php
                                            $content = preg_replace('/<img[^>]*>/i', '', $tvPromotion->content);
                                        @endphp
                                        <div class="multiline-ellipsis-2">
                                            {!! $content !!}
                                        </div>

                                        <div class="d-flex justify-content-end mt-lg-4 mt-3">
                                            <a href="{{ route('cable-tv-promotions-details', [$tvPromotion->id]) }}" class="btn-promotions-more">了解更多</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

                <div class="overflow-auto mb-3">
                    {{ $tvPromotions->onEachSide(3)->links('layouts_main.custom-pagination') }}
                </div>

            </div>

        </div>



    </div>
@endsection
