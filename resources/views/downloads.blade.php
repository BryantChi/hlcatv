@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">下載專區</h1>
                        <p>
                            查閱服務資訊，或是回顧會議決議，您都可以在此找到完整的資源，並快速下載，助您隨時掌握最新資訊。
                        </p>
                    </div>
                </div>


                <div class="row justify-content-center align-items-center mb-5 repair-section2">
                    <div
                        class="col-lg-11 row d-flex justify-content-between align-items-center px-lg-5 px-3 py-3 file-content-header">
                        <div class="col-auto file-content-title">標題</div>
                        <div class="col-auto file-content-title">檔案</div>
                    </div>
                    @foreach ($pdfFileDownloadInfos ?? [] as $pdfFile)
                    <div
                        class="col-lg-11 row d-flex justify-content-between align-items-center px-lg-5 px-3 py-3 file-content-item">
                        <div class="col">{{ $pdfFile->file_name }}</div>
                        <div class="col-auto">
                            <a href="{{ env('APP_URL', 'http://hlcatv.com.tw') . '/uploads/' . $pdfFile->file }}" download><img src="{{asset('assets/img/downloads/file.jpg')}}"
                                    class="img-fluid" width="30" alt=""></a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div
                        class="col-lg-11 row d-flex justify-content-between align-items-center px-lg-5 px-3 py-3 file-content-item">
                        <div class="col">113-01-洄瀾如何善用人工智慧提升競爭力</div>
                        <div class="col-auto">
                            <a href="{{asset('assets/file/113-01-洄瀾如何善用人工智慧提升競爭力.docx')}}" download><img src="{{asset('assets/img/downloads/file.jpg')}}"
                                    class="img-fluid" width="30" alt=""></a>
                        </div>
                    </div> --}}

                </div>

                <div class="overflow-auto mb-3">
                    {{ $pdfFileDownloadInfos->onEachSide(3)->links('layouts_main.custom-pagination') }}
                </div>
            </div>

        </div>



    </div>
@endsection
