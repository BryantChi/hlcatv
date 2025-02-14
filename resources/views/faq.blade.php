@extends('layouts_main.master')

@section('content')
    <div id="main">

        <div class="container-xxl py-5">

            <div class="container">

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-10 text-center">
                        <h1 class="fw-bold text-uppercase page-title">常見問題</h1>
                        <p>
                            洄瀾有線電視常見問題專區為您整理了用戶最常提問的問題及詳細解答；如果找不到您需要的答案，歡迎隨時聯繫我們的客服團隊，我們將竭誠為您服務！
                        </p>
                    </div>
                </div>


                <div class="row justify-content-start align-items-center mb-5">

                    <div class="col-12 bg-gray rounded-20 py-3 px-3 text-center mb-4">
                        <h5 class="mb-0">申裝相關</h5>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">1.</span>申請資格</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    1.花蓮市、吉安鄉、新城鄉之所有住戶。（秀林鄉部分地區，歡迎來電洽詢。）<br>
                                    2.無安裝 CATV有線電視用戶，亦可申請。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">2.</span>申請方式</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    1. 電話申請，申請專線 0800-529-999。<br>
                                    2. 傳真 至8461-842，請註明客戶名稱、聯絡電話、裝機地址即可。<br>
                                    3. Email 至 catv888@gmail.com，請註明客戶名稱、聯絡電話、裝機地址即可。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">3.</span>繳費方式</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    1. 由有線電視收費員到府收費, 亦有二信轉帳之繳費方式。<br>
                                    2. 用戶可選擇(年繳送3個月優待)等繳費週期, 申請移轉補助費之用戶亦不限制繳法。<br>
                                    3. 裝機時同時收取裝機費及第一次上網費(視用戶所選擇之繳費週期而定)。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">4.</span>複訊費</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    1. 未繳下期費用停訊後，復訊手續費100元/次。
                                    2. 辦理暫時停機之復訊費100元/次。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">5.</span>維修費</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    用戶發生本公司寬頻上網服務契約第十一條第7款之情事時，用戶需支付維修費用1000。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">6.</span>設備賠償</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    纜線數據機1500元/台<br>
                                    電源變壓器350/個
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 bg-gray rounded-20 py-3 px-3 text-center my-4">
                        <h5 class="mb-0">寬頻上網相關</h5>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">1.</span>無法上網</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    1.請先檢查數據機連線是否正常，燈號判斷請參考數據機燈號說明：<br>
                                    (1)POWER 【電源燈】：恆亮代表通電中。<br>
                                    (2)RECELVE 【纜線燈】：恆亮為訊號正常。<br>
                                    (3)SEND 【纜線燈】：恆亮代表通過認證。<br>
                                    (4)ONLINE 【取得IP燈】：恆亮代表數據機與電腦已連線 。<br>
                                    (5)PC 【網卡燈】：閃爍代表正在傳輸資料中。<br>
                                    正常連線說明：<br>
                                    除了""PC""燈號閃爍外，其他燈號必須恆亮狀態，才是正常上網狀態。倘若 數據機燈號不正常，請撥客服中心服務電話。<br>
                                    2.是否更換新主機或系統重灌：<br>
                                    電腦重灌的關係，使您的網路組態回歸預設值。請檢查下列設定：<br>
                                    (1)請檢查網路組態TCP/IP 設定是否有誤<br>
                                    (2)請確定網路卡是否成功驅動<br>
                                    (3)若皆OK請重開數據機，若重開無效請檢查IP位址<br>
                                    (4)建議移除不必要之網路元件<br>
                                    3.改用IP分享器介面：若改用IP分享器，請將數據機、IP分享器、電腦關機後，請從數據機先開，待數據機抓到訊號時，將IP分享器開機，再開電腦即可。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">2.</span>斷斷續續</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    若您連線時有不預期的網路斷線問題，通常原因有：網路實體線路斷線、該網站發生問題、用戶端電腦的問題。可依下列順序判判斷主要原因：<br>
                                    1.請先檢查數據機連線是否正常，燈號判斷請參考數據機燈號說明：正常，即可排除網路實體線路斷線的原因；不正常，請依燈號判別，可試著重開數據機；若燈號持續異常，請洽客服中心。<br>
                                    2.請檢查以下的網站流量是否正常或伺服器是否正在維護或重整中，建議可連線至本公司網站，或其它知名網站觀察連線狀態。<br>
                                    3.請檢查您的電腦狀態是否穩定，例如：硬體間的相容性問題、散熱不良、超頻運作、室內電源供應不足 … 等等。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">3.</span>連線變慢</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    影響連線速度的因素有很多種，概略如下: <br>
                                    1.網站本身的存取速度，若所連接的網站存取的人很多亦會影響資料下載速度。<br>
                                    2.該網站本身的連線頻寬不足。建議可連線至本公司網站，或其它知名網站如：yahoo、pchome確認連線速度是否一樣，若只有某一網站連線速度特別慢，則是該網站的伺服器問題，請聯絡該網站客服中心查詢伺服器狀態，並反映您的使用狀況。<br>
                                    3.連結網頁時，每一家ISP業者路徑設定與機房位置皆不同，而連結國外網站之後的路徑設定及線路頻寬，更無法由用戶端所在地全權決定，因此造成網路連線傳輸效能的不同。<br>
                                    4.網際網路是一個資源共享的整體環境，不論是光纖上網的有線電視網路架構(HFC)或是ADSL的電信架構，上網時間於尖峰時段必會受限於網際網路及網站連線人數負荷量高的因素而降低連線速度。<br>
                                    5.當您瀏覽器上設定好proxy server選項時，若您發現在玩某些線上遊戲或進行電子商務(股票)交易發生問題時，請您先將此設定關掉即可正常運作。<br>
                                    6.任何型態的電腦病毒皆會影響電腦的運作，請定時更新病毒碼，並檢測系統是否已遭病毒入侵。<br>
                                    若排除以上因素，仍有連線速率問題，請告知客服中心您的電腦作業系統版本、連線到哪個網站或遊戲、連線的時段。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">4.</span>有些網頁無法開啟，有些卻可以</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    有可能您所連接網頁當時較為壅塞，也會發生無法連接的問題，您可以先測試該網頁是否存活。<br>
                                    請先確認其他網頁可以正常瀏覽的狀況下，開啟 MS-DOS 模式，輸入：<br>
                                    c:\>ping(無法連接之網頁)，例如 : C:\> ping www.google.com.tw enter<br>
                                    c:\>tracert(無法連接之網頁)，例如:C:\> tracert www.google.com.tw enter<br>
                                    麻煩您將測試的結果，提供給客服人員處理。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between align-items-center">
                                <h5><span class="text-blue-light me-1">5.</span>玩線上遊戲會lag嗎？</h5>
                                <span class="faq-item-arrow-d">
                                    <img src="{{asset('assets/img/04/04qaicon1.png')}}" width="50" alt="">
                                </span>
                                <span class="faq-item-arrow-p d-none">
                                    <img src="{{asset('assets/img/04/04qaicon2.png')}}" width="50" alt="">
                                </span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a bg-blue-light rounded-20 px-4 py-3">
                                <p class="mb-0">
                                    1.請檢查電腦硬體配備有無達到遊戲公司所要求的建議配備。<br>
                                    2.如您有使用任何連線資源分享的軟硬體設定都會降低您的連線品質，請參考遊戲手冊中改善連線品質說明，將其它佔用記憶體的通訊及輔助程式關閉，如：flashgest、kuro…等等續傳軟體，並改善您的設定。<br>
                                    3.查詢遊戲伺服器上線人數是否己接近滿載。<br>
                                    4.任何型態的電腦病毒皆會影響電腦的運作，請定時更新病毒碼，並檢測系統是否已遭電腦病毒入侵。<br>
                                    5.請與你電腦的網路卡供應商聯絡， 將您的網路卡設定為單工輸出。<br>
                                    6.建議如果玩家電腦配備等級不高，請在進行遊戲時，不要開啟太多應用程式，以便能有更多記憶體作運算測試之用。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            $.each($('.faq-item-box'), function(i, v) {
                $(this).find('.faq-item-q').on('click', function() {
                    // 關閉所有其他的 .faq-item-a 和重設箭頭狀態
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-a').slideUp();
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-p').removeClass(
                        'd-none');
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-d').addClass(
                        'd-none');

                    // 切換當前項目的狀態
                    $(this).parent().find('.faq-item-a').slideToggle();
                    $(this).find('.faq-item-arrow-p').toggleClass('d-none');
                    $(this).find('.faq-item-arrow-d').toggleClass('d-none');
                })
            })
        })
    </script>
@endpush
