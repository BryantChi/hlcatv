<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\EPGController;
use App\Http\Controllers\FileDownloadsController;
use App\Http\Controllers\InternetPromotionsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\TvPromotionsController;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/faq', function () {
    $seoInfo = SeoSettingRepository::getInfo('/faq');
    return view('faq')->with('seoInfo', $seoInfo);
})->name('faq');

Route::get('/legal-rules', function () {
    $seoInfo = SeoSettingRepository::getInfo('/legal-rules');
    return view('legal-rules')->with('seoInfo', $seoInfo);
})->name('legal-rules');

Route::get('/payment-methods', function () {
    $seoInfo = SeoSettingRepository::getInfo('/payment-methods');
    return view('payment-methods')->with('seoInfo', $seoInfo);
})->name('payment-methods');

Route::get('/repair', function () {
    $seoInfo = SeoSettingRepository::getInfo('/repair');
    return view('repair')->with('seoInfo', $seoInfo);
})->name('repair');

Route::get('/downloads', [FileDownloadsController::class, 'index'])->name('downloads');

Route::any('/news', [NewsController::class, 'index'])->name('news');
Route::any('/news-details/{id}', [NewsController::class, 'detail'])->name('news-details');

Route::any('/latest-announcements', [AnnouncementsController::class, 'index'])->name('latest-announcements');
Route::any('/latest-announcements-details/{id}', [AnnouncementsController::class, 'detail'])->name('latest-announcements-details');

Route::any('/cable-tv-promotions', [TvPromotionsController::class, 'index'])->name('cable-tv-promotions');
Route::any('/cable-tv-promotions-details/{id}', [TvPromotionsController::class, 'detail'])->name('cable-tv-promotions-details');

Route::any('/internet-promotions', [InternetPromotionsController::class, 'index'])->name('internet-promotions');
Route::any('/internet-promotions-details/{id}', [InternetPromotionsController::class, 'detail'])->name('internet-promotions-details');

Route::get('/epg', [EPGController::class, 'index'])->name('epg');

Route::post('/repairs', [RepairController::class, 'store'])->name('repairs.store');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');


Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        // Route::resource('marqueeInfos', App\Http\Controllers\Admin\MarqueeInfoController::class, ["as" => 'admin']);
        Route::resource('newsInfos', App\Http\Controllers\Admin\NewsInfoController::class, ["as" => 'admin']);
        Route::resource('ePGInfos', App\Http\Controllers\Admin\EPGInfoController::class, ["as" => 'admin']);
        Route::resource('cableTvPromotionsInfos', App\Http\Controllers\Admin\CableTvPromotionsInfoController::class, ["as" => 'admin']);
        Route::resource('internetPromotionsInfos', App\Http\Controllers\Admin\InternetPromotionsInfoController::class, ["as" => 'admin']);
        Route::resource('latestAnnouncementsInfos', App\Http\Controllers\Admin\LatestAnnouncementsInfoController::class, ["as" => 'admin']);
        Route::resource('pdfFileDownloadInfos', App\Http\Controllers\Admin\PdfFileDownloadInfoController::class, ["as" => 'admin']);

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});

// Route::resource('admin/cable-tv-promotions-infos', App\Http\Controllers\Admin\CableTvPromotionsInfoController::class)
//     ->names([
//         'index' => 'admin.cableTvPromotionsInfos.index',
//         'store' => 'admin.cableTvPromotionsInfos.store',
//         'show' => 'admin.cableTvPromotionsInfos.show',
//         'update' => 'admin.cableTvPromotionsInfos.update',
//         'destroy' => 'admin.cableTvPromotionsInfos.destroy',
//         'create' => 'admin.cableTvPromotionsInfos.create',
//         'edit' => 'admin.cableTvPromotionsInfos.edit'
//     ]);

// Route::resource('admin/internet-promotions-infos', App\Http\Controllers\Admin\InternetPromotionsInfoController::class)
//     ->names([
//         'index' => 'admin.internetPromotionsInfos.index',
//         'store' => 'admin.internetPromotionsInfos.store',
//         'show' => 'admin.internetPromotionsInfos.show',
//         'update' => 'admin.internetPromotionsInfos.update',
//         'destroy' => 'admin.internetPromotionsInfos.destroy',
//         'create' => 'admin.internetPromotionsInfos.create',
//         'edit' => 'admin.internetPromotionsInfos.edit'
//     ]);

// Route::resource('admin/latest-announcements-infos', App\Http\Controllers\Admin\LatestAnnouncementsInfoController::class)
//     ->names([
//         'index' => 'admin.latestAnnouncementsInfos.index',
//         'store' => 'admin.latestAnnouncementsInfos.store',
//         'show' => 'admin.latestAnnouncementsInfos.show',
//         'update' => 'admin.latestAnnouncementsInfos.update',
//         'destroy' => 'admin.latestAnnouncementsInfos.destroy',
//         'create' => 'admin.latestAnnouncementsInfos.create',
//         'edit' => 'admin.latestAnnouncementsInfos.edit'
//     ]);

// Route::resource('admin/pdf-file-download-infos', App\Http\Controllers\Admin\PdfFileDownloadInfoController::class)
//     ->names([
//         'index' => 'admin.pdfFileDownloadInfos.index',
//         'store' => 'admin.pdfFileDownloadInfos.store',
//         'show' => 'admin.pdfFileDownloadInfos.show',
//         'update' => 'admin.pdfFileDownloadInfos.update',
//         'destroy' => 'admin.pdfFileDownloadInfos.destroy',
//         'create' => 'admin.pdfFileDownloadInfos.create',
//         'edit' => 'admin.pdfFileDownloadInfos.edit'
//     ]);

Route::resource('admin/repair-infos', App\Http\Controllers\Admin\RepairInfoController::class)
    ->names([
        'index' => 'admin.repairInfos.index',
        'store' => 'admin.repairInfos.store',
        'show' => 'admin.repairInfos.show',
        'update' => 'admin.repairInfos.update',
        'destroy' => 'admin.repairInfos.destroy',
        'create' => 'admin.repairInfos.create',
        'edit' => 'admin.repairInfos.edit'
    ]);
