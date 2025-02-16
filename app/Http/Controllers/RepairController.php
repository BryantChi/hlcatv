<?php

namespace App\Http\Controllers;

use App\Models\Admin\RepairInfo;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    //
    public function store(Request $request)
    {
        // 驗證請求資料（根據實際需求調整驗證規則）
        $validatedData = $request->validate([
            'repair_item' => 'required|string',
            'name'        => 'required|string',
            'tel'         => 'required|string',
            'email'       => 'nullable|email',
            'city'        => 'required|string',
            'district'    => 'required|string',
            'zipcode'     => 'required|string',
            'address'     => 'required|string',
            'message'     => 'required|string',
        ]);

        // 存入資料庫 (需要先建立對應的 Model 與資料表)
        RepairInfo::create($validatedData);

        // 可以重新導向到感謝頁或回到原頁面並附帶成功訊息
        return redirect()->back()->with('success', '報修資料已成功提交！');
    }
}
