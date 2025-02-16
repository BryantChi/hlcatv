<?php

namespace App\Http\Controllers;

use App\Models\Admin\PdfFileDownloadInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class FileDownloadsController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/downloads');
        $pdfFileDownloadInfos = PdfFileDownloadInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('downloads')
            ->with('seoInfo', $seoInfo)
            ->with('pdfFileDownloadInfos', $pdfFileDownloadInfos);
    }
}
