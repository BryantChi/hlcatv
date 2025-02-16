<?php

namespace App\Http\Controllers;

use App\Models\Admin\InternetPromotionsInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class InternetPromotionsController extends Controller
{
    //

    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/internet-promotions');
        $internetPromotions = InternetPromotionsInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('internet-promotions')
            ->with('seoInfo', $seoInfo)
            ->with('internetPromotions', $internetPromotions);
    }

    public function detail($id)
    {
        $seoInfo = SeoSettingRepository::getInfo('/internet-promotions');
        $internetPromotions = InternetPromotionsInfo::find($id);
        return view('internet-promotions-details')
            ->with('seoInfo', $seoInfo)
            ->with('internetPromotions', $internetPromotions);
    }
}
