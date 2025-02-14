@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">繳費方式</h1>
                        <p>
                            多元的繳費方式，讓您能輕鬆完成帳單支付，保持服務不中斷。
                        </p>
                    </div>
                </div>


                <div class="row justify-content-center align-items-center mb-5">

                    <div class="col-lg-6 mb-lg-0 mb-3">
                        <div class="bg-blue-light rounded-20 d-flex justify-content-center align-items-center py-lg-4 py-3 px-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="text-center">
                                <img src="img/04/04icon1.png" class="img-fluid" style="max-width: 120px;" alt="">
                            </div>
                            <div class="">
                                <h6>收費方式</h6>
                                <p class="align-items-center">
                                    <img src="{{('assets/img/04/04n1.png')}}" class="img-fluid" width="25" alt="">臨櫃
                                    <img src="{{('assets/img/04/04n2.png')}}" class="img-fluid" width="25" alt="">到府收費
                                    <br class="d-block d-md-none">
                                    <img src="img/04/04n3.png" class="img-fluid" width="25" alt="">7-11帳單
                                    <img src="img/04/04n4.png" class="img-fluid" width="25" alt="">ATM帳號
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0 mb-3">
                        <div class="bg-blue-light rounded-20 d-flex justify-content-center align-items-center py-lg-4 py-3 px-3 wow fadeIn"
                            data-wow-delay="0.1s">
                            <div class="text-center">
                                <img src="img/04/04icon2.png" class="img-fluid" style="max-width: 120px;" alt="">
                            </div>
                            <div class="">
                                <h6>服務區域</h6>
                                <p class="align-items-center">
                                    花蓮市、吉安鄉、新城鄉、秀林鄉部分
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center methods-content pt-lg-5 pt-3 pb-3">
                    <div class="col-12">
                        <div class="row justify-content-center align-items-stretch px-3-5">

                            <div class="col-lg-4 methods-grid wow fadeIn" data-wow-delay="0.1s">
                                <h6>二信自動轉帳扣款</h6>
                                <p>
                                    手續簡便，輕鬆繳款又方便，意者請電聯本公司專線電話03-8573777。
                                </p>
                            </div>
                            <div class="col-lg-4 methods-grid wow fadeIn" data-wow-delay="0.1s">
                                <h6>臨櫃繳費</h6>
                                <p>
                                    您可親至本公司櫃檯繳費，本公司人員竭誠歡迎您的光臨，公司地址：花蓮縣吉安鄉吉安路一段135號。
                                </p>

                            </div>
                            <div class="col-lg-4 methods-grid wow fadeIn" data-wow-delay="0.1s">
                                <h6>專人到府收費</h6>
                                <p>
                                    本公司收費人員將定期至府上收取該期費用，繳費很方便。
                                </p>

                            </div>

                        </div>

                        <div class="row justify-content-center align-items-stretch px-3-5">

                            <div class="col-12 py-4 wow fadeIn" data-wow-delay="0.1s">
                                <hr>
                            </div>

                            <div class="col-12 py-4 wow fadeIn" data-wow-delay="0.1s">
                                <h6>ATM匯款繳費</h6>
                                <p>
                                    可直接至銀行窗口或者ATM提款機進行轉帳<br>
                                    銀行代號：216 花蓮市第二信用合作社-主里分社<br>
                                    帳號：030-001-02002012<br>
                                    請貴用戶轉帳好之後，請將【客戶姓名】、【電話】、【裝機地址】、【ATM帳號後六碼】、【轉帳金額】告知本公司。<br>
                                    可利用電話、Facebook訊息、LINE訊息、傳真（03-8461842）。
                                </p>
                            </div>

                        </div>
                    </div>
                </div>




            </div>

        </div>



    </div>
@endsection
