<?php

namespace App\Http\Controllers;

use App\Models\Admin\CableTvPromotionsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class TvPromotionsController extends Controller
{
    //

    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/cable-tv-promotions');
        $tvPromotions = CableTvPromotionsInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('cable-tv-promotions')
            ->with('seoInfo', $seoInfo)
            ->with('tvPromotions', $tvPromotions);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/cable-tv-promotions');
        $tvPromotions = CableTvPromotionsInfo::find($id);
        return view('cable-tv-promotions-details')
            ->with('seoInfo', $seoInfo)
            ->with('tvPromotions', $tvPromotions);
    }
}
