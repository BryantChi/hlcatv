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
                        <h5 class="text-blue mb-0">{{ $tvPromotions->title }}</h5>
                    </div>

                    <div class="col-12 promotions-content">
                        {!! $tvPromotions->content !!}
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('cable-tv-promotions') }}" class="btn-promotions-back-list">〈 返回列表</a>
                    </div>


                </div>

            </div>

        </div>



    </div>
@endsection
