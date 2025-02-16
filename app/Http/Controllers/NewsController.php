<?php

namespace App\Http\Controllers;

use App\Models\Admin\NewsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/news');
        $newsInfos = NewsInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('news')
            ->with('seoInfo', $seoInfo)
            ->with('newsInfos', $newsInfos);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/news');
        $newsInfo = NewsInfo::find($id);
        return view('news-details')
            ->with('seoInfo', $seoInfo)
            ->with('newsInfo', $newsInfo);
    }
}
