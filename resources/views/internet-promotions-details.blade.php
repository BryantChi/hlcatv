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
                        <h5 class="text-blue mb-0">{{ $internetPromotions->title }}</h5>
                    </div>


                    <div class="col-12 promotions-content">

                        {!! $internetPromotions->content !!}

                    </div>

                </div>

                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('internet-promotions') }}" class="btn-promotions-back-list">〈 返回列表</a>
                </div>

            </div>

        </div>



    </div>
@endsection
