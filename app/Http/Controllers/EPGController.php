<?php

namespace App\Http\Controllers;

use App\Models\Admin\EPGInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class EPGController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/epg');
        $epgInfo = EPGInfo::first();
        return view('epg')
            ->with('seoInfo', $seoInfo)
            ->with('epgInfo', $epgInfo);
    }
}
