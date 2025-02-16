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


                    <div class="col-12 announcements-section position-relative overflow-hidden pt-3 pb-5">
                        <div class="announcements-header-line"></div>

                        <div class="announcements-header mx-3 my-3 py-3 px-3 text-center">
                            <h5>{{ $announcementInfo->title }}</h5>
                            <p class="text-gray" style="font-size:14px">發布日期：{{ \Carbon\Carbon::parse($announcementInfo->created_at)->format('Y-m-d') }}</p>
                        </div>

                        <div class="announcements-content text-center mt-3 py-3">
                            {!! $announcementInfo->content !!}
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('latest-announcements') }}" class="btn-promotions-back-list">〈 返回列表</a>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
