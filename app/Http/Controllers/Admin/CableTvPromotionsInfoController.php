<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCableTvPromotionsInfoRequest;
use App\Http\Requests\Admin\UpdateCableTvPromotionsInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\CableTvPromotionsInfoRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class CableTvPromotionsInfoController extends AppBaseController
{
    /** @var CableTvPromotionsInfoRepository $cableTvPromotionsInfoRepository*/
    private $cableTvPromotionsInfoRepository;

    public function __construct(CableTvPromotionsInfoRepository $cableTvPromotionsInfoRepo)
    {
        $this->cableTvPromotionsInfoRepository = $cableTvPromotionsInfoRepo;
    }

    /**
     * Display a listing of the CableTvPromotionsInfo.
     */
    public function index(Request $request)
    {
        $cableTvPromotionsInfos = $this->cableTvPromotionsInfoRepository->paginate(10);

        return view('admin.cable_tv_promotions_infos.index')
            ->with('cableTvPromotionsInfos', $cableTvPromotionsInfos);
    }

    /**
     * Show the form for creating a new CableTvPromotionsInfo.
     */
    public function create()
    {
        return view('admin.cable_tv_promotions_infos.create');
    }

    /**
     * Store a newly created CableTvPromotionsInfo in storage.
     */
    public function store(CreateCableTvPromotionsInfoRequest $request)
    {
        $input = $request->all();

        $input['cover_front_image'] = $this->processImage($request->file('cover_front_image'), 'cover_front_image');

        $cableTvPromotionsInfo = $this->cableTvPromotionsInfoRepository->create($input);

        Flash::success('Cable Tv Promotions Info saved successfully.');

        return redirect(route('admin.cableTvPromotionsInfos.index'));
    }

    /**
     * Display the specified CableTvPromotionsInfo.
     */
    public function show($id)
    {
        $cableTvPromotionsInfo = $this->cableTvPromotionsInfoRepository->find($id);

        if (empty($cableTvPromotionsInfo)) {
            Flash::error('Cable Tv Promotions Info not found');

            return redirect(route('admin.cableTvPromotionsInfos.index'));
        }

        return view('admin.cable_tv_promotions_infos.show')->with('cableTvPromotionsInfo', $cableTvPromotionsInfo);
    }

    /**
     * Show the form for editing the specified CableTvPromotionsInfo.
     */
    public function edit($id)
    {
        $cableTvPromotionsInfo = $this->cableTvPromotionsInfoRepository->find($id);

        if (empty($cableTvPromotionsInfo)) {
            Flash::error('Cable Tv Promotions Info not found');

            return redirect(route('admin.cableTvPromotionsInfos.index'));
        }

        return view('admin.cable_tv_promotions_infos.edit')->with('cableTvPromotionsInfo', $cableTvPromotionsInfo);
    }

    /**
     * Update the specified CableTvPromotionsInfo in storage.
     */
    public function update($id, UpdateCableTvPromotionsInfoRequest $request)
    {
        $cableTvPromotionsInfo = $this->cableTvPromotionsInfoRepository->find($id);

        if (empty($cableTvPromotionsInfo)) {
            Flash::error('Cable Tv Promotions Info not found');

            return redirect(route('admin.cableTvPromotionsInfos.index'));
        }

        $input = $request->all();

        $input['cover_front_image'] = $this->handleImageUpload($request->file('cover_front_image'), $cableTvPromotionsInfo['cover_front_image'], 'cover_front_image');

        $cableTvPromotionsInfo = $this->cableTvPromotionsInfoRepository->update($input, $id);

        Flash::success('Cable Tv Promotions Info updated successfully.');

        return redirect(route('admin.cableTvPromotionsInfos.index'));
    }

    /**
     * Remove the specified CableTvPromotionsInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cableTvPromotionsInfo = $this->cableTvPromotionsInfoRepository->find($id);

        if (empty($cableTvPromotionsInfo)) {
            Flash::error('Cable Tv Promotions Info not found');

            return redirect(route('admin.cableTvPromotionsInfos.index'));
        }

        if (File::exists(public_path('uploads/' . $cableTvPromotionsInfo['cover_front_image']))) {
            File::delete(public_path('uploads/' . $cableTvPromotionsInfo['cover_front_image']));
        }

        $this->cableTvPromotionsInfoRepository->delete($id);

        Flash::success('Cable Tv Promotions Info deleted successfully.');

        return redirect(route('admin.cableTvPromotionsInfos.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}
