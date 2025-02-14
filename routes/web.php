<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/legal-rules', function () {
    return view('legal-rules');
})->name('legal-rules');

Route::get('/payment-methods', function () {
    return view('payment-methods');
})->name('payment-methods');

Route::get('/repair', function () {
    return view('repair');
})->name('repair');

Route::get('/downloads', function () {
    return view('downloads');
})->name('downloads');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news-details', function () {
    return view('news-details');
})->name('news-details');

Route::get('/latest-announcements-details', function () {
    return view('latest-announcements-details');
})->name('latest-announcements-details');

Route::get('/latest-announcements', function () {
    return view('latest-announcements');
})->name('latest-announcements');

Route::get('/cable-tv-promotions', function () {
    return view('cable-tv-promotions');
})->name('cable-tv-promotions');

Route::get('/cable-tv-promotions-details', function () {
    return view('cable-tv-promotions-details');
})->name('cable-tv-promotions-details');

Route::get('internet-promotions', function () {
    return view('internet-promotions');
})->name('internet-promotions');

Route::get('internet-promotions-details', function () {
    return view('internet-promotions-details');
})->name('internet-promotions-details');

Route::get('/epg', function () {
    return view('epg');
})->name('epg');

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
        // Route::resource('newsInfos', App\Http\Controllers\Admin\NewsInfoController::class, ["as" => 'admin']);

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});
