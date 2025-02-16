@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">數位節目表</h1>
                        <p>
                            洄瀾有線電視數位節目表，讓您輕鬆掌握最新的節目資訊，隨時隨地找到您想看的精彩內容！
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-5 epg-section">
                    <div class="col-lg-11 row d-flex justify-content-between align-items-center px-lg-5 px-3 py-3">
                        <a href="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . ($epgInfo->epg_img ?? '') }}" data-fancybox="epg">
                            <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . ($epgInfo->epg_img ?? '') }}" class="img-fluid epg-img" alt="{{ $epgInfo->alt ?? '' }}">
                        </a>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
