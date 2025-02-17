<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateInternetPromotionsInfoRequest;
use App\Http\Requests\Admin\UpdateInternetPromotionsInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\InternetPromotionsInfoRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class InternetPromotionsInfoController extends AppBaseController
{
    /** @var InternetPromotionsInfoRepository $internetPromotionsInfoRepository*/
    private $internetPromotionsInfoRepository;

    public function __construct(InternetPromotionsInfoRepository $internetPromotionsInfoRepo)
    {
        $this->internetPromotionsInfoRepository = $internetPromotionsInfoRepo;
    }

    /**
     * Display a listing of the InternetPromotionsInfo.
     */
    public function index(Request $request)
    {
        $internetPromotionsInfos = $this->internetPromotionsInfoRepository->paginate(10);

        return view('admin.internet_promotions_infos.index')
            ->with('internetPromotionsInfos', $internetPromotionsInfos);
    }

    /**
     * Show the form for creating a new InternetPromotionsInfo.
     */
    public function create()
    {
        return view('admin.internet_promotions_infos.create');
    }

    /**
     * Store a newly created InternetPromotionsInfo in storage.
     */
    public function store(CreateInternetPromotionsInfoRequest $request)
    {
        $input = $request->all();

        $input['cover_front_image'] = $this->processImage($request->file('cover_front_image'), 'cover_front_image');

        $internetPromotionsInfo = $this->internetPromotionsInfoRepository->create($input);

        Flash::success('Internet Promotions Info saved successfully.');

        return redirect(route('admin.internetPromotionsInfos.index'));
    }

    /**
     * Display the specified InternetPromotionsInfo.
     */
    public function show($id)
    {
        $internetPromotionsInfo = $this->internetPromotionsInfoRepository->find($id);

        if (empty($internetPromotionsInfo)) {
            Flash::error('Internet Promotions Info not found');

            return redirect(route('admin.internetPromotionsInfos.index'));
        }

        return view('admin.internet_promotions_infos.show')->with('internetPromotionsInfo', $internetPromotionsInfo);
    }

    /**
     * Show the form for editing the specified InternetPromotionsInfo.
     */
    public function edit($id)
    {
        $internetPromotionsInfo = $this->internetPromotionsInfoRepository->find($id);

        if (empty($internetPromotionsInfo)) {
            Flash::error('Internet Promotions Info not found');

            return redirect(route('admin.internetPromotionsInfos.index'));
        }

        return view('admin.internet_promotions_infos.edit')->with('internetPromotionsInfo', $internetPromotionsInfo);
    }

    /**
     * Update the specified InternetPromotionsInfo in storage.
     */
    public function update($id, UpdateInternetPromotionsInfoRequest $request)
    {
        $internetPromotionsInfo = $this->internetPromotionsInfoRepository->find($id);

        if (empty($internetPromotionsInfo)) {
            Flash::error('Internet Promotions Info not found');

            return redirect(route('admin.internetPromotionsInfos.index'));
        }

        $input = $request->all();

        $input['cover_front_image'] = $this->handleImageUpload($request->file('cover_front_image'), $internetPromotionsInfo['cover_front_image'], 'cover_front_image');

        $internetPromotionsInfo = $this->internetPromotionsInfoRepository->update($request->all(), $id);

        Flash::success('Internet Promotions Info updated successfully.');

        return redirect(route('admin.internetPromotionsInfos.index'));
    }

    /**
     * Remove the specified InternetPromotionsInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $internetPromotionsInfo = $this->internetPromotionsInfoRepository->find($id);

        if (empty($internetPromotionsInfo)) {
            Flash::error('Internet Promotions Info not found');

            return redirect(route('admin.internetPromotionsInfos.index'));
        }

        if (File::exists(public_path('uploads/' . $internetPromotionsInfo['cover_front_image']))) {
            File::delete(public_path('uploads/' . $internetPromotionsInfo['cover_front_image']));
        }

        $this->internetPromotionsInfoRepository->delete($id);

        Flash::success('Internet Promotions Info deleted successfully.');

        return redirect(route('admin.internetPromotionsInfos.index'));
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
