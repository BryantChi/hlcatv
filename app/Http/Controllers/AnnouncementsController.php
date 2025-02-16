<?php

namespace App\Http\Controllers;

use App\Models\Admin\LatestAnnouncementsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/latest-announcements');
        $announcementsInfos = LatestAnnouncementsInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('latest-announcements')
            ->with('seoInfo', $seoInfo)
            ->with('announcementsInfos', $announcementsInfos);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/latest-announcements');
        $announcementsInfo = LatestAnnouncementsInfo::find($id);
        return view('latest-announcements-details')
            ->with('seoInfo', $seoInfo)
            ->with('announcementsInfo', $announcementsInfo);
    }
}
