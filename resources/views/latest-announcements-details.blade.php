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
                            <h5>美崙部份地區，斷訊通知</h5>
                            <p class="text-gray" style="font-size:14px">發布日期：2024-08-27</p>
                        </div>

                        <div class="announcements-content text-center mt-3 py-3">
                            <img src="{{asset('assets/img/03/03pic.jpg')}}" class="img-fluid" alt="">

                            <p class="mt-4">
                                美侖部份地區，因為車禍事故電桿斷倒造成本公司附掛光纖主幹線斷纜！<br>
                                影響用戶收視區域包括：美工路、美工六街、華西路、精美路、七星、明潭、華德。<br>
                                目前工程人員全力搶修，在此致上十二萬分歉意
                            </p>
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
