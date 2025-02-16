<?php

namespace App\Http\Controllers;

use App\Models\Admin\LatestAnnouncementsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/*');
        $announcementsInfos = LatestAnnouncementsInfo::orderBy('created_at', 'desc')->limit(4)->get();
        return view('index')
            ->with('seoInfo', $seoInfo)
            ->with('announcementsInfos', $announcementsInfos);
    }
}
