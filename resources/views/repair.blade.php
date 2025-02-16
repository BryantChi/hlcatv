@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">線上報修</h1>
                        <p>
                            為了讓您在使用洄瀾有線電視與寬頻上網服務時更安心，我們提供線上報修服務，讓您隨時隨地透過網路提交報修申請，<br>無需等待或撥打電話；只需填寫表單，即可快速通報問題，我們的專業技術團隊將迅速與您聯繫，並在最短時間內為您排解故障。
                        </p>
                    </div>
                </div>


                <div class="row justify-content-center align-items-center mb-5 repair-section">
                    <div class="col-lg-4 p-0 overflow-hidden repair-section-img">
                        <!-- <img src="img/repair/05pic1080.jpg" class="img-fluid2 d-none d-lg-block repair-section-img1"
                            alt="">
                        <img src="img/repair/05pic624.jpg" class="img-fluid2 d-block d-lg-none repair-section-img2"
                            alt=""> -->
                    </div>
                    <div class="col-lg-8 px-lg-5 px-4 py-lg-3 py-5">
                        <div class="repair-form">
                            <form method="POST" action="{{ route('repairs.store') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <h5><span class="text-danger">*</span> 維修項目（必選）：</h5>
                                        <div class="form-floating">
                                            <select class="form-select" id="repair-item" name="repair_item"
                                                aria-label="Floating label select example" required>
                                                <option selected>請選擇維修項目</option>
                                                <option value="數位有線電視報修申請">數位有線電視報修申請</option>
                                                <option value="數位寬頻報修申請">數位寬頻報修申請</option>
                                            </select>
                                            <label for="repair-item">維修項目</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5><span class="text-danger">*</span> 申請人姓名（必填）：</h5>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="姓名"
                                                required>
                                            <label for="name">姓名</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5><span class="text-danger">*</span> 申請人電話（必填）：</h5>
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="電話"
                                                required>
                                            <label for="tel">電話</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5>電子信箱（可省略）：</h5>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                                required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5><span class="text-danger">*</span> 地址（必填）：</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- 縣市下拉選單 -->
                                        <div class="form-floating">
                                            <select class="form-select" id="city" name="city"
                                                aria-label="Floating label select example" required>
                                            </select>
                                            <label for="city">縣市</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- 鄉鎮市區下拉選單 -->
                                        <div class="form-floating">
                                            <select class="form-select" id="district" name="district"
                                                aria-label="Floating label select example" required>
                                            </select>
                                            <label for="district">鄉鎮市區</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="郵遞區號"
                                                required>
                                            <label for="zipcode">郵遞區號</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating2">
                                            <input type="text" class="form-control" id="address" name="address" placeholder=""
                                                required>
                                            <!-- <label for="address"></label> -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5><span class="text-danger">*</span> 狀況說明（必填）：</h5>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="留言" id="message" name="message" style="height: 100px" required></textarea>
                                            <label for="message">狀況說明</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <!-- 清除重填 -->
                                        <button class="btn-reset py-3" type="reset" onclick="resetForm()">清除重填</button>
                                        <button class="btn-submit py-3" type="submit">確認送出</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
@endsection

@push('third_party_scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@push('page_scripts')
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '成功',
                text: '{{ session("success") }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            // 定義資料來源的 URL
            const dataUrl =
                'https://gist.githubusercontent.com/mukiwu/50bccbe60f1e65660cfa12bec1d4a5f1/raw/TwCities.json';

            // 透過 AJAX 取得線上 JSON 資料
            $.getJSON(dataUrl, function(data) {
                // 初始化縣市下拉選單
                $('#city').append(new Option('請選擇縣市', ''));
                $('#district').append(new Option('請選擇鄉鎮市區', ''));
                data.forEach(function(city) {
                    $('#city').append(new Option(city.name, city.name));
                });

                // 當縣市選單變更時，更新鄉鎮市區選單
                $('#city').change(function() {
                    const selectedCity = $(this).val();
                    const districtSelect = $('#district');
                    districtSelect.empty().append(new Option('請選擇鄉鎮市區', ''));

                    if (selectedCity) {
                        const cityData = data.find(city => city.name === selectedCity);
                        cityData.districts.forEach(function(district) {
                            // 這裡將郵遞區號作為選項的值，以便選擇後顯示
                            districtSelect.append(new Option(district.name, district.zip));
                        });
                    }

                    // 清空郵遞區號顯示
                    $('#zipcode').text('');
                });

                // 當鄉鎮市區選單變更時，顯示對應的郵遞區號
                $('#district').change(function() {
                    const selectedZip = $(this).val();
                    $('#zipcode').val(selectedZip); // 顯示選中的郵遞區號
                });
            });
        });

        function resetForm() {
            $('form')[0].reset();
        }
    </script>
@endpush
