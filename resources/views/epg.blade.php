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
                    <div class="col-lg-11 row d-flex justify-content-center align-items-center px-lg-5 px-3 py-3 text-center">
                        {{-- <a href="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . ($epgInfo->epg_img ?? '') }}" data-fancybox="epg">
                            <img src="{{ env('APP_URL', 'https://hlcatv.com.tw') . '/uploads/' . ($epgInfo->epg_img ?? '') }}" class="img-fluid epg-img" alt="{{ $epgInfo->alt ?? '' }}">
                        </a> --}}
                        @php
                            $html = $epgInfo->epg_img ?? '';
                            $modifiedHtml = '';
                            if (!empty($html)) {
                                // 為了避免非完整 HTML 的警告，加上適當編碼與錯誤控制
                                libxml_use_internal_errors(true);
                                $dom = new \DOMDocument();

                                // 將字串轉換成 HTML-ENTITIES，避免中文亂碼
                                $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
                                libxml_clear_errors();

                                $images = $dom->getElementsByTagName('img');

                                // 對每個 img 標籤處理
                                foreach ($images as $img) {
                                    $src = $img->getAttribute('src');

                                    // 建立 a 標籤，設定 fancybox 的屬性
                                    $a = $dom->createElement('a');
                                    $a->setAttribute('href', $src);
                                    $a->setAttribute('data-fancybox', 'gallery'); // 可自行更改 gallery 名稱

                                    // 將 img 移入 a 標籤
                                    $imgParent = $img->parentNode;
                                    $a->appendChild($img->cloneNode(true));
                                    $imgParent->replaceChild($a, $img);
                                }

                                // 為了只取得 body 內容（排除自動加入的 html, head, body 標籤）
                                $body = $dom->getElementsByTagName('body')->item(0);
                                foreach ($body->childNodes as $child) {
                                    $modifiedHtml .= $dom->saveHTML($child);
                                }
                            }
                        @endphp
                        <div class="epg-img text-center">
                            {!! $modifiedHtml !!}
                        </div>

                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
